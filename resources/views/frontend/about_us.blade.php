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
  <!--END MISSIOn-->
</div>
@endsection