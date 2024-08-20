
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="ThemesLay">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="dist/images/favicon.png">

  <!-- main CSS -->
  <link href="dist/css/main.css" rel="stylesheet">
  <title>AstroGyan - Astrology and Horoscope HTML Website Template</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Prosto+One&display=swap" rel="stylesheet">
</head>

<body>
  <!-- light dark theme switch -->
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check2" viewBox="0 0 16 16">
      <path
        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
      <path
        d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
      <path
        d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
      <path
        d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
    </symbol>
  </svg>
  <!-- preloader section -->
  <div class="page-loader">
    <div class="spinner"></div>
  </div>
  <!-- page wrapper section -->
  <div id="wrapper"></div>
  <!-- preloader section -->
  <div class="info-top alert alert-dismissible fade show p-2" role="alert">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="d-flex align-items-center justify-content-center p-0 mb-0">
            <p class="mb-0 font-small"><i class="bi bi-bell"></i> Discover 2024's biggest <a href="#">astro</a> trends.
              Our 2024
              horoscope
              report is out now.</p>
            <button type="button" class="btn-close close-btn" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header Part -->
  <header class="navbar navbar-expand-lg py-lg-0 py-2 px-0 header">
    <nav class="container">
      <a class="navbar-brand" href="javascript:void(0)">
        <img src="dist/images/brand-light.png" class="img-fluid logo-light" alt="Brand Logo" title="Brand Logo">
        <img src="dist/images/brand.png" class="img-fluid logo-dark" alt="Brand Logo" title="Brand Logo">
      </a>
      <div class="switch order-lg-1 ms-0 ms-lg-3">
        <div class="btn-wrapper">
          <button class="navbar-toggler theme-bg-secondary border-0 menu-toggle" type="button" data-label="Menu"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bars"></span>
          </button>
        </div>
        <!-- color mode  -->
        <div class="nav-item dropdown ms-3 ms-lg-0">
          <button class="btn btn-link nav-link dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static" aria-label="Toggle theme (auto)">
            <svg class="svg-sprt my-1 theme-icon-active">
              <use href="#circle-half"></use>
            </svg>
            <span class="d-none ms-2" id="bd-theme-text">Toggle theme</span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="bd-theme-text">
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                aria-pressed="false">
                <svg class="svg-sprt opacity-50 theme-icon">
                  <use href="#sun-fill"></use>
                </svg>

                <svg class="svg-sprt ms-auto d-none">
                  <use href="#check2"></use>
                </svg>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                aria-pressed="false">
                <svg class="svg-sprt opacity-50 theme-icon">
                  <use href="#moon-stars-fill"></use>
                </svg>

                <svg class="svg-sprt ms-auto d-none">
                  <use href="#check2"></use>
                </svg>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
                aria-pressed="true">
                <svg class="svg-sprt opacity-50 theme-icon">
                  <use href="#circle-half"></use>
                </svg>

                <svg class="svg-sprt ms-auto d-none">
                  <use href="#check2"></use>
                </svg>
              </button>
            </li>
          </ul>
        </div>
        <!-- color mode  -->
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">



        <div class="d-flex ms-2 justify-content-center">
          <button onclick="window.location.href='appointment.html';"
            class="rounded-pill btn custom-btn-primary font-small primary-btn-effect" type="submit">Consult Now</button>
        </div>
      </div>
    </nav>
  </header>
  <!-- Body Part - hero section -->
  <section class="hero">
    <div class="container position-relative z-2">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-lg-6" >
          <!--p class="mb-3 theme-text-accent-two">Центр астрологических исследований АстроПульс</p-->
          <h1 class="display-2 fw-bold mb-3 theme-text-white animate-charcter">Удобный и быстрый сервис заказа натальных карт
          </h1>
          <p class="mb-5 theme-text-accent-two text-h5"> Нам доверяют. Более 1000 выполненных исследований!</p>
          <div class="group">
            <button class="rounded-pill btn custom-btn-primary  primary-btn-effect" type="submit">ЗАКАЗАТЬ</button>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="hero-wrap">
            <div class="hero-inner">
              <img src="dist/images/hero/sign-picture.png" class="img-fluid box-icon-float" alt="hero main image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- feature marquee section -->
  <div class="py-5 marq-wrap" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <div class="marquee marquee-1">
            <ul class="list-highlight scroll">
              <li>Complete Online Advice</li>
              <li>Astrologer Talk</li>
              <li>Chat with Astrologer</li>
              <li>Free Astrology Consultation</li>
              <li>Consult an Online Astrologer</li>
            </ul>
            <!-- Mirrors the content above -->
            <ul class="list-highlight scroll" aria-hidden="true">
              <li>Complete Online Advice</li>
              <li>Astrologer Talk</li>
              <li>Chat with Astrologer</li>
              <li>Free Astrology Consultation</li>
              <li>Consult an Online Astrologer</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- zodic section -->
  <section class="zodicsign-sec py-5" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h3 class="display-6 fw-bold mb-5 theme-text-accent-one">Free Daily Horoscope</h3>
        </div>
        <div class="col-12 col-lg-12">
          <div class="owl-carousel owl-theme" id="carouselZodic">
            <a href="#" class="item grow-box">
              <img src="dist/images/zodic/zodic01.png" alt="zodic">
              <span>Aries</span>
              <span class="sub">21/3-19/4</span>
            </a>
            <!-- repetable -->
            <a href="#" class="item grow-box">
              <img src="dist/images/zodic/zodic02.png" alt="zodic">
              <span>Taurus</span>
              <span class="sub">21/3-19/4</span>
            </a>
            <!-- repetable -->
            <a href="#" class="item grow-box">
              <img src="dist/images/zodic/zodic03.png" alt="zodic">
              <span>Gemini</span>
              <span class="sub">21/3-19/4</span>
            </a>
            <!-- repetable -->
            <a href="#" class="item grow-box">
              <img src="dist/images/zodic/zodic04.png" alt="zodic">
              <span>Cancer</span>
              <span class="sub">21/3-19/4</span>
            </a>
            <!-- repetable -->
            <a href="#" class="item grow-box">
              <img src="dist/images/zodic/zodic05.png" alt="zodic">
              <span>Leo</span>
              <span class="sub">21/3-19/4</span>
            </a>
            <!-- repetable -->
            <a href="#" class="item grow-box">
              <img src="dist/images/zodic/zodic06.png" alt="zodic">
              <span>Virgo</span>
              <span class="sub">21/3-19/4</span>
            </a>
            <!-- repetable -->
            <a href="#" class="item grow-box">
              <img src="dist/images/zodic/zodic07.png" alt="zodic">
              <span>Libra</span>
              <span class="sub">21/3-19/4</span>
            </a>
            <!-- repetable -->
            <a href="#" class="item grow-box">
              <img src="dist/images/zodic/zodic08.png" alt="zodic">
              <span>Scorpio</span>
              <span class="sub">21/3-19/4</span>
            </a>
            <!-- repetable -->
            <a href="#" class="item grow-box">
              <img src="dist/images/zodic/zodic09.png" alt="zodic">
              <span>Sagittarius</span>
              <span class="sub">21/3-19/4</span>
            </a>
            <!-- repetable -->
            <a href="#" class="item grow-box">
              <img src="dist/images/zodic/zodic10.png" alt="zodic">
              <span>Capricorn</span>
              <span class="sub">21/3-19/4</span>
            </a>
            <!-- repetable -->
            <a href="#" class="item grow-box">
              <img src="dist/images/zodic/zodic11.png" alt="zodic">
              <span>Aquarius</span>
              <span class="sub">21/3-19/4</span>
            </a>
            <!-- repetable -->
            <a href="#" class="item grow-box">
              <img src="dist/images/zodic/zodic12.png" alt="zodic">
              <span>Pisces</span>
              <span class="sub">21/3-19/4</span>
            </a>
            <!-- repetable -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about company section -->
  <section class="about-company" data-aos="fade-up">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-12 col-lg-5">
          <div class="py-2 px-5 mt-5 mt-lg-0">
            <h4 class="h1 fw-bold mb-4 theme-text-dark max">Know More About Your Future</h4>
            <p class="mb-5 mt-3 theme-text-accent-three lh-lg"> With AstroGyan, partner with a team that has the
              experience and drive to help you become a market leader. With TechGain, partner with a team that has the
              experience
              and drive to help you become a market leader.
            </p>
            <div class="row">
              <div class="col-12 col-lg-2">
                <span class="px-3 py-3 rounded-circle theme-box-shadow h4 fw-bold d-inline-flex">
                  <i class="bi bi-check2-circle display-6 lh-1"></i>
                </span>
              </div>
              <div class="col-12 col-lg-10">
                <div class="ps-4">
                  <p class="fw-bold">Why customers trust us</p>
                  <p class="theme-text-accent-three mt-4 mb-0 pe-5">As a growing tribe of millennials move towards
                    seeking esoteric and spiritual</p>
                </div>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-12 col-lg-2">
                <span class="px-3 py-3 rounded-circle theme-box-shadow h4 fw-bold d-inline-flex">
                  <i class="bi bi-check2-circle display-6 lh-1"></i>
                </span>
              </div>
              <div class="col-12 col-lg-10">
                <div class="ps-4">
                  <p class="fw-bold">Why do we do it?</p>
                  <p class="theme-text-accent-three mt-4 mb-0 pe-5">AstroGyan enjoys a relationship of trust with
                    customers in over countries, a network of experts.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-7">
          <div class="about-pic">
            <figure class="mb-0">
              <img src="dist/images/section/about-pic.png" class="img-fluid" alt="about company">
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- our services section -->
  <section class="core-services" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <p class="mb-4 theme-text-primary">Our Astrology Services</p>
          <h2 class="h1 fw-bold mb-4 theme-text-dark">Astrology is one click away</h2>
        </div>
        <div class="col-12 mt-5">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-3 mb-3">
              <div class="py-5 px-5 mb-4 mb-lg-0 theme-border-radius cardeffect">
                <svg xmlns="http://www.w3.org/2000/svg" width="39.106" height="50.176" viewBox="0 0 39.106 50.176">
                  <g id="crystal-ball" transform="translate(-15.2 -6.8)">
                    <path id="Path_1882" data-name="Path 1882"
                      d="M71.634,30.441h-.066a8.971,8.971,0,0,1-1.048.131c-.59,0-.852-.131-1.507-1.376a.4.4,0,0,0-.393-.2H68.49a.373.373,0,0,0-.262.459c.262,1.638.2,1.769-1.245,2.489a.413.413,0,0,0-.2.524.359.359,0,0,0,.393.262h.066a8.971,8.971,0,0,1,1.048-.131c.59,0,.852.131,1.507,1.376a.4.4,0,0,0,.393.2h.131a.373.373,0,0,0,.262-.459c-.262-1.572-.2-1.769,1.245-2.489a.408.408,0,0,0-.2-.786Zm-1.441,3.406c-.655-1.179-.983-1.572-1.834-1.572a9.78,9.78,0,0,0-1.114.131c1.572-.852,1.769-1.179,1.441-2.948.655,1.179.983,1.572,1.834,1.572a9.78,9.78,0,0,0,1.114-.131C70.062,31.751,69.866,32.079,70.193,33.847Z"
                      transform="translate(-17.787 -7.658)" />
                    <path id="Path_1883" data-name="Path 1883"
                      d="M46.219,10.272h.393c1.245,0,1.441.131,1.965,1.572a.359.359,0,0,0,.393.262h.066a.415.415,0,0,0,.328-.393c-.066-1.638.066-1.769,1.572-2.293a.359.359,0,0,0,.262-.393.378.378,0,0,0-.393-.393h-.328c-1.245,0-1.441-.131-1.965-1.572a.359.359,0,0,0-.393-.262h-.066a.415.415,0,0,0-.328.393c.066,1.638-.066,1.769-1.572,2.358a.373.373,0,0,0-.262.459A.359.359,0,0,0,46.219,10.272Zm1.9-3.21c.59,1.572.852,1.834,2.358,1.834h.393c-1.7.655-1.9.917-1.834,2.751-.59-1.572-.852-1.834-2.358-1.834h-.393C47.922,9.158,48.118,8.9,48.118,7.062Z"
                      transform="translate(-10.581)" />
                    <path id="Path_1884" data-name="Path 1884"
                      d="M68.845,22.689A1.245,1.245,0,1,0,67.6,21.445,1.244,1.244,0,0,0,68.845,22.689Zm0-2.1a.852.852,0,1,1-.852.852A.915.915,0,0,1,68.845,20.593Z"
                      transform="translate(-18.076 -4.622)" />
                    <path id="Path_1885" data-name="Path 1885"
                      d="M47.887,21.157c-4.52-.786-5.044-1.245-5.83-5.83A.415.415,0,0,0,41.664,15a.367.367,0,0,0-.393.328c-.59,3.537-1.048,4.585-3.275,5.306a14.747,14.747,0,0,0-7.73-2.162,15.125,15.125,0,1,0,12.446,6.616c.655-2.1,1.834-2.489,5.24-3.079a.415.415,0,0,0,.328-.393C48.214,21.354,48.083,21.157,47.887,21.157ZM28.825,24.236a.393.393,0,1,1,.393-.393C29.283,24.04,29.087,24.236,28.825,24.236Zm7.6,15.328a.393.393,0,1,1,.393-.393A.423.423,0,0,1,36.423,39.564ZM34.655,29.411c.983-1.507.983-1.834-.066-3.275,1.507.983,1.834.983,3.275-.066-.983,1.507-.983,1.834.066,3.275C36.423,28.3,36.1,28.3,34.655,29.411Zm5.437,1.507a.852.852,0,1,1,.852.852A.867.867,0,0,1,40.092,30.918Zm1.7,3.406a.393.393,0,1,1,0-.786.423.423,0,0,1,.393.393C42.253,34.193,42.057,34.324,41.795,34.324Zm-.131-6.616c-.786-4.716-1.441-5.371-6.157-6.157,4.716-.786,5.371-1.441,6.157-6.157.786,4.716,1.441,5.371,6.157,6.157C43.1,22.337,42.45,22.992,41.664,27.708Z"
                      transform="translate(0 -2.829)" />
                    <path id="Path_1886" data-name="Path 1886"
                      d="M69.752,42.6a.852.852,0,1,0,.852.852A.867.867,0,0,0,69.752,42.6Zm0,1.245a.393.393,0,1,1,.393-.393A.378.378,0,0,1,69.752,43.845Z"
                      transform="translate(-18.524 -12.349)" />
                    <path id="Path_1887" data-name="Path 1887"
                      d="M42.7,68.1V66.334c0-.721-.655-1.376-1.9-1.834a16.826,16.826,0,0,1-18.931.065q-1.769.786-1.769,1.769V68.1c-1.245.59-1.9,1.245-1.9,1.965v3.144c0,2.424,6.616,3.668,13.166,3.668s13.166-1.245,13.166-3.668V70.068C44.533,69.282,43.943,68.627,42.7,68.1ZM19.576,73.671c-.2-.2-.328-.328-.328-.459V71.64a1.432,1.432,0,0,0,.328.2Zm21.813-5.83c.131-.066.2-.131.328-.2v1.31c0,.131-.131.262-.328.459Zm-2.293.852a3.243,3.243,0,0,0,.852-.262v1.7c-.262.066-.524.2-.852.262Zm-14.935.131a34.625,34.625,0,0,0,7.205.655,35.7,35.7,0,0,0,7.337-.721v1.7a33.467,33.467,0,0,1-7.337.721,32.583,32.583,0,0,1-7.205-.721Zm-1.31-.328a6.083,6.083,0,0,1,.852.262v1.7c-.328-.066-.59-.2-.852-.262Zm-.983-.393a4.515,4.515,0,0,0,.524.2V70a4.513,4.513,0,0,1-.524-.2Zm-1.31,6.092a3.889,3.889,0,0,1-.524-.262v-1.9c.2.066.328.131.524.2Zm.459-6.485.393.2v1.638c-.262-.2-.393-.328-.393-.524Zm.852,6.943c-.328-.066-.59-.2-.852-.262V72.426c.262.066.524.2.852.262Zm18.538.131a36.807,36.807,0,0,1-9.04.983,33.836,33.836,0,0,1-9.04-.983V72.819a41.306,41.306,0,0,0,9.04.917,41.306,41.306,0,0,0,9.04-.917Zm0-6.485c.2-.066.328-.131.524-.2V69.74a3.862,3.862,0,0,0-.524.262Zm1.31,6.092c-.262.066-.524.2-.852.262V72.688c.328-.065.59-.2.852-.262Zm.983-.459a3.889,3.889,0,0,1-.524.262V72.23c.2-.066.328-.131.524-.2Zm.721-.721c0,.131-.131.262-.262.459V71.837c.066-.066.2-.131.262-.2Z"
                      transform="translate(-1.035 -19.904)" />
                  </g>
                </svg>
                <h3 class="h6 fw-bold mt-4 mb-2">Crystal Ball</h3>
                <p class="font-small theme-text-accent-three">adipiscing automation platform end-to-end optimization of
                  your
                  process</p>
                <a href="#" class="fw-bold effect">More Details<i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            <!-- repetable -->
            <div class="col-12 col-md-6 col-lg-3 mb-3">
              <div class="py-5 px-5 mb-4 mb-lg-0 theme-border-radius cardeffect">
                <svg xmlns="http://www.w3.org/2000/svg" width="50.872" height="50.872" viewBox="0 0 50.872 50.872">
                  <g id="kundli" transform="translate(-16.652 -16.653)">
                    <path id="Path_1940" data-name="Path 1940"
                      d="M8,0H42a8,8,0,0,1,8,8V42a8,8,0,0,1-8,8H8a8,8,0,0,1-8-8V8A8,8,0,0,1,8,0Z"
                      transform="translate(17 17)" />
                    <path id="Path_1893" data-name="Path 1893" d="M0,0H34.971V34.971H0Z"
                      transform="translate(42.088 17.36) rotate(45)" fill="none" stroke="#fff" stroke-linecap="round"
                      stroke-width="1" stroke-dasharray="2 3 2 3" />
                    <path id="Path_1888" data-name="Path 1888" d="M19.5,19.5,65.875,65.875"
                      transform="translate(-0.599 -0.599)" fill="none" stroke="#fff" stroke-linecap="round"
                      stroke-width="1" stroke-dasharray="2 3 2 3" fill-rule="evenodd" />
                    <path id="Path_1889" data-name="Path 1889" d="M0,46.375,46.375,0"
                      transform="translate(65.276 65.276) rotate(180)" fill="none" stroke="#fff" stroke-linecap="round"
                      stroke-width="1" stroke-dasharray="2 3 2 3" fill-rule="evenodd" />
                  </g>
                </svg>
                <h3 class="h6 fw-bold mt-4 mb-2">Kundli Make</h3>
                <p class="font-small theme-text-accent-three">adipiscing automation platform end-to-end optimization of
                  your
                  process</p>
                <a href="#" class="fw-bold effect">More Details<i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            <!-- repetable -->
            <div class="col-12 col-md-6 col-lg-3 mb-3">
              <div class="py-5 px-5 mb-4 mb-lg-0 theme-border-radius cardeffect">
                <svg xmlns="http://www.w3.org/2000/svg" width="51.05" height="50" viewBox="0 0 51.05 50">
                  <g id="tarot-reading" transform="translate(-1.495 -2.124)">
                    <path id="Path_1890" data-name="Path 1890"
                      d="M49.6,6.965,22.426,2.179a3.57,3.57,0,0,0-4.134,2.9l-.075.425-13.4.937A3.573,3.573,0,0,0,1.5,10.249L4.2,48.8a3.577,3.577,0,0,0,3.561,3.323c.083,0,.168,0,.252-.009l24.3-1.7,9.329,1.643a3.187,3.187,0,0,0,.628.059,3.581,3.581,0,0,0,3.514-2.954l6.711-38.057A3.583,3.583,0,0,0,49.6,6.965Zm-29.655-1.6a1.886,1.886,0,0,1,2.2-1.54l5.669,1-7.871.55ZM7.9,50.446A1.9,1.9,0,0,1,5.87,48.684l-2.7-38.552A1.9,1.9,0,0,1,4.936,8.106L32.449,6.182c.045,0,.089,0,.133,0a1.9,1.9,0,0,1,1.893,1.766l2.7,38.552a1.9,1.9,0,0,1-1.761,2.027ZM50.843,10.814,44.132,48.871a1.9,1.9,0,0,1-2.2,1.54l-4.678-.823a3.224,3.224,0,0,0,1.26-1.48l.775.136a.738.738,0,0,0,.142.017.79.79,0,0,0,.477-.151.857.857,0,0,0,.351-.544,1.524,1.524,0,0,1,1.774-1.238.779.779,0,0,0,.619-.142.8.8,0,0,0,.343-.535l5.682-32.191A.847.847,0,0,0,48,12.488a1.485,1.485,0,0,1-.987-.628,1.513,1.513,0,0,1-.259-1.146.808.808,0,0,0-.134-.619.878.878,0,0,0-.544-.351L36.158,7.994l-.012-.168A3.515,3.515,0,0,0,35.6,6.2L49.3,8.614a1.9,1.9,0,0,1,1.54,2.2Zm-18.117-.352a.853.853,0,0,0-.607-.2,1.524,1.524,0,0,1-1.635-1.421.838.838,0,0,0-.892-.776L8.031,9.569a.837.837,0,0,0-.777.893A1.537,1.537,0,0,1,5.825,12.1a.837.837,0,0,0-.776.893l2.28,32.6a.837.837,0,0,0,.894.776,1.54,1.54,0,0,1,1.118.373,1.514,1.514,0,0,1,.524,1.047.838.838,0,0,0,.835.779l.058,0,21.562-1.508a.836.836,0,0,0,.776-.894,1.535,1.535,0,0,1,1.421-1.634.837.837,0,0,0,.777-.893l-2.281-32.6a.838.838,0,0,0-.286-.573ZM22.719,22.722,28,18.036l.067.05-3.908,5.883H24.15a1.558,1.558,0,0,1-1.431-1.238Zm-5.849.41a1.541,1.541,0,0,1-1.23,1.423l-4.652-5.33Zm.594,8.535-5.28,4.686-.059-.05,3.9-5.883h.008a1.558,1.558,0,0,1,1.431,1.238Zm11.732,3.5-5.883-3.908v-.008a1.54,1.54,0,0,1,1.247-1.423h.008L29.254,35.1Zm1.833-8.359-6.8,1.372a3.232,3.232,0,0,0-2.577,2.979l-.418,6.92a.381.381,0,0,1-.753.059l-1.372-6.8a3.238,3.238,0,0,0-2.971-2.586l-6.929-.41a.355.355,0,0,1-.36-.36.342.342,0,0,1,.31-.393l6.8-1.381a3.215,3.215,0,0,0,2.577-2.971l.418-6.92a.349.349,0,0,1,.351-.36h.042a.341.341,0,0,1,.36.3l1.372,6.8a3.248,3.248,0,0,0,2.971,2.586l6.929.41a.355.355,0,0,1,.36.36.342.342,0,0,1-.31.393ZM19.738,22.45a.314.314,0,0,1-.313-.292l-.058-.835a.314.314,0,1,1,.626-.043l.058.835a.313.313,0,0,1-.291.335Zm.544,7.781a.314.314,0,0,1-.313-.292l-.109-1.556a.314.314,0,1,1,.626-.044L20.6,29.9a.314.314,0,0,1-.291.335Zm-.272-3.891a.314.314,0,0,1-.313-.292l-.109-1.556a.313.313,0,0,1,.291-.335.317.317,0,0,1,.335.291l.109,1.557a.313.313,0,0,1-.291.335Zm.749,5.89.058.835a.313.313,0,0,1-.291.335H20.5a.314.314,0,0,1-.313-.292l-.058-.835a.314.314,0,1,1,.626-.043Zm5.539-5.47a.313.313,0,0,1-.291.335l-.835.058H25.15a.314.314,0,0,1-.022-.627l.835-.058a.321.321,0,0,1,.335.291Zm-3.169.221a.314.314,0,0,1-.291.335l-1.556.109H21.26a.314.314,0,0,1-.022-.627l1.556-.109a.319.319,0,0,1,.335.291Zm-3.891.273a.313.313,0,0,1-.291.335l-1.557.109h-.022a.314.314,0,0,1-.022-.627l1.557-.109a.321.321,0,0,1,.335.291Zm-3.891.272a.313.313,0,0,1-.291.335l-.834.058H14.2a.314.314,0,0,1-.022-.627l.834-.058a.322.322,0,0,1,.335.291Z" />
                  </g>
                </svg>
                <h3 class="h6 fw-bold mt-4 mb-2">Tarot Reading</h3>
                <p class="font-small theme-text-accent-three">adipiscing automation platform end-to-end optimization of
                  your
                  process</p>
                <a href="#" class="fw-bold effect">More Details<i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            <!-- repetable -->
            <div class="col-12 col-md-6 col-lg-3 mb-3">
              <div class="py-5 px-5 mb-4 mb-lg-0 theme-border-radius cardeffect">
                <svg xmlns="http://www.w3.org/2000/svg" width="33.896" height="50" viewBox="0 0 33.896 50">
                  <g id="palm-reading" transform="translate(-19.044 -5.019)">
                    <path id="Path_1891" data-name="Path 1891"
                      d="M41.359,28.308l-.21.21V16.835a2.6,2.6,0,0,0-2.585-2.6h-.325a2.585,2.585,0,0,0-1.108.248v-.573a2.6,2.6,0,0,0-2.585-2.6h-.325a2.587,2.587,0,0,0-2.591,2.591v.579a2.574,2.574,0,0,0-1.095-.242h-.325a2.6,2.6,0,0,0-2.6,2.6l-.006,6.137a2.565,2.565,0,0,0-1.1-.248h-.325a2.6,2.6,0,0,0-2.6,2.6V36.749a10.911,10.911,0,0,0,21.818.274c0-.019.006-.044.006-.07V26.862h-.751A4.958,4.958,0,0,0,41.359,28.308ZM34.5,46.153a9.412,9.412,0,0,1-9.41-9.41V25.309a1.1,1.1,0,0,1,1.095-1.095h.325a1.1,1.1,0,0,1,1.095,1.095h.006l-.006,4.781a.753.753,0,0,0,.751.751h0a.753.753,0,0,0,.751-.751l.013-13.274a1.1,1.1,0,0,1,1.095-1.095h.325a1.061,1.061,0,0,1,.764.325,1.123,1.123,0,0,1,.318.783V29.085a.751.751,0,1,0,1.5,0V24.342l.013-10.448a1.108,1.108,0,0,1,.318-.776,1.083,1.083,0,0,1,.776-.318h.325a1.1,1.1,0,0,1,1.082,1.108V28.219a.751.751,0,0,0,1.5,0V16.835a1.125,1.125,0,0,1,1.108-1.108h.325a1.1,1.1,0,0,1,1.082,1.108V33.706a.751.751,0,1,0,1.5,0v-1.4A3.934,3.934,0,0,1,42.4,29.4a3.983,3.983,0,0,1,1.515-.917v8.263A9.432,9.432,0,0,1,34.5,46.153Zm-1.273-4.31a.5.5,0,0,0-.5-.484h0a1.347,1.347,0,0,1-1.35-1.35.5.5,0,0,0-1.006,0,1.347,1.347,0,0,1-1.35,1.35h0a.494.494,0,0,0-.5.484v.013h0a.5.5,0,0,0,.446.5h.051a1.347,1.347,0,0,1,1.35,1.35.5.5,0,0,0,1.006,0,1.347,1.347,0,0,1,1.35-1.35h0a.378.378,0,0,0,.083-.006h.019c.006,0,.013-.006.019-.006s.019-.006.032-.006.006-.006.013-.006.019-.006.032-.013.013-.006.019-.006.019-.006.026-.013.006-.006.013-.006.019-.013.032-.019l.006-.006a.509.509,0,0,0,.216-.414h0C33.229,41.856,33.229,41.849,33.229,41.843Zm-2.158.2c-.07.07-.127.14-.191.21a1.524,1.524,0,0,0-.191-.21c-.07-.07-.14-.127-.21-.191a1.524,1.524,0,0,0,.21-.191c.07-.07.127-.14.191-.21a1.524,1.524,0,0,0,.191.21c.07.07.14.127.21.191A1.561,1.561,0,0,0,31.071,42.046ZM52.94,34.541v-.07h0v-.051a.059.059,0,0,0-.006-.032v-.019c0-.013-.006-.019-.006-.032a.024.024,0,0,0-.006-.019c0-.013-.006-.019-.013-.032s-.006-.013-.006-.019a.132.132,0,0,0-.019-.032.006.006,0,0,0-.006-.006c-.006-.013-.013-.019-.019-.032s-.006-.006-.006-.013-.013-.013-.013-.019-.006-.013-.013-.019-.013-.013-.013-.019L52.8,34.11l-.019-.019c-.006-.006-.013-.013-.019-.013s-.013-.006-.019-.013-.013-.013-.019-.013-.006-.006-.013-.006-.019-.013-.032-.019a.006.006,0,0,1-.006-.006A.132.132,0,0,1,52.637,34c-.006,0-.013-.006-.019-.006s-.019-.006-.032-.013a.024.024,0,0,1-.019-.006c-.013,0-.019-.006-.032-.006h-.019c-.013,0-.019-.006-.032-.006h-.051a2.522,2.522,0,0,1-2.521-2.521.5.5,0,0,0-1.006,0,2.522,2.522,0,0,1-2.521,2.521h0a.505.505,0,0,0-.49.389v0a.059.059,0,0,1-.006.032v.07h0v.051a.059.059,0,0,0,.006.032v.019c0,.013.006.019.006.032a.024.024,0,0,0,.006.019c0,.013.006.019.013.032s.006.013.006.019a.132.132,0,0,0,.019.032.006.006,0,0,0,.006.006c.006.013.013.019.019.032s.006.006.006.013.013.013.013.019.006.013.013.019.013.013.013.019l.019.019.019.019c.006.006.013.013.019.013s.013.006.019.013.013.013.019.013.006.006.013.006.019.013.032.019a.006.006,0,0,1,.006.006.131.131,0,0,1,.032.019c.006,0,.013.006.019.006s.019.006.032.013a.024.024,0,0,1,.019.006c.013,0,.019.006.032.006h.019c.013,0,.019.006.032.006h.051a2.522,2.522,0,0,1,2.521,2.521h0a.494.494,0,0,0,.484.5h.013a.494.494,0,0,0,.5-.484v-.013h0a2.522,2.522,0,0,1,2.521-2.521h0a.505.505,0,0,0,.49-.389h0C52.933,34.559,52.94,34.553,52.94,34.541ZM49.954,35a3.434,3.434,0,0,0-.529.681A3.821,3.821,0,0,0,48.9,35a3.433,3.433,0,0,0-.681-.529,3.82,3.82,0,0,0,.681-.529,3.434,3.434,0,0,0,.529-.681,3.821,3.821,0,0,0,.529.681,3.434,3.434,0,0,0,.681.529A3.624,3.624,0,0,0,49.954,35ZM44.9,50.947a.487.487,0,0,0-.019-.134h0a.122.122,0,0,1-.013-.044c0-.006-.006-.013-.006-.019s-.006-.019-.013-.026a.5.5,0,0,0-.426-.261h-.013c-.286,0-.611-.293-.866-.776a5.237,5.237,0,0,1-.484-2.3h0a.557.557,0,0,0-.032-.178c-.006-.019-.019-.044-.026-.064h0a.5.5,0,0,0-.439-.261h0a.533.533,0,0,0-.28.083h0c-.013.006-.026.019-.038.026h0a.084.084,0,0,1-.026.019l-.013.013-.026.026-.006.006c-.006.013-.019.019-.026.032a.006.006,0,0,1-.006.006.473.473,0,0,0-.083.267v.013h0a5.237,5.237,0,0,1-.484,2.3c-.255.484-.573.776-.866.776H40.7a.486.486,0,0,0-.337.146.006.006,0,0,1-.006.006c-.006.013-.019.019-.026.032s-.013.013-.013.019-.006.013-.013.019a.473.473,0,0,0-.083.267v.013h0v.013a.487.487,0,0,0,.019.134h0a.122.122,0,0,1,.013.044c0,.006.006.013.006.019s.006.019.013.026a.5.5,0,0,0,.426.261h.013c.286,0,.611.293.866.776a5.237,5.237,0,0,1,.484,2.3h0a.5.5,0,0,0,.051.223c0,.006.006.006.006.013h0a.5.5,0,0,0,.439.261h0a.533.533,0,0,0,.28-.083h0c.013-.006.026-.019.038-.026h0a.084.084,0,0,1,.026-.019l.013-.013.026-.026.006-.006c.006-.013.019-.019.026-.032a.006.006,0,0,1,.006-.006.473.473,0,0,0,.083-.267v-.013h0a5.237,5.237,0,0,1,.484-2.3c.255-.484.573-.776.866-.776h.013a.486.486,0,0,0,.337-.146.006.006,0,0,1,.006-.006c.006-.013.019-.019.026-.032s.013-.013.013-.019.006-.013.013-.019a.473.473,0,0,0,.083-.267v-.013h0S44.9,50.953,44.9,50.947Zm-2.254.828c-.032.064-.064.134-.1.2-.032-.07-.064-.14-.1-.2a3.166,3.166,0,0,0-.592-.815,2.962,2.962,0,0,0,.592-.821c.032-.064.064-.134.1-.2.032.07.064.14.1.2a3.165,3.165,0,0,0,.592.815A3.339,3.339,0,0,0,42.645,51.774Zm-8.226-18.24a6.467,6.467,0,0,0-5.431,2.349l-.337.5.35.414a6.976,6.976,0,0,0,5.424,2.33,7.169,7.169,0,0,0,5.411-2.317l.369-.42-.343-.51A6.5,6.5,0,0,0,34.419,33.535ZM32.98,37.45a5.514,5.514,0,0,1-2.343-1.114A4.8,4.8,0,0,1,33,35.183a1.811,1.811,0,0,0-.407,1.146A1.835,1.835,0,0,0,32.98,37.45Zm2.884-.006a1.818,1.818,0,0,0-.032-2.254,4.848,4.848,0,0,1,2.356,1.146A5.748,5.748,0,0,1,35.864,37.444Zm-3.451-29.3h.013a1.625,1.625,0,0,1,1.6,1.6v.019a.5.5,0,0,0,.5.5h0a.5.5,0,0,0,.5-.5V9.73a1.627,1.627,0,0,1,1.6-1.585h.013a.5.5,0,1,0,0-1.006h-.013a1.621,1.621,0,0,1-1.6-1.6V5.522a.5.5,0,1,0-1.006,0v.019a1.621,1.621,0,0,1-1.6,1.6h-.013a.5.5,0,0,0-.3.1h0a.5.5,0,0,0,.3.9Zm2.12-1.089a2.841,2.841,0,0,0,.586.586,2.841,2.841,0,0,0-.586.586,2.841,2.841,0,0,0-.586-.586A2.548,2.548,0,0,0,34.534,7.056ZM19.547,21.648h0c.236.006.643.414,1.038,1.312a6.966,6.966,0,0,1,.586,2.286v.019a.5.5,0,0,0,.5.5h0a.5.5,0,0,0,.5-.5v-.032a6.908,6.908,0,0,1,.579-2.273c.389-.9.8-1.305,1.032-1.312h.006a.5.5,0,0,0,.471-.662.505.505,0,0,0-.471-.344h-.006c-.229-.006-.636-.414-1.032-1.312a6.966,6.966,0,0,1-.586-2.286v-.019a.5.5,0,0,0-1.006,0v.019a6.76,6.76,0,0,1-.586,2.286c-.382.9-.789,1.312-1.025,1.318h-.019a.4.4,0,0,0-.121.019.493.493,0,0,0-.369.49A.511.511,0,0,0,19.547,21.648Zm1.954-1.91c.057-.134.114-.274.166-.414.051.14.108.28.166.414a4.534,4.534,0,0,0,.892,1.413,4.472,4.472,0,0,0-.892,1.413c-.057.134-.114.274-.166.414-.051-.14-.108-.28-.166-.414a4.534,4.534,0,0,0-.892-1.413A4.534,4.534,0,0,0,21.5,19.738Zm20.844,3.3h1.108l-.783.783a.5.5,0,0,0,.356.853.524.524,0,0,0,.356-.146l.783-.783V24.85a.5.5,0,0,0,1.006,0V23.743l.783.783a.5.5,0,0,0,.356.146.512.512,0,0,0,.356-.146.5.5,0,0,0,0-.706l-.783-.783h1.108a.5.5,0,0,0,0-1.006H45.885l.783-.783a.5.5,0,0,0-.706-.706l-.783.783V20.216a.5.5,0,1,0-1.006,0v1.108l-.783-.783a.5.5,0,1,0-.706.706l.783.783H42.345a.5.5,0,1,0,0,1.007Zm-18.7,24.345h1.108a.5.5,0,1,0,0-1.006H23.641l1.483-1.483a.5.5,0,0,0-.706-.706l-1.483,1.483V41.843a.5.5,0,1,0-1.006,0v3.826l-1.483-1.477a.5.5,0,0,0-.706.706l1.483,1.483H20.114a.5.5,0,1,0,0,1.006h1.108l-1.483,1.483a.5.5,0,0,0,.356.853.512.512,0,0,0,.356-.146l1.483-1.483v3.826a.5.5,0,0,0,1.006,0V48.095l1.483,1.483a.5.5,0,0,0,.356.146.513.513,0,0,0,.356-.146.5.5,0,0,0,0-.706Z"
                      transform="translate(0 0)" />
                  </g>
                </svg>
                <h3 class="h6 fw-bold mt-4 mb-2">Palm Reading</h3>
                <p class="font-small theme-text-accent-three">adipiscing automation platform end-to-end optimization of
                  your
                  process</p>
                <a href="#" class="fw-bold effect">More Details<i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            <!-- repetable -->
            <div class="col-12 col-md-6 col-lg-3 mb-3">
              <div class="py-5 px-5 mb-4 mb-lg-0 theme-border-radius cardeffect">
                <svg xmlns="http://www.w3.org/2000/svg" width="36.918" height="50.297" viewBox="0 0 36.918 50.297">
                  <g id="lal-kitab" transform="translate(-10 -1.998)">
                    <path id="Path_1894" data-name="Path 1894"
                      d="M22.574,2.838V7.029H15.03V2.838A.837.837,0,0,1,16.413,2.2L18.8,4.246,21.191,2.2a.837.837,0,0,1,1.383.637ZM15.868,16.25H14.61A4.61,4.61,0,0,1,10,11.975s0,.05,0,.084V48.523A3.781,3.781,0,0,0,13.772,52.3h2.1Zm16.975,14.5-1.467-2.976-1.467,2.976a.838.838,0,0,1-.629.461l-3.286.478L28.375,34a.838.838,0,0,1,.235.738l-.562,3.3,2.909-1.576a.838.838,0,0,1,.788,0L34.7,38.045l-.562-3.269a.838.838,0,0,1,.235-.738l2.381-2.314-3.286-.511a.838.838,0,0,1-.629-.461ZM46.883,7.624a.838.838,0,0,0-.838-.6H22.574v4.191a.838.838,0,0,1-.838.838H15.868a.838.838,0,0,1-.838-.838V7.029H14.61a4.594,4.594,0,0,0-2.624.838,20.118,20.118,0,0,0-.31,3.772,2.934,2.934,0,0,0,2.934,2.934H46.364a3.922,3.922,0,0,1-1.677-3.11,4.451,4.451,0,0,1,1.853-2.9A.838.838,0,0,0,46.883,7.624Zm-5.03,15.558v20.5l-3.579,3.579h-13.8L20.9,43.686v-20.5L24.477,19.6h13.8Zm-2.515,7.662a.838.838,0,0,0-.679-.57l-4.527-.662-2-4.1a.838.838,0,0,0-1.509,0l-2.02,4.1-4.527.662a.838.838,0,0,0-.461,1.425l3.269,3.194-.771,4.51a.838.838,0,0,0,1.215.9l4.049-2.129L35.424,40.3a.78.78,0,0,0,.386.1.843.843,0,0,0,.83-1l-.771-4.51L39.138,31.7A.838.838,0,0,0,39.339,30.844ZM46.883,16.25V51.457a.838.838,0,0,1-.838.838h-28.5V16.25ZM43.53,22.839a.838.838,0,0,0-.243-.6L39.213,18.17a.838.838,0,0,0-.6-.243H24.133a.838.838,0,0,0-.6.243l-4.074,4.074a.838.838,0,0,0-.243.6V44.03a.838.838,0,0,0,.243.6L23.538,48.7a.838.838,0,0,0,.6.243H38.618a.838.838,0,0,0,.6-.243l4.074-4.074a.838.838,0,0,0,.243-.6Z"
                      transform="translate(0 0)" />
                  </g>
                </svg>
                <h3 class="h6 fw-bold mt-4 mb-2">Lal Kitab</h3>
                <p class="font-small theme-text-accent-three">adipiscing automation platform end-to-end optimization of
                  your
                  process</p>
                <a href="#" class="fw-bold effect">More Details<i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            <!-- repetable -->
            <div class="col-12 col-md-6 col-lg-3 mb-3">
              <div class="py-5 px-5 mb-4 mb-lg-0 theme-border-radius cardeffect">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                  <g id="personal-advice" transform="translate(-26.143 -26.141)">
                    <path id="Path_1895" data-name="Path 1895"
                      d="M154.3,141.89A12.411,12.411,0,1,0,166.712,154.3,12.41,12.41,0,0,0,154.3,141.89Zm9.643,10.716a.788.788,0,0,1-.222.033.763.763,0,0,1-.729-.541c-1.957-6.455-6.794-6.8-6.843-6.8a.761.761,0,1,1,.086-1.521,7.975,7.975,0,0,1,3.309,1.137,11.262,11.262,0,0,1,4.906,6.747A.762.762,0,0,1,163.944,152.606Z"
                      transform="translate(-103.158 -103.16)" />
                    <path id="Path_1896" data-name="Path 1896"
                      d="M249.761,35.526a.761.761,0,0,1-.761-.761V26.9a.761.761,0,1,1,1.523,0v7.863A.761.761,0,0,1,249.761,35.526Z"
                      transform="translate(-198.618 0)" />
                    <path id="Path_1897" data-name="Path 1897"
                      d="M249.761,408.951a.761.761,0,0,1-.761-.761v-7.863a.761.761,0,0,1,1.523,0v7.863A.761.761,0,0,1,249.761,408.951Z"
                      transform="translate(-198.618 -332.809)" />
                    <path id="Path_1898" data-name="Path 1898"
                      d="M361.786,362.55a.759.759,0,0,1-.538-.223l-5.56-5.56a.761.761,0,1,1,1.077-1.077l5.56,5.56a.761.761,0,0,1-.538,1.3Z"
                      transform="translate(-293.504 -293.508)" />
                    <path id="Path_1899" data-name="Path 1899"
                      d="M97.737,98.5a.759.759,0,0,1-.538-.223l-5.56-5.56a.761.761,0,1,1,1.077-1.077l5.56,5.56a.761.761,0,0,1-.538,1.3Z"
                      transform="translate(-58.173 -58.174)" />
                    <path id="Path_1900" data-name="Path 1900"
                      d="M356.227,98.5a.761.761,0,0,1-.538-1.3l5.56-5.56a.761.761,0,0,1,1.077,1.077l-5.56,5.56A.759.759,0,0,1,356.227,98.5Z"
                      transform="translate(-293.504 -58.175)" />
                    <path id="Path_1901" data-name="Path 1901"
                      d="M92.177,362.55a.761.761,0,0,1-.538-1.3l5.56-5.56a.761.761,0,0,1,1.077,1.077l-5.56,5.56A.759.759,0,0,1,92.177,362.55Z"
                      transform="translate(-58.173 -293.508)" />
                    <path id="Path_1902" data-name="Path 1902"
                      d="M408.189,250.523h-7.863a.761.761,0,0,1,0-1.523h7.863a.761.761,0,0,1,0,1.523Z"
                      transform="translate(-332.807 -198.62)" />
                    <path id="Path_1903" data-name="Path 1903"
                      d="M34.767,250.523H26.9a.761.761,0,1,1,0-1.523h7.863a.761.761,0,1,1,0,1.523Z"
                      transform="translate(0 -198.62)" />
                    <path id="Path_1904" data-name="Path 1904"
                      d="M179.772,81.559a.762.762,0,0,1-.7-.47l-1.516-3.658a.761.761,0,1,1,1.407-.583l1.516,3.658a.762.762,0,0,1-.7,1.053Z"
                      transform="translate(-134.89 -44.772)" />
                    <path id="Path_1905" data-name="Path 1905"
                      d="M308.844,393.161a.762.762,0,0,1-.7-.47l-1.515-3.659a.761.761,0,0,1,1.407-.583l1.515,3.659a.762.762,0,0,1-.7,1.053Z"
                      transform="translate(-249.924 -322.484)" />
                    <path id="Path_1906" data-name="Path 1906"
                      d="M80.8,180.533a.758.758,0,0,1-.291-.058l-3.658-1.515a.761.761,0,1,1,.583-1.407l3.658,1.515a.762.762,0,0,1-.292,1.465Z"
                      transform="translate(-44.77 -134.892)" />
                    <path id="Path_1907" data-name="Path 1907"
                      d="M392.4,309.6a.758.758,0,0,1-.291-.058l-3.658-1.515a.761.761,0,0,1,.583-1.407l3.658,1.515a.761.761,0,0,1-.292,1.465Z"
                      transform="translate(-322.484 -249.924)" />
                    <path id="Path_1908" data-name="Path 1908"
                      d="M77.139,309.6a.761.761,0,0,1-.292-1.465l3.658-1.515a.761.761,0,1,1,.583,1.407l-3.658,1.515A.759.759,0,0,1,77.139,309.6Z"
                      transform="translate(-44.771 -249.925)" />
                    <path id="Path_1909" data-name="Path 1909"
                      d="M388.744,180.535a.761.761,0,0,1-.292-1.465l3.658-1.516a.761.761,0,1,1,.583,1.407l-3.658,1.516A.759.759,0,0,1,388.744,180.535Z"
                      transform="translate(-322.484 -134.894)" />
                    <path id="Path_1910" data-name="Path 1910"
                      d="M178.256,393.161a.762.762,0,0,1-.7-1.053l1.516-3.659a.761.761,0,0,1,1.407.583l-1.516,3.659A.761.761,0,0,1,178.256,393.161Z"
                      transform="translate(-134.891 -322.483)" />
                    <path id="Path_1911" data-name="Path 1911"
                      d="M307.327,81.558a.762.762,0,0,1-.7-1.053l1.515-3.658a.761.761,0,1,1,1.407.583l-1.515,3.658A.761.761,0,0,1,307.327,81.558Z"
                      transform="translate(-249.923 -44.772)" />
                  </g>
                </svg>
                <h3 class="h6 fw-bold mt-4 mb-2">Personal Advice</h3>
                <p class="font-small theme-text-accent-three">adipiscing automation platform end-to-end optimization of
                  your
                  process</p>
                <a href="#" class="fw-bold effect">More Details<i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            <!-- repetable -->
            <div class="col-12 col-md-6 col-lg-3 mb-3">
              <div class="py-5 px-5 mb-4 mb-lg-0 theme-border-radius cardeffect">
                <svg id="future-prediction" xmlns="http://www.w3.org/2000/svg" width="49.369" height="50"
                  viewBox="0 0 49.369 50">
                  <path id="Path_1912" data-name="Path 1912"
                    d="M39.6,27.113c-.083,0-.159.02-.241.025a1.729,1.729,0,0,1,.241.856,1.76,1.76,0,0,1-3.367.719,4.361,4.361,0,0,0-1.037,2.8,4.408,4.408,0,0,0,4.4,4.4c.083,0,.159-.02.241-.025a1.729,1.729,0,0,1-.241-.856,1.76,1.76,0,0,1,3.367-.719A4.361,4.361,0,0,0,44,31.516,4.408,4.408,0,0,0,39.6,27.113Zm0,6.165a1.761,1.761,0,1,1,1.761-1.761A1.761,1.761,0,0,1,39.6,33.278Z"
                    transform="translate(-4.423 -3.407)" />
                  <path id="Path_1913" data-name="Path 1913"
                    d="M47.048,31.039a7.926,7.926,0,1,0-7.926,7.926A7.936,7.936,0,0,0,47.048,31.039ZM39.122,37.2a6.165,6.165,0,1,1,6.165-6.165A6.171,6.171,0,0,1,39.122,37.2Z"
                    transform="translate(-4.016 -2.934)" />
                  <path id="Path_1914" data-name="Path 1914"
                    d="M35.053,9.787h.841a11.414,11.414,0,0,1,2.682.329V4.5h1.053L36.815,0,34,4.5h1.053Z"
                    transform="translate(-4.257)" />
                  <path id="Path_1915" data-name="Path 1915"
                    d="M30.459,25.519a2.628,2.628,0,0,0-5.236,0A9.642,9.642,0,0,1,26.584,28.4H29.1A9.634,9.634,0,0,1,30.459,25.519Zm-1.738,1.117H26.961V24.874h1.761Z"
                    transform="translate(-3.157 -2.893)" />
                  <path id="Path_1916" data-name="Path 1916"
                    d="M17.053,10.116a11.46,11.46,0,0,1,2.682-.329h.841V4.5h1.053L18.815,0,16,4.5h1.053Z"
                    transform="translate(-2.003)" />
                  <path id="Path_1917" data-name="Path 1917" d="M31.959,51.113H30.61l1.012,1.012Z"
                    transform="translate(-3.817 -6.397)" />
                  <path id="Path_1918" data-name="Path 1918"
                    d="M36.516,41.633a9.7,9.7,0,0,1-8.743-9.64c0-.3.018-.59.045-.881h-1.85c.026.291.045.583.045.881a9.7,9.7,0,0,1-8.743,9.64,6.169,6.169,0,0,0,6.1,5.331h7.045A6.168,6.168,0,0,0,36.516,41.633ZM27.773,45.2H24.25V43.442h3.523a1.763,1.763,0,0,0,1.761-1.761H31.3A3.527,3.527,0,0,1,27.773,45.2Z"
                    transform="translate(-2.207 -4.01)" />
                  <path id="Path_1919" data-name="Path 1919" d="M25.6,51.113H24.25l.337,1.012Z"
                    transform="translate(-3.024 -6.397)" />
                  <path id="Path_1920" data-name="Path 1920" d="M27.677,52.924H28.5l.395-.592-.8-.8-.8.8Z"
                    transform="translate(-3.403 -6.446)" />
                  <path id="Path_1921" data-name="Path 1921" d="M27.695,55.113l-.881,1.761h2.434l-.881-1.761Z"
                    transform="translate(-3.347 -6.874)" />
                  <path id="Path_1922" data-name="Path 1922"
                    d="M4.576,29c0-.3.018-.59.045-.881H4.576V10.5H5.629L2.815,6,0,10.5H1.053V34.28h1.96a3.591,3.591,0,0,1,.852-1.416L4.98,31.75A9.642,9.642,0,0,1,4.576,29Z"
                    transform="translate(0 -0.716)" />
                  <path id="Path_1923" data-name="Path 1923"
                    d="M21.544,54.669,20.12,50.4H10.48V45.113H5.2v6.165a4.408,4.408,0,0,0,4.4,4.4H22.265L23.554,53.1l-.178-.266Z"
                    transform="translate(-0.62 -5.681)" />
                  <path id="Path_1924" data-name="Path 1924"
                    d="M5.2,39.132a1.846,1.846,0,0,0,.193.818l1.232,2.463H10.48V41.344a9.745,9.745,0,0,1-4.158-4.1l-.591.591A1.84,1.84,0,0,0,5.2,39.132Z"
                    transform="translate(-0.62 -4.661)" />
                  <path id="Path_1925" data-name="Path 1925"
                    d="M49.354,37.248a9.745,9.745,0,0,1-4.158,4.1v1.069h3.859l1.232-2.464a1.828,1.828,0,0,0-.343-2.11Z"
                    transform="translate(-5.687 -4.661)" />
                  <path id="Path_1926" data-name="Path 1926"
                    d="M19.562,21.173a4.688,4.688,0,0,1,2.873-1.015H31.9a2.634,2.634,0,0,0,2.619-2.642.873.873,0,1,0-1.746,0V18.4H31.023v-.881a2.619,2.619,0,1,1,5.238,0,4.384,4.384,0,0,1-.934,2.69c.307-.03.619-.048.934-.048a9.5,9.5,0,0,1,6.086,2.2,9.684,9.684,0,0,0-9.618-9.247H18.841A9.685,9.685,0,0,0,9.223,22.36a9.477,9.477,0,0,1,10.339-1.187Z"
                    transform="translate(-1.101 -1.648)" />
                  <path id="Path_1927" data-name="Path 1927"
                    d="M43.424,50.4h-9.64l-1.424,4.272-1.833-1.833-.178.266,1.289,2.579H44.3a4.408,4.408,0,0,0,4.4-4.4V45.113H43.424Z"
                    transform="translate(-3.915 -5.681)" />
                  <path id="Path_1928" data-name="Path 1928"
                    d="M15.122,38.965A7.926,7.926,0,1,0,7.2,31.039,7.936,7.936,0,0,0,15.122,38.965Zm0-14.09a6.165,6.165,0,1,1-6.165,6.165A6.171,6.171,0,0,1,15.122,24.874Z"
                    transform="translate(-0.859 -2.934)" />
                  <path id="Path_1929" data-name="Path 1929"
                    d="M52.815,6,50,10.5h1.053V28.116h-.045c.026.291.045.583.045.881a9.642,9.642,0,0,1-.4,2.754l1.114,1.114a3.591,3.591,0,0,1,.852,1.416h1.96V10.5h1.053Z"
                    transform="translate(-6.26 -0.716)" />
                  <path id="Path_1930" data-name="Path 1930"
                    d="M15.6,35.92c.083,0,.159-.02.241-.025a1.729,1.729,0,0,1-.241-.856,1.76,1.76,0,0,1,3.367-.719A4.361,4.361,0,0,0,20,31.516a4.408,4.408,0,0,0-4.4-4.4c-.083,0-.159.02-.241.025a1.729,1.729,0,0,1,.241.856,1.76,1.76,0,0,1-3.367.719,4.361,4.361,0,0,0-1.037,2.8A4.408,4.408,0,0,0,15.6,35.92Zm0-6.165a1.761,1.761,0,1,1-1.761,1.761A1.761,1.761,0,0,1,15.6,29.755Z"
                    transform="translate(-1.407 -3.407)" />
                </svg>
                <h3 class="h6 fw-bold mt-4 mb-2">Future Prediction</h3>
                <p class="font-small theme-text-accent-three">adipiscing automation platform end-to-end optimization of
                  your
                  process</p>
                <a href="#" class="fw-bold effect">More Details<i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            <!-- repetable -->
            <div class="col-12 col-md-6 col-lg-3 mb-3">
              <div class="py-5 px-5 mb-4 mb-lg-0 theme-border-radius cardeffect">
                <svg xmlns="http://www.w3.org/2000/svg" width="45.549" height="50" viewBox="0 0 45.549 50">
                  <g id="general-consultation" transform="translate(0 4.511)">
                    <path id="Path_1931" data-name="Path 1931"
                      d="M61.059,157.029V141.116l-5.2,1.81v14.1a2.6,2.6,0,0,0,4.948,1.106l.2-.587A2.6,2.6,0,0,0,61.059,157.029Z"
                      transform="translate(-43.882 -114.14)" />
                    <path id="Path_1939" data-name="Path 1939"
                      d="M4.729,0A4.729,4.729,0,1,1,0,4.729,4.729,4.729,0,0,1,4.729,0Z"
                      transform="translate(5.548 -2.367) rotate(-13.109)" />
                    <path id="Path_1932" data-name="Path 1932"
                      d="M3.623,70.985a1.683,1.683,0,0,0,1.553-2.325,20.232,20.232,0,0,1-1.813-7.569,7.56,7.56,0,0,1,.644-3.259,5.12,5.12,0,0,1,1.534-1.921v30.5a2.6,2.6,0,0,0,5.2,0V72.654l-.064.022-.138-.4L9.508,69.324l-.7-2.006-.138-.4.4-.138,1.671-.582.862-.3a2.109,2.109,0,1,1,3.884-1.352l1.427-.5.029-.01v-.322a2.6,2.6,0,0,0-.029-.366V57.932a16.533,16.533,0,0,0,7.357,3.556l4.387-1.527a1.681,1.681,0,0,0-1.523-1.442,13.767,13.767,0,0,1-8.113-3.208,10.769,10.769,0,0,1-1.682-1.834c-.171-.239-.29-.431-.362-.554-.036-.061-.061-.106-.074-.131l-.009-.017,0-.005h0a1.677,1.677,0,0,0-.327-.45,1.62,1.62,0,0,0-1.277-.622H7.166a1.623,1.623,0,0,0-.391.049,1.689,1.689,0,0,0-.305.035,8.055,8.055,0,0,0-3.31,1.73,8.52,8.52,0,0,0-2.2,2.892A10.921,10.921,0,0,0,0,61.091a23.49,23.49,0,0,0,2.069,8.855A1.682,1.682,0,0,0,3.623,70.985Z"
                      transform="translate(0 -43.519)" />
                    <path id="Path_1933" data-name="Path 1933"
                      d="M57,73.587a.833.833,0,0,0-1.062-.513l-1.68.585a.834.834,0,0,0-.513,1.062l.069.2-2.286.8-.029.01-1.423.5a2.108,2.108,0,0,1-3.614,1.258l-.132.046-1,.349-1.533.534.747,2.145.786,2.257.2.56.808-.281,5.2-1.81,4.013-1.4.069.2a.834.834,0,0,0,1.062.514l.909-.317V81a1.921,1.921,0,0,0-1.279,1.671,1.621,1.621,0,0,0,.461,1.1L51.369,99.8h2.817l4.733-14.049L63.651,99.8h2.817l-5.4-16.022a1.619,1.619,0,0,0,.462-1.1A1.921,1.921,0,0,0,60.253,81V78.24L70.142,74.8l.069.2a.834.834,0,0,0,1.062.513l7.509-2.614A.834.834,0,0,0,79.3,71.83L77.43,66.475a.833.833,0,0,0-1.062-.513l-7.509,2.615a.834.834,0,0,0-.513,1.062l.068.2-5.166,1.8-3.565,1.241-2.611.909Zm-5.161,5.322a1.13,1.13,0,0,1-.311-.049l-.029-.009a1.13,1.13,0,0,1,0-2.16l.029-.009a1.135,1.135,0,1,1,.311,2.226Z"
                      transform="translate(-33.793 -54.746)" />
                    <path id="Path_1934" data-name="Path 1934"
                      d="M57.114,108.578a1.4,1.4,0,0,0-.011.163,1.386,1.386,0,0,0,2.764.136c0-.045.007-.09.007-.136a1.38,1.38,0,0,0-.389-.962,1.405,1.405,0,0,0-.168-.148,1.386,1.386,0,0,0-2.2.946Z"
                      transform="translate(-44.871 -87.907)" />
                    <path id="Path_1935" data-name="Path 1935"
                      d="M79.261,118.77a.743.743,0,0,0-.311.07l-.029.016a.741.741,0,0,0,0,1.323l.029.016a.746.746,0,1,0,.311-1.424Z"
                      transform="translate(-61.705 -96.89)" />
                    <path id="Path_1936" data-name="Path 1936"
                      d="M143.151,41.136l-.232,1.351,1.214-.638,1.213.638-.232-1.351.982-.957-1.356-.2-.607-1.229-.607,1.229-1.356.2Z"
                      transform="translate(-111.7 -33.994)" />
                    <path id="Path_1937" data-name="Path 1937"
                      d="M162.595,22.57l1.214-.638,1.213.638-.232-1.351.981-.957-1.356-.2-.606-1.229-.607,1.229-1.356.2.982.957Z"
                      transform="translate(-127.159 -18.44)" />
                    <path id="Path_1938" data-name="Path 1938"
                      d="M133.216,14.1l.921-.484.921.484-.176-1.026.745-.726L134.6,12.2l-.461-.933-.46.933-1.03.149.745.726Z"
                      transform="translate(-104.231 -12.462)" />
                  </g>
                </svg>
                <h3 class="h6 fw-bold mt-4 mb-2">General Consultation</h3>
                <p class="font-small theme-text-accent-three">adipiscing automation platform end-to-end optimization of
                  your
                  process</p>
                <a href="#" class="fw-bold effect">More Details<i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            <!-- repetable -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- key features section -->
  <section class="features" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-12 text-center">
          <h2 class="h1 fw-bold mb-4 theme-text-accent-one">AstroGyan Key Features</h2>
          <p class="mb-0 theme-text-accent-two max-2">With TechGain, partner with a team that has the experience and
            drive to help you become a market leader.</p>
        </div>
      </div>
      <div class="row mt-8" id="counter">
        <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0 text-center">
          <div class="key-bg">
            <div class="mb-4 icon-key">
              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60">
                <g id="key-astrologers" transform="translate(-5 -5)">
                  <path id="Path_842" data-name="Path 842"
                    d="M35,5A30,30,0,1,0,65,35,29.96,29.96,0,0,0,35,5ZM20.4,22.4l.733-1.867.733,1.867,2,.133L22.333,23.8l.467,1.933-1.667-1.067-1.667,1.067.467-1.933L18.4,22.533Zm2.133,27.067L20.867,48.4,19.2,49.467l.467-1.933-1.467-1.2,1.933-.133.733-1.8.733,1.8,1.933.133L22,47.6ZM36,49.4a13.467,13.467,0,1,1,6.533-25.267,12.941,12.941,0,0,0,1,23A13.215,13.215,0,0,1,36,49.4Zm13.667-12-3.333-2.133-3.4,2.133,1-3.867L40.867,31l4-.267L46.333,27,47.8,30.733l4,.267-3.067,2.533Z"
                    transform="translate(0 0)" fill="#000000" />
                </g>
              </svg>
            </div>
            <span class="d-inline-block display-4 fw-bold theme-text-white counter-value" data-count="512">0</span>
            <span class="d-inline-block display-4 fw-bold theme-text-white ">+</span>
          </div>
          <span class="d-block fw-bold theme-text-accent-one fs-4">Best Astrologers</span>
        </div>
        <!-- repetable -->
        <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0 text-center">
          <div class="key-bg">
            <div class="mb-4 icon-key">
              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60">
                <g id="key-chat" transform="translate(-5 -5)">
                  <path id="Path_843" data-name="Path 843"
                    d="M35,5A30,30,0,0,0,9.278,50.444a1.086,1.086,0,0,1,.111.889L5.522,64.5l13.456-3.733a1.208,1.208,0,0,1,.289-.044,1.113,1.113,0,0,1,.567.156A30,30,0,1,0,35,5ZM17.222,40.556A5.556,5.556,0,1,1,22.778,35,5.558,5.558,0,0,1,17.222,40.556Zm17.778,0A5.556,5.556,0,1,1,40.556,35,5.558,5.558,0,0,1,35,40.556Zm17.778,0A5.556,5.556,0,1,1,58.333,35,5.558,5.558,0,0,1,52.778,40.556Z"
                    fill="#f61212" />
                </g>
              </svg>
            </div>
            <span class="d-inline-block display-4 fw-bold theme-text-white counter-value" data-count="120">0</span>
            <span class="d-inline-block display-4 fw-bold theme-text-white ">+</span>
          </div>
          <span class="d-block fw-bold theme-text-accent-one fs-4">Quality Chat/Call</span>
        </div>
        <!-- repetable -->
        <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0 text-center">
          <div class="key-bg">
            <div class="mb-4 icon-key">
              <svg xmlns="http://www.w3.org/2000/svg" width="60.003" height="60.003" viewBox="0 0 60.003 60.003">
                <g id="key-customers" transform="translate(-1.994 -2)">
                  <path id="Path_844" data-name="Path 844"
                    d="M51.16,22.61,49,18l-2.16,4.61L42,23.35l3.5,3.58L44.67,32,49,29.61,53.33,32l-.83-5.07L56,23.35Z"
                    fill="#f61212" />
                  <path id="Path_845" data-name="Path 845"
                    d="M15,18l-2.16,4.61L8,23.35l3.5,3.58L10.67,32,15,29.61,19.33,32l-.83-5.07L22,23.35l-4.84-.74Z"
                    fill="#f61212" />
                  <path id="Path_846" data-name="Path 846"
                    d="M32,6l-3.71,7.9L20,15.17l6,6.15L24.58,30,32,25.9,39.42,30,38,21.32l6-6.15L35.71,13.9Z"
                    fill="#f61212" />
                  <path id="Path_847" data-name="Path 847"
                    d="M32,2A30,30,0,0,0,12.85,8.9l1.28,1.54A28,28,0,0,1,53.41,50a8,8,0,0,0-5.19-4.68,4,4,0,1,0-4.45,0,8,8,0,0,0-4.83,3.91,12,12,0,0,1,4.94,8.12q-.95.43-1.92.81a10,10,0,0,0-7.48-8.84,5,5,0,1,0-5,0A10,10,0,0,0,22,58.16c-.65-.24-1.29-.52-1.91-.81a12,12,0,0,1,4.19-7.56,8,8,0,0,0-5.09-4.47,4,4,0,1,0-4.46,0A8,8,0,0,0,10,49.22a28,28,0,0,1,1.39-36.13L9.86,11.75A30,30,0,1,0,32,2Z"
                    fill="#f61212" />
                </g>
              </svg>
            </div>
            <span class="d-inline-block display-4 fw-bold theme-text-white counter-value" data-count="980">0</span>
            <span class="d-inline-block display-4 fw-bold theme-text-white ">+</span>
          </div>
          <span class="d-block fw-bold theme-text-accent-one fs-4">Happy Customers</span>
        </div>
        <!-- repetable -->
        <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0 text-center">
          <div class="key-bg">
            <div class="mb-4 icon-key">
              <svg id="key-horoscope" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60">
                <path id="Path_848" data-name="Path 848"
                  d="M28.862,10.47V0a30.384,30.384,0,0,0-8.506,1.51l.027.082h3.243A1.046,1.046,0,0,1,24.3,3.438L21.6,5.723l1.031,3.338A1.047,1.047,0,0,1,20.992,10.2l-2.6-1.985-2.6,1.985a1.047,1.047,0,0,1-1.636-1.141l1.031-3.338L13.825,4.573A30.617,30.617,0,0,0,9.194,8.115l7.43,7.43A19.788,19.788,0,0,1,28.862,10.47Z"
                  transform="translate(0.272)" fill="#f61212" />
                <path id="Path_849" data-name="Path 849"
                  d="M3.085,19.579l-.269.87.632-.484a1.048,1.048,0,0,1,1.271,0l.632.484-.269-.87a1.047,1.047,0,0,1,.326-1.109l1.048-.886H5.32a1.048,1.048,0,0,1-.995-.719l-.241-.731-.241.731a1.049,1.049,0,0,1-.995.719H1.712l1.048.886A1.05,1.05,0,0,1,3.085,19.579Z"
                  transform="translate(0.081 0.569)" fill="#f61212" />
                <path id="Path_850" data-name="Path 850"
                  d="M15.576,16.6,8.148,9.167a30.147,30.147,0,0,0-2.961,3.714l.971,2.938H9.4a1.046,1.046,0,0,1,.675,1.846L7.37,19.951,8.4,23.289a1.047,1.047,0,0,1-1.636,1.141l-2.6-1.985-2.6,1.985a1.039,1.039,0,0,1-1.113.085A30.412,30.412,0,0,0,0,28.834H10.5A19.788,19.788,0,0,1,15.576,16.6Z"
                  transform="translate(0 0.282)" fill="#f61212" />
                <path id="Path_851" data-name="Path 851"
                  d="M5.352,42.449l-.269-.87a1.047,1.047,0,0,1,.326-1.109l1.048-.886H5.32a1.048,1.048,0,0,1-.995-.719l-.241-.731-.241.731a1.049,1.049,0,0,1-.995.719H1.712l1.048.886a1.047,1.047,0,0,1,.326,1.109l-.269.87.632-.484a1.048,1.048,0,0,1,1.271,0Z"
                  transform="translate(0.081 1.344)" fill="#f61212" />
                <path id="Path_852" data-name="Path 852"
                  d="M18.326,52.867l-.241-.731-.241.731a1.049,1.049,0,0,1-.995.719H15.713l1.048.886a1.047,1.047,0,0,1,.326,1.109l-.269.87.632-.484a1.048,1.048,0,0,1,1.271,0l.632.484-.269-.87a1.047,1.047,0,0,1,.326-1.109l1.048-.886H19.322A1.05,1.05,0,0,1,18.326,52.867Z"
                  transform="translate(0.539 1.818)" fill="#f61212" />
                <path id="Path_853" data-name="Path 853"
                  d="M51.712,17.585l1.048.886a1.047,1.047,0,0,1,.326,1.109l-.269.87.632-.484a1.048,1.048,0,0,1,1.271,0l.632.484-.269-.87a1.047,1.047,0,0,1,.326-1.109l1.048-.886H55.321a1.048,1.048,0,0,1-.995-.719l-.241-.731-.241.731a1.049,1.049,0,0,1-.995.719Z"
                  transform="translate(1.751 0.569)" fill="#f61212" />
                <path id="Path_854" data-name="Path 854"
                  d="M48.155,28.834h10.5a30.4,30.4,0,0,0-.451-4.317,1,1,0,0,1-1.113-.086l-2.6-1.985-2.6,1.985a1.047,1.047,0,0,1-1.636-1.141l1.031-3.338-2.706-2.286a1.046,1.046,0,0,1,.675-1.846H52.5l.971-2.938a30.246,30.246,0,0,0-2.961-3.714L43.081,16.6A19.792,19.792,0,0,1,48.155,28.834Z"
                  transform="translate(1.344 0.282)" fill="#f61212" />
                <path id="Path_855" data-name="Path 855"
                  d="M9.19,50.484a30.073,30.073,0,0,0,2.928,2.4,1.021,1.021,0,0,1,1.038-.962H16.4l1-3.021a1.047,1.047,0,0,1,1.99,0l1,3.021h3.243a1.046,1.046,0,0,1,.675,1.846L21.6,56.051l.484,1.565a30.408,30.408,0,0,0,6.782.994V48.126A19.783,19.783,0,0,1,16.623,43.05Z"
                  transform="translate(0.272 1.39)" fill="#f61212" />
                <path id="Path_856" data-name="Path 856"
                  d="M17.085,5.579l-.269.87.632-.484a1.048,1.048,0,0,1,1.271,0l.632.484-.269-.87a1.047,1.047,0,0,1,.326-1.109l1.048-.886H19.32a1.048,1.048,0,0,1-.995-.719l-.241-.731-.241.731a1.049,1.049,0,0,1-.995.719H15.713l1.048.886A1.051,1.051,0,0,1,17.085,5.579Z"
                  transform="translate(0.539 0.101)" fill="#f61212" />
                <path id="Path_857" data-name="Path 857"
                  d="M38.76,4.471a1.047,1.047,0,0,1,.326,1.109l-.269.87.632-.484a1.048,1.048,0,0,1,1.271,0l.632.484-.269-.87a1.047,1.047,0,0,1,.326-1.109l1.048-.886H41.321a1.048,1.048,0,0,1-.995-.719l-.241-.731-.241.731a1.049,1.049,0,0,1-.995.719H37.714Z"
                  transform="translate(1.293 0.101)" fill="#f61212" />
                <path id="Path_858" data-name="Path 858"
                  d="M49.646,8.116a30.549,30.549,0,0,0-4.631-3.542L43.652,5.725l1.031,3.338A1.047,1.047,0,0,1,43.048,10.2l-2.6-1.985-2.6,1.985a1.047,1.047,0,0,1-1.636-1.141l1.031-3.338L34.538,3.439a1.046,1.046,0,0,1,.675-1.846h3.243l.026-.083A30.377,30.377,0,0,0,29.977,0V10.47a19.783,19.783,0,0,1,12.239,5.076Z"
                  transform="translate(0.888)" fill="#f61212" />
                <path id="Path_859" data-name="Path 859"
                  d="M10.5,29.949H.018a30.3,30.3,0,0,0,1.328,7.928h.826l1-3.021a1.047,1.047,0,0,1,1.99,0l1,3.021H9.4a1.046,1.046,0,0,1,.675,1.846L7.369,42.009,8.4,45.347a1.047,1.047,0,0,1-1.636,1.141l-2.332-1.78a30.479,30.479,0,0,0,3.712,4.91l7.429-7.429A19.8,19.8,0,0,1,10.5,29.949Z"
                  transform="translate(0.001 0.922)" fill="#f61212" />
                <path id="Path_860" data-name="Path 860"
                  d="M36.354,29.264a7.342,7.342,0,0,0-5.131-6.992,5.464,5.464,0,0,1-.666,6.939L28.972,30.8a3.369,3.369,0,0,0-.995,2.4,3.41,3.41,0,0,0,2.466,3.254A7.34,7.34,0,0,0,36.354,29.264ZM30.071,32.4a1.047,1.047,0,1,1,1.047,1.047A1.047,1.047,0,0,1,30.071,32.4Z"
                  transform="translate(0.934 0.729)" fill="#f61212" />
                <path id="Path_861" data-name="Path 861"
                  d="M40.326,52.867l-.241-.731-.241.731a1.049,1.049,0,0,1-.995.719H37.713l1.048.886a1.047,1.047,0,0,1,.326,1.109l-.269.87.632-.484a1.048,1.048,0,0,1,1.271,0l.632.484-.269-.87a1.047,1.047,0,0,1,.326-1.109l1.048-.886H41.322A1.05,1.05,0,0,1,40.326,52.867Z"
                  transform="translate(1.293 1.818)" fill="#f61212" />
                <path id="Path_862" data-name="Path 862"
                  d="M42.109,29.473l-2.82-2.82.937-3.748-3.782-.946L35.5,18.179l-3.622.9-1.9-1.266v2.294a9.42,9.42,0,0,1,0,18.724v2.294l1.9-1.266,3.622.9.946-3.781,3.782-.946L39.289,32.3Z"
                  transform="translate(0.969 0.52)" fill="#f61212" />
                <path id="Path_863" data-name="Path 863"
                  d="M29.977,48.126V58.61a30.4,30.4,0,0,0,6.782-.994l.484-1.565-2.706-2.286a1.046,1.046,0,0,1,.675-1.846h3.243l1-3.021a1.047,1.047,0,0,1,1.99,0l1,3.021h3.243a1.048,1.048,0,0,1,.983.687,1.012,1.012,0,0,1,.054.275,30.226,30.226,0,0,0,2.928-2.4L42.215,43.05A19.777,19.777,0,0,1,29.977,48.126Z"
                  transform="translate(0.888 1.39)" fill="#f61212" />
                <path id="Path_864" data-name="Path 864"
                  d="M54.326,38.867l-.241-.731-.241.731a1.049,1.049,0,0,1-.995.719H51.713l1.048.886a1.047,1.047,0,0,1,.326,1.109l-.269.87.632-.484a1.048,1.048,0,0,1,1.271,0l.632.484-.269-.87a1.047,1.047,0,0,1,.326-1.109l1.048-.886H55.322A1.05,1.05,0,0,1,54.326,38.867Z"
                  transform="translate(1.751 1.344)" fill="#f61212" />
                <path id="Path_865" data-name="Path 865"
                  d="M43.08,42.188l7.429,7.429a30.372,30.372,0,0,0,3.712-4.91l-2.332,1.78a1.047,1.047,0,0,1-1.636-1.141l1.031-3.338-2.706-2.286a1.046,1.046,0,0,1,.675-1.846H52.5l1-3.021a1.047,1.047,0,0,1,1.99,0l1,3.021h.826a30.215,30.215,0,0,0,1.328-7.928H48.155A19.79,19.79,0,0,1,43.08,42.188Z"
                  transform="translate(1.344 0.922)" fill="#f61212" />
                <path id="Path_866" data-name="Path 866"
                  d="M46.894,29.431A17.458,17.458,0,1,0,29.435,46.913,17.49,17.49,0,0,0,46.894,29.431ZM25.31,16.716a1.028,1.028,0,1,1-.659,1.3A1.038,1.038,0,0,1,25.31,16.716Zm-6.675,4.857a1.028,1.028,0,1,1,.227,1.437A1.027,1.027,0,0,1,18.635,21.573Zm-1.523,8.886a1.028,1.028,0,1,1,1.027-1.028A1.028,1.028,0,0,1,17.112,30.459Zm2.9587.056a1.028,1.028,0,1,1,.227-1.437A1.02,1.02,0,0,1,20.069,37.516ZM26.6,41.484a1.027,1.027,0,1,1-.977-1.346,1.028,1.028,0,0,1,.977,1.346Zm10.768,1.534L32.708,41.85l-4.3,2.87V38.625a9.253,9.253,0,0,1,0-18.389V14.141l4.3,2.87,4.663-1.168L38.5,20.357,43,21.485,41.87,26.031l3.4,3.4-3.4,3.4L43,37.379,38.5,38.507Z"
                  transform="translate(0.564 0.563)" fill="#f61212" />
                <path id="Path_867" data-name="Path 867"
                  d="M30.354,25.337a3.41,3.41,0,0,0-2.466-3.254,7.328,7.328,0,0,0-.78,14.181,5.464,5.464,0,0,1,.666-6.939l1.585-1.586A3.365,3.365,0,0,0,30.354,25.337Zm-3.141,1.841a1.047,1.047,0,1,1,1.047-1.047A1.047,1.047,0,0,1,27.213,27.178Z"
                  transform="translate(0.734 0.723)" fill="#f61212" />
              </svg>

            </div>
            <span class="d-inline-block display-4 fw-bold theme-text-white counter-value" data-count="989">0</span>
            <span class="d-inline-block display-4 fw-bold theme-text-white ">+</span>
          </div>
          <span class="d-block fw-bold theme-text-accent-one fs-4">Daily Horoscope</span>
        </div>
        <!-- repetable -->
      </div>
    </div>
  </section>
  <!-- more services section -->
  <section class="services" data-aos="fade-up">
    <div class="top-sec">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-12 text-center">
            <p class="mb-4 theme-text-primary">compatibility checks based on horoscopes</p>
            <h2 class="h1 fw-bold mb-4 theme-text-dark">More Astrology Services</h2>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-12 col-lg-8 offset-lg-4">
            <!-- services slider -->
            <div class="theme-border-radius">
              <div class="owl-carousel owl-theme" id="carouselService">
                <div class="item">
                  <div class="more-service">
                    <div class="media">
                      <img src="dist/images/services/services01.png" alt="img">
                    </div>
                    <div class="content">
                      <div class="d-flex justify-content-between align-items-center">
                        <h5 class="theme-text-accent-one mb-0">Horoscope Compatibility</h5>
                        <a href="#" class="font-small effect">More <i class="bi bi-caret-right ms-1"></i></a>
                      </div>
                      <p>
                        Sagittis Integer nisi nec tortor fermentum aliquet.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- repetable -->
                <div class="item">
                  <div class="more-service">
                    <div class="media">
                      <img src="dist/images/services/services02.png" alt="img">
                    </div>
                    <div class="content">
                      <div class="d-flex justify-content-between align-items-center">
                        <h5 class="theme-text-accent-one mb-0">Free Feng Shui</h5>
                        <a href="#" class="font-small effect">More <i class="bi bi-caret-right ms-1"></i></a>
                      </div>
                      <p>
                        Sagittis Integer nisi nec tortor fermentum aliquet.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- repetable -->
                <div class="item">
                  <div class="more-service">
                    <div class="media">
                      <img src="dist/images/services/services03.png" alt="img">
                    </div>
                    <div class="content">
                      <div class="d-flex justify-content-between align-items-center">
                        <h5 class="theme-text-accent-one mb-0">Free Panchanga</h5>
                        <a href="#" class="font-small effect">More <i class="bi bi-caret-right ms-1"></i></a>
                      </div>
                      <p>
                        Sagittis Integer nisi nec tortor fermentum aliquet.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- repetable -->
                <div class="item">
                  <div class="more-service">
                    <div class="media">
                      <img src="dist/images/services/services04.png" alt="img">
                    </div>
                    <div class="content">
                      <div class="d-flex justify-content-between align-items-center">
                        <h5 class="theme-text-accent-one mb-0">Free Chinese Compatibility</h5>
                        <a href="#" class="font-small effect">More <i class="bi bi-caret-right ms-1"></i></a>
                      </div>
                      <p>
                        Sagittis Integer nisi nec tortor fermentum aliquet.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- repetable -->
                <div class="item">
                  <div class="more-service">
                    <div class="media">
                      <img src="dist/images/services/services05.png" alt="img">
                    </div>
                    <div class="content">
                      <div class="d-flex justify-content-between align-items-center">
                        <h5 class="theme-text-accent-one mb-0">Free Love Compatibility</h5>
                        <a href="#" class="font-small effect">More <i class="bi bi-caret-right ms-1"></i></a>
                      </div>
                      <p>
                        Sagittis Integer nisi nec tortor fermentum aliquet.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- repetable -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- how it work section -->
  <section class="how-it-work" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-12 text-center">
          <p class="mb-4 theme-text-primary">Working Process</p>
          <h2 class="h1 fw-bold mb-4 theme-text-dark">How AstroGyan Work</h2>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0">
          <div class="box">
            <span class="px-2 py-2 rounded-circle theme-bg-secondary h4 fw-bold d-inline-flex point">01</span>
            <span class="ms-2 fw-bold theme-text-dark">Sign up</span>
            <p class="theme-text-accent-three mt-4 mb-0 pe-5">AstroGyan, is a pioneer in online Vedic astrology and
              remedy services</p>
          </div>
        </div>
        <!-- repetable -->
        <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0">
          <div class="box">
            <span class="px-2 py-2 rounded-circle theme-bg-secondary h4 fw-bold d-inline-flex point">02</span>
            <span class="ms-2 fw-bold theme-text-dark">Add Money to Wallet</span>
            <p class="theme-text-accent-three mt-4 mb-0 pe-5">AstroGyan, is a pioneer in online Vedic astrology and
              remedy services</p>
          </div>
        </div>
        <!-- repetable -->
        <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0">
          <div class="box">
            <span class="px-2 py-2 rounded-circle theme-bg-secondary h4 fw-bold d-inline-flex point">03</span>
            <span class="ms-2 fw-bold theme-text-dark">Make a Call/Chat</span>
            <p class="theme-text-accent-three mt-4 mb-0 pe-5">AstroGyan, is a pioneer in online Vedic astrology and
              remedy services</p>
          </div>
        </div>
        <!-- repetable -->
        <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0">
          <div class="box">
            <span class="px-2 py-2 rounded-circle theme-bg-secondary h4 fw-bold d-inline-flex point">04</span>
            <span class="ms-2 fw-bold theme-text-dark">Rate & Review</span>
            <p class="theme-text-accent-three mt-4 mb-0 pe-5">AstroGyan, is a pioneer in online Vedic astrology and
              remedy services</p>
          </div>
        </div>
        <!-- repetable -->
      </div>
    </div>
  </section>
  <!-- testimonials section -->
  <section class="review" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-12 text-center">
          <p class="mb-4 theme-text-primary">Customer Rivew</p>
          <h4 class="h1 fw-bold mb-4">Hear from our clients</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-12 mt-5">
          <!-- testimonials Slider-->
          <div class="owl-carousel owl-theme" id="carouselTestimonials">
            <div class="item">
              <div class="row g-0">
                <div class="col-12">
                  <div class="review-pic">
                    <div class="qotes-img">
                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="34" viewBox="0 0 70 54">
                        <path class="qotes-icon"
                          d="M40.939,66.709q-4.723-4.983-4.721-13.79,0-19.175,25.429-35.219l1.734,2.734Q45.462,32.371,45.465,44.305c0,.1.015.174.015.266A14.6,14.6,0,0,1,59.271,41.4,14.881,14.881,0,0,1,69.364,51.461,15.177,15.177,0,0,1,66.5,65.526c-.176.234-.407.448-.6.673-.093.1-.177.2-.272.295a14.087,14.087,0,0,1-1.1,1.193Q60.106,71.7,52.88,71.7a15.716,15.716,0,0,1-11.94-4.991Zm-36.215,0Q0,61.723.005,52.915q0-19.169,25.427-35.215l1.736,2.736C15.47,28.232,9.541,36.023,9.3,43.812A14.566,14.566,0,0,1,29.96,46.762a15.122,15.122,0,0,1,2.785,11.121c0,.046.007.077.007.119a12.6,12.6,0,0,1-4.431,9.682Q23.891,71.7,16.667,71.7A15.736,15.736,0,0,1,4.724,66.707Z"
                          transform="translate(-0.005 -17.7)" fill="rgba(135,138,155,0.3)" />
                      </svg>
                    </div>
                    <figure class="mb-0 overflow-hidden">
                      <img src="dist/images/client/client-picture01.png" class="img-fluid" alt="client review">
                    </figure>
                  </div>
                </div>
                <div class="col-12">
                  <div class="review-con">
                    <span class="d-flex justify-content-center text-warning mb-2">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </span>
                    <div class="mt-3"><span class="h5 fw-bold">Developer Cena</span>
                      <span class="d-flex justify-content-center"><span>Director, &nbsp;</span>Well Travel</span>
                    </div>
                    <p class="font-small mb-0 mt-4 theme-text-accent-three lh-lg">With TechGain, partner with a team
                      that
                      has
                      the
                      experience and drive to help you become a market leader. With TechGain,
                      partner with a team that has the experience and drive to help you become a market leader.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- repetable -->
            <div class="item">
              <div class="row g-0">
                <div class="col-12">
                  <div class="review-pic">
                    <div class="qotes-img">
                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="34" viewBox="0 0 70 54">
                        <path class="qotes-icon"
                          d="M40.939,66.709q-4.723-4.983-4.721-13.79,0-19.175,25.429-35.219l1.734,2.734Q45.462,32.371,45.465,44.305c0,.1.015.174.015.266A14.6,14.6,0,0,1,59.271,41.4,14.881,14.881,0,0,1,69.364,51.461,15.177,15.177,0,0,1,66.5,65.526c-.176.234-.407.448-.6.673-.093.1-.177.2-.272.295a14.087,14.087,0,0,1-1.1,1.193Q60.106,71.7,52.88,71.7a15.716,15.716,0,0,1-11.94-4.991Zm-36.215,0Q0,61.723.005,52.915q0-19.169,25.427-35.215l1.736,2.736C15.47,28.232,9.541,36.023,9.3,43.812A14.566,14.566,0,0,1,29.96,46.762a15.122,15.122,0,0,1,2.785,11.121c0,.046.007.077.007.119a12.6,12.6,0,0,1-4.431,9.682Q23.891,71.7,16.667,71.7A15.736,15.736,0,0,1,4.724,66.707Z"
                          transform="translate(-0.005 -17.7)" fill="rgba(135,138,155,0.3)" />
                      </svg>
                    </div>
                    <figure class="mb-0 overflow-hidden">
                      <img src="dist/images/client/client-picture02.png" class="img-fluid" alt="client review">
                    </figure>
                  </div>
                </div>
                <div class="col-12">
                  <div class="review-con">
                    <span class="d-flex justify-content-center text-warning mb-2">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </span>
                    <div class="mt-3"><span class="h5 fw-bold">John Deliget</span>
                      <span class="d-flex justify-content-center"><span>Director, &nbsp;</span>Round World</span>
                    </div>
                    <p class="font-small mb-0 mt-4 theme-text-accent-three lh-lg">With TechGain, partner with a team
                      that
                      has
                      the
                      experience and drive to help you become a market leader. With TechGain,
                      partner with a team that has the experience and drive to help you become a market leader.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- repetable -->
            <div class="item">
              <div class="row g-0">
                <div class="col-12">
                  <div class="review-pic">
                    <div class="qotes-img">
                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="34" viewBox="0 0 70 54">
                        <path class="qotes-icon"
                          d="M40.939,66.709q-4.723-4.983-4.721-13.79,0-19.175,25.429-35.219l1.734,2.734Q45.462,32.371,45.465,44.305c0,.1.015.174.015.266A14.6,14.6,0,0,1,59.271,41.4,14.881,14.881,0,0,1,69.364,51.461,15.177,15.177,0,0,1,66.5,65.526c-.176.234-.407.448-.6.673-.093.1-.177.2-.272.295a14.087,14.087,0,0,1-1.1,1.193Q60.106,71.7,52.88,71.7a15.716,15.716,0,0,1-11.94-4.991Zm-36.215,0Q0,61.723.005,52.915q0-19.169,25.427-35.215l1.736,2.736C15.47,28.232,9.541,36.023,9.3,43.812A14.566,14.566,0,0,1,29.96,46.762a15.122,15.122,0,0,1,2.785,11.121c0,.046.007.077.007.119a12.6,12.6,0,0,1-4.431,9.682Q23.891,71.7,16.667,71.7A15.736,15.736,0,0,1,4.724,66.707Z"
                          transform="translate(-0.005 -17.7)" fill="rgba(135,138,155,0.3)" />
                      </svg>
                    </div>
                    <figure class="mb-0 overflow-hidden">
                      <img src="dist/images/client/client-picture03.png" class="img-fluid" alt="client review">
                    </figure>
                  </div>
                </div>
                <div class="col-12">
                  <div class="review-con">
                    <span class="d-flex justify-content-center text-warning mb-2">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </span>
                    <div class="mt-3"><span class="h5 fw-bold">Julia Robert</span>
                      <span class="d-flex justify-content-center"><span>MD, &nbsp;</span>Logestic Wave</span>
                    </div>
                    <p class="font-small mb-0 mt-4 theme-text-accent-three lh-lg">With TechGain, partner with a team
                      that
                      has
                      the
                      experience and drive to help you become a market leader. With TechGain,
                      partner with a team that has the experience and drive to help you become a market leader.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- repetable -->
            <div class="item">
              <div class="row g-0">
                <div class="col-12">
                  <div class="review-pic">
                    <div class="qotes-img">
                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="34" viewBox="0 0 70 54">
                        <path class="qotes-icon"
                          d="M40.939,66.709q-4.723-4.983-4.721-13.79,0-19.175,25.429-35.219l1.734,2.734Q45.462,32.371,45.465,44.305c0,.1.015.174.015.266A14.6,14.6,0,0,1,59.271,41.4,14.881,14.881,0,0,1,69.364,51.461,15.177,15.177,0,0,1,66.5,65.526c-.176.234-.407.448-.6.673-.093.1-.177.2-.272.295a14.087,14.087,0,0,1-1.1,1.193Q60.106,71.7,52.88,71.7a15.716,15.716,0,0,1-11.94-4.991Zm-36.215,0Q0,61.723.005,52.915q0-19.169,25.427-35.215l1.736,2.736C15.47,28.232,9.541,36.023,9.3,43.812A14.566,14.566,0,0,1,29.96,46.762a15.122,15.122,0,0,1,2.785,11.121c0,.046.007.077.007.119a12.6,12.6,0,0,1-4.431,9.682Q23.891,71.7,16.667,71.7A15.736,15.736,0,0,1,4.724,66.707Z"
                          transform="translate(-0.005 -17.7)" fill="rgba(135,138,155,0.3)" />
                      </svg>
                    </div>
                    <figure class="mb-0 overflow-hidden">
                      <img src="dist/images/client/client-picture04.png" class="img-fluid" alt="client review">
                    </figure>
                  </div>
                </div>
                <div class="col-12">
                  <div class="review-con">
                    <span class="d-flex justify-content-center text-warning mb-2">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </span>
                    <div class="mt-3"><span class="h5 fw-bold">Suyra Komer</span>
                      <span class="d-flex justify-content-center"><span>CEO, &nbsp;</span>Hotel Travel</span>
                    </div>
                    <p class="font-small mb-0 mt-4 theme-text-accent-three lh-lg">With TechGain, partner with a team
                      that
                      has
                      the
                      experience and drive to help you become a market leader. With TechGain,
                      partner with a team that has the experience and drive to help you become a market leader.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- repetable -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- blog & articles section -->
  <section class="blog" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-12 text-center">
          <p class="mb-4 theme-text-primary">Our Blogs</p>
          <h4 class="h1 fw-bold mb-4">Latest Articles</h4>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="blog-card">
            <div class="overflow-hidden position-relative theme-border-radius">
              <figure class="mb-0 img-effect">
                <img src="dist/images/blog/blog-post01.jpg" class="img-fluid" alt="news articles">
              </figure>
              <div class="tags-top position-absolute">
                <a href="javascript:void(0)" class="font-small"><span class="d-block">22</span>May</a>
              </div>
            </div>
            <div class="mt-4">
              <div class="mb-3">
                <a href="#" class="tags font-small pe-2">Astro</a>
                <a href="#" class="meta ms-2">22 May 2023</a>
              </div>
              <h2 class="title">
                <a href="#">Lucky Birthstone In 2024 As Per Numerology</a>
              </h2>
              <div class="mt-3 d-flex align-items-center">
                <span class="me-3">
                  <img alt="avatar" src="dist/images/avatar/01.png" class="img-fluid rounded-pill" height="30"
                    width="30">
                  <span class="ms-3">by</span><a href="#">Elizabeth Herly</a>
                </span>
                <span class="me-3">
                  <i class="bi bi-dot theme-text-accent-three"></i>
                  <a href="#" class="theme-text-accent-three">0 comments</a>
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- repetable -->
        <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="blog-card">
            <div class="overflow-hidden position-relative theme-border-radius">
              <figure class="mb-0 img-effect">
                <img src="dist/images/blog/blog-post02.jpg" class="img-fluid" alt="news articles">
              </figure>
              <div class="tags-top position-absolute">
                <a href="javascript:void(0)" class="font-small"><span class="d-block">23</span>May</a>
              </div>
            </div>
            <div class="mt-4">
              <div class="mb-3">
                <a href="#" class="tags font-small pe-2">Blogs</a>
                <a href="#" class="meta ms-2">23 May 2023</a>
              </div>
              <h2 class="title">
                <a href="#">4 Zodiac Signs Men Who Treat Like A Queen</a>
              </h2>
              <div class="mt-3 d-flex align-items-center">
                <span class="me-3">
                  <img alt="avatar" src="dist/images/avatar/02.png" class="img-fluid rounded-pill" height="30"
                    width="30">
                  <span class="ms-3">by</span><a href="#">Riya John</a>
                </span>
                <span class="me-3">
                  <i class="bi bi-dot theme-text-accent-three"></i>
                  <a href="#" class="theme-text-accent-three">3 comments</a>
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- repetable -->
        <div class="col-12 col-md-12 col-lg-4 mb-4 mb-lg-0">
          <div class="blog-card">
            <div class="overflow-hidden position-relative theme-border-radius">
              <figure class="mb-0 img-effect">
                <img src="dist/images/blog/blog-post03.jpg" class="img-fluid" alt="news articles">
              </figure>
              <div class="tags-top position-absolute">
                <a href="javascript:void(0)" class="font-small"><span class="d-block">31</span>May</a>
              </div>
            </div>
            <div class="mt-4">
              <div class="mb-3">
                <a href="#" class="tags font-small pe-2">Tarot</a>
                <a href="#" class="meta ms-2">31 May 2023</a>
              </div>
              <h2 class="title">
                <a href="#">Top 4 Most Admirable Zodiac Signs In 2024</a>
              </h2>
              <div class="mt-3 d-flex align-items-center">
                <span class="me-3">
                  <img alt="avatar" src="dist/images/avatar/03.png" class="img-fluid rounded-pill" height="30"
                    width="30">
                  <span class="ms-3">by</span><a href="#">Devashis Pendy</a>
                </span>
                <span class="me-3">
                  <i class="bi bi-dot theme-text-accent-three"></i>
                  <a href="#" class="theme-text-accent-three">7 comments</a>
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- repetable -->
      </div>
    </div>
  </section>
  <!-- call to action -->
  <section class="call-to-action py-5 py-lg-0" data-aos="fade-up">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-lg-3 offset-lg-1 d-flex justify-content-center">
          <img src="dist/images/section/call-to-action.png" class="img-fluid" alt="call to action">
        </div>
        <div class="col-12 col-lg-7">
          <div class="action-bg text-center text-lg-start">
            <h4 class="h1 fw-bold mb-4 theme-text-accent-one">Let's talk about your question</h4>
            <p class="h5 fw-bold theme-text-accent-two mb-0">With live astrologers - Ask Question get solutions</p>
            <div class="group mt-5">
              <button class="rounded-pill btn custom-btn-primary font-small primary-btn-effect" type="submit">Book
                Consultation</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- download our aap section -->
  <section class="download-aap py-5" data-aos="fade-up">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-lg-8">
          <p class="mb-3 theme-text-white">Get free daily Horoscope & Tarot Reading</p>
          <h4 class="h1 fw-bold mb-5 mb-lg-0 theme-text-accent-one">Download our app & Get your Consultation</h4>
        </div>
        <div class="col-12 col-lg-4 text-center">
          <div class="d-flex justify-content-center">
            <a href="javascript:void(0)"
              class="d-inline-flex align-items-center theme-bg-white px-4 py-2 theme-border-radius">
              <div class="flex-shrink-0">
                <img src="dist/images/icons/play-icon.png" class="img-fluid" alt="Google-Play" title="Google-Play">
              </div>
              <div class="flex-grow-1 ms-2 font-extra-small">
                <span class="mb-0 theme-text-accent-three">Get it on</span>
                <span class="mb-0 theme-text-dark fw-bold d-block">Google Play</span>
              </div>
            </a>
            <a href="javascript:void(0)"
              class="d-inline-flex align-items-center theme-bg-white px-4 py-2 theme-border-radius ms-1 ms-lg-3">
              <div class="flex-shrink-0">
                <img src="dist/images/icons/apple-icon.png" class="img-fluid" alt="apple" title="apple">
              </div>
              <div class="flex-grow-1 ms-2 font-extra-small">
                <span class="mb-0 theme-text-accent-three">Get it on</span>
                <span class="mb-0 theme-text-dark fw-bold d-block">App Store</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer Part -->
  <footer class="footer py-5" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
          <h3 class="h5 fw-bold mb-4 mt-5 mt-lg-5">About Us</h3>
          <p class="mb-0 font-small pe-lg-5">AstroGyan, partner with a team that has the experience and drive to help
            you become
            a market leader.</p>
          <h3 class="h5 fw-bold mb-4 mt-5 mt-lg-5">Phone</h3>
          <p class="d-flex h5 mb-0"><i class="bi bi-phone fs-4 me-2"></i>
            (011) - 257896 5412
          </p>
          <h3 class="h5 fw-bold mb-4 mt-5 mt-lg-5">Address</h3>
          <p class="d-flex h5 mb-0"><i class="bi bi-geo-alt-fill fs-4 me-2"></i>
            Central Park, New Center - 100001
          </p>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <h3 class="h5 fw-bold mb-4 mt-5 mt-md-0 mt-lg-5">Say Hello!</h3>
          <div class="d-flex social">
            <a href="javascript:void(0)" class="h2 pe-3"><i class="bi bi-skype"></i> </a>
            <a href="javascript:void(0)" class="h2 pe-3"><i class="bi bi-telephone-fill"></i></a>
            <a href="javascript:void(0)" class="h2 pe-3"><i class="bi bi-envelope-paper-fill"></i></a>
          </div>
          <h3 class="mt-4 h5 fw-bold mb-4">Social Network</h3>
          <div class="d-flex social mt-3">
            <a href="javascript:void(0)" class="h2 pe-3"><i class="bi bi-facebook"></i></a>
            <a href="javascript:void(0)" class="h2 px-3"><i class="bi bi-twitter-x"></i></a>
            <a href="javascript:void(0)" class="h2 px-3"><i class="bi bi-linkedin"></i></a>
            <a href="javascript:void(0)" class="h2 px-3"><i class="bi bi-instagram"></i></a>
          </div>
          <h3 class="mt-4 h5 fw-bold mb-4">Newsletter</h3>
          <p class="mb-2">Subscribe to our newsletter</p>
          <form class="form-subcriber">
            <input type="email" name="email" value="" placeholder="Your emaill address">
            <button class="btn-subscribe" type="submit"><i class="bi bi-envelope"></i></button>
          </form>



        </div>
        <div class="col-12 col-md-12 col-lg-4">
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="row">
                <div class="col-12">
                  <h3 class="h5 fw-bold mb-4 mt-5">Our Company</h3>
                  <ul class="link-list">
                    <li><a href="javascript:void(0)" class="footer-link-effect">About Us</a></li>
                    <li><a href="javascript:void(0)" class="footer-link-effect">Awards</a></li>
                    <li><a href="javascript:void(0)" class="footer-link-effect">Recognitions</a></li>
                    <li><a href="javascript:void(0)" class="footer-link-effect">Partners</a></li>
                    <li><a href="javascript:void(0)" class="footer-link-effect">Consultancy</a></li>
                    <li><a href="javascript:void(0)" class="footer-link-effect">Blog</a></li>
                    <li><a href="javascript:void(0)" class="footer-link-effect">Contact</a></li>
                    <li><a href="javascript:void(0)" class="footer-link-effect">Terms of use</a></li>
                    <li><a href="javascript:void(0)" class="footer-link-effect">Privacy Policy</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="row">
                <div class="col-12">
                  <h3 class="h5 fw-bold mb-4 mt-5">Our Services</h3>
                  <ul class="link-list">
                    <li><a href="javascript:void(0)" class="footer-link-effect">Crystal Ball</a></li>
                    <li><a href="javascript:void(0)" class="footer-link-effect">Kundli Make</a></li>
                    <li><a href="javascript:void(0)" class="footer-link-effect">Tarot Reading</a></li>
                    <li><a href="javascript:void(0)" class="footer-link-effect">Palm Reading</a></li>
                    <li><a href="javascript:void(0)" class="footer-link-effect">Lal Kitab</a></li>
                    <li><a href="javascript:void(0)" class="footer-link-effect">Personal Advice</a></li>
                    <li><a href="javascript:void(0)" class="footer-link-effect">Future Prediction</a></li>
                    <li><a href="javascript:void(0)" class="footer-link-effect">General Consultation</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5 pt-5 border-top">
        <div class="col-12 col-md-12 text-center">
          <img src="dist/images/brand.png" class="img-fluid" alt="Brand light">
          <p class="pt-2 mb-0 font-extra-small">&copy; Copyright 2024 by AstroGyan, All rights reserved. Various
            trademarks are held by their respective owners.</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- back to top -->
  <a href="#wrapper" data-type="section-switch" class="scrollup"><i class="bi bi-caret-up"></i></a>


  <div class="tmodal" id="modalThx">
    <div class="tmodal-content">
        <span class="close-tmodal">&times;</span>
        <p>Сообщение отправлено!</p>
    </div>
  </div>

  <div class="tmodal" id="modalBad">
    <div class="tmodal-content">
        <span class="close-tmodal">&times;</span>
        <p>Ошибка, попробуйте еще раз!</p>
    </div>
  </div>


  <!-- Bootstrap Bundle with Popper -->
  <script src="dist/js/jquery.min.js"></script>
  <script src="dist/js/bootstrap.bundle.min.js"></script>
  <script src="dist/js/color-modes.js"></script>
  <script src="dist/js/owl.carousel.min.js"></script>
  <script src="dist/js/glightbox.min.js"></script>
  <script src="dist/js/light-gallery.js"></script>
  <script src="dist/js/counter.js"></script>
  <script src="dist/js/aos.js"></script>
  <script src="dist/js/main.js"></script>
</body>

</html>
