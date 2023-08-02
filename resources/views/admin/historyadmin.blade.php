@extends('layouts.base')
@section('content')
    <div class="container" data-aos="fade-up">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Reservasi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama Kamar</th>
                            <th>Nama Admin</th>
                            <th>Nama Customer</th>
                            <th>Date In</th>
                            <th>Date Out</th>
                            <th>Total Pembayaran</th>
                            <th>Status</th>
                            <th>Bukti Pembayaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($reservation as $r )
                    <tbody>
                        <tr>
                            <td>{{ $r->id }}</td>
                            <td>{{ $r->room->name }}</td>
                            <td>{{ $r->management?$r->management->username:''}}</td>
                            <td>{{ $r->customer->username }}</td>
                            <td>{{ $r->date_in }}</td>
                            <td>{{ $r->date_out }}</td>
                            <td>{{ $r->total_payment }}</td>
                            <td>
                                @if($r->status =='0')
                                    Menunggu
                                @elseif ($r->status =='1')
                                    Konfirmasi
                                @elseif ($r->status == '2')
                                    Batal
                                @elseif ($r->status == '3')
                                    Tuntas
                                @endif
                            </td>
                            <td>{{ $r->invoice }}</td>
                            <td  class="d-flex justify-content-center" >
                                <a href="{{ route('history.edit', $r->id) }}"
                                    class="btn btn-sm btn-success align-center mr-3 "><i class="fas fa-edit mr-1 "></i>Edit</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
        </div>

    </div>

  @endsection
