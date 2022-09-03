@extends('maines.mainBase')
@section('mypage')
    <div class="login_wrapper">
        <div class="login_inner">
            <div class="login_title">
                <h1>マイページ</h1>
            </div>
            <div class="signup_table">
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
            </div>
            <div class="signup_btn">
            <input type="button" value="トップページ" onclick="location.href='{{ route('main') }}'">
            <input type="button" value="パスワードリセット" onclick="location.href='{{ route('reset') }}'">
            </div>
        </div>
    </div>
@endsection
