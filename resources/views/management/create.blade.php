@extends('layouts.base')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Tambah Admin</h5>
    </div>
    <div class="card-body">
        <form class="customer" action="{{ route('management.store') }}" method="POST">
            @csrf
            <div class="form-group" >
                <h6>Username</h6>
                <input type="Text" class="form-control bg-light border-1 small" name="username"
                    id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Ketikkan Username">
            </div>
            <div class="form-group" >
                <h6>Password</h6>
                <input type="password" class="form-control bg-light border-1 small" name="password"
                    id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Ketikkan Password">
            </div>
            <div class="form-group">
                <h6>Level</h6>
                <label>
                    <input type="radio" name="level" value="admin"> Admin
                </label>
                <label>
                    <input type="radio" name="level" value="superadmin"> Superadmin
                </label>
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
