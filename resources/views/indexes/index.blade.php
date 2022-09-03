@extends('indexes.indexBase')
@section('index')

    <body>
        <main>
            <div class="top_wrapper">
                <div class="top_img">
                    <img src="/img/recruit01.png">
                </div>
            </div>

            <div class="main_wrapper">
                <ul class="main_service">
                    <div class="service_group">
                        <div class="service_bass">
                            <li>●Best Job!!とは...</li>
                            <p>会員登録時にBest Job!!独自のタイプ診断を受診してもらい、<br>
                                企業が求めている人材（タイプ）とご自身のタイプがマッチすることで、<br>
                                スムーズに応募まで進むことができ、書類選考・面接の通過率も格段に上がります！</p>
                        </div>
                        <img src="/img/recruit02.jpg">
                    </div>
                    <div class="service_group">
                        <div class="service_bass">
                            <li>●タイプ診断とは...</li>
                            <p>ビジネスパーソンは大きく分けて、４つのタイプに分類されます<br>
                                1,コントローラー...考えるよりもまず行動し、結果にこだわる<br>
                                2,プロモーター...場を盛り上げ、斬新なアイデアを生み出す<br>
                                3,サポーター...過程を大事にし、協調性に優れている<br>
                                4,アナライザー...分析を得意とし、論理的に物事を捉えることが出来る</p>
                        </div>
                        <img src="/img/recruit03.png">
                    </div>
                </ul>
            </div>
            <div class="login_signup">
                <a link href="{{ url('signup') }}">新規登録はこちら！</a>
                <h1>◆登録済みの方はこちらから◆</h1>
                <button type="button" onclick="location.href='{{ route('login') }}' ">ログイン</button>
            </div>
        </main>
        <div class="contact">
            <p>求人を掲載したい企業様</p>
            <p>問い合わせはこちらになります</p>
            <p>0120-123-4567</p>
        </div>
    </body>
@endsection

</html>
