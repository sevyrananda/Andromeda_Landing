@extends('layout.app')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero-animated" class="hero-animated d-flex align-items-center" style="background-color: #fff;">
  <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
    <img src="{{ asset('HeroBiz/assets/img/DIKO TRANSPARANT.png') }}" class="img-fluid animated" style="width: 370px;">
    <h2>Selamat Datang di <span>DIKO POS</span></h2>
    <p>Kelola Pinjaman dan Laporan Keuangan dengan Lebih Mudah!</p>
    <div class="d-flex">
      <a href="#about" class="btn-get-started scrollto" style="background-color: #0C356A;">Get Started</a>
      <a href="https://youtu.be/4ZoWQeCO0CI" class="glightbox btn-watch-video d-flex align-items-center" style="color: #0C356A;"><i class="bi bi-play-circle" style="color: #0C356A;"></i><span>Watch Video</span></a>
    </div>
  </div>
</section><!-- End Clients Section -->

<main id="main">
  <!-- ======= About Section ======= -->
  <section id="about" class="about" style="background-color: #485664; margin-top: 10px;">
    <div class="container" data-aos="fade-up">
      <div class="flex" style="background-color: #485664;">
        <div class="row">
          <div class="col-md-6">
            <img src="{{ asset('HeroBiz/m1.png') }}" class="img-fluid animated fill-shadow" alt="Gambar DIKO POS">
          </div>
          <div class="col-md-6 mt-5">
            <h2 style="color: #fff;">Bagaimana Diko POS membantu Anda?</h2>
            <ul class="list-group" style="color: #fff;">
              <li class="list-group-item d-flex align-items-center">
                <i class="bi bi-check-circle text-success me-2"></i>
                <span>Pelayanan terbaik dengan kejujuran dan profesionalisme dalam setiap transaksi.</span>
              </li>
              <li class="list-group-item d-flex align-items-center">
                <i class="bi bi-check-circle text-success me-2"></i>
                <span>Layanan simpan pinjam yang terintegrasi dengan sistem inventori, proyek, dan penggajian.</span>
              </li>
              <li class="list-group-item d-flex align-items-center">
                <i class="bi bi-check-circle text-success me-2"></i>
                <span>Keamanan operasional dengan hak akses menggunakan fitur tertentu</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
  </section><!-- End About Section -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="zoom-out" style="margin-top: 100px;">
      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="{{ asset('HeroBiz/assets/img/clients/client-1.png') }}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{ asset('HeroBiz/assets/img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{ asset('HeroBiz/assets/img/clients/client-3.png') }}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{ asset('HeroBiz/assets/img/clients/client-4.png') }}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{ asset('HeroBiz/assets/img/clients/client-5.png') }}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{ asset('HeroBiz/assets/img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{ asset('HeroBiz/assets/img/clients/client-7.png') }}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{ asset('HeroBiz/assets/img/clients/client-8.png') }}" class="img-fluid" alt=""></div>
        </div>
      </div>

    </div>
  </section><!-- End Clients Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Fitur Diko POS</h2>
        <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas
          asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
      </div>
      <ul class="nav nav-tabs row gy-4 d-flex justify-content-center">
        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
            <i class="bi bi-binoculars color-cyan"></i>
            <h4>Integrated</h4>
          </a>
        </li><!-- End Tab 1 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
            <i class="bi bi-box-seam color-indigo"></i>
            <h4>Safaty</h4>
          </a>
        </li><!-- End Tab 2 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
            <i class="bi bi-brightness-high color-teal"></i>
            <h4>Monitoring</h4>
          </a>
        </li><!-- End Tab 3 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
            <i class="bi bi-command color-red"></i>
            <h4>Realtime</h4>
          </a>
        </li><!-- End Tab 4 Nav -->
      </ul>

      <div class="tab-content">

        <div class="tab-pane active show" id="tab-1">
          <div class="row gy-4 justify-content-center">
            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
              <h3>Kemudahan Akses Antar Cabang Terpadu</h3>
              <p class="fst-italic">
                Proses Simpan Pinjam yang Terintegrasi memastikan laporan keuangan perusahaan Anda selalu terlihat
                secara real-time, sehingga pengambilan keputusan bisnis menjadi lebih mudah dan tepat waktu.
              </p>
            </div>
            <div class="col-lg-2 order-1 text-center" data-aos="fade-up" data-aos-delay="200">
              <img src="{{ asset('HeroBiz/assets/img/features-1.svg') }}" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 1 -->

        <div class="tab-pane" id="tab-2">
          <div class="row gy-4 justify-content-center">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>Keamanan Data Terjaga</h3>
              <p class="fst-italic">
                Kenyamanan Anda dalam mengakses data di DikoSP menjadi prioritas utama kami. Kami menggunakan sistem
                enkripsi modern dan proteksi data yang kuat untuk memastikan keamanan data Anda tanpa memerlukan
                sertifikat.
              </p>
            </div>
            <div class="col-lg-2 order-1 text-center">
              <img src="{{ asset('HeroBiz/assets/img/features-2.svg') }}" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 2 -->

        <div class="tab-pane" id="tab-3">
          <div class="row gy-4 justify-content-center">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>Pantau Persediaan dengan Lebih Mudah</h3>
              <p class="fst-italic">
                Anda dapat dengan mudah memantau stok barang, baik di antara gudang maupun cabang, sehingga Anda
                selalu tahu bagaimana perputaran persediaan dengan lebih efisien
              </p>
            </div>
            <div class="col-lg-2 order-1 text-center">
              <img src="{{ asset('HeroBiz/assets/img/features-3.svg') }}" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 3 -->

        <div class="tab-pane" id="tab-4">
          <div class="row gy-4 justify-content-center">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>Pengelolaan Simpan Pinjam yang Efisien</h3>
              <p class="fst-italic">
                Simpan Pinjam dapat Anda kelola dengan mudah dan efisien secara real-time. Nikmati kemudahan pengingat
                jatuh tempo untuk memastikan rencana keuangan Anda tetap teratur dan terukur
              </p>
            </div>
            <div class="col-lg-2 order-1 text-center">
              <img src="{{ asset('HeroBiz/assets/img/features-4.svg') }}" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 4 -->
      </div>
    </div>
  </section><!-- End Features Section -->



  <!-- ======= Pricing Section ======= -->
  <section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Harga Diko POS</h2>
        <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas
          asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
      </div>

      <div class="row gy-4">

        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="pricing-item">

            <div class="pricing-header">
              <h3>Free Plan</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
            </div>

            <ul>
              <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
              <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
              <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</span></li>
              <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
              <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>

            <div class="text-center mt-auto">
              <a href="#" class="buy-btn">Buy Now</a>
            </div>

          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
          <div class="pricing-item featured">

            <div class="pricing-header">
              <h3>Business Plan</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
            </div>

            <ul>
              <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
              <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
              <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</spa>
              </li>
              <li><i class="bi bi-dot"></i> <span>Pharetra massa massa ultricies</spa>
              </li>
              <li><i class="bi bi-dot"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>

            <div class="text-center mt-auto">
              <a href="#" class="buy-btn">Buy Now</a>
            </div>

          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
          <div class="pricing-item">

            <div class="pricing-header">
              <h3>Developer Plan</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
            </div>

            <ul>
              <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
              <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
              <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</span></li>
              <li><i class="bi bi-dot"></i> <span>Pharetra massa massa ultricies</span></li>
              <li><i class="bi bi-dot"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>

            <div class="text-center mt-auto">
              <a href="#" class="buy-btn">Buy Now</a>
            </div>

          </div>
        </div><!-- End Pricing Item -->

      </div>

    </div>
  </section><!-- End Pricing Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">
      <h2 style="color:#fff; text-align:center;">Testimonial</h2>
      <div class="testimonials-slider swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{ asset('HeroBiz/assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium
                quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{ asset('HeroBiz/assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{ asset('HeroBiz/assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
                tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{ asset('HeroBiz/assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
                minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{ asset('HeroBiz/assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa
                labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

  <!-- ======= Featured Services Section ======= -->
  <section id="featured-services" class="featured-services">
    <div class="container">

      <div class="row gy-4">

        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
          <div class="service-item position-relative">
            <div class="icon" style="text-align: center;">
              <img src="{{ asset('HeroBiz/time-management.png') }}" alt="manage" width="50" height="50">
              <!-- <i class="bi bi-activity icon"></i> -->
            </div>
            <!-- <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4> -->
            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Pengelolaan keuangan menjadi lebih efisien
              dan tertib</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon" style="text-align: center;">
              <img src="{{ asset('HeroBiz/global-network.png') }}" alt="network" width="45" height="45">
              <!-- <i class="bi bi-bounding-box-circles icon"></i> -->
            </div>
            <!-- <h4><a href="" class="stretched-link">Sed ut perspici</a></h4> -->
            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Solusi terpadu untuk mengelola jaringan
              cabang</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon" style="text-align: center;">
              <img src="{{ asset('HeroBiz/transaction.png') }}" alt="transaction" width="45" height="45">
              <!-- <i class="bi bi-calendar4-week icon"></i> -->
            </div>
            <!-- <h4><a href="" class="stretched-link">Magni Dolores</a></h4> -->
            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Proses transaksi bisnis lebih lancar dan
              instan</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon" style="text-align: center;">
              <!-- <i class="bi bi-broadcast icon"></i> -->
              <img src="{{ asset('HeroBiz/responsive-design.png') }}" alt="device" width="45" height="45">
            </div>
            <!-- <h4><a href="" class="stretched-link">Nemo Enim</a></h4> -->
            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Nikmati kemudahan akses melalui semua
              perangkat</p>
          </div>
        </div><!--End Service Item-->

      </div>

    </div>
  </section><!-- End Featured Services Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      <div class="section-header">
        <h2>Contact</h2>
        <p>Hubungi Kontak dibawah ini</p>
      </div>
    </div>

    <div class="container">
      <div class="row gy-5">
        <div class="col-lg-6">
          <div class="card flex-fill shadow p-3">
            <div class="card-body">
              <h3>More Info</h3>
              <p>Hubungi Kami dibawah ini</p>
              <br>
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Alamat:</h4>
                  <p>Office : JL. Bulu Mas II No. 1 - Kanigoro - Kota Madiun - Jawa Timur<br><br>
                    Branch Office : Perum Griya Gadang Sejahtera Kav. 14 Gadang - Sukun - Kota Malang - Jawa Timur </p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Alamat Email:</h4>
                  <p>cs@marstech.co.id</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Nomor Telepon:</h4>
                  <p>Office : 0351-2812555<br>
                    Marketing : 0811-3636-09 </p>
                </div>
              </div><!-- End Info Item -->
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card flex-fill shadow">
            <div class="card-body">
              <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.428402113363!2d111.54006207413555!3d-7.6369929755328085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bf36978c3bf3%3A0x8c1997902afb269f!2sMARSTECH!5e0!3m2!1sid!2sid!4v1690605880803!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div><!-- End Google Maps -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection