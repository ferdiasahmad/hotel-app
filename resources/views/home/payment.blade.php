@extends('layoutsFront.base')
@section('content')
<section id="" class="">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Pembayaran Reservasi Kamar</h2>
            <p></p>
        </div>

        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-5">
                <div class="about-img">
                    <img src="{{ asset('assets/frontend/img/about.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-7">
                <h3 class="pt-0 pt-lg-5"></h3>
                <!-- Tab Content -->
                <div class="tab-content">

                    <div class="col-lg-8">
                        <form class="user" method="POST" action="{{route('uploadpayment',$id)}}"
                            enctype="multipart/form-data">
                            @csrf
                            <h4 class="pt-0 pt-lg-2 mt-md-3">Silahkan transfer ke rekening ini</h4>
                            <img src="{{ asset('image/nomer_rekening.jpg') }}" alt="" class="flex-shrink-0">
                            <div class="row">
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlFile1">Unggah Bukti Pembayaran</label>
                                    <input type="file" class="form-control-file mt-2" id="exampleFormControlFile1"
                                        name="invoice">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">
                                    Kirim
                                </button>
                        </form>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
@endsection
