@extends('indexes.indexBase')
@section('passwordComplete')

    <body>
        <main>
            <div class="login_wrapper">
                <div class="login_inner">
                    <div class="login_title">
                        <h1>パスワード再設定完了</h1>
                    </div>
                    <div class="send_form">
                        <p>パスワードの再設定が完了しました。</p>
                        <a link href="{{ route('login') }}">ログインページに戻る</a>
                    </div>
                </div>
            </div>
        </main>
    </body>
@endsection
