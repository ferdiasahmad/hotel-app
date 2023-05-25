@extends('layouts.base')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Customer</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>No Telephone</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customer as $c )
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->username }}</td>
                        <td>{{ $c->email }}</td>
                        <td>{{ $c->no_telp}}</td>
                        <td>{{ $c->password }}</td>
                        <td  class="d-flex justify-content-center" >
                            <a href="{{ route('admin.edit', $c->id) }}"
                                class="btn btn-sm btn-success align-center mr-3 "><i class="fas fa-edit mr-1 "></i>Edit</a>
                                <form id="delete-form{{ $c->id }}"
                                    action="{{ route('admin.destroy', $c->id) }}" class="d-inline"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                   <button class="btn-sm btn-danger border-0" onclick="return confirm ('Are you sure?')">
                                    <i class="fas fa-trash-alt mr-1"></i>Delete </button>
                                </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('admin.create') }}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Add</span>
            </a>
        </div>
    </div>
</div>


@endsection
