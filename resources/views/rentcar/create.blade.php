@extends('layoutAdmin.master')
@section('content')

<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <div class="col-md-12">
        <div class="card-body" style="text-align: left;">
          <h3 class="mb-3">Tambah Data Rentcar</h3>
          @error('foto')
             <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <form action="/rentcar/data" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon3">Nama</span>
              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="name" required>
            </div>
            
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon4">Foto</span>
              <input type="file" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="foto">
            </div>
            
            <div class="input-group mb-3">
              <span class="input-group-text">Plat</span>
              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="plat" required>
            </div>
            
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon3">Warna</span>
              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="warna" required>
            </div>
            
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon3">STNK</span>
              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="stnk" required>
            </div>
            
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon3">BPKB</span>
              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="bpkb" required>
            </div>
            
            <div class="input-group mb">
              <span class="input-group-text" id="basic-addon3">Harga</span>
              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" min="1" name="harga" required>
            </div>
            <br>
            <select class="form-select" aria-label="Default select example" name="status">
              <option selected>Status</option>
              <option value="Tersedia">Tersedia</option>
              <option value="Disewa">Disewa</option>
            </select>
            
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