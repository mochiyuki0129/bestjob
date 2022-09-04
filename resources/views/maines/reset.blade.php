@extends('indexes.indexBase')
@section('reset')

    <body>
        <main>
            <form action="{{ route('resetSend') }}" method="post">
                @csrf
                <div class="login_wrapper">
                    <div class="login_inner">
                        <div class="login_title">
                            <h1>パスワードリセット</h1>
                        </div>
                        <div class="pass_reset">
                            <p>メールアドレス</p>
                            <input type="email" name="email">
                            @error('email')
                                <div class="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="reset_btn">
                            <input class="signup_btn" type="submit" value="送信">
                        </div>
                    </div>
                </div>
            </form>
        </main>
    </body>
@endsection
