@include('layouts.frontend.meta')
@if(Auth::user())
@include('layouts.frontend.nav')
@else
@include('layouts.frontend.donor_nav')
    @endif
@include('layouts.frontend.header')

@yield('content')
@include('layouts.frontend.footer')
