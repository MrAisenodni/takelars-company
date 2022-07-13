@extends('layouts.main')

@section('title', 'Kontak Kami')

@section('content')
<div id="content" class="content-wrapper clearfix">
  <div class="header-text contact-header">
    <div class="container">
      <div class="header-title">
        <p class="text-white">KONTAK</p>
      </div>
      <div class="header-desc">
        <h1 class="text-white">Hubungi Kami</h1>
      </div>
      <hr class="center-hr" />
    </div>
  </div>

  <!---CONTACT DETAIL START
                ==================================-->
  <section class="Contact-detail">
    <div class="container">
      <div class="row clearfix">
        <div class="column column-60 information-wrapper">
          <div class="row clearfix">
            <div class="column column-3 info-detail detail-tablet-1">
              <div class="contact-detail-title">
                <h2 class="text-bold">Detail Kontak.</h2>
                <hr class="left-hr mobile-hide" />
              </div>
            </div>
            <div class="column column-3 info-detail info-offset detail-tablet-2">
              <div class="office-detail">
                <p class="office-site">Kantor Pusat</p>
                <p class="contact-list">
                  {{ $provider->company_phone_number }} <br />
                  <span class="text-green">{{ $provider->company_email }}</span>
                </p>
              </div>
            </div>
            <div class="column column-3 info-detail detail-tablet-2">
              <div class="office-detail">
                <p class="office-site">Kantor Cabang</p>
                <p class="contact-list">
                  {{ $provider->owner_phone_number }} <br />
                  <span class="text-green">{{ $provider->owner_email }}</span>
                </p>
                <hr class="left-hr mobile">
              </div>
            </div>
          </div>
          <div class="row contact-desc clearfix">
            <p>
              Apakah Anda memiliki sesuatu dalam pikiran Anda untuk memberitahu kami? 
              Jangan ragu untuk menghubungi kami melalui formulir kontak kami.
            </p>
          </div>
          <div class="container office-info-wrapper clearfix">
            <div class="row">
              @if ($provider->owner_address)
                <div class="office-site-card bg-gray">
                  <div class="icon-site">
                    <i class="fas fa-map-marker-alt text-green"></i>
                  </div>
                  <div class="site-text">
                    <p class="text-bold site-type">Kantor Pusat:</p>
                    <p class="site-address">
                      {{ $provider->company_address }}
                    </p>
                  </div>
                </div>
                <div class="office-site-card bg-gray">
                  <div class="icon-site">
                    <i class="fas fa-map-marker-alt text-green"></i>
                  </div>
                  <div class="site-text">
                    <p class="text-bold site-type">Kantor Cabang:</p>
                    <p class="site-address">
                      {{ $provider->owner_address }}
                    </p>
                  </div>
                </div>
              @else
                <div class="office-site-card bg-gray" style="width: 100%">
                  <div class="icon-site">
                    <i class="fas fa-map-marker-alt text-green"></i>
                  </div>
                  <div class="site-text">
                    <p class="text-bold site-type">Kantor Pusat:</p>
                    <p class="site-address">
                      {{ $provider->company_address }}
                    </p>
                  </div>
                </div>
              @endif
            </div>
          </div>
        </div>
        <div class="column column-40">
          <div class="contact-form-wrap">
            <div class="contact-form">
              <form>
                <div class="input-field">
                  <input type="text" placeholder="Nama Lengkap" class="form-input input-spacer" />
                  <input type="email" placeholder="Email" class="form-input" />
                </div>
                <div class="input-field">
                  <input type="text" placeholder="Judul" class="form-input" />
                </div>
                <div class="input-field">
                  <textarea placeholder="Tuliskan pesan Anda" rows="10" class="form-textarea"></textarea>
                </div>
                <button class="button style-9 mt-2">Kirim</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--END CONTACT DETAIL-->

  <!---GOOGLE MAPS START
                ==================================-->
  <div class="GoogleMaps">
    <div class="mapouter">
      <div class="contact-map">
        <iframe id="gmap_canvas"
          src="https://maps.google.com/maps?q=Perumahan%20Bulak%20Kapal%20Permai&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
      </div>
    </div>
  </div>
  <!--GOOGLE MAPS END-->
</div>
@endsection