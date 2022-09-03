@extends('indexes.adminBase')
@section('loginForm')

    <body>
        <main>
            <form action="{{ route('adminLogin') }}" method="post">
                @csrf

                <div class="login_wrapper">
                    <div class="login_inner">
                        <div class="login_title">
                            <h1>管理者ログイン</h1>
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
                            <input type="text" name="email">
                            <p class="login_input">パスワード</p>
                            @error('password')
                                <div class="alert">{{ $message }}</div>
                            @enderror
                            <input type="password" name="password">
                        </div>
                        <div class="login_submit">
                            <input type="submit" class="login" value="ログイン"><br>
                        </div>
                    </div>
                </div>
            </form>
        </main>
    </body>
@endsection
