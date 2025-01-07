<!DOCTYPE html>
<html lang="en">
    @include('front.layout.head')
<body>
    @include('front.layout.navbar')
        @yield('content')
    @include('front.layout.footer')

    @include('front.layout.script')
</body>
</html>