@extends('layoutAdmin.master')
@section('content')

<div id="layoutSidenav_content">
    <main>

        @section('php')
        @php
            date_default_timezone_set('Asia/Jakarta');
            $time = date('H:i');
        @endphp
        @endsection
      
      <div class="card card-waves mb-4 mt-5">
        <div class="card-body p-5">
            <div class="row align-items-center justify-content-between">
                <div class="col">
                    <h2 class="text-primary">
                        Selamat Datang, {{Auth::user()->name}}
      
                    </h2>
                </div>
                <div class="col d-none d-lg-block mt-xxl-n4"><img class="img-fluid px-xl-4 mt-xxl-n5"
/></div>
            </div>
        </div>
      </div>
      
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Bolinggo Tour & Travel, 2022</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection