@extends('layouts.main')

@section('title', 'Tentang Kami')

@section('content')
<div class="header-text about" style='background: url("/images/sliders/slider-3.jpg") rgba(0, 0, 0, 0.5);'>
  <div class="container">
    <div class="header-title">
      <p class="text-white">TENTANG KAMI</p>
    </div>
    <div class="header-desc">
      <h1 class="text-white">Siapa kami?</h1>
    </div>
    <hr class="center-hr" />
  </div>
</div>

<div id="content" class="content-wrapper clearfix">
  <!--ABOUT START-->
  <section class="About-us">
    <div class="container">
      <div class="row">
        <div class="column column-2 about-img-wrapper">
          <img src="{{ asset('/images/meetup.jpg') }}" alt="about-img" class="res-img" />
        </div>
        <div class="column column-2 about-us">
          <div class="about-title">
            <h3 class="text-blue">Tentang Konsultan</h3>
          </div>
          <div class="about-body">
            <p>
              Mewujudkan Rumah Sakit Prima Melalui Akreditasi Untuk Peningkatan 
              Kinerja dan Mutu Layanan. Optimalisasi Kinerja dan Peningkatan Mutu 
              layanan rumah sakit melalui implementasi akreditasi rumah sakit 
              disertai penggunaan tools pengukuran kinerja manajemen rumah sakit 
              sesuai amanah undang- undang Nomor 44 tahun 2009
            </p>
          </div>
          {{-- <div class="about-name">
            <p class="text-blue ceo-name">
              Michel Zedda - CEO Consultant
            </p>
            <img src="images/signatur-michel3-1024x277@2x.png" alt="signature-img" class="signature-img" />
          </div> --}}
        </div>
      </div>
    </div>
  </section>
  <!--END ABOUT-->

  <!--MISSIOn START-->
  <section class="Teams bg-light-blue team-about">
    <div class="container">
      <div class="row">
        <div class="column column-2 about-us">
          <div class="about-title">
            <h3 class="text-blue">Our Vission and Mission</h3>
          </div>
          <div class="about-body">
            <p>
              <ul>
                <li>
                  Membimbing rumah sakit untuk siap akreditasi dan lulus dalam penilaian dengan predikat 
                  memuaskan. 
                </li>
                <li>
                  Memastikan peningkatan kinerja dan mutu rumah sakit tetap prima dalam 4 tahun selanjutnya 
                  setelah penilaian akreditasi
                </li>
                <li>
                  Aktif memberikan bantuan kepada stake holder rumah sakit dalam rangka pengembangan manajemen 
                  pelayanan kesehatan dan sumber daya manusia dalam institusi rumah sakit seiring meningkatnya 
                  pengetahuan, kesadaran dan tuntutan masyarakat terhadap jasa layanan kesehatan
                </li>
                <li>
                  Memastikan kepercayaan masyarakat terhadap rumah sakit ditandai peningkatan jumlah kunjungan 
                  dan pemeriksaan serta tindakan dengan tetap berfokus pada keselamatan pasien
                </li>
                <li>
                  Memastikan kepercayaan pihak eksternal baik pemerintah dan swasta lainnya dalam kerjasama 
                  pembiayaan layanan kesehatan untuk masyarakat di rumah sakit
                </li>
                <li>
                  Memastikan Peningkatan pendapatan pada revenue center serta pengendalian biaya pada cost center 
                  rumah sakit sehingga berdampak positif dalam pengembangan layanan kesehatan
                </li>
              </ul>
            </p>
          </div>
          {{-- <div class="about-name">
            <p class="text-blue ceo-name">
              Michel Zedda - CEO Consultant
            </p>
            <img src="images/signatur-michel3-1024x277@2x.png" alt="signature-img" class="signature-img" />
          </div> --}}
        </div>
        <div class="column column-2 about-img-wrapper">
          <img src="{{ asset('/images/mission.jpg') }}" alt="about-img" class="res-img" />
        </div>
      </div>
    </div>
  </section>
  <!--END MISSION-->

  <!--TEAM START-->
  <section class="Teams team-about">
    <div class="container">
      <div class="row clear-fix">
        <div class="team-title">
          <p class="text-light-gray text-center letter-space5">
            ORANG YANG TERLIBAT
          </p>
          <h3 class="text-blue text-center text-bold">
            Temui Pakar Kami
          </h3>
          <hr class="center-hr" />
        </div>
        <div class="column column-1 team-list">
          <div class="column column-4 about-team-wrapper">
            <div class="team-img-wrapper">
              <div class="team-img">
                <img class="res-img" src="{{ $provider->owner_photo }}" alt="team-images" width="252px" height="252px" />
                <div class="overlay">
                  <div class="overlay-body">
                    <p class="text-white">
                      Awali semua dengan senyuman. Sebab senyumnya akan mengalirkan energi positif.
                      Energi positif itulah yang menjadi penggagasmu.
                    </p>
                    <div class="overlay-icon row">
                      <a href="#" target="_blank">
                        <div class="icon">
                          <i class="fab fa-twitter"></i>
                        </div>
                      </a>
                      <a href="#" target="_blank">
                        <div class="icon">
                          <i class="fab fa-facebook-f"></i>
                        </div>
                      </a>
                      <a href="#" target="_blank">
                        <div class="icon">
                          <i class="fab fa-linkedin-in"></i>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="team-desc">
                <p class="text-blue team-name">{{ $provider->owner_name }}</p>
                <small class="text-gray">Direktur Utama</small>
              </div>
            </div>
          </div>
          <div class="column column-4 about-team-wrapper">
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
                <p class="text-blue team-name">Charles Leeman</p>
                <small class="text-gray">CEO</small>
              </div>
            </div>
          </div>
          <div class="column column-4 about-team-wrapper">
            <div class="team-img-wrapper">
              <div class="team-img">
                <img class="res-img" src="images/team-image-wrapper3.png" alt="team-images" />
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
                <p class="text-blue team-name">Lussy Anderson</p>
                <small class="text-gray">Chief Operating</small>
              </div>
            </div>
          </div>
          <div class="column column-4 about-team-wrapper">
            <div class="team-img-wrapper">
              <div class="team-img">
                <img class="res-img" src="images/team-image-wrapper4.png" alt="team-images" />
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
                <p class="text-blue team-name">Johanson</p>
                <small class="text-gray">Market Planning</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--END TEAM-->
</div>
@endsection