    @extends('maines.mainBase')
    @section('main')

        <body>
            <main>
                <div class="login_wrapper">
                    <div class="login_inner">
                        <div class="login_title">
                            <h1>求人一覧</h1>
                            @if (session('succes_message'))
                                <div class="succes_message">
                                    {{ session('succes_message') }}
                                </div>
                            @endif
                            <div class="auth_user">
                                <p class="login_user">{{ Auth::user()->name }}さん</p>
                                <p class="login_user">{{ Auth::user()->type }}タイプ</p>
                            </div>
                        </div>
                        <div class="admin_container">
                            @foreach ($datas as $data)
                                <div class="admin_group">
                                    <a link href="{{ route('recruit', $data->id) }}">{{ $data->company }}</a>
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
