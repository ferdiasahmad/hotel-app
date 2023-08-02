@extends('layouts.base')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Tambah Management</h5>
    </div>
    <div class="card-body">
        <form class="customer" action="{{ route('admin.store') }}" method="POST">
            @csrf
            <div class="form-group" >
                <h6>Username</h6>
                <input type="Text" class="form-control bg-light border-1 small" name="username"
                    id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Ketikkan Username">
            </div>
            <div class="form-group" >
                <h6>Email</h6>
                <input type="email" class="form-control bg-light border-1 small" name="email"
                    id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Ketikkan Email">
            </div>
            <div class="form-group" >
                <h6>No Telepon</h6>
                <input type="number" class="form-control bg-light border-1 small" name="no_telp"
                    id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Ketikkan Nomor Telepon">
            </div>
            <div class="form-group" >
                <h6>Password</h6>
                <input type="password" class="form-control bg-light border-1 small" name="password"
                    id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Ketikkan Password">
            </div>
            <button class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                </span>
                <span class="text">Tambah</span>

            </button>

            <hr>
        </form>
    </div>
</div>

@endsection
