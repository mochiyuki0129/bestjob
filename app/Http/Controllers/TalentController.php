<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ValidateRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplyMail;
use App\Models\Company;


class TalentController extends Controller
{
    // トップページ表示
    public function index()
    {
        return view('indexes.index');
    }
    public function test()
    {
        return view('indexes.test');
    }

    // ログイン画面表示
    public function showLogin()
    {
        return view('indexes.login');
    }

    //　ログイン処理
    public function login(LoginRequest $request)
    {
        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('main');
        }
        return back()->withErrors([
            'email' => 'メールアドレスが間違っています',
            'password' => 'パスワードが間違っています'
        ]);
    }

    // ログアウト処理

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    // 新規登録画面表示
    public function showSignup()
    {
        return view('indexes.signup');
    }

    // タイプ診断画面表示
    public function type(ValidateRequest $request)
    {
        $inputs = $request->all();
        return view('indexes.type', ['input' => $inputs]);
    }

    // タイプ診断処理、確認画面表示

    public function confirm(Request $request)
    {
        $inputs = $request->all();
        $inputs = $request->input();

        if ($request->input('type1') === '1' && $request->input('type2') === '1') {
            $type = 'コントローラー';
        }
        if ($request->input('type1') === '1' && $request->input('type2') === '0') {
            $type = 'プロモーター';
        }
        if ($request->input('type1') === '0' && $request->input('type2') === '1') {
            $type = 'サポーター';
        }
        if ($request->input('type1') === '0' && $request->input('type2') === '0') {
            $type = 'アナライザー';
        }
        return view('indexes.confirm', [
            'input' => $inputs,
            'type' => $type
        ]);
    }

    public function complete(Request $request)
    {
        $inputs = $request->all();
        DB::table('users')->insert([
            'name' => $request->name,
            'kana' => $request->kana,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tel' => $request->tel,
            'age' => $request->age,
            'gender' => $request->gender,
            'area' => $request->area,
            'type' => $request->type,
        ]);
        if (!$inputs) {
            return redirect()->route('signup');
        }
        return redirect()->route('login')->with('succes_message' ,'登録が完了しました。');
    }

    // 求人一覧画面表示

    public function main()
    {
        if (Auth::user()->type === 'コントローラー') {
            $datas = DB::table('companies')->whereType('コントローラー')->orderByDesc('created_at')->paginate(4);
        }
        if (Auth::user()->type === 'プロモーター') {
            $datas = DB::table('companies')->whereType('プロモーター')->orderByDesc('created_at')->paginate(4);
        }
        if (Auth::user()->type === 'サポーター') {
            $datas = DB::table('companies')->whereType('サポーター')->orderByDesc('created_at')->paginate(4);
        }
        if (Auth::user()->type === 'アナライザー') {
            $datas = DB::table('companies')->whereType('アナライザー')->orderByDesc('created_at')->paginate(4);
        }
        return view('maines.main', ["datas" => $datas]);
    }

    public function mypage()
    {
        return view('maines.mypage');
    }

    public function recruit($id)
    {
        $data = Company::find($id);
        return view('maines.recruit', ["data" => $data]);
    }

    public function apply($id)
    {
        $data = Company::find($id);
        return view('maines.apply', ["data" => $data]);
    }

    public function applyConfirm(Request $request, $id)
    {
        $inputs = $request->all();
        $data = Company::find($id);
        return view('maines.applyConfirm', [
            "data" => $data,
            "inputs" => $inputs
        ]);
    }

    public function applyComplete(Request $request, $id)
    {
        $input = $request->all();
        $data = Company::find($id);

        unset($input['_token']);
        Mail::to('ny.0505@outlook.jp')->send(new ApplyMail('mails.applyMail', '応募がありました!', $input));
        $apply = DB::table('company_user')->insert([
            'user_id' => Auth::user()->id,
            'company_id' => $data->id,
            'self_promotion' => $request->self_promotion,
            'reason' => $request->reason,
            'created_at' => now()
        ]);
        if (!$apply) {
            return redirect()->route('apply');
        }
        return redirect()->route('main')->with('succes_message' ,'応募が完了しました。');
    }
}
