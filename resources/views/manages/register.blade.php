@extends('manages.manageBase')
@section('register')

    <body>
        <main>
            <form action="{{ route('manageConfirm') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="login_wrapper">
                    <div class="login_inner">
                        <div class="login_title">
                            <h1>求人登録</h1>
                        </div>
                        <div class="register_table">
                            <table>
                                <tr class="register_group">
                                    <th><label for="company">企業名</label></th>
                                    <th><input type="text" name="company" value="{{ old('company') }}"></th>
                                </tr>
                                <tr class="register_group">
                                    <th><label for="email">メールアドレス</label></th>
                                    <th><input type="email" name="email" value="{{ old('email') }}"></th>
                                </tr>
                                <tr class="register_group">
                                    <th><label for="industry">業種</label></th>
                                    <th><select name="industry">
                                            <option value="" selected>選択してください</option>
                                            <option value="農業" {{ old('農業') === '農業' ? 'selected' : '' }}>農業</option>
                                            <option value="漁業" {{ old('漁業') === '漁業' ? 'selected' : '' }}>漁業</option>
                                            <option value="鉱業" {{ old('鉱業') === '鉱業' ? 'selected' : '' }}>鉱業</option>
                                            <option value="建設業" {{ old('建設業') === '建設業' ? 'selected' : '' }}>建設業</option>
                                            <option value="製造業" {{ old('製造業') === '製造業' ? 'selected' : '' }}>製造業</option>
                                            <option value="化学工業" {{ old('化学工業') === '化学工業' ? 'selected' : '' }}>化学工業
                                            </option>
                                            <option value="鉄鋼業" {{ old('鉄鋼業') === '鉄鋼業' ? 'selected' : '' }}>鉄鋼業
                                            </option>
                                            <option value="電気・ガス・熱供給・水道業"
                                                {{ old('電気・ガス・熱供給・水道業') === '電気・ガス・熱供給・水道業' ? 'selected' : '' }}>
                                                電気・ガス・熱供給・水道業
                                            </option>
                                            <option value="情報通信業" {{ old('情報通信業') === '情報通信業' ? 'selected' : '' }}>情報通信業
                                            </option>
                                            <option value="運輸業" {{ old('運輸業') === '運輸業' ? 'selected' : '' }}>運輸業
                                            </option>
                                            <option value="卸売・小売業" {{ old('卸売・小売業') === '卸売・小売業' ? 'selected' : '' }}>
                                                卸売・小売業
                                            </option>
                                            <option value="金融・保険業" {{ old('金融・保険業') === '金融・保険業' ? 'selected' : '' }}>
                                                金融・保険業
                                            </option>
                                            <option value="飲食店・宿泊業" {{ old('飲食店・宿泊業') === '飲食店・宿泊業' ? 'selected' : '' }}>
                                                飲食店・宿泊業
                                            </option>
                                            <option value="医療・福祉業" {{ old('医療・福祉業') === '医療・福祉業' ? 'selected' : '' }}>
                                                医療・福祉業
                                            </option>
                                            <option value="教育・学習支援業"
                                                {{ old('教育・学習支援業') === '教育・学習支援業' ? 'selected' : '' }}>
                                                教育・学習支援業
                                            </option>
                                            <option value="サービス業" {{ old('サービス業') === 'サービス業' ? 'selected' : '' }}>サービス業
                                            </option>
                                            <option value="公務" {{ old('公務') === '公務' ? 'selected' : '' }}>公務</option>
                                        </select></th>
                                </tr>
                                <tr class="register_group">
                                    <th><label for="occupation">職種</label></th>
                                    <th><select name="occupation">
                                            <option value="" selected>選択してください</option>
                                            <option value="営業職" {{ old('営業職') === '営業職' ? 'selected' : '' }}>営業職
                                            </option>
                                            <option value="経理" {{ old('経理') === '経理' ? 'selected' : '' }}>経理</option>
                                            <option value="企画・管理" {{ old('企画・管理') === '企画・管理' ? 'selected' : '' }}>企画・管理
                                            </option>
                                            <option value="事務・アシスタント"
                                                {{ old('事務・アシスタント') === '事務・アシスタント' ? 'selected' : '' }}>
                                                事務・アシスタント</option>
                                            <option value="販売・サービス職"
                                                {{ old('販売・サービス職') === '販売・サービス職' ? 'selected' : '' }}>
                                                販売・サービス職</option>
                                            <option value="専門職（コンサルや監査法人など）"
                                                {{ old('専門職（コンサルや監査法人など）') === '専門職（コンサルや監査法人など）' ? 'selected' : '' }}>
                                                専門職（コンサルや監査法人など）</option>
                                            <option value="金融系専門職" {{ old('金融系専門職') === '金融系専門職' ? 'selected' : '' }}>
                                                金融系専門職
                                            </option>
                                            <option value="公務員・教育・農林水産関連職"
                                                {{ old('公務員・教育・農林水産関連職') === '公務員・教育・農林水産関連職' ? 'selected' : '' }}>
                                                公務員・教育・農林水産関連職
                                            </option>
                                            <option value="技術職" {{ old('技術職') === '技術職' ? 'selected' : '' }}>技術職
                                            </option>
                                            <option value="医療系専門職" {{ old('医療系専門職') === '医療系専門職' ? 'selected' : '' }}>
                                                医療系専門職
                                            </option>
                                            <option value="クリエイター・クリエイティブ職"
                                                {{ old('クリエイター・クリエイティブ職') === 'クリエイター・クリエイティブ職' ? 'selected' : '' }}>
                                                クリエイター・クリエイティブ職</option>
                                        </select></th>
                                </tr>
                                <tr class="register_group">
                                    <th><label for="tel">電話番号</label></th>
                                    <th><input type="tel" name="tel" value="{{ old('tel') }}"></th>
                                </tr>
                                <tr class="register_group">
                                    <th><label for="area">勤務地</label></th>
                                    <th><select name="area">
                                            <option value="" selected>選択してください</option>
                                            <option value="北海道" {{ old('area') === '北海道' ? 'selected' : '' }}>北海道
                                            </option>
                                            <option value="青森県" {{ old('area') === '青森県' ? 'selected' : '' }}>青森県
                                            </option>
                                            <option value="岩手県" {{ old('area') === '岩手県' ? 'selected' : '' }}>岩手県
                                            </option>
                                            <option value="宮城県" {{ old('area') === '宮城県' ? 'selected' : '' }}>宮城県
                                            </option>
                                            <option value="山形県" {{ old('area') === '山形県' ? 'selected' : '' }}>山形県
                                            </option>
                                            <option value="福島県" {{ old('area') === '福島県' ? 'selected' : '' }}>福島県
                                            </option>
                                            <option value="茨城県" {{ old('area') === '茨城県' ? 'selected' : '' }}>茨城県
                                            </option>
                                            <option value="栃木県" {{ old('area') === '栃木県' ? 'selected' : '' }}>栃木県
                                            </option>
                                            <option value="群馬県" {{ old('area') === '群馬県' ? 'selected' : '' }}>群馬県
                                            </option>
                                            <option value="埼玉県" {{ old('area') === '埼玉県' ? 'selected' : '' }}>埼玉県
                                            </option>
                                            <option value="千葉県" {{ old('area') === '千葉県' ? 'selected' : '' }}>千葉県
                                            </option>
                                            <option value="東京都" {{ old('area') === '東京都' ? 'selected' : '' }}>東京都
                                            </option>
                                            <option value="神奈川県" {{ old('area') === '神奈川県' ? 'selected' : '' }}>神奈川県
                                            </option>
                                            <option value="新潟県" {{ old('area') === '新潟県' ? 'selected' : '' }}>新潟県
                                            </option>
                                            <option value="富山県" {{ old('area') === '富山県' ? 'selected' : '' }}>富山県
                                            </option>
                                            <option value="石川県" {{ old('area') === '石川県' ? 'selected' : '' }}>石川県
                                            </option>
                                            <option value="福井県" {{ old('area') === '福井県' ? 'selected' : '' }}>福井県
                                            </option>
                                            <option value="山梨県" {{ old('area') === '山梨県' ? 'selected' : '' }}>山梨県
                                            </option>
                                            <option value="長野県" {{ old('area') === '長野県' ? 'selected' : '' }}>長野県
                                            </option>
                                            <option value="岐阜県" {{ old('area') === '岐阜県' ? 'selected' : '' }}>岐阜県
                                            </option>
                                            <option value="静岡県" {{ old('area') === '静岡県' ? 'selected' : '' }}>静岡県
                                            </option>
                                            <option value="愛知県" {{ old('area') === '愛知県' ? 'selected' : '' }}>愛知県
                                            </option>
                                            <option value="三重県" {{ old('area') === '三重県' ? 'selected' : '' }}>三重県
                                            </option>
                                            <option value="滋賀県" {{ old('area') === '滋賀県' ? 'selected' : '' }}>滋賀県
                                            </option>
                                            <option value="京都府" {{ old('area') === '京都府' ? 'selected' : '' }}>京都府
                                            </option>
                                            <option value="大阪府" {{ old('area') === '大阪府' ? 'selected' : '' }}>大阪府
                                            </option>
                                            <option value="兵庫県" {{ old('area') === '兵庫県' ? 'selected' : '' }}>兵庫県
                                            </option>
                                            <option value="奈良県" {{ old('area') === '奈良県' ? 'selected' : '' }}>奈良県
                                            </option>
                                            <option value="和歌山県" {{ old('area') === '和歌山県' ? 'selected' : '' }}>和歌山県
                                            </option>
                                            <option value="鳥取県" {{ old('area') === '鳥取県' ? 'selected' : '' }}>鳥取県
                                            </option>
                                            <option value="島根県" {{ old('area') === '島根県' ? 'selected' : '' }}>島根県
                                            </option>
                                            <option value="岡山県" {{ old('area') === '岡山県' ? 'selected' : '' }}>岡山県
                                            </option>
                                            <option value="広島県" {{ old('area') === '広島県' ? 'selected' : '' }}>広島県
                                            </option>
                                            <option value="山口県" {{ old('area') === '山口県' ? 'selected' : '' }}>山口県
                                            </option>
                                            <option value="徳島県" {{ old('area') === '徳島県' ? 'selected' : '' }}>徳島県
                                            </option>
                                            <option value="香川県" {{ old('area') === '香川県' ? 'selected' : '' }}>香川県
                                            </option>
                                            <option value="愛媛県" {{ old('area') === '愛媛県' ? 'selected' : '' }}>愛媛県
                                            </option>
                                            <option value="高知県" {{ old('area') === '高知県' ? 'selected' : '' }}>高知県
                                            </option>
                                            <option value="福岡県" {{ old('area') === '福岡県' ? 'selected' : '' }}>福岡県
                                            </option>
                                            <option value="佐賀県" {{ old('area') === '佐賀県' ? 'selected' : '' }}>佐賀県
                                            </option>
                                            <option value="長崎県" {{ old('area') === '長崎県' ? 'selected' : '' }}>長崎県
                                            </option>
                                            <option value="熊本県" {{ old('area') === '熊本県' ? 'selected' : '' }}>熊本県
                                            </option>
                                            <option value="大分県" {{ old('area') === '大分県' ? 'selected' : '' }}>大分県
                                            </option>
                                            <option value="宮崎県" {{ old('area') === '宮崎県' ? 'selected' : '' }}>宮崎県
                                            </option>
                                            <option value="鹿児島県" {{ old('area') === '鹿児島県' ? 'selected' : '' }}>鹿児島県
                                            </option>
                                            <option value="沖縄県" {{ old('area') === '沖縄県' ? 'selected' : '' }}>沖縄県
                                            </option>
                                        </select></th>
                                </tr>
                                <tr class="register_group">
                                    <th><label for="type">タイプ</label></th>
                                    <th><select name="type">
                                            <option value="" selected>選択してください</option>
                                            <option value="コントローラー" {{ old('コントローラー') === 'コントローラー' ? 'selected' : '' }}>
                                                コントローラー
                                            </option>
                                            <option value="プロモーター" {{ old('プロモーター') === 'プロモーター' ? 'selected' : '' }}>
                                                プロモーター
                                            </option>
                                            <option value="サポーター" {{ old('サポーター') === 'サポーター' ? 'selected' : '' }}>サポーター
                                            </option>
                                            <option value="アナライザー" {{ old('アナライザー') === 'アナライザー' ? 'selected' : '' }}>
                                                アナライザー
                                            </option>
                                        </select></th>
                                </tr>
                                <tr class="register_group">
                                    <th><label for="title">求人タイトル</label></th>
                                    <th>
                                        <textarea type="" name="title"cols="25" rows="2" value="{{ old('title') }}">
                                </textarea>
                                    </th>
                                </tr>
                                {{-- <tr class="register_group">
                                        <th><label for="image">画像</label></th>
                                        <th><input type="file" name="image" value=""></th>
                                </tr> --}}
                                <tr class="register_group">
                                    <th><label for="message">求人内容</label></th>
                                    <th>
                                        <textarea name="message" cols="50" rows="10" value="{{ old('message') }}"></textarea>
                                        {{-- 本気でITエンジニアを目指している方！
                                        三河屋では必ずあなたを一人前のITエンジニアに育てます！
                                        ●未経験歓迎・学歴、職歴不問
                                        ●年齢35歳まで（長期キャリア育成のため）
                                        ●職場・東京都/愛知県（その他県も相談乗ります！フルリモート案件多数！
                                        ●面接の流れ・書類選考通過者に弊社から面接通知の案内を送ります。
                                        その後一次面接にて三河屋代表と30分ほどの面接を行います。
                                        （本当にあなたの素を知りたいのでリラックスして楽しく臨んでください！）
                                        内容によっては一次面接のみで合否を出します。
                                        ●採用後の流れ・通常は月～金曜日にて通信販売の営業
                                        を行ってもらいます。
                                        空いた時間やお休みの時間を利用して、エンジニア研修を行ってもらいます。
                                        一般的に半年を目安に研修期間となりますが、やる気や事前に学習していたスキルにより研修期間は短縮可能です。 --}}
                                    </th>
                                </tr>
                            </table>
                        </div>
                        <div class="twin_btn">
                            <input type="button" value="戻る" onClick="location.href'{{ route('main') }}'">
                            <input type="submit" value="登録">
                        </div>
                    </div>
            </form>
        </main>
    </body>
@endsection
