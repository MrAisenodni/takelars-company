<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title') - Takelars Globalindo Nusantara</title>

  <link rel="stylesheet" href="{{ asset('/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}" />
  <link rel="stylesheet" href="{{ asset('/css/font.css') }}" />

  <link rel="stylesheet" href="{{ asset('/css/swiper-bundle.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('/css/aos.css') }}" />
  <link rel="stylesheet" href="{{ asset('/css/lightgallery.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('/css/owl.theme.default.css') }}" />
  <link rel="stylesheet" href="{{ asset('/css/all.min.css') }}" />

  <link rel="shortcut icon" href="{{ asset('/images/fav-icon.png') }}" type="image/x-icon" />
</head>

<body>
  <!---MAIN WRAPPER START
                    ==================================-->
  <div id="main-wrapper" class="clearfix">
    <!---HEADER START
						==================================-->
    @include('layouts.header')
    <!---EMD HEADER-->

    <!---CONTENT START
						==================================-->
    @yield('content')
    <!--- CONTENT END -->

    <!---FOOTER START
				==================================-->
    <footer id="footer" class="footer clearfix">
      <div class="footer-widget">
        <div class="container">
          <div class="row clearfix">
            <div class="column column-4 footer-widget-component">
              <a href="index.html">
                <img class="footer-logo res-img" src="images/logo.png" alt="footer-logo" />
              </a>
              <p class="footer-text footer-desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                dolore.
              </p>
              <a href="blog.html" class="button style-7">Get Location</a>
            </div>
            <div class="column column-4 footer-widget-component">
              <p class="footer-title text-white">get in touch</p>
              <hr class="left-hr" />
              <p class="footer-text"><b>+62 828 111 96 75</b></p>
              <p class="footer-text">
                Jl. Maleer Indah II, Maleer, Batununggal, Kota Bandung, Jawa
                Barat 40274.
              </p>
              <p class="footer-text footer-email">consultant@contact.com</p>
              <p class="footer-text footer-email">info@consultant.com</p>
            </div>
            <div class="column column-4 footer-widget-component">
              <p class="footer-title text-white">latest news</p>
              <hr class="left-hr" />
              <div class="footer-news-wrapper clear-fix">
                <div class="row footer-news-item mt-2">
                  <div class="img-zoom-wrapper">
                    <a href="singlePost.html">
                      <img class="footer-news-img" src="images/footer-news-img1.png" alt="footer-news-img" />
                    </a>
                  </div>
                  <div class="footer-news-text">
                    <a class="footer-news-title" href="singlePost.html">Suspend Ullam</a>
                    <p class="footer-news-date footer-text">
                      September 25, 2018
                    </p>
                  </div>
                </div>
                <div class="row footer-news-item mt-2">
                  <div class="img-zoom-wrapper">
                    <a href="singlePost.html">
                      <img class="footer-news-img" src="images/footer-news-img2.png" alt="footer-news-img" />
                    </a>
                  </div>
                  <div class="footer-news-text">
                    <a class="footer-news-title" href="singlePost.html">Proin In Orci Quis Elit</a>
                    <p class="footer-news-date footer-text">
                      September 25, 2018
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="column column-4 footer-widget-component">
              <p class="footer-title text-white">Follow Us</p>
              <hr class="left-hr" />
              <p class="footer-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                dolore.
              </p>
              <div class="footer-icon-wrapper">
                <a href="index.html" target="_blank">
                  <div class="footer-icon">
                    <i class="fab fa-twitter"></i>
                  </div>
                </a>
                <a href="index.html" target="_blank">
                  <div class="footer-icon">
                    <i class="fab fa-facebook-f"></i>
                  </div>
                </a>
                <a href="index.html" target="_blank">
                  <div class="footer-icon">
                    <i class="fab fa-google-plus-g"></i>
                  </div>
                </a>
                <a href="index.html" target="_blank">
                  <div class="footer-icon">
                    <i class="fab fa-linkedin-in"></i>
                  </div>
                </a>
                <a href="index.html" target="_blank">
                  <div class="footer-icon">
                    <i class="fab fa-instagram"></i>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-bottom clear-fix">
        <div class="container">
          <div class="row clearfix">
            <div class="footer-copyright column column-2">
              &copy; Copyright <span id="year"></span>,Built by&nbsp;<a href="https://themesawesome.com/"
                class="text-green">Themes
                Awesome</a>
            </div>
            <div class="column column-2 footer-nav">
              <div class="footer-menu-wrapper">
                <div class="footer-menu">
                  <a class="footer-link" href="index.html">Home</a>
                </div>
                <div class="footer-menu">
                  <a class="footer-link" href="service.html">Services</a>
                </div>
                <div class="footer-menu">
                  <a class="footer-link" href="about.html">About</a>
                </div>
                <div class="footer-menu">
                  <a class="footer-link" href="blog.html">Blog</a>
                </div>
                <div class="footer-menu">
                  <a class="footer-link" href="contact.html">Contact</a>
                </div>
                <div class="footer-menu">
                  <a class="footer-link" href="Appointment.html">Appointment</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--END FOOTER-->
  </div>
  <!--- MAIN WRAPPER END -->

  <!-- Footer Scripts 
                        =====================-->

  <!-- External -->
  <script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('/js/aos.js') }}"></script>
  <script src="{{ asset('/js/jquery.smartmenus.min.js') }}"></script>
  <script src="{{ asset('/js/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('/js/lightgallery.min.js') }}"></script>
  <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/js/isotope.js') }}"></script>
  <script src="{{ asset('/js/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('/js/jquery.sticky-kit.min.js') }}"></script>
  <script src="{{ asset('/js/main.js') }}"></script>
</body>

</html>