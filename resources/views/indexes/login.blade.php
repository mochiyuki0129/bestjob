@extends('indexes.indexBase')
@section('login')

    <body>
        <main>
            <form action="{{ route('login') }}" method="post">
                @csrf

                <div class="login_wrapper">
                    <div class="login_inner">
                        <div class="login_title">
                            <h1>ログインフォーム</h1>
                        </div>
                        @if (session('login_error'))
                            <div class="alert">
                                {{ session('login_error') }}
                            </div>
                        @endif
                        <div class="login_form">
                            <p class="login_input">メールアドレス</p>
                            @error('email')
                                <div class="alert">{{ $message }}</div>
                            @enderror
                            <input type="email" name="email">
                            <p class="login_input">パスワード</p>
                            @error('password')
                                <div class="alert">{{ $message }}</div>
                            @enderror
                            <input type="password" name="password">
                        </div>
                        <div class="login_submit">
                            <input type="submit" class="login" value="ログイン"><br>
                            <a link href="{{ url('signup') }}">新規登録はこちらから</a>
                        </div>
                        <div class="reset_submit">
                            <a link href="{{ route('reset') }}" >パスワードを忘れた方はこちらから</a>
                        </div>
                    </div>
                </div>
            </form>
        </main>
    </body>
@endsection
