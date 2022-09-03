<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use App\Models\user;
use App\Http\Requests\ValidateRequest;


class TalentController extends Controller
{
    // トップページ表示
    public function index()
    {
        return view('indexes.index');
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
        if (['type1' === "1" && 'type2' === "1"]) {
            return redirect()->route('confirm');
        }
        // dd($request);
        return view('indexes.confirm', ['input' => $inputs]);
    }

    public function complete(Request $request)
    {
        $inputs = $request->all();
        DB::table('users')->insert([
            'name' => $request['name'],
            'kana' => $request['kana'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'tel' => $request['tel'],
            'age' => $request['age'],
            'gender' => $request['gender'],
            'area' => $request['area'],
        ]);
        if (!$inputs) {
            return redirect()->route('signup');
        }
        return view('maines.main');
    }

    // 求人一覧画面表示

    public function main()
    {
        if(Auth::user()->type === 'コントローラー') {
            $datas = DB::table('companies')->whereType('コントローラー')->orderByDesc('created_at')->paginate(4);
        }
        return view('maines.main', ["datas" => $datas]);
    }
    public function mypage()
    {
        return view('maines.mypage');
    }
    public function recruit()
    {
        return view('maines.recruit');
    }
    public function apply()
    {
        return view('maines.apply');
    }
    public function applyConfirm()
    {
        return view('maines.applyConfirm');
    }
}
