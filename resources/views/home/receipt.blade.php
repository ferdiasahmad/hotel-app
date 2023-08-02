@extends('layoutsFront.base')
@section('content')
<section id="" class="">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Kwitansi Reservasi Kamar</h2>
            <p></p>
        </div>

        <div class="inforeceipt">
            <form class="row g-3">
                <div class="col-md-6">
                    {{-- {{ dd($reservation) }} --}}
                    {{-- @foreach ($reservation as $r) --}}
                  <label class="form-label">Reservasi Id</label>
                  {{-- {{ dd($r) }} --}}
                    <p>{{ $reservation->id }}</p>
                    <hr>
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Nama Pelanggan</label>
                  <p>{{ $reservation->name }}</p>
                  <hr>
                </div>
                <div class="col-md-6">
                  <label for="inputAddress" class="form-label">Date In</label>
                  <p>{{ $reservation->date_in }}</p>
                  <hr>
                </div>
                <div class="col-md-6">
                  <label for="inputAddress2" class="form-label">Date In</label>
                  <p>{{ $reservation->date_out }}</p>
                  <hr>
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Nama Kamar</label>
                  <p>{{ $reservation->room->name }}</p>
                  <hr>
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">Total Pembayaran</label>
                  <p>{{ $reservation->total_payment }}K</p>
                  <hr>
                </div>
                <div class="col-md-2 ">
                  <label for="inputState" class="form-label mt-1">Status  :</label>
                  <a href="#"
                    class="btn btn-sm btn-success align-center mr-3 "><i class="fas fa-edit mr-1 "></i>Lunas</a>
                </div>

              </form>
            </div>
          </div>
        </div>
        {{-- @endforeach --}}
    </div>
</section>
@endsection
