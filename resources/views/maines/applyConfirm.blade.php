@extends('maines.mainBase')
@section('applyConfirm')

    <body>
        <main>
            <form action="{{ route('applyComplete', ["id" =>$data->id]) }}" mathod="post">
                @csrf

                <div class="login_wrapper">
                    <div class="login_inner">
                        <div class="login_title">
                            <h1>応募確認</h1>
                            <p>以下の内容で応募先企業へ送信されます</p>
                        </div>
                        <div class="confirm_table">
                            <table>
                                <tr class="confirm_group">
                                    <th>応募先企業</th>
                                    <th>{{ $data->company }}</th>
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
                        <div class="apply_group">
                            <div class="self_promotion">
                                <p>自己PR</p>
                                <p class="apply_message">{!! nl2br($inputs['self_promotion']) !!}</p>
                                <input type="hidden" name="self_promotion" value="{{ $inputs['self_promotion'] }}">
                            </div>
                            <div class="reason">
                                <p>志望動機</p>
                                <p class="apply_message">{!! nl2br($inputs['reason']) !!}</p>
                                <input type="hidden" name="reason" value="{{ $inputs['reason'] }}">
                            </div>
                        </div>
                        <div class="twin_btn">
                            <input type="button" value="戻る" onClick="history.back()">
                            <input type="submit" value="応募" onclick="confirm('こちらで応募しますか?')">
                        </div>
                    </div>
                </div>
            </form>
        </main>
    </body>
@endsection
