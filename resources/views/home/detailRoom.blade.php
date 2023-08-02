@extends('layoutsFront.base')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Detail Kamar</h2>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->


    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img">
                <img src="{{ asset ('image/'.$room->image) }}" alt="" class="img-fluid">
              </div>
            </article><!-- End blog post -->
          </div>

          <div class="col-lg-4">

            <div class="sidebar">
                <div class="post-item">
                    <img src="assets/img/blog/blog-recent-1.jpg" alt="" class="flex-shrink-0">
                    <div>
                        <div class="row">
                            <div class="col-6">
                                <h3><a href="blog-post.html">{{ $room->name }}</a></h3>
                            </div>
                            <div class="col-6">
                                <h5>{{ $room->price }}<span> K/ Malam</span></h5>
                                </div>
                          </div>
                    </div>
              <p>
                {{ $room->description }}
              </p>
                    <a href="{{ route('booking',$room->id) }}" class="button-booking"><span>Pesan Sekarang</span></a>
                  </div><!-- End recent post item-->
            </div><!-- End Blog Sidebar -->
          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->


@endsection
