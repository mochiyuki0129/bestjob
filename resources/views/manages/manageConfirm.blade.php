@extends('manages.manageBase')
@section('manageConfirm')

    <body>
        <main>
            <form action="{{ route('manageComplete') }}" method="post" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="company" value="{{ $input['company'] }}">
                <input type="hidden" name="area" value="{{ $input['area'] }}">
                <input type="hidden" name="type" value="{{ $input['type'] }}">
                <input type="hidden" name="occupation" value="{{ $input['occupation'] }}">
                <input type="hidden" name="industry" value="{{ $input['industry'] }}">
                <input type="hidden" name="email" value="{{ $input['email'] }}">
                <input type="hidden" name="title" value="{{ $input['title'] }}">
                <input type="hidden" name="tel" value="{{ $input['tel'] }}">
                <input type="hidden" name="message" value="{{ $input['message'] }}">

                <div class="login_wrapper">
                    <div class="login_inner">
                        <div class="login_title">
                            <h1>登録確認</h1>
                        </div>
                        <div class="recruit_container">
                            <div class="recruit_inner">
                                <div class="recruit_company">
                                    <div class="recruit_addres">
                                        <p>{{ $input['company'] }}</p>
                                        <p>勤務地/{{ $input['area'] }}</p>
                                        <p>募集タイプ/{{ $input['type'] }}</p>
                                    </div>
                                    <div class="recruit_categoly">
                                        <p>業種/{{ $input['industry'] }}</p>
                                        <p>職種/{{ $input['occupation'] }}</p>
                                    </div>
                                </div>
                                <span>*赤字の部分は実際には表示されません</span>
                                <p class="exception">{{ $input['email'] }}</p>
                                <p class="exception">{{ $input['tel'] }}</p>
                                <div class="recruit_main">
                                    <p>{!! nl2br($input['title']) !!}</p>
                                    {{-- <th><img src="{{ asset($input['image']) }}"></th> --}}
                                    <p>{!! nl2br($input['message']) !!}</p>
                                </div>
                            </div>
                            <div class="twin_btn">
                                <input type="button" value="戻る" onClick="history.back()">
                                <input type="submit" value="登録" onClick="confirm('登録しますか？')">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </main>
    </body>
@endsection
