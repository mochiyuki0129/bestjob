@extends('manages.manageBase')
@section('admin')

    <body>
        <main>
            <div class="login_wrapper">
                <div class="login_inner">
                    <div class="login_title">
                        <h1>求人管理画面</h1>
                        <div class="admin_btn">
                            <input type="button" value="求人登録" onClick="location.href='{{ route('register') }}'">
                            <input type="submit" value="応募者CSV出力" onClick="location.href='{{ route('adminCSV') }}'">
                        </div>
                    </div>
                    <div class="admin_container">
                        @foreach ($datas as $data)
                            <div class="admin_group">
                                <a link href="{{ route('adminDetail', $data->id) }}">{{ $data->company }}</a>
                                <p>{{ $data->type }}タイプ</p>
                                <p>勤務地/{{ $data->area }}</p>
                                <p>業種/{{ $data->industry }} 職種/{{ $data->occupation }}</p>
                                <div class="admin_main">
                                    <p>{!! nl2br($data->title) !!}</p>
                                    <p>{!! nl2br($data->message) !!}</p>
                                </div>
                            </div>
                        @endforeach
                        <div class="pagination">
                            {!! $datas->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
@endsection
