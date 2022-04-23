@extends('layoutAdmin.master')
@section('content')


<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <div class="col-md-12">
                    <div class="card-body" style="text-align: left;">
                        <h3 class="mb-3">Edit Akun Admin</h3>
                        <form action="/update/{{ $user->id }}" method="POST">
                            @csrf                       
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">Nama</span>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="name" value="{{ $user->name }}">
                              </div>
                              
                              <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon4">HP (WA)</span>
                                <input type="tel" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{ $user->hp }}" name="hp">
                              </div>
    
                              <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon4">Jenis BANK</span>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{ $user->bank }}" name="bank">
                              </div>
    
                              <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon4">Nomor Rekening</span>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{ $user->rekening }}" name="rekening">
                              </div>
    
                              <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon6">Email</span>
                                <input type="email" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="email" value="{{ $user->email }}">
                              </div>
                              <button class="button button-primary button-pipaluk" type="submit" style="text-decoration: none;">Edit</button>
                        </form>
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
</div>

@endsection