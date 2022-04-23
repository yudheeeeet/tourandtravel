@extends('layoutAdmin.master')
@section('content')
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <div class="col-md-12">
        <div class="card-body" style="text-align: left;">
          <h3 class="mb-3">Lihat Detail Pemesanan Rentcar</h3>
          <form action="/admin/update/{{ $transaction->id }}" method="POST">
            @csrf
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">Nama</span>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="nama" value="{{ $transaction->user->name }}" readonly>
          </div>
          
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon4">HP (WA)</span>
            <input type="tel" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{ $transaction->user->hp }}" name="hp" readonly>
          </div>
          
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon4">Tujuan</span>
            <input type="tel" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{ $transaction->tujuan }}" name="tujuan" readonly>
          </div>
          
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon4">Foto KTP</span>
            <img src="{{ asset('storage/' . $transaction->ktp) }}" class="img-thumbnail" alt="Foto KTP Pemesan" style="width: 300px;">
          </div>
          
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon5">Tanggal</span>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="checkin" value="{{ $transaction->created_at }}" readonly>
          </div>
          
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon6">Waktu (Hari)</span>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="waktu" min="1" value="{{ $transaction->waktu }}" readonly>
          </div>
          
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon6">Sewa Driver</span>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="sewa_driver" min="1" value="{{ $transaction->driver }}" readonly>
          </div>
          
          <div class="input-group mb-3">
            <span class="input-group-text">Catatan</span>
            <textarea class="form-control" aria-label="With textarea" maxlength="25" readonly>{{ $transaction->catatan }}</textarea>
          </div>
          
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon6">Mobil</span>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="mobil" value="{{ $transaction->rentcar->name }}" readonly>
          </div>
          
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon6">Plat</span>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="plat" value="{{ $transaction->rentcar->plat }}" readonly>
          </div>
          
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon6">Warna</span>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="warna" value="{{ $transaction->rentcar->warna }}" readonly>
          </div>
          
          
          <div class="input-group mb-3">
            <span class="input-group-text">Bukti Pembayaran</span>
            <img src="{{ asset('storage/' . $transaction->slip) }}" class="img-thumbnail" alt="Bukti Pembayaran" style="width: 125px;">
          </div>
          
          <div class="input-group">
            <span class="input-group-text" id="basic-addon6">Status</span>
            <select class="form-select" name="status" aria-label="Default select example">
              <option selected value="{{ $transaction->status }}">{{ $transaction->status }}</option>
              <option value="Menunggu Pembayaran">Menunggu Pembayaran</option>
              <option value="Gagal/Dibatalkan">Gagal/Dibatalkan</option>
              <option value="Sukses">Sukses</option>
            </select>
          </div>
          
          <button class="button button-primary button-pipaluk" type="submit" style="text-decoration: none;">Konfirmasi</button>
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
@endsection