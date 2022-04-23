<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    @include('layout.header')

    <body>

        @include('layout.navbar')

        @yield('content')

        @include('layout.footer')
    
        @yield('script')
    
        @yield('modal')

    </body>

</html>