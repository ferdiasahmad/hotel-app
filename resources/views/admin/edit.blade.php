@extends('layouts.base')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Edit Customer</h5>
    </div>
    <div class="card-body">
        <form class="customer" action="{{ route('admin.update',$customer) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group" >
                <h6>username</h6>
                <input type="Text" class="form-control bg-light border-1 small" name="username"
                    id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Ketikkan Username" value="{{ $customer->username }}">
            </div>
            <div class="form-group" >
                <h6>email</h6>
                <input type="email" class="form-control bg-light border-1 small" name="email"
                    id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Ketikkan Email" value="{{ $customer->email }}">
            </div>
            <div class="form-group" >
                <h6>No Telepon</h6>
                <input type="number" class="form-control bg-light border-1 small" name="no_telp"
                    id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Ketikkan Nomor Telepon" value="{{ $customer->no_telp }}">
            </div>
            <div class="form-group" >
                <h6>Password</h6>
                <input type="password" class="form-control bg-light border-1 small" name="password"
                    id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Ketikkan Password" value="{{ $customer->password }}">
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

@endsection

