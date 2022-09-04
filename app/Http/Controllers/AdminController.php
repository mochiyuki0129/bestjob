<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Symfony\Component\HttpFoundation\StreamedResponse;




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

    // 応募者CSV出力

    public function adminCSV(Request $request)
    {
        $callback = function () {
            $stream = fopen('php://output', 'w');
            $head = [
                'ID', '応募先企業', '応募者', 'フリガナ', '年齢', '性別', '勤務希望地', 'タイプ', '自己PR', '志望動機'
            ];
            mb_convert_variables('SJIS-win', 'UTF-8', $head);
            fputcsv($stream, $head);
            $body = [
                '17', '富士通テン株式会社', '望月勇輝', 'モチヅキユウキ', '31', '男', '愛知県', 'コントローラー', '私は学生生活の頃よりサッカー部に長く所属しており、現在でも10代の頃と変わらない体力を維持しようと、運動を続けています。
                その継続力を生かして、今後の社会人人生も長く根気強く豊かに過ごしていきたいと考えております。','お客様への柔軟な対応が可能であり、世界中に拠点を持つ貴社で、人々の生活を支えたいと考えたからです。
                現在、国際物流は消費者が遠く離れた土地にあるモノを簡単に手に入れることを可能にし、このグローバル社会に不可欠な存在となっています。
                こうしたサービスインフラが仮に消滅したとすれば、世界中の人々が不便な生活を強いられます。
                そのため、物流が世界にもたらすことができる価値は非常に高いと考え、物流業界に魅力を感じました。'
            ];
            mb_convert_variables('SJIS-win', 'UTF-8', $body);
            fputcsv($stream, $body);
            fclose($stream);
        };
        $http_response = \Illuminate\Http\Response::HTTP_OK;
        $response_header = [
            'Content-Type' => 'apply/csv', 'Content-Disposition' => 'attachment;filename="apply.csv"'
        ];
        return response()->stream($callback, $http_response, $response_header);
    }
}
