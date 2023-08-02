@extends('layoutsFront.base')
    @section('content')
    <section id="" class="">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2> Reservasi Kamar</h2>
        <p></p>
      </div>

      <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-5">
          <div class="about-img">
            <img src="{{ asset ('image/'.$room->image) }}" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-7">
          <h3 class="pt-0 pt-lg-5">{{ $room->name }}</h3>
          <!-- Tab Content -->
          <div class="tab-content">


            <div class="col-lg-8">
                <form class="user" method="POST" action="{{ route('submitbooking') }}">
                    @csrf
                    <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required>
                    </div>
                    <input type="hidden" value="{{ $id }}" name="room_id">
                    <div class="col-md-6 form-group mt-3 mt-md-3">
                        <h6>Check-In</h6>
                        <input type="date" class="form-control" name="date_in" id="date_in" placeholder="" required>
                      </div>
                      <div class="col-md-6 form-group mt-3 mt-md-3">
                        <h6>Check-Out</h6>
                        <input type="date" class="form-control" name="date_out" id="date_out" placeholder="" required>
                      </div>
                      <button type="submit" class="btn-price mt-2" style="border:none">
                        Kirim
                    </button>
                    </div>

                </form>
              </div>

          </div>

        </div>

      </div>

    </div>
  </section>

    @endsection
