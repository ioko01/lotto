@include('includes.head')
@include('includes.script')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@yield('head')

<body class="antialiased">
    @yield('content')
    @yield('script')
</body>

</html>
