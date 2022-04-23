@extends('layoutAdmin.master')
@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="col-md-12">
                <div class="card-body" style="text-align: left;">
                    <h3 class="mb-3">Tambah Data Travel Reguler</h3>
                    @error('foto')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <form action="/reguler/data" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Nama Travel</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="name" required>
                        </div>
                        
                        <select class="form-select" aria-label="Default select example" name="jenis">
                            <option selected>Pilih Jenis Travel...</option>
                            <option value="promo">promo</option>
                            <option value="reguler">reguler</option>
                        </select>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon4">Foto</span>
                            <input type="file" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="foto">
                        </div>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text">Deskripsi</span>
                            <textarea class="form-control" aria-label="With textarea" style="height: 250px; text-align: justify;" name="deskripsi" required></textarea>
                        </div>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Harga</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="harga" required>
                        </div>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Waktu (Hari)</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"  name="waktu" required>
                        </div>
                        
                        <button class="button button-primary button-pipaluk" type="submit" style="text-decoration: none;">Tambah Data</button>
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