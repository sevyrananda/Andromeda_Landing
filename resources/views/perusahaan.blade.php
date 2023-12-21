@extends('layout4.app')
@section('content')

 <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
        <div class="container position-relative" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-7 text-center">
              {{-- <img src="{{url('Arsha')}}/assets/img/team.jpg" alt="" style="max-width: 50%; height: auto;"> --}}
              <h1>Tentang <span>GODONG</span></h1>
              <p>Berkembang Bersama, Menyongsong Masa Depan</p>
              <p>"Solusi Terbaik untuk Management Keuangan Bisnis Anda"</p>
            </div>
            <div class="col-lg-5 text-center d-flex align-items-center justify-content-center">
                <a href="https://youtu.be/Rr4xhpbrqVE?si=voEuCn4k4CTjmmy0" class="glightbox play-btn mb-4"></a>
            </div>
          </div>
        </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">
    <section id="">
    <div class="container position-relative my-5" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-6">
        <div class="section-header">
            <h2>Filosofi Godong</h2>
        </div>
          <p>"Mekar dan Berkembang bersama Godong, Satukan Energi untuk Masa Depan UMKM yang Penuh Makna"</p><hr>
          <span>Godong bertekad untuk membantu dan mendukung UMKM di Indonesia untuk lebih berkembang dari saat ini. Dengan fitur dan layanan dari Godong, kami yakin akan memudahkan karyawan untuk melakukan pengelolaan terhadap transaksi maupun keuangan.  Godong hadir dengan berbagai ekosistem digital agar UMKM bisa lebih mudah dalam mengembangkan bisnisnya</span>
        </div>
        <div class="col-lg-6 text-center">
          <img src="{{url('Arsha')}}/assets/img/Godong.png" alt="" style="max-width: 50%; height: auto;">
        </div>
      </div>
    </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          {{-- <h2>Keterlibatan Godong dalam kemajuan UMKM Indonesia </h2> --}}
          <p>Keterlibatan Godong dalam kemajuan UMKM Indonesia </p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              {{-- <i class="bi bi-geo-alt"></i> --}}
              <h3>59</h3>
              <address>UMKM sudah Godong bantu untuk membangun kesadaran tentang betapa pentingnya digitalisasi
            </address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              {{-- <i class="bi bi-phone"></i> --}}
              <h3>30</h3>
              <p>Cakupan Kota maupun Kabupaten yang sudah terdigitalisasi oleh Godong
            </p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              {{-- <i class="bi bi-envelope"></i> --}}
              <h3>93</h3>
              <p>Pembaharuan teknologi digital Godong kembangkan untuk UMKM Indonesia</p>
            </div>
          </div>


        </div>

      </div>
    </section>
    <!-- End Contact Section -->

  </main><!-- End #main -->

@endsection
