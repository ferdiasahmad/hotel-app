@extends('layouts.base')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Kamar</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama Admin</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Status</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($room as $r )
                    <tr>
                        <td>{{ $r->id }}</td>
                        <td>{{ $r->management?$r->management->username:''}}</td>
                        <td>{{ $r->name }}</td>
                        <td>{{ $r->description }}</td>
                        <td >{{ $r->status == '1' ? 'Available' : 'Not Available'}}</td>
                        <td>{{ $r->price }}</td>
                        <td><img src="{{ asset ('image/'.$r->image) }}" width="25px" alt=""></td>
                        <td  class="d-flex justify-content-center" >
                            <a href="{{ route('room.edit', $r->id) }}"
                                class="btn btn-sm btn-success align-center mr-3 "><i class="fas fa-edit mr-1 "></i>Edit</a>
                                <form id="delete-form{{ $r->id }}"
                                    action="{{ route('room.destroy', $r->id) }}" class="d-inline"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                   <button class="btn-sm btn-danger border-0" onclick="return confirm ('Are you sure?')">
                                    <i class="fas fa-trash-alt mr-1"></i>Hapus</button>
                                </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('room.create') }}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah</span>
            </a>
        </div>
    </div>
</div>


@endsection
