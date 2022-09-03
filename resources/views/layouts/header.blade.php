<header class="header_wrapper">
    <div class="header_container">
        <a link href="{{ url('/') }}" class="logo">Best Job!!</a>
        <div class="header_right">
            <a link href="{{ route('mypage') }}" class="mypage">マイページ</a>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="logout">ログアウト</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</header>
