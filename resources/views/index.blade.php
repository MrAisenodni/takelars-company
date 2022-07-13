@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div id="content" class="content-wrapper clearfix">
    <!--SWIPER START-->
    <section class="header-swiper">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="swiper-bg" style="
              background: url('/images/sliders/slider-1.jpg');
              background-size: cover;
              background-position: center center;
            ">
              <div class="header-text-wrap">
                <div class="container">
                  <div class="row header-text">
                    <img src="/images/shape2.png" alt="header-shape" class="header-shape" />
                    <div class="header-title">
                      <p class="text-white">welcome</p>
                    </div>
                    <div class="header-sub-title">
                      <h1 class="text-white">
                        We’re professionals <br> for growing your business!
                      </h1>
                    </div>
                    <div class="header-desc">
                      <p class="text-white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.
                      </p>
                    </div>
                    <div class="header-button">
                      <p class="learn-more">
                        <a class="text-white" href="about.html">LEARN MORE</a>
                        <i class="fas fa-long-arrow-alt-right text-white"></i>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="swiper-bg" style="
                  background: url('images/hero-image.png');
                  background-size: cover;
                  background-position: center center;
                ">
              <div class="header-text-wrap">
                <div class="container">
                  <div class="row header-text">
                    <img src="images/shape2.png" alt="header-shape" class="header-shape" />
                    <div class="header-title">
                      <p class="text-white">services</p>
                    </div>
                    <div class="header-sub-title">
                      <h1 class="text-white">
                        Get guaranteed success <br> with our advisors!
                      </h1>
                    </div>
                    <div class="header-desc">
                      <p class="text-white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.
                      </p>
                    </div>
                    <div class="header-button">
                      <p class="learn-more">
                        <a class="text-white" href="about.html">LEARN MORE</a>
                        <i class="fas fa-long-arrow-alt-right text-white"></i>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </section>
    <!--END SWIPER-->

    <!---ABOUT START-->
    <section class="About">
      <div class="container">
        <div class="row clearfix">
          <div class="column column-2 about-section">
            <div class="about-section-title">
              <h2 class="text-blue">The Corporate Consulting Edge.</h2>
              <hr class="left-hr" />
              <p class="sub-title">
                Lorem ipsum dolor sit amet consectetur
              </p>
              <p class="text-gray about-desc">
                Sed ut perspiciatis unde omnis iste natus error sit quasi voluptatem accusantium doloremque
                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.
              </p>
            </div>
          </div>
          <div class="column column-2 gallery-section">
            <div class="gallery" id="lightGallery">
              <div data-src="/images/gallery-image1.png" data-responsive-src="/images/gallery-image1.png"
                data-aos="fade-up" data-aos-duration="3100" class="img-gallery-wrap">
                <a href="#">
                  <div class="img-gallery">
                    <img class="res-img gallery-image" src="images/gallery-image1.png" alt="image-1" />
                    <div class="on-hover-component">
                      <i class="fas fa-search hover-icon"></i>
                    </div>
                  </div>
                </a>
              </div>
              <div data-src="images/gallery-image2.png" data-responsive-src="images/gallery-image2.png"
                data-aos="fade-up" data-aos-duration="3100" class="img-gallery-wrap">
                <a href="#">
                  <div class="img-gallery">
                    <img class="res-img gallery-image" src="images/gallery-image1.png" alt="image-2" />
                    <div class="on-hover-component">
                      <i class="fas fa-search hover-icon"></i>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row clearfix about-desc">
          <div class="column column-2 about-img-tablet" data-aos="fade-right" data-aos-duration="3100">
            <img class="images" src="images/image.png" alt="img" />
          </div>
          <div class="column column-2 about-text-wrapper">
            <div class="row about-text">
              <p class="text-gray">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.
              </p>
              <div class="about-button" data-aos="fade-up" data-aos-duration="3100">
                <a href="about.html" class="button style-2"> About Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---END ABOUT-->

    <!---SERVICES START-->
    <section class="Services">
      <div class="container">
        <div class="row">
          <div class="services-text">
            <div class="services-title">
              <h3 class="text-blue text-bold">
                17 Years of experience in Financial & Business Services.
              </h3>
              <p class="text-gray">
                Numquam quibusdam id natus consequatur accusantium corporis
                saepe placeat veniam corrupti, quasi quo est in impedit
                nihil odio mollitia debitis quae aliquam.
              </p>
              <div class="service-button">
                <a href="service.html" class="button style-3">View Services</a>
              </div>
            </div>
          </div>
          <div class="service-card-loop">
            <div class="row">
              <div class="service-card-wrapper card-loop-tablet" data-aos="fade-up" data-aos-duration="3100">
                <div class="services-card">
                  <div class="service-images">
                    <img class="card-images services-card-img" src="images/service-card-img1.png" alt="service image"
                      width="70" />
                  </div>
                  <div class="service-desc">
                    <div class="services-card-body">
                      <p class="card-title">Risk Management</p>
                      <p class="service-card-desc">
                        Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. At incidunt maiores officia
                      </p>
                    </div>
                  </div>
                </div>
                <div class="services-card">
                  <div class="service-images">
                    <img class="card-images services-card-img" src="images/service-card-img2.png" alt="service image"
                      width="70" />
                  </div>
                  <div class="service-desc">
                    <div class="services-card-body">
                      <p class="card-title">Market Research</p>
                      <p class="service-card-desc">
                        Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. At incidunt maiores officia
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="service-card-wrapper card-loop-tablet" data-aos="fade-up" data-aos-duration="3100">
                <div class="services-card">
                  <div class="service-images">
                    <img class="card-images services-card-img" src="images/service-card-img3.png" alt="service image"
                      width="70" />
                  </div>
                  <div class="service-desc">
                    <div class="services-card-body">
                      <p class="card-title">Business Consulting</p>
                      <p class="service-card-desc">
                        Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. At incidunt maiores officia
                      </p>
                    </div>
                  </div>
                </div>
                <div class="services-card">
                  <div class="service-images">
                    <img class="card-images services-card-img" src="images/service-card-img4.png" alt="service image"
                      width="70" />
                  </div>
                  <div class="service-desc">
                    <div class="services-card-body">
                      <p class="card-title">Financial Consulting</p>
                      <p class="service-card-desc">
                        Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. At incidunt maiores officia
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---END SERVICES-->

    <!---TEAM START
              ==================================-->
    <section class="Team">
      <div class="container">
        <div class="row">
          <div class="column column-4 team-section-desc">
            <div class="team-title">
              <p class="text-gray letter-space5">best team</p>
              <h3 class="text-blue">Our Advisors</h3>
              <hr class="left-hr mb-3" />
            </div>
            <div class="team-body">
              <p class="text-gray">
                Sed ut perspiciatis unde omnis iste natus error sit
                voluptatem accusantium doloremque laudantium.
              </p>
              <a href="about.html">View All Team</a>
            </div>
          </div>
          <div class="team-list">
            <div class="column column-3 team-wrapper">
              <div class="team-img-wrapper">
                <div class="team-img">
                  <img class="res-img" src="images/team-image-wrapper1.png" alt="team-images" />
                  <div class="overlay">
                    <div class="overlay-body">
                      <p class="text-white">
                        At vero eos et accusamus et iusto odio dignissimos
                        ducimus qui blanditiis praesentium voluptatum
                      </p>
                      <div class="overlay-icon row">
                        <a href="index.html" target="_blank">
                          <div class="icon">
                            <i class="fab fa-twitter"></i>
                          </div>
                        </a>
                        <a href="index.html" target="_blank">
                          <div class="icon">
                            <i class="fab fa-facebook-f"></i>
                          </div>
                        </a>
                        <a href="index.html" target="_blank">
                          <div class="icon">
                            <i class="fab fa-linkedin-in"></i>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="team-desc">
                  <p class="team-name">Joye Byoend</p>
                  <p class="team-job">Chief Operating</p>
                </div>
              </div>
            </div>
            <div class="column column-3 team-wrapper">
              <div class="team-img-wrapper">
                <div class="team-img">
                  <img class="res-img" src="images/team-image-wrapper2.png" alt="team-images" />
                  <div class="overlay">
                    <div class="overlay-body">
                      <p class="text-white">
                        At vero eos et accusamus et iusto odio dignissimos
                        ducimus qui blanditiis praesentium voluptatum
                      </p>
                      <div class="overlay-icon row">
                        <a href="index.html" target="_blank">
                          <div class="icon">
                            <i class="fab fa-twitter"></i>
                          </div>
                        </a>
                        <a href="index.html" target="_blank">
                          <div class="icon">
                            <i class="fab fa-facebook-f"></i>
                          </div>
                        </a>
                        <a href="index.html" target="_blank">
                          <div class="icon">
                            <i class="fab fa-linkedin-in"></i>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="team-desc">
                  <p class="team-name">Charles Leemen</p>
                  <p class="team-job">CEO</p>
                </div>
              </div>
            </div>
            <div class="column column-3 team-wrapper">
              <div class="team-img-wrapper">
                <div class="team-img">
                  <img class="res-img" src=" images/team-image-wrapper3.png" alt="team-images" />
                  <div class="overlay">
                    <div class="overlay-body">
                      <p class="text-white">
                        At vero eos et accusamus et iusto odio dignissimos
                        ducimus qui blanditiis praesentium voluptatum
                      </p>
                      <div class="overlay-icon row">
                        <a href="index.html" target="_blank">
                          <div class="icon">
                            <i class="fab fa-twitter"></i>
                          </div>
                        </a>
                        <a href="index.html" target="_blank">
                          <div class="icon">
                            <i class="fab fa-facebook-f"></i>
                          </div>
                        </a>
                        <a href="index.html" target="_blank">
                          <div class="icon">
                            <i class="fab fa-linkedin-in"></i>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="team-desc">
                  <p class="team-name">Lussy Anderson</p>
                  <p class="team-job">Founder</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---END TEAM-->

    <!---EXPERIENCE START
              ==================================-->
    <section class="Experience">
      <div class="container">
        <div class="row">
          <div class="column column-1 experience-body">
            <h3 class="text-white">
              We have 17 years experience in consultancy
            </h3>
            <p>
              Sed ut perspiciatis unde omnis iste natus sit voluptatem
              accusantium doloremque
            </p>
            <div class="experience-button">
              <a href="Appointment.html" class="button style-5" role="button">Get Appointment</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---END EXPRERIENCE-->

    <!---BLOG START
              ==================================-->
    <section class="Blog">
      <div class="container">
        <div class="row">
          <div class="blog-title-wrap">
            <div class="column column-2 blog-index-tablet">
              <div class="blog-title">
                <p class="title-text letter-space5">blog post</p>
                <h3 class="text-blue">Our Latest News.</h3>
                <hr class="left-hr" />
                <p class="text-gray">
                  Sed ut perspiciatis unde omnis iste natus sit voluptatem
                  accusantium doloremque laudantium.
                </p>
              </div>
            </div>
            <div class="column column-2 blog-index-tablet">
              <div class="blog-button" data-aos="fade-up" data-aos-duration="3500">
                <a class="button style-2" href="blog.html"> View All News </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="blog-loop">
            <div class="column column-4 blog-list-wrapper">
              <div class="blog-card card">
                <div class="card-img-wrapper">
                  <div class="card-img-top img-zoom-wrapper">
                    <img class="res-img card-img" src="images/res-img-card-img1.png" alt="card-img" />
                  </div>
                  <div class="card-category">
                    <p>engineering</p>
                  </div>
                </div>
                <div class="card-body">
                  <p class="card-title">
                    <a href="singlePost.html">Suspend ullam</a>
                  </p>
                  <p class="card-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut...
                  </p>
                  <div class="card-date">
                    <small>September 25, 2018</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="column column-4 blog-list-wrapper">
              <div class="blog-card card">
                <div class="card-img-wrapper">
                  <div class="card-img-top img-zoom-wrapper">
                    <img class="res-img card-img" src="images/res-img-card-img2.png" alt="card-img" />
                  </div>
                  <div class="card-category">
                    <p>marketing</p>
                  </div>
                </div>
                <div class="card-body">
                  <p class="card-title">
                    <a href="singlePost.html">Proin In Orci Quis Elit</a>
                  </p>
                  <p class="card-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut...
                  </p>
                  <div class="card-date">
                    <small>September 25, 2018</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="column column-4 blog-list-wrapper">
              <div class="blog-card card">
                <div class="card-img-wrapper">
                  <div class="card-img-top img-zoom-wrapper">
                    <img class="res-img card-img img-zoom-wrapper" src="images/res-img-card-img3.png"
                      alt="card-img" />
                  </div>
                  <div class="card-category">
                    <p>resource</p>
                  </div>
                </div>
                <div class="card-body">
                  <p class="card-title">
                    <a href="singlePost.html">Sed Varius Eros Eu Ac</a>
                  </p>
                  <p class="card-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut...
                  </p>
                  <div class="card-date">
                    <small>September 25, 2018</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="column column-4 blog-list-wrapper">
              <div class="blog-card card">
                <div class="card-img-wrapper">
                  <div class="card-img-top img-zoom-wrapper">
                    <img class="res-img card-img" src="images/res-img-card-img4.png" alt="card-img" />
                  </div>
                  <div class="card-category">
                    <p>business</p>
                  </div>
                </div>
                <div class="card-body">
                  <p class="card-title">
                    <a href="singlePost.html">Curabitur Augue Eros</a>
                  </p>
                  <p class="card-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut...
                  </p>
                  <div class="card-date">
                    <small>September 25, 2018</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---END BLOG-->

    <!---NEWSLETTER START
              ==================================-->
    {{-- <section class="Newsletter">
      <div class="container">
        <div class="row">
          <div class="column column-2 newsletter-text">
            <div class="newsletter-title clearfix">
              <h3>Newsletter</h3>
              <p>Keep up to date - get updates with latest topics</p>
            </div>
          </div>
          <div class="column column-2 newsletter-form-input">
            <div class="newsletter-form clearfix">
              <form>
                <input type="text" placeholder="Your Email" class="newsletter-input" />
              </form>
              <button class="button style-6">Sign me up!</button>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    <!---END NEWSLETTER-->
  </div>
@endsection