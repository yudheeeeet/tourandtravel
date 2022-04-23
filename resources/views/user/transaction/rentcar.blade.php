@extends('layoutUser.master')
@section('content')
<!-- Breadcrumbs -->
      <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-60">
            <div class="container">
                <h2 class="breadcrumbs-custom-title">Transaksi-Travel</h2>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="user_index.html">Beranda</a></li>
                    <li class="active">Transaksi-Travel</li>
                </ul>
            </div>
            <div class="box-position" style="background-image: url(images/bg/bg_1.jpg);"></div>
        </div>
    </section>
    <!--	Our Services-->
    <section class="section section-sm">
        <div class="container">
            <h3>Rekap Transaksi Rentcar</h3>
            <div class="row">
                @foreach ($transaction as $item)     
                <div class="col-sm-4 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->rentcar->name }}</h5>
                            <p class="card-text">{{ $item->rentcar->harga }}</p>
                            <ul class="list-group list-group-flush" style="text-align: left;">
                                <li class="list-group-item">{{ $item->rentcar->plat }}</li>
                                <li class="list-group-item">Tambahan Driver : {{ $item->driver }}</li>
                                <li class="list-group-item">{{ $item->created_at->format('Y-M-d H:i:s') }}</li>
                                <li class="list-group-item">Waktu: {{ $item->waktu }}</li>
                                <li class="list-group-item">Status:
                                    @switch($item->status)
                                        @case('Menunggu Konfirmasi')
                                            <span style="color: orange;">Menunggu Konfirmasi</span>
                                        @break
                                        @case('Menunggu Pembayaran')
                                            <span style="color: blue;">Menunggu Pembayaran</span>
                                        @break
                                        @case('Dibatalkan/Gagal')
                                            <span style="color: red;">Dibatalkan/Gagal</span>
                                        @break
                                        @case('Sukses')
                                            <span style="color: green;">Sukses</span>
                                        @break
                                        

                                        @default
                                    @endswitch
                                </li>
                            </ul>
                            <a href="{{ url('user/transaction/edit_rentcar/' . $item->id) }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
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
                    <p class="text-width-medium text-spacing-75 wow fadeInLeft" data-wow-delay=".1s">Sudah berpengalaman di
                        bidang pariwisata!</p>
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
                <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3"
                data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0"
                data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">
                <!-- Thumbnail Classic-->
                <article class="thumbnail thumbnail-mary">
                    <div class="thumbnail-mary-figure">
                        <img src="{{ asset('asset/images/gallery/floating_market_lembang_bandung.jpg') }}" alt=""
                        style="width: 270px; height: 195px;" />
                    </div>
                    <div class="thumbnail-mary-caption">
                        <a class="icon fl-bigmug-line-zoom60"
                        href="{{ asset('asset/images/gallery/floating_market_lembang_bandung.jpg') }}"
                        data-lightgallery="item">
                        <img src="{{ asset('asset/images/gallery/floating_market_lembang_bandung.jpg') }}" alt="" />
                    </a>
                </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
                <div class="thumbnail-mary-figure">
                    <img src="{{ asset('asset/images/gallery/hawai_waterpark_malang.jpg') }}" alt=""
                    style="width: 270px; height: 195px;" />
                </div>
                <div class="thumbnail-mary-caption">
                    <a class="icon fl-bigmug-line-zoom60" href="images/gallery/hawai_waterpark_malang.jpg"
                    data-lightgallery="item">
                    <img src="{{ asset('asset/images/gallery/hawai_waterpark_malang.jpg') }}" alt="" />
                </a>
            </div>
        </article>
        <!-- Thumbnail Classic-->
        <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure">
                <img src="{{ asset('asset/images/gallery/malioboro_jogja.jpg') }}" alt=""
                style="width: 270px; height: 195px;" />
            </div>
            <div class="thumbnail-mary-caption">
                <a class="icon fl-bigmug-line-zoom60" href="images/gallery/malioboro_jogja.jpg"
                data-lightgallery="item">
                <img src="{{ asset('asset/images/gallery/malioboro_jogja.jpg') }}" alt="" />
            </a>
        </div>
    </article>
    <!-- Thumbnail Classic-->
    <article class="thumbnail thumbnail-mary">
        <div class="thumbnail-mary-figure">
            <img src="{{ asset('asset/images/gallery/floating_market_lembang_bandung.jpg') }}" alt=""
            style="width: 270px; height: 195px;" />
        </div>
        <div class="thumbnail-mary-caption">
            <a class="icon fl-bigmug-line-zoom60" href="images/gallery/floating_market_lembang_bandung.jpg"
            data-lightgallery="item">
            <img src="{{ asset('asset/images/gallery/floating_market_lembang_bandung.jpg') }}" alt="" />
        </a>
    </div>
</article>
<!-- Thumbnail Classic-->
<article class="thumbnail thumbnail-mary">
    <div class="thumbnail-mary-figure">
        <img src="{{ asset('asset/images/gallery/hawai_waterpark_malang.jpg') }}" alt=""
        style="width: 270px; height: 195px;" />
    </div>
    <div class="thumbnail-mary-caption">
        <a class="icon fl-bigmug-line-zoom60" href="images/gallery/hawai_waterpark_malang.jpg"
        data-lightgallery="item">
        <img src="{{ asset('asset/images/gallery/hawai_waterpark_malang.jpg') }}" alt="" />
    </a>
</div>
</article>
<!-- Thumbnail Classic-->
<article class="thumbnail thumbnail-mary">
    <div class="thumbnail-mary-figure">
        <img src="{{ asset('asset/images/gallery/malioboro_jogja.jpg') }}" alt=""
        style="width: 270px; height: 195px;" />
    </div>
    <div class="thumbnail-mary-caption">
        <a class="icon fl-bigmug-line-zoom60" href="images/gallery/malioboro_jogja.jpg"
        data-lightgallery="item">
        <img src="{{ asset('asset/images/gallery/malioboro_jogja.jpg') }}" alt="" />
    </a>
</div>
</article>
</div>
</div>
</section>
@endsection