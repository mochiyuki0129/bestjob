@include('layouts.head')

@include('layouts.headerBefore')

@yield('index')
@yield('login')
@yield('signup')
@yield('type')
@yield('confirm')
@yield('editPassword')
@yield('reset')
@yield('sendMail')
@yield('passwordComplete')
@yield('test')



@include('layouts.footer')
