@extends('indexes.indexBase')
@section('signup')

    <body>
        <main>
            <form action="{{ route('type') }}" method="post">
                @csrf
                <div class="login_wrapper">
                    <div class="login_inner">
                        <div class="login_title">
                            <h1>新規登録</h1>
                            @if ($errors->any())
                                <div class="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <dl class="signup_table">
                            <div class="form_group">
                                <label for="name">名前</label>
                                <input type="text" name="name" placeholder="名前" class="signup_form"
                                    value="{{ old('name') }}">
                            </div>
                            <div class="form_group">
                                <label for="kana">フリガナ</label>
                                <input type="text" name="kana" placeholder="フリガナ" class="signup_form"
                                    value="{{ old('kana') }}">
                            </div>
                            <div class="form_group">
                                <label for="email">メールアドレス（会員ID）</label>
                                <input type="email" name="email" placeholder="test@test.co.jp" class="signup_form"
                                    value="{{ old('email') }}">
                            </div>
                            <div class="form_group">
                                <label for="password">パスワード</label>
                                <input type="password" name="password" class="signup_form" value="{{ old('password') }}">
                            </div>
                            <p class="signup_atention">*英数字1文字ずつ入れて8文字以上15文字以下でご入力ください
                            <div class="form_group">
                                <label for="tel">電話番号</label>
                                <input type="text" name="tel" placeholder="09012345678" class="signup_form"
                                    value="{{ old('tel') }}">
                            </div>
                            <div class="form_group">
                                <label for="age">年齢</label>
                                <input type="text" name="age" placeholder="31" class="signup_form"
                                    value="{{ old('age') }}">
                            </div>
                            <div class="form_group">
                                <label for="gender">性別</label>
                                <input type="radio" name="gender" class="signup_form" value="男"
                                    {{ old('gender') === '男' ? 'checked' : '' }}>男
                                <input type="radio" name="gender" value="女"
                                    {{ old('gender') === '女' ? 'checked' : '' }}>女
                            </div>
                            <div class="form_group">
                                <label for="area">勤務希望地</label>
                                <select name="area" class="signup_form">
                                    <option value="" selected>選択してください</option>
                                    <option value="北海道" {{ old('area') === '北海道' ? 'selected' : '' }}>北海道</option>
                                    <option value="青森県" {{ old('area') === '青森県' ? 'selected' : '' }}>青森県</option>
                                    <option value="岩手県" {{ old('area') === '岩手県' ? 'selected' : '' }}>岩手県</option>
                                    <option value="宮城県" {{ old('area') === '宮城県' ? 'selected' : '' }}>宮城県</option>
                                    <option value="山形県" {{ old('area') === '山形県' ? 'selected' : '' }}>山形県</option>
                                    <option value="福島県" {{ old('area') === '福島県' ? 'selected' : '' }}>福島県</option>
                                    <option value="茨城県" {{ old('area') === '茨城県' ? 'selected' : '' }}>茨城県</option>
                                    <option value="栃木県" {{ old('area') === '栃木県' ? 'selected' : '' }}>栃木県</option>
                                    <option value="群馬県" {{ old('area') === '群馬県' ? 'selected' : '' }}>群馬県</option>
                                    <option value="埼玉県" {{ old('area') === '埼玉県' ? 'selected' : '' }}>埼玉県</option>
                                    <option value="千葉県" {{ old('area') === '千葉県' ? 'selected' : '' }}>千葉県</option>
                                    <option value="東京都" {{ old('area') === '東京都' ? 'selected' : '' }}>東京都</option>
                                    <option value="神奈川県" {{ old('area') === '神奈川県' ? 'selected' : '' }}>神奈川県</option>
                                    <option value="新潟県" {{ old('area') === '新潟県' ? 'selected' : '' }}>新潟県</option>
                                    <option value="富山県" {{ old('area') === '富山県' ? 'selected' : '' }}>富山県</option>
                                    <option value="石川県" {{ old('area') === '石川県' ? 'selected' : '' }}>石川県</option>
                                    <option value="福井県" {{ old('area') === '福井県' ? 'selected' : '' }}>福井県</option>
                                    <option value="山梨県" {{ old('area') === '山梨県' ? 'selected' : '' }}>山梨県</option>
                                    <option value="長野県" {{ old('area') === '長野県' ? 'selected' : '' }}>長野県</option>
                                    <option value="岐阜県" {{ old('area') === '岐阜県' ? 'selected' : '' }}>岐阜県</option>
                                    <option value="静岡県" {{ old('area') === '静岡県' ? 'selected' : '' }}>静岡県</option>
                                    <option value="愛知県" {{ old('area') === '愛知県' ? 'selected' : '' }}>愛知県</option>
                                    <option value="三重県" {{ old('area') === '三重県' ? 'selected' : '' }}>三重県</option>
                                    <option value="滋賀県" {{ old('area') === '滋賀県' ? 'selected' : '' }}>滋賀県</option>
                                    <option value="京都府" {{ old('area') === '京都府' ? 'selected' : '' }}>京都府</option>
                                    <option value="大阪府" {{ old('area') === '大阪府' ? 'selected' : '' }}>大阪府</option>
                                    <option value="兵庫県" {{ old('area') === '兵庫県' ? 'selected' : '' }}>兵庫県</option>
                                    <option value="奈良県" {{ old('area') === '奈良県' ? 'selected' : '' }}>奈良県</option>
                                    <option value="和歌山県" {{ old('area') === '和歌山県' ? 'selected' : '' }}>和歌山県</option>
                                    <option value="鳥取県" {{ old('area') === '鳥取県' ? 'selected' : '' }}>鳥取県</option>
                                    <option value="島根県" {{ old('area') === '島根県' ? 'selected' : '' }}>島根県</option>
                                    <option value="岡山県" {{ old('area') === '岡山県' ? 'selected' : '' }}>岡山県</option>
                                    <option value="広島県" {{ old('area') === '広島県' ? 'selected' : '' }}>広島県</option>
                                    <option value="山口県" {{ old('area') === '山口県' ? 'selected' : '' }}>山口県</option>
                                    <option value="徳島県" {{ old('area') === '徳島県' ? 'selected' : '' }}>徳島県</option>
                                    <option value="香川県" {{ old('area') === '香川県' ? 'selected' : '' }}>香川県</option>
                                    <option value="愛媛県" {{ old('area') === '愛媛県' ? 'selected' : '' }}>愛媛県</option>
                                    <option value="高知県" {{ old('area') === '高知県' ? 'selected' : '' }}>高知県</option>
                                    <option value="福岡県" {{ old('area') === '福岡県' ? 'selected' : '' }}>福岡県</option>
                                    <option value="佐賀県" {{ old('area') === '佐賀県' ? 'selected' : '' }}>佐賀県</option>
                                    <option value="長崎県" {{ old('area') === '長崎県' ? 'selected' : '' }}>長崎県</option>
                                    <option value="熊本県" {{ old('area') === '熊本県' ? 'selected' : '' }}>熊本県</option>
                                    <option value="大分県" {{ old('area') === '大分県' ? 'selected' : '' }}>大分県</option>
                                    <option value="宮崎県" {{ old('area') === '宮崎県' ? 'selected' : '' }}>宮崎県</option>
                                    <option value="鹿児島県" {{ old('area') === '鹿児島県' ? 'selected' : '' }}>鹿児島県</option>
                                    <option value="沖縄県" {{ old('area') === '沖縄県' ? 'selected' : '' }}>沖縄県</option>
                                </select>
                            </div>
                        </dl>
                    </div>
                    <input type="submit" class="signup_btn" value="タイプ診断に進む">
                </div>
            </form>
        </main>
    </body>
@endsection
