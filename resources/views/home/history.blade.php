@extends('layoutsFront.base')
@section('content')
<section id="" class="">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Riwayat Reservasi Kamar</h2>
        <p></p>
      </div>

      <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Riwayat Reservasi kamar anda </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Date In</th>
                            <th>Date Out</th>
                            <th>Total Pembayaran</th>
                            <th>Status</th>
                            <th>Bukti Pembayaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(Auth::check())
                        @foreach($reservation as $r )
                        <tr>
                            <td>{{ $r->id }}</td>
                            <td>{{ $r->date_in }}</td>
                            <td>{{ $r->date_out }}</td>
                            <td>{{ $r->total_payment }}K</td>
                            <td> @if($r->status =='0')
                                Menunggu
                            @elseif ($r->status =='1')
                                Konfirmasi
                            @elseif ($r->status == '2')
                                Batal
                            @elseif ($r->status == '3')
                                Tuntas
                            @endif</td>
                            <td><img src="{{ asset ('image/'.$r->invoice) }}" width="25px" alt=""></td>
                            <td  class="d-flex justify-content-center" >
                                @if($r->status =='0')
                                <a href="{{ route('payment',$r->id) }}"
                                    class="btn btn-sm btn-success align-center mr-3 "><i class="fas fa-edit mr-1 "></i>Pembayaran</a>
                                @elseif($r->status =='1')
                                <a href="{{ route('receipt',$r->id) }}"
                                    class="btn btn-sm btn-success align-center mr-3 "><i class="fas fa-edit mr-1 "></i>Kwitansi</a>
                                @elseif ($r->status == '3')
                                <a href="{{ route('receipt',$r->id) }}"
                                    class="btn btn-sm btn-success align-center mr-3 "><i class="fas fa-edit mr-1 "></i>Kwitansi</a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </section>
@endsection
