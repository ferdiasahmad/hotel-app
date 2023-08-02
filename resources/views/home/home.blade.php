@extends('layoutsFront.base')
@include('layoutsFront.heroanimated')
@section('content')
 <!-- ======= Services Section ======= -->
 <section id="kamar" class="services">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Kamar Kami</h2>
        <p>Kami menyediakan berbagai jenis kamar yang dapat disesuaikan dengan kebutuhan Anda, mulai dari kamar standar yang nyaman hingga suite mewah yang menghadirkan pengalaman menginap yang istimewa. Setiap kamar kami dilengkapi dengan fasilitas modern seperti AC untuk menjaga suhu yang nyaman, TV layar datar dengan saluran kabel premium, Wi-Fi gratis untuk tetap terhubung dengan dunia luar, dan meja kerja yang nyaman untuk tamu yang bepergian untuk bisnis.
        </p>
      </div>

      <div class="row gy-5">

        @foreach ($room as $r )
        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset ('image/'.$r->image) }}" class="img-fluid" alt="">
              </div>

              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-activity"></i>
                </div>
                <a href="{{ route('detailRoom', $r->id) }}" class="stretched-link">
                  <h3>{{ $r->name }}</h3>
                </a>
                <p class="mb-3">{{ $r->description }}</p>
                <div class="row">
                  <div class="col-6">
                      <a href="#about" class="btn-price">Reservasi</a>
                  </div>
                  <div class="col-6">
                      <h5>{{ $r->price }}<span>K / Malam</span></h5>
                      </div>

                </div>
              </div>
            </div>
          </div>
          @endforeach
      </div>

    </div>
</section>
<section id="about" class="services">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Tentang Kami</h2>
        <p>Di My Hotel, kepuasan tamu adalah prioritas utama kami. Kami berusaha untuk menciptakan lingkungan yang nyaman dan ramah, di mana Anda dapat merasa sepenuhnya di rumah saat menjelajahi destinasi baru atau melakukan perjalanan bisnis. Dengan tim yang berdedikasi dan berpengalaman, kami berkomitmen untuk memberikan pelayanan yang memenuhi standar tertinggi, memastikan setiap detail diurus dengan sempurna.
        </p>
      </div>
      <div class="row gy-5">


    </div>
</section>
<section id="contact" class="contact">
    <div class="container">

      <div class="section-header">
        <h2>Kontak Kami</h2>
      </div>

    </div>

    <div class="container">

      <div class="row gy-5 gx-lg-5">

        <div class="row-lg-4">

          <div class="info">
            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
                <p>Malang</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

          </div>

        </div>

        {{-- <div class="col-lg-8">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div><!-- End Contact Form --> --}}

      </div>

    </div>
  </section><!-- End Contact Section -->
@endsection
