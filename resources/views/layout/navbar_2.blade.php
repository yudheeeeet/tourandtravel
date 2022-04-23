<div class="preloader">
    <div class="preloader-body">
      <div class="cssload-container">
        <div class="cssload-speeding-wheel"></div>
      </div>
      <p>Loading...</p>
    </div>
  </div>
  <div class="page">
    <header class="section page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
          <div class="rd-navbar-aside-outer">
            <div class="rd-navbar-aside">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand">
                  <!--Brand--><a class="brand" href="{{ url('/index') }}"><img src="{{ asset('asset/images/logo/bolinggo.png') }}" alt="" style="height: 50px;"/><span><b>Bolinggo Tour & Travel</b></span></a>
                </div>
              </div>
              <div class="rd-navbar-aside-right rd-navbar-collapse">
                <ul class="rd-navbar-corporate-contacts">
                  <li>
                    <div class="unit unit-spacing-xs">
                      <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                      <div class="unit-body">
                        <p>09:00 — 17:00 <span>WIB</span></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs">
                      <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                      <div class="unit-body"><a class="link-phone" href="https://api.whatsapp.com/send?phone=6281259125490">+62 812-5912-5490</a></div>
                    </div>
                  </li>
                </ul><a class="button button-md button-primary" href="{{ route('login') }}">Masuk</a>
              </div>
            </div>
          </div>
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav ms-auto">
                  <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/') }}">Beranda</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>