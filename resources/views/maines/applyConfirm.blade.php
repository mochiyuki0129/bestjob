@extends('maines.mainBase')
@section('applyConfirm')

    <body>
        <main>
            <form action="applyComplete" mathod="post">
                @csrf

                <div class="login_wrapper">
                    <div class="login_inner">
                        <div class="login_title">
                            <h1>応募確認</h1>
                        </div>
                        <p>以下の内容で応募先企業へ送信されます</p>
                        <div class="apply_form">
                            <dl>
                                <dt>名前</dt>
                                <dd>{{ $value['name'] }}</dd>
                                <dt>フリガナ</dt>
                                <dd>{{ $value['kana'] }}</dd>
                                <dt>メールアドレス（会員ID）</dt>
                                <dd>{{ $value['email'] }}</dd>
                                <dt>電話番号</dt>
                                <dd>{{ $value['tel'] }}</dd>
                                <dt>年齢</dt>
                                <dd>{{ $value['age'] }}</dd>
                                <dt>性別</dt>
                                <dd>{{ $value['gender'] }}</dd>
                                <dt>勤務希望地</dt>
                                <dd>{{ $value['area'] }}</dd>
                                <dt>タイプ</dt>
                                <dd>{{ $value['type'] }}</dd>
                                <dt>自己PR</dt>
                                <dd>{{ $value['self_ptomotion'] }}</dd>
                                <dt>志望動機</dt>
                                <dd>{{ $value['reason'] }}</dd>
                            </dl>
                        </div>
                        <div class="signup_btn">
                            <input type="button" value="戻る" onClick="history.back()">
                            <input type="submit" value="送信"
                                onclick="confirm('送信しますか？') location.href='{{ route('main') }}'">
                        </div>
                    </div>
                </div>
            </form>
        </main>
    </body>
@endsection
