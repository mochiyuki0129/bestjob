@extends('indexes.indexBase')
@section('editPassword')

    <body>
        <main>
            <form method="POST" action="{{ route('updatePassword') }}">
                @csrf
                <div class="login_wrapper">
                    <div class="login_inner">
                        <div class="login_title">
                            <h1>パスワードリセット</h1>
                        </div>
                        <div class="pass_reset">
                            <input type="hidden" name="reset_token" value="{{ $userToken->token }}">
                            <table class="reset_table">
                                <tr class="input_group">
                                    <th>パスワード</th>
                                    <th><input type="password" name="password"
                                            class="input {{ $errors->has('password') ? 'incorrect' : '' }}"></th>
                                    @error('password')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
                                    @error('token')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
                                </tr>
                                <tr class="input_group">
                                    <th>パスワードを再入力</th>
                                    <th><input type="password" name="password_confirmation"
                                            class="input {{ $errors->has('password_confirmation') ? 'incorrect' : '' }}">
                                    </th>
                                </tr>
                            </table>
                        </div>
                        <div class="reset_btn">
                            <input class="signup_btn" type="submit"value="パスワードを再設定"></button>
                        </div>
                    </div>
            </form>
        </main>
    </body>
@endsection
