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
                                    <p>{{ $data->company }}</p>
                                    <p>勤務地/{{ $data->area }}</p>
                                    <p>募集タイプ/{{ $data->type }}</p>
                                </div>
                                <div class="recruit_categoly">
                                    <p>業種/{{ $data->industry }}</p>
                                    <p>職種/{{ $data->occupation }}</p>
                                </div>
                            </div>
                            <div class="recruit_main">
                                <p>{!! nl2br($data->title) !!}</p>
                                <p>{!! nl2br($data->message) !!}</p>
                            </div>
                        </div>
                        <div class="twin_btn">
                            <input type="button" value="戻る" onClick="history.back()">
                            <input type="submit" value="応募" onclick="location.href='{{ route('apply', $data->id) }}'">
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </main>
    </body>
@endsection
