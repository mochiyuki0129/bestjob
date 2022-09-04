@extends('maines.mainBase')
@section('mypage')
    <div class="login_wrapper">
        <div class="login_inner">
            <div class="login_title">
                <h1>登録確認</h1>
            </div>
            <div class="confirm_table">
                <table>
                    <tr class="confirm_group">
                        <th>名前</th>
                        <th>{{ Auth::user()->name }}</th>
                    </tr>
                    <tr class="confirm_group">
                        <th>フリガナ</th>
                        <th>{{ Auth::user()->kana }}</th>
                    </tr>
                    <tr class="confirm_group">
                        <th>メールアドレス（会員ID）</th>
                        <th>{{ Auth::user()->email }}</th>
                    </tr>
                    <tr class="confirm_group">
                        <th>電話番号</th>
                        <th>{{ Auth::user()->tel }}</th>
                    </tr>
                    <tr class="confirm_group">
                        <th>年齢</th>
                        <th>{{ Auth::user()->age }}</th>
                    </tr>
                    <tr class="confirm_group">
                        <th>性別</th>
                        <th>{{ Auth::user()->gender }}</th>
                    </tr>
                    <tr class="confirm_group">
                        <th>勤務希望地</th>
                        <th>{{ Auth::user()->area }}</th>
                    </tr>
                    <tr class="confirm_group">
                        <th>タイプ</th>
                        <th>{{ Auth::user()->type }}</th>
                    </tr>
                </table>
            </div>
            <div class="twin_btn">
                <input type="button" value="戻る" onclick="history.back()">
            </div>
        </div>
    </div>
    </form>
    </main>
    </body>
@endsection
