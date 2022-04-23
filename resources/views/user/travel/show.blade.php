@extends('layoutUser.master')
@section('content')
<!-- Form Travel -->
<section class="section section-sm section-last bg-default text-left">
    <div class="container">
        <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Tuliskan Secara Lengkap Tujuan Wisata
            Anda</span></h3>
            <br>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card p-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $travel->foto) }}" class="img-fluid rounded-start"
                        alt="Nama Lokasi" style="width: 500px;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body" style="text-align: left;">
                            <h6 class="card-title">{{ $travel->name }}</h6>
                            <br>
                            <h6 class="card-title">{{ $travel->harga }}</h6>
                            <p class="card-text" style="text-align: justify;">
                                {{ $travel->deskripsi }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        {{-- {{ route('name.store') }} --}}
                        <form action="{{ route('name.store') }}" method="post">
                            @csrf
                            <div class="card-body" style="text-align: left;">
                                <div class="input-group mb-3">
                                    <input type="hidden" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                                    name="travel_id" value="{{ $travel->id }}" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon5">Tanggal Pemesanan</span>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                                    name="tanggal" required>
                                </div>
                                
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon6">Waktu (Hari)</span>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                                    name="waktu" min="1" required>
                                </div>
                                
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon7">Jumlah Orang</span>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                                    name="jumlah" min="1" required>
                                </div>
                                
                                <div class="input-group">
                                    <span class="input-group-text">Catatan</span>
                                    <textarea class="form-control" aria-label="With textarea" maxlength="500" name="catatan"></textarea>
                                </div>
                                
                                <br>
                                
                                <div class="input-group">
                                    <label>Keterangan: Setelah data kami terima, kami mengkonfirmasi balik harga dan
                                        pesanan anda via WA.</label>
                                    </div>
                                    <button class="button button-primary button-pipaluk" type="submit"
                                    style="text-decoration: none;">Pesan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Form Travel -->
        @endsection
        