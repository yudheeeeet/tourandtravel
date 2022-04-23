@extends('layoutUser.master')
@section('content')

<!-- Form Travel -->
<section class="section section-sm section-last bg-default text-left">
    <div class="container">
        <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Tuliskan Secara Lengkap Pesanan Anda</span></h3>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <img src="{{ asset('storage/' . $rentcar->foto) }}" class="img-thumbnail" alt="...">
        <form method="POST" action="{{ route('index.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-describedby="basic-addon1" name="mobil" value="{{ $rentcar->name }}" disabled>
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Plat</span>
                <input type="text" class="form-control" aria-describedby="basic-addon2" name="plat" value="{{ $rentcar->plat }}" disabled>
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Warna</span>
                <input type="text" class="form-control" aria-describedby="basic-addon2" name="warna" value="{{ $rentcar->warna }}" disabled>
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Harga</span>
                <input type="text" class="form-control" aria-describedby="basic-addon2" name="harga" value="{{ $rentcar->harga }}" disabled>
            </div>
            
            <div class="input-group mb-3">
                <input type="hidden" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                name="rentcar_id" value="{{ $rentcar->id }}" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon4">Tujuan</span>
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="tujuan" required>
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Foto KTP</span>
                <input type="file" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="ktp" accept="image/*" required>
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon5">Tanggal</span>
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="tanggal" required>
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon6">Waktu (Hari)</span>
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="waktu" min="1" required>
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon6">Sewa Driver</span>
                <select class="form-select" name="driver" aria-label="Default select example" required>
                    <option selected>Pilih...</option>
                    <option value="Ya (+ Rp. 100.000 / 24 jam)">Ya (+ Rp. 100.000 / 24 jam)</option>
                    <option value="Tidak">Tidak</option>
                </select>
            </div>
            
            <div class="input-group">
                <span class="input-group-text">Catatan</span>
                <textarea class="form-control" name="catatan" aria-label="With textarea"></textarea>
            </div>
            
            <br>
            
            <div class="input-group">
                <label>Keterangan: Setelah data kami terima, kami mengkonfirmasi balik harga dan pesanan anda via WA.</label>
            </div>
            <button class="button button-primary button-pipaluk" type="submit"
            style="text-decoration: none;">Pesan</button>
        </form>
    </div>
</section>
<!-- End Form Travel -->

@endsection