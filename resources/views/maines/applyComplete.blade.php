@extends('maines.mainBase')
@section('applyConplete')

<body>
    <main>
        <div class="login_wrapper">
            <div class="login_inner">
                <div class="login_title">
                    <h1>応募送信完了</h1>
                </div>
                <div class="send_inner">
                    <p>応募メールを送信しました。</p>
                    <p>応募先企業からのご連絡をお待ちください。</p>
                    <a link href="{{ route('main') }}">トップページに戻る</a>
                </div>
            </div>
        </div>
    </main>
</body>
@endsection
