<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    @include('layoutUser.header')

    <body>

        @include('layoutUser.navbar')

        @yield('content')

        @include('layoutUser.footer')
    
        @yield('script')
    
        @yield('modal')

    </body>

</html>