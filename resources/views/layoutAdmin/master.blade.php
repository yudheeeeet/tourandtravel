<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    @include('layoutAdmin.header')

    <body>

        @include('layoutAdmin.navbar')

        @yield('content')

        @include('layoutAdmin.footer')
    
        @yield('script')
    
        @yield('modal')

    </body>

</html>