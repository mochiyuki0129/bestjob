<header class="header_wrapper">
    <div class="header_inner">
        <a link href="{{ url('/') }}" class="logo">Best Job!!</a>
        <a href="#"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="logout">ログアウト</a>
        <form id="logout-form" action="{{ route('adminLogout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</header>
