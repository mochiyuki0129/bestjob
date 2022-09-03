@extends('maines.mainBase')
@section('recruit')

    <body>
        <main>
            <div class="login_wrapper">
                <div class="login_inner">
                    <div class="login_title">
                        <h1>求人詳細</h1>
                    </div>
                    <div class="recruit_container">
                        <div class="recruit_inner">
                            <div class="recruit_company">
                                <div class="recruit_addres">
                                    <p class="recruit_name"></p>
                                    <th>{{ $input['name'] }}</th>
                                    <span>*赤字の部分は実際には表示されません</span>
                                    <p class="exception">{{ $input['email'] }}</p>
                                    <p class="exception">{{ $input['tel'] }}</p>
                                </div>
                                <div class="recruit_categoly">
                                    <p>業種/{{ $input['industry'] }}</p>
                                    <p>職種/{{ $input['occupation'] }}</p>
                                </div>
                            </div>
                            <p>勤務地/{{ $input['area'] }}</p>
                            <p>募集タイプ/{{ $input['type'] }}</p>
                            <div class="recruit_main">
                                <p>{{ $input['title'] }}</p>
                                {{-- <th><img src="{{ $input['image'] }}"></th> --}}
                                <p>{{ $input['message'] }}</p>
                            </div>
                        </div>
                        <div class="signup_btn">
                            <input type="button" value="戻る" onClick="history.back()">
                            <input type="submit" value="応募" onclick="location.href='{{ route('apply') }}">
                        </div>
                    </div>
                </div>
        </main>
    </body>
@endsection
