@extends('layoutAdmin.master')
@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="col-md-12">
                <div class="card-body" style="text-align: left;">
                    <form action="/rentcar/data/{{ $rentcar->id }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <h3 class="mb-3">Lihat Rentcar</h3>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Nama</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="name" value="{{ $rentcar->name }}">
                        </div>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon4">Foto</span>
                            <img src="{{ asset('storage/' . $rentcar->foto) }}" class="img-thumbnail" alt="Foto" style="width: 300px;">
                            <input type="file" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="foto">
                        </div>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Plat</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="plat" value="{{ $rentcar->plat }}">
                        </div>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Warna</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="warna" value="{{ $rentcar->warna }}">
                        </div>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">STNK</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="stnk" value="{{ $rentcar->stnk }}">
                        </div>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">BPKB</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="bpkb" value="{{ $rentcar->bpkb }}">
                        </div>
                        
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">Harga</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="harga" value="{{ $rentcar->harga }}">
                        </div>
                        <br>
                        <select class="form-select" aria-label="Default select example" name="status">
                            <option selected>{{ $rentcar->status }}</option>
                            <option value="Tersedia">Tersedia</option>
                            <option value="Disewa">Disewa</option>
                        </select>
                        <button class="button button-primary button-pipaluk" type="submit" style="text-decoration: none;">Ubah Data</button>
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