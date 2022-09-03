<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{

    // 管理者ログイン画面表示
    function loginForm()
    {
        return view("indexes.loginForm");
    }

    // 管理者ログイン処理
    function adminLogin(Request $request)
    {
        $user_name = $request->input('user_name');
        $password = $request->input('password');

        if ($user_name == 'admin' && $password == 'mochiyuki01') {
            $request->session()->put("auth_admin", true);
            return redirect()->route('loginForm');
        }

        return redirect()->route('admin');
    }

    // 管理者ログアウト処理
    function adminLogout(Request $request)
    {
        $request->session()->forget("auth_admin");
        return redirect()->route("loginForm");
    }

    // 求人管理画面表示
    public function admin()
    {
        $datas = DB::table('companies')->orderByDesc('created_at')->paginate(4);
        return view('manages.admin', ["datas" => $datas]);
    }

    // 求人詳細画面表示
    public function adminDetail($id)
    {
        $data = DB::table('companies')->find($id);
        return view('manages.adminDetail', ["data" => $data]);
    }

    // 求人登録画面表示

    public function register()
    {
        return view('manages.register');
    }

    // 求人編集画面表示
    public function adminEdit($id)
    {
        $data = DB::table('companies')->find($id);
        return view('manages.adminEdit', ["data" => $data]);
    }

    // 求人編集確認画面表示
    public function adminEditConfirm(Request $request, $id)
    {
        $data = DB::table('companies')->find($id);
        $data = $request->all();
        return view('manages.adminEditConfirm', ["data" => $data]);
    }

    // 求人編集完了処理
    public function adminEditcomplete(Request $request, $id)
    {
        $data = DB::table('companies')->find($id);
        $data = $request->all();
        Db::table('companies')->update([
            'company' => $request['company'],
            'email' => $request['email'],
            'industry' => $request['industry'],
            'occupation' => $request['occupation'],
            'tel' => $request['tel'],
            'area' => $request['area'],
            'type' => $request['type'],
            'title' => $request['title'],
            'message' => $request['message'],
            'updated_at' => now(),
        ]);
        if (!$data) {
            return redirect()->route('adminEditConfirm');
        }
        return redirect()->route('admin');
    }


    // 登録確認画面表示

    public function manageConfirm(Request $request)
    {
        $inputs = $request->all();
        return view('manages.manageConfirm', ['input' => $inputs]);
    }


    // 登録処理

    public function manageComplete(Request $request)
    {
        $inputs = $request->all();
        DB::table('companies')->insert([
            'company' => $request['company'],
            'email' => $request['email'],
            'industry' => $request['industry'],
            'occupation' => $request['occupation'],
            'tel' => $request['tel'],
            'area' => $request['area'],
            'type' => $request['type'],
            'title' => $request['title'],
            'message' => $request['message'],
            'created_at' => now(),
        ]);
        if (!$inputs) {
            return redirect()->route('manageConfirm');
        }
        return redirect()->route('admin');
    }
}
