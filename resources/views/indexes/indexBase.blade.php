@include('layouts.head')

@include('layouts.headerBefore')

@yield('index')
@yield('login')
@yield('signup')
@yield('type')
@yield('confirm')
@yield('editPassword')

@include('layouts.footer')
