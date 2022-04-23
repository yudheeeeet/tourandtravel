@extends('layout.master')
@section('content')

<section class="breadcrumbs-custom-inset">
  <div class="breadcrumbs-custom context-dark bg-overlay-60">
    <div class="container">
      <h2 class="breadcrumbs-custom-title">Travel-Promo</h2>
      <ul class="breadcrumbs-custom-path">
        <li><a href="index.html">Beranda</a></li>
        <li class="active">Travel-Promo</li>
      </ul>
    </div>
    <div class="box-position" style="background-image: url(images/bg/bg_1.jpg);"></div>
  </div>
</section>
<!-- Hot tours-->
<section class="section section-sm bg-default">
  <div class="container">
    <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Travel Promo</span></h3>
    <div class="row row-sm row-40 row-md-50">
      @foreach ($promo as $item)
      <div class="col-sm-6 col-md-12 wow fadeInRight">
        <!-- Product Big-->
        <article class="product-big">
          <div class="unit flex-column flex-md-row align-items-md-stretch">
            <div class="unit-left"><a class="product-big-figure" href="#"><img src="{{ asset('storage/' . $item->foto) }}" alt="" width="600" height="366"/></a></div>
            <div class="unit-body">
              <div class="product-big-body">
                <h5 class="product-big-title"><a href="#">{{ $item->name }}</a></h5>
                <br>
                <p class="product-big-text text-black">Waktu: {{ $item->waktu }}</p>
                <p class="product-big-text text-black">Jumlah: {{ $item->jumlah }}</p>
                <p class="product-big-text text-black">Berakhir pada: <span style="color: red;">{{ $item->deadline }}</span></p>
                <a class="button button-black-outline button-ujarak" href="{{ route('name.show', $item->id) }}">Pesan</a>
                <div class="product-big-price-wrap"><span class="product-big-price">{{ $item->harga }}</span></div>
              </div>
            </div>
          </div>
        </article>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- Section Subscribe-->
<section class="section bg-default text-center offset-top-50">
  <div class="parallax-container" data-parallax-img="{{ asset('asset/images/bg/bg_1.jpg') }}">
    <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
      <div class="container">
        <h2 class="heading-2 oh font-weight-normal wow slideInDown">
          <span class="d-block font-weight-semi-bold">Bolinggo Tour & Travel</span>
          <span class="d-block font-weight-light">menemani perjalanan wisata anda!</span>
        </h2>
        <p class="text-width-medium text-spacing-75 wow fadeInLeft" data-wow-delay=".1s">Sudah berpengalaman di bidang pariwisata!</p>
        <a class="button button-secondary button-pipaluk" href="#">Kontak</a>
      </div>
    </div>
  </div>
</section>
<!--	Instagrram wondertour-->
<section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
  <div class="container-fluid">
    <h6 class="gallery-title">Gallery</h6>
    <!-- Owl Carousel-->
    <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0" data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">
      <!-- Thumbnail Classic-->
      <article class="thumbnail thumbnail-mary">
        <div class="thumbnail-mary-figure">
          <img src="{{ asset('asset/images/gallery/floating_market_lembang_bandung.jpg') }}" alt="" style="width: 270px; height: 195px;"/>
        </div>
        <div class="thumbnail-mary-caption">
          <a class="icon fl-bigmug-line-zoom60" href="{{ asset('asset/images/gallery/floating_market_lembang_bandung.jpg') }}" data-lightgallery="item">
            <img src="{{ asset('asset/images/gallery/floating_market_lembang_bandung.jpg') }}" alt=""/>
          </a>
        </div>
      </article>
      <!-- Thumbnail Classic-->
      <article class="thumbnail thumbnail-mary">
        <div class="thumbnail-mary-figure">
          <img src="{{ asset('asset/images/gallery/hawai_waterpark_malang.jpg') }}" alt="" style="width: 270px; height: 195px;"/>
        </div>
        <div class="thumbnail-mary-caption">
          <a class="icon fl-bigmug-line-zoom60" href="images/gallery/hawai_waterpark_malang.jpg" data-lightgallery="item" >
            <img src="{{ asset('asset/images/gallery/hawai_waterpark_malang.jpg') }}" alt=""/>
          </a>
        </div>
      </article>
      <!-- Thumbnail Classic-->
      <article class="thumbnail thumbnail-mary">
        <div class="thumbnail-mary-figure">
          <img src="{{ asset('asset/images/gallery/malioboro_jogja.jpg') }}" alt="" style="width: 270px; height: 195px;"/>
        </div>
        <div class="thumbnail-mary-caption">
          <a class="icon fl-bigmug-line-zoom60" href="images/gallery/malioboro_jogja.jpg" data-lightgallery="item" >
            <img src="{{ asset('asset/images/gallery/malioboro_jogja.jpg') }}" alt=""/>
          </a>
        </div>
      </article>
      <!-- Thumbnail Classic-->
      <article class="thumbnail thumbnail-mary">
        <div class="thumbnail-mary-figure">
          <img src="{{ asset('asset/images/gallery/floating_market_lembang_bandung.jpg') }}" alt="" style="width: 270px; height: 195px;"/>
        </div>
        <div class="thumbnail-mary-caption">
          <a class="icon fl-bigmug-line-zoom60" href="images/gallery/floating_market_lembang_bandung.jpg" data-lightgallery="item">
            <img src="{{ asset('asset/images/gallery/floating_market_lembang_bandung.jpg') }}" alt=""/>
          </a>
        </div>
      </article>
      <!-- Thumbnail Classic-->
      <article class="thumbnail thumbnail-mary">
        <div class="thumbnail-mary-figure">
          <img src="{{ asset('asset/images/gallery/hawai_waterpark_malang.jpg') }}" alt="" style="width: 270px; height: 195px;"/>
        </div>
        <div class="thumbnail-mary-caption">
          <a class="icon fl-bigmug-line-zoom60" href="images/gallery/hawai_waterpark_malang.jpg" data-lightgallery="item" >
            <img src="{{ asset('asset/images/gallery/hawai_waterpark_malang.jpg') }}" alt=""/>
          </a>
        </div>
      </article>
      <!-- Thumbnail Classic-->
      <article class="thumbnail thumbnail-mary">
        <div class="thumbnail-mary-figure">
          <img src="{{ asset('asset/images/gallery/malioboro_jogja.jpg') }}" alt="" style="width: 270px; height: 195px;"/>
        </div>
        <div class="thumbnail-mary-caption">
          <a class="icon fl-bigmug-line-zoom60" href="images/gallery/malioboro_jogja.jpg" data-lightgallery="item" >
            <img src="{{ asset('asset/images/gallery/malioboro_jogja.jpg') }}" alt=""/>
          </a>
        </div>
      </article>
    </div>
  </div>
</section>
@endsection