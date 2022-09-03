@extends('maines.mainBase')
@section('reset')

    <body>
        <main>
            <div class="login_wrapper">
                <div class="login_inner">
                    <div class="login_title">
                        <h1>パスワードリセット</h1>
                    </div>
                    <form action="{{ route('resetSend') }}" method="post">
                        @csrf
                        <div class="pass_reset">
                            <p>メールアドレス</p>
                            <input type="email" name="email">
                            @error('email')
                                <div class="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="signup_btn">
                            <input type="submit" value="送信">
                        </div>
                    </form>
                </div>
        </main>
    </body>
@endsection
