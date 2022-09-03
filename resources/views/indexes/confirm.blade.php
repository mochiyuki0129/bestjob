@extends('indexes.indexBase')
@section('confirm')

    <body>
        <main>
            <form action="{{ route('complete') }}" method="post">
                @csrf
                <input type="hidden" name="name" value="{{ $input['name'] }}">
                <input type="hidden" name="kana" value="{{ $input['kana'] }}">
                <input type="hidden" name="email" value="{{ $input['email'] }}">
                <input type="hidden" name="password" value="{{ $input['password'] }}">
                <input type="hidden" name="tel" value="{{ $input['tel'] }}">
                <input type="hidden" name="age" value="{{ $input['age'] }}">
                <input type="hidden" name="gender" value="{{ $input['gender'] }}">
                <input type="hidden" name="area" value="{{ $input['area'] }}">
                <input type="hidden" name="type" value="{{ $input->type }}">

                <div class="login_wrapper">
                    <div class="login_inner">
                        <div class="login_title">
                            <h1>登録確認</h1>
                        </div>
                        <div class="confirm_table">
                            <table>
                                <tr class="confirm_group">
                                    <th>名前</th>
                                    <th>{{ $input['name'] }}</th>
                                </tr>
                                <tr class="confirm_group">
                                    <th>フリガナ</th>
                                    <th>{{ $input['kana'] }}</th>
                                </tr>
                                <tr class="confirm_group">
                                    <th>メールアドレス（会員ID）</th>
                                    <th>{{ $input['email'] }}</th>
                                </tr>
                                <tr class="confirm_group">
                                    <th>電話番号</th>
                                    <th>{{ $input['tel'] }}</th>
                                </tr>
                                <tr class="confirm_group">
                                    <th>年齢</th>
                                    <th>{{ $input['age'] }}</th>
                                </tr>
                                <tr class="confirm_group">
                                    <th>性別</th>
                                    <th>{{ $input['gender'] }}</th>
                                </tr>
                                <tr class="confirm_group">
                                    <th>勤務希望地</th>
                                    <th>{{ $input['area'] }}</th>
                                </tr>
                                <tr class="confirm_group">
                                    <th>タイプ</th>
                                    <th>{{ $input['type'] }}</th>
                                </tr>
                            </table>
                        </div>
                        <div class="twin_btn">
                            <input type="button" value="修正" onclick="confirm('登録フォームに戻りますか？')"
                                location.href="{{ route('signup') }}">
                            <input type="submit" value="登録" onclick="confirm('登録しますか?')">
                        </div>
                    </div>
                </div>
            </form>
        </main>
    </body>
@endsection
