@extends('layoutUser.master')
@section('content')
<!--	Our Services-->
<section class="section section-sm">
    <div class="container">
        <h3>Detail Transaksi Travel</h3>
        <div class="row">
            
            <form action="/user/transaction/update_travel/{{ $transaction->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card p-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/' . $transaction->travel->foto) }}" class="img-fluid rounded-start" alt="Nama Lokasi" style="width: 500px;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body" style="text-align: left;">
                                <h6 class="card-title">{{ $transaction->travel->name }}</h6>
                                <p class="card-text" style="text-align: justify;">
                                    {{ $transaction->travel->deskripsi }}    
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card-body" style="text-align: left;">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon3">Nama</span>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="nama" value="{{ $transaction->user->name }}" readonly>
                                </div>
                                
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon4">HP (WA)</span>
                                    <input type="tel" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="0812 3456 7890" name="{{ $transaction->user->hp }}" readonly>
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
                                    <span class="input-group-text" id="basic-addon7">Jumlah Orang</span>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="jumlah" min="1" value="{{ $transaction->jumlah }}" readonly>
                                </div>
                                
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Catatan</span>
                                    <textarea class="form-control" aria-label="With textarea" maxlength="25" readonly>
                                        {{ $transaction->catatan }}
                                    </textarea>
                                </div>
                                
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon6">Status</span>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="jumlah" min="1" value="{{ $transaction->status }}" readonly>
                                </div>
                                
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Bukti Pembayaran</span>
                                    <img src="{{ asset('storage/' . $transaction->slip) }}" class="img-thumbnail" alt="Foto" style="width: 300px;">
                                    <input type="file" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="slip" accept="image/*" required>
                                </div>
                                
                                <div class="input-group">
                                    <label>
                                        Keterangan: lakukan pembayaran sebelum 2x24 jam. <br>
                                        Rekening: 0603930497 (BNI a.n Al Fikri Zaini)
                                    </label>
                                </div>
                                <button class="button button-primary button-pipaluk" type="submit" href="#">Bayar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</section>
@endsection
