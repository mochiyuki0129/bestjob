@extends('indexes.indexBase')
@section('sendMail')

    <body>
        <main>
            <div class="login_wrapper">
                <div class="login_inner">
                    <div class="login_title">
                        <h1>パスワードリセット依頼メール送信</h1>
                    </div>
                    <div class="send_inner">
                        <p>パスワードリセット依頼メールを送信しました。</p>
                        <p>送信されたメールに記載のURLよりパスワード再設定をおこなってください。</p>
                        <a link href="{{ route('login') }}">ログイン画面に戻る</a>
                    </div>
                </div>
            </div>
        </main>
    </body>
@endsection
