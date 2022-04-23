@extends('layout.master')
@section('content')

<section class="breadcrumbs-custom-inset">
    <div class="breadcrumbs-custom context-dark bg-overlay-60">
      <div class="container">
        <h2 class="breadcrumbs-custom-title">Tentang</h2>
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.html">Beranda</a></li>
          <li class="active">Tentang</li>
        </ul>
      </div>
      <div class="box-position" style="background-image: url(images/bg/bg_1.jpg);"></div>
    </div>
  </section>
  <!-- Why choose us-->
  <section class="section section-sm section-first bg-default text-md-left">
    <div class="container">
      <div class="row row-50 justify-content-center align-items-xl-center">
        <div class="col-md-10 col-lg-5 col-xl-6">
          <img src="images/logo/bolinggo.png" alt="" width="519" height="564"/>
        </div>
        <div class="col-md-10 col-lg-7 col-xl-6">
          <!-- Bootstrap tabs-->
          <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
            <!-- Nav tabs-->
            <ul class="nav nav-tabs">
              <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab">Pengalaman</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2" data-toggle="tab">Skills</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-3" data-toggle="tab">Visi & Misi</a></li>
            </ul>
            <!-- Tab panes-->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tabs-4-1">
                <p>Aliquam malesuada bibendum arcu vitae elementum curabitur. A erat nam at lectus urna duis convallis convallis tellus. Sit amet consectetur adipiscing elit pellentesque.</p>
                <!-- Linear progress bar-->
                <article class="progress-linear progress-secondary">
                  <div class="progress-header">
                    <p>Tours</p>
                  </div>
                  <div class="progress-bar-linear-wrap">
                    <div class="progress-bar-linear" data-gradient=""><span class="progress-value">79</span><span class="progress-marker"></span></div>
                  </div>
                </article>
                <!-- Linear progress bar-->
                <article class="progress-linear progress-orange">
                  <div class="progress-header">
                    <p>Excursions</p>
                  </div>
                  <div class="progress-bar-linear-wrap">
                    <div class="progress-bar-linear" data-gradient=""><span class="progress-value">72</span><span class="progress-marker"></span></div>
                  </div>
                </article>
                <!-- Linear progress bar-->
                <article class="progress-linear">
                  <div class="progress-header">
                    <p>Hotel Bookings</p>
                  </div>
                  <div class="progress-bar-linear-wrap">
                    <div class="progress-bar-linear" data-gradient=""><span class="progress-value">88</span><span class="progress-marker"></span></div>
                  </div>
                </article>
              </div>
              <div class="tab-pane fade" id="tabs-4-2">
                <div class="row row-40 justify-content-center text-center inset-top-10">
                  <div class="col-sm-4">
                    <!-- Circle Progress Bar-->
                    <div class="progress-bar-circle" data-value="0.87" data-gradient="#01b3a7" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true"><span></span></div>
                    <p class="progress-bar-circle-title">Tours</p>
                  </div>
                  <div class="col-sm-4">
                    <!-- Circle Progress Bar-->
                    <div class="progress-bar-circle" data-value="0.74" data-gradient="#01b3a7" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true"><span></span></div>
                    <p class="progress-bar-circle-title">Excursions</p>
                  </div>
                  <div class="col-sm-4">
                    <!-- Circle Progress Bar-->
                    <div class="progress-bar-circle" data-value="0.99" data-gradient="#01b3a7" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true"><span></span></div>
                    <p class="progress-bar-circle-title">Hotel Bookings</p>
                  </div>
                </div>
                <div class="group-md group-middle"><a class="button button-width-xl-230 button-primary button-pipaluk" href="#">Get in touch</a><a class="button button-black-outline button-width-xl-230" href="#">Read more</a></div>
              </div>
              <div class="tab-pane fade" id="tabs-4-3">
                <p>Orci nulla pellentesque dignissim enim sit. Elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus. Nibh mauris cursus mattis molestie a iaculis at erat pellentesque.</p>
                <div class="text-center text-sm-left offset-top-30 tab-height">
                  <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                    <li>Lorem ipsum</li>
                    <li>Consectetur adipiscing</li>
                    <li>Sed do eiusmod</li>
                    <li>Tempor incididunt</li>
                    <li>Sem fringilla</li>
                    <li>Ut venenatis</li>
                  </ul>
                </div>
                <div class="group-md group-middle"><a class="button button-width-xl-230 button-primary button-pipaluk" href="#">Get in touch</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Latest Projects-->
  <section class="section section-sm section-fluid bg-default">
    <div class="container">
      <h3>Destinasi</h3>
    </div>
    <!-- Owl Carousel-->
    <div class="owl-carousel owl-classic owl-timeline" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-margin="30" data-autoplay="false" data-nav="true" data-dots="true">
      <div class="owl-item">
        <!-- Thumbnail Classic-->
        <article class="thumbnail thumbnail-mary">
          <div class="thumbnail-mary-figure">
            <img src="images/gallery/floating_market_lembang_bandung.jpg" alt="" style="width: 270px; height: 195px;"/>
          </div>
          <div class="thumbnail-mary-caption">
            <a class="icon fl-bigmug-line-zoom60" href="images/gallery/floating_market_lembang_bandung.jpg" data-lightgallery="item">
              <img src="images/gallery/floating_market_lembang_bandung.jpg" alt=""/>
            </a>
          </div>
        </article>
        <div class="thumbnail-mary-description">
          <h5 class="thumbnail-mary-project"><a href="#">Bandung</a></h5><span class="thumbnail-mary-decor"></span>
          <h5 class="thumbnail-mary-time">
          </h5>
        </div>
      </div>
      <div class="owl-item">
        <!-- Thumbnail Classic-->
        <article class="thumbnail thumbnail-mary">
          <div class="thumbnail-mary-figure">
            <img src="images/gallery/hawai_waterpark_malang.jpg" alt="" style="width: 270px; height: 195px;"/>
          </div>
          <div class="thumbnail-mary-caption">
            <a class="icon fl-bigmug-line-zoom60" href="images/gallery/hawai_waterpark_malang.jpg" data-lightgallery="item">
              <img src="images/gallery/hawai_waterpark_malang.jpg" alt=""/>
            </a>
          </div>
        </article>
        <div class="thumbnail-mary-description">
          <h5 class="thumbnail-mary-project"><a href="#">Malang</a></h5><span class="thumbnail-mary-decor"></span>
          <h5 class="thumbnail-mary-time">
          </h5>
        </div>
      </div>
      <div class="owl-item">
        <!-- Thumbnail Classic-->
        <article class="thumbnail thumbnail-mary">
          <div class="thumbnail-mary-figure">
            <img src="images/gallery/malioboro_jogja.jpg" alt="" style="width: 270px; height: 195px;"/>
          </div>
          <div class="thumbnail-mary-caption">
            <a class="icon fl-bigmug-line-zoom60" href="images/gallery/malioboro_jogja.jpg" data-lightgallery="item">
              <img src="images/gallery/malioboro_jogja.jpg" alt=""/>
            </a>
          </div>
        </article>
        <div class="thumbnail-mary-description">
          <h5 class="thumbnail-mary-project"><a href="#">Jogja</a></h5><span class="thumbnail-mary-decor"></span>
          <h5 class="thumbnail-mary-time">
          </h5>
        </div>
      </div>
      <div class="owl-item">
        <!-- Thumbnail Classic-->
        <article class="thumbnail thumbnail-mary">
          <div class="thumbnail-mary-figure">
            <img src="images/gallery/pantai_kuta_bali.jpg" alt="" style="width: 270px; height: 195px;"/>
          </div>
          <div class="thumbnail-mary-caption">
            <a class="icon fl-bigmug-line-zoom60" href="images/gallery/pantai_kuta_bali.jpg" data-lightgallery="item">
              <img src="images/gallery/pantai_kuta_bali.jpg" alt=""/>
            </a>
          </div>
        </article>
        <div class="thumbnail-mary-description">
          <h5 class="thumbnail-mary-project"><a href="#">Bali</a></h5><span class="thumbnail-mary-decor"></span>
          <h5 class="thumbnail-mary-time">
          </h5>
        </div>
      </div>
      <div class="owl-item">
        <!-- Thumbnail Classic-->
        <article class="thumbnail thumbnail-mary">
          <div class="thumbnail-mary-figure">
            <img src="images/gallery/waterland_adeirmasuryani_cirebon.jpg" alt="" style="width: 270px; height: 195px;"/>
          </div>
          <div class="thumbnail-mary-caption">
            <a class="icon fl-bigmug-line-zoom60" href="images/gallery/waterland_adeirmasuryani_cirebon.jpg" data-lightgallery="item">
              <img src="images/gallery/waterland_adeirmasuryani_cirebon.jpg" alt=""/>
            </a>
          </div>
        </article>
        <div class="thumbnail-mary-description">
          <h5 class="thumbnail-mary-project"><a href="#">Cirebon</a></h5><span class="thumbnail-mary-decor"></span>
          <h5 class="thumbnail-mary-time">
          </h5>
        </div>
      </div>
    </div>
  </section>
  <!-- Review-->
  <section class="section section-sm section-last bg-default">
    <div class="container">
      <h3>Review</h3>
      <!-- Owl Carousel-->
      <div class="owl-carousel owl-modern" data-items="1" data-stage-padding="15" data-margin="30" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay="true">
        <!-- Quote Lisa-->
        <article class="quote-lisa">
          <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="images/user-16-100x100.jpg" alt="" width="100" height="100"/></a>
            <div class="quote-lisa-text">
              <p class="q">Pharetra vel turpis nunc eget lorem dolor sed viverra ipsum. Diam phasellus vestibulum lorem sed risus ultricies. Aenean et tortor at risus viverra adipiscing. Aliquet enim tortor at auctor urna. Tortor aliquam nulla facilisi cras fermentum. Malesuada pellentesque elit eget gravida cum sociis natoque.</p>
            </div>
            <h5 class="quote-lisa-cite"><a href="#">Catherine Williams</a></h5>
          </div>
        </article>
        <!-- Quote Lisa-->
        <article class="quote-lisa">
          <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="images/user-17-100x100.jpg" alt="" width="100" height="100"/></a>
            <div class="quote-lisa-text">
              <p class="q">Sodales ut etiam sit amet nisl purus. Maecenas accumsan lacus vel facilisis volutpat est. Suscipit adipiscing bibendum est ultricies integer quis auctor. Viverra aliquet eget sit amet tellus cras adipiscing. Posuere ac ut consequat semper viverra nam libero justo laoreet. Iaculis eu non diam phasellus vestibulum lorem sed risus ultricies.</p>
            </div>
            <h5 class="quote-lisa-cite"><a href="#">Rupert Wood</a></h5>
          </div>
        </article>
        <!-- Quote Lisa-->
        <article class="quote-lisa">
          <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="images/user-18-100x100.jpg" alt="" width="100" height="100"/></a>
            <div class="quote-lisa-text">
              <p class="q">Lacus vestibulum sed arcu non odio euismod lacinia. Pellentesque elit ullamcorper dignissim cras. Ultrices eros in cursus turpis massa tincidunt dui. Nunc pulvinar sapien et ligula ullamcorper malesuada proin. Commodo odio aenean sed adipiscing diam. Sed euismod nisi porta lorem mollis aliquam.</p>
            </div>
            <h5 class="quote-lisa-cite"><a href="#">Samantha Brown</a></h5>
          </div>
        </article>
      </div>
    </div>
  </section>
  <!--Counters-->
  <!-- Contact information-->
  <section class="section section-sm section-first bg-default">
    <div class="container">
      <h3>Kontak Kami</h3>
      <div class="row row-30 justify-content-center">
        <div class="col-sm-8 col-md-6 col-lg-4">
          <article class="box-contacts">
            <div class="box-contacts-body">
              <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
              <div class="box-contacts-decor"></div>
              <p class="box-contacts-link"><a href="tel:#">+62 812-5912-5490</a></p>
            </div>
          </article>
        </div>
        <div class="col-sm-8 col-md-6 col-lg-4">
          <article class="box-contacts">
            <div class="box-contacts-body">
              <div class="box-contacts-icon fl-bigmug-line-up104"></div>
              <div class="box-contacts-decor"></div>
              <p class="box-contacts-link"><a href="#">Probolinggo, Indonesia.</a></p>
            </div>
          </article>
        </div>
        <div class="col-sm-8 col-md-6 col-lg-4">
          <article class="box-contacts">
            <div class="box-contacts-body">
              <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
              <div class="box-contacts-decor"></div>
              <p class="box-contacts-link"><a href="mailto:#">info@bolinggo.tourtravel.id</a></p>
            </div>
          </article>
        </div>
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