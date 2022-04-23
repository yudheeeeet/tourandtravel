@extends('layoutUser.master')
@section('content')

<section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
  <div class="swiper-wrapper text-left">
    <div class="swiper-slide context-dark" data-slide-bg="{{ asset('asset/images/bg/bg_1.jpg') }}">
      <div class="swiper-slide-caption section-md">
        <div class="container">
          <div class="row">
            <div class="col-md-10">
              <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Nikmati Destinasi Terbaik bersama Agen Perjalanan Kami</h6>
              <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Jelajahi</span><span class="font-weight-bold"> Keindahan Dunia</span></h2><a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Mulai</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-slide context-dark" data-slide-bg="{{ asset('asset/images/bg/bg_2.jpg') }}">
      <div class="swiper-slide-caption section-md">
        <div class="container">
          <div class="row">
            <div class="col-md-10">
              <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Tim ahli perjalanan professional</h6>
              <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Percayakan</span><span class="font-weight-bold"> Perjalanan Wisata Anda</span></h2><a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Mulai</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-slide context-dark" data-slide-bg="{{ asset('asset/images/bg/bg_3.jpg') }}">
      <div class="swiper-slide-caption section-md">
        <div class="container">
          <div class="row">
            <div class="col-md-10">
              <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Bangun Perjalanan Liburan Anda Berikutnya bersama Kami</h6>
              <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Buat</span><span class="font-weight-bold"> Pengalaman Berharga</span></h2><a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Mulai</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Swiper Pagination-->
  <div class="swiper-pagination"></div>
</section>
<!-- Section Box Categories-->
<section class="section section-lg section-top-1 bg-gray-4">
  <div class="container offset-negative-1">
    <div class="box-categories cta-box-wrap">
      <div class="box-categories-content">
        <div class="row justify-content-center">
          <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
            <ul class="list-marked-2 box-categories-list">
              <li><a href="#"><img src="{{ asset('asset/images/bg/cta-1.jpg') }}" alt="" style="width: 368px; height: 368px;"/></a>
                <h5 class="box-categories-title">Wana Wisata</h5>
              </li>
            </ul>
          </div>
          <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
            <ul class="list-marked-2 box-categories-list">
              <li><a href="#"><img src="{{ asset('asset/images/bg/cta-2.jpg') }}" alt="" style="width: 368px; height: 368px;"/></a>
                <h5 class="box-categories-title">Pegunungan</h5>
              </li>
            </ul>
          </div>
          <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
            <ul class="list-marked-2 box-categories-list">
              <li><a href="#"><img src="{{ asset('asset/images/bg/cta-3.jpg') }}" alt="" style="width: 368px; height: 368px;"/></a>
                <h5 class="box-categories-title">Pantai</h5>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div><a class="link-classic wow fadeInUp" href="#">Lihat Wisata Lainnya<span></span></a>
    <!-- Owl Carousel-->
  </div>
</section>
  <!--	Our Services-->
  <section class="section section-sm">
    <div class="container">
      <h3>Destinasi</h3>
      <div class="row row-30">
        <div class="col-sm-6 col-lg-4">
          <article class="box-icon-classic">
            <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
              <div class="unit-left">
                <img src="{{ asset('asset/images/travel-reguler/pantai_kuta_bali.jpg') }}" alt="" style="width: 75px; border-radius: 5px;">
              </div>
              <div class="unit-body">
                <h5 class="box-icon-classic-title"><a>Bali</a></h5>
                <p class="box-icon-classic-text">Our unique matching system lets you find just the tour you want for your next holiday.</p>
              </div>
            </div>
          </article>
        </div>
        <div class="col-sm-6 col-lg-4">
          <article class="box-icon-classic">
            <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
              <div class="unit-left">
                <img src="{{ asset('asset/images/travel-reguler/floating_market_lembang_bandung.jpg') }}" alt="" style="width: 75px; border-radius: 5px;">
              </div>
              <div class="unit-body">
                <h5 class="box-icon-classic-title"><a>Bandung</a></h5>
                <p class="box-icon-classic-text">We offer a wide variety of personally picked tours with destinations all over the globe.</p>
              </div>
            </div>
          </article>
        </div>
        <div class="col-sm-6 col-lg-4">
          <article class="box-icon-classic">
            <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
              <div class="unit-left">
                <img src="{{ asset('asset/images/travel-reguler/waterland_adeirmasuryani_cirebon.jpg') }}" alt="" style="width: 75px; border-radius: 5px;">
              </div>
              <div class="unit-body">
                <h5 class="box-icon-classic-title"><a>Cirebon</a></h5>
                <p class="box-icon-classic-text">Our tour managers are qualified, skilled, and friendly to bring you the best service.</p>
              </div>
            </div>
          </article>
        </div>
        <div class="col-sm-6 col-lg-4">
          <article class="box-icon-classic">
            <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
              <div class="unit-left">
                <img src="{{ asset('asset/images/travel-reguler/hawai_waterpark_malang.jpg') }}" alt="" style="width: 75px; border-radius: 5px;">
              </div>
              <div class="unit-body">
                <h5 class="box-icon-classic-title"><a>Malang</a></h5>
                <p class="box-icon-classic-text">You can always get professional support from our staff 24/7 and ask any question you have.</p>
              </div>
            </div>
          </article>
        </div>
        <div class="col-sm-6 col-lg-4">
          <article class="box-icon-classic">
            <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
              <div class="unit-left">
                <img src="{{ asset('asset/images/travel-reguler/malioboro_jogja.jpg') }}" alt="" style="width: 75px; border-radius: 5px;">
              </div>
              <div class="unit-body">
                <h5 class="box-icon-classic-title"><a>Jogja</a></h5>
                <p class="box-icon-classic-text">Our team offers only the best selection of affordable and luxury hotels to our clients.</p>
              </div>
            </div>
          </article>
        </div>
        <div class="col-sm-6 col-lg-4">
          <article class="box-icon-classic">
            <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
              <div class="unit-left">
                <img src="{{ asset('asset/images/travel-reguler/goes_to_campus.jpg') }}" alt="" style="width: 75px; border-radius: 5px;">
              </div>
              <div class="unit-body">
                <h5 class="box-icon-classic-title"><a>Goes To Campus</a></h5>
                <p class="box-icon-classic-text">If you find tours that are cheaper than ours, we will compensate the difference.</p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <!-- Hot tours-->
  <section class="section section-sm bg-default">
    <div class="container">
      <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Promo</span></h3>
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