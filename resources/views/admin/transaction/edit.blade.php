@extends('layoutAdmin.master')
@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="col-md-12">
                <div class="card-body" style="text-align: left;">
                    <h3 class="mb-3">Lihat Transaksi Travel Pemesan</h3>
                    <form action="{{ route('user.update', $transaction->id) }}" method="POST">
                        @method('put')
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
                            <span class="input-group-text" id="basic-addon5">Tanggal</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="checkin" value="{{ $transaction->created_at }}" readonly>
                        </div>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon6">Waktu (Hari)</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="waktu" min="1" value="{{ $transaction->waktu }}" readonly>
                        </div>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon7">Jumlah (Orang)</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="jumlah" min="1" value="{{ $transaction->jumlah }}" readonly>
                        </div>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text">Catatan</span>
                            <textarea class="form-control" aria-label="With textarea" maxlength="25" readonly>{{ $transaction->catatan }}</textarea>
                        </div>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon4">Harga</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{ $transaction->travel->harga }}" name="harga" readonly>
                        </div>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text">Bukti Pembayaran</span>
                            <img src="{{ asset('storage/' . $transaction->slip) }}" class="img-thumbnail" alt="bukti pembayaran" style="width: 125px;">
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