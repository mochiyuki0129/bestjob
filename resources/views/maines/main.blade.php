    @extends('maines.mainBase')
    @section('main')

        <body>
            <main>
                <div class="login_wrapper">
                    <div class="login_inner">
                        <div class="login_title">
                            <h1>求人一覧</h1>
                        </div>
                        <div class="login_person">
                            <ul>
                                <li>{{ Auth::user()->name }}さん</li>
                                <li>あなたは{{ Auth::user()->type }}タイプです</li>
                        </div>
                        <div class="job_group">
                            <div class="job_section">
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </body>
    @endsection
