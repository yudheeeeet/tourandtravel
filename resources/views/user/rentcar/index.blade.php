@extends('layoutUser.master')
@section('content')

<section class="breadcrumbs-custom-inset">
    <div class="breadcrumbs-custom context-dark bg-overlay-60">
      <div class="container">
        <h2 class="breadcrumbs-custom-title">Rentcar</h2>
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.html">Beranda</a></li>
          <li class="active">Rentcar</li>
        </ul>
      </div>
      <div class="box-position" style="background-image: url(images/bg/bg_1.jpg);"></div>
    </div>
  </section>
  
  <!-- Latest Projects-->
  <section class="section section-sm section-fluid bg-default">
    <div class="container">
      <h3>Rentcar</h3>
    </div>
    <!-- Owl Carousel-->
    <div class="container">
      <div class="row">
        @foreach ($rentcar as $item)
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $item->name }}</h5>
              <img src="{{ asset('storage/' . $item->foto) }}" class="img-thumbnail mt-2" alt="...">
              <p class="card-text">{{ $item->harga }}</p>
              <a href="{{ route('index.show', $item->id) }}" class="btn btn-primary mt-2">Pesan</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  

  <!-- Counter Classic-->
  <section class="section section-fluid bg-default">
    <div class="parallax-container" data-parallax-img="images/bg/bg_1.jpg">
      <div class="parallax-content section-xl context-dark bg-overlay-26">
        <div class="container">
          <div class="row row-50 justify-content-center border-classic">
            <div class="col-sm-6 col-md-5 col-lg-3">
              <div class="counter-classic">
                <div class="counter-classic-number"><span class="counter">12</span>
                </div>
                <h5 class="counter-classic-title">Mitra Travel</h5>
              </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
              <div class="counter-classic">
                <div class="counter-classic-number"><span class="counter">194</span>
                </div>
                <h5 class="counter-classic-title">Mitra Rentcar</h5>
              </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
              <div class="counter-classic">
                <div class="counter-classic-number"><span class="counter">2</span>
                </div>
                <h5 class="counter-classic-title">Transaksi Travel Selesai</h5>
              </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
              <div class="counter-classic">
                <div class="counter-classic-number"><span class="counter">25</span>
                </div>
                <h5 class="counter-classic-title">Transaksi Rentcar Selesai</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection