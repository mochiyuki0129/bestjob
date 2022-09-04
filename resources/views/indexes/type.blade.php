@extends('indexes.indexBase')
@section('type')

    <body>
        <main>
            <form action="{{ route('confirm') }}" method="post">
                @csrf

                <input type="hidden" name="name" value="{{ $input['name'] }}">
                <input type="hidden" name="kana" value="{{ $input['kana'] }}">
                <input type="hidden" name="email" value="{{ $input['email'] }}">
                <input type="hidden" name="password" value="{{ $input['password'] }}">
                <input type="hidden" name="tel" value="{{ $input['tel'] }}">
                <input type="hidden" name="age" value="{{ $input['age'] }}">
                <input type="hidden" name="gender" value="{{ $input['gender'] }}">
                <input type="hidden" name="area" value="{{ $input['area'] }}">


                <div class="login_wrapper">
                    <div class="login_inner">
                        <div class="login_title">
                            <h1>タイプ診断</h1>
                        </div>
                        <div class="type_form">
                            <p>以下の２つの質問に答えて確認ボタンを押してください</p>
                            <p>１，考えるよりも先に行動する</p>
                            <div class="type_select">
                                <input type="radio" name="type1" value="1">はい
                                <input type="radio" name="type1" value="0">いいえ
                            </div>
                            <div class="type_select">
                                <p>２，過程よりも結果を重視する</p>
                                <input type="radio" name="type2" value="1">はい
                                <input type="radio" name="type2" value="0">いいえ
                            </div>
                        </div>
                        <input type="submit" value="確認" class="signup_btn">
                    </div>
                </div>
            </form>
        </main>
    </body>
@endsection
