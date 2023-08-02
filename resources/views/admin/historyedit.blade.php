@extends('layouts.base')
@section('content')

    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Riwayat Reservasi Customer</h2>
            <p></p>
        </div>

        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-5">
                <div class="about-img">
                    <a href="{{ asset ('image/'.$reservation->invoice) }}"><img src="{{ asset ('image/'.$reservation->invoice) }}" class="img-fluid" alt=""></a>

                </div>
            </div>

            <div class="col-lg-7">
                <!-- Tab Content -->
                <div class="tab-content">

                    <div class="col-lg-8">
                        <form class="reservation" action="{{ route('history.update',$reservation) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <h6>Costumer Id</h6>
                                <input type="number" class="form-control bg-light border-1 small" name="customer_id"
                                    id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ketikkan Username"
                                    value="{{ $reservation->customer_id }}">
                            </div>
                            <div class="form-group">
                                <h6>Kamar Id</h6>
                                <input type="number" class="form-control bg-light border-1 small" name="room_id"
                                    id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ketikkan Email"
                                    value="{{ $reservation->room_id }}">
                            </div>
                            <div class="form-group">
                                <h6>Nama</h6>
                                <input type="text" class="form-control bg-light border-1 small" name="name"
                                    id="exampleInputEmail" aria-describedby="emailHelp"
                                    placeholder="Ketikkan Nomor Telepon" value="{{ $reservation->name }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Status</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="status"
                                    value="{{ $reservation->status }}">
                                    <option value="0" {{ $reservation->status == 0 ? 'selected' : '' }} >Menunggu</option>
                                    <option value="1" {{ $reservation->status == 1 ? 'selected' : '' }}>Konfirmasi</option>
                                    <option value="2" {{ $reservation->status == 2 ? 'selected' : '' }}>Batal</option>
                                    <option value="3" {{ $reservation->status == 3 ? 'selected' : '' }}>Tuntas</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <h6>Total Pembayaran</h6>
                                <input type="number" class="form-control bg-light border-1 small" name="total_payment"
                                    id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ketikkan Password"
                                    value="{{ $reservation->total_payment }}">
                            </div>
                    </div>
                    <button class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Simpan</span>
                    </button>
                    <hr>
                    </form>
                </div>

            </div>

        </div>

     </div>

    </div>



@endsection
