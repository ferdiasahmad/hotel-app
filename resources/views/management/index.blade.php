@extends('layouts.base')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Admin</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Level</th>
                        @if (Auth::guard('admin')->user()->level === 'superadmin')
                        <th>Aksi</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($management as $m)
                    <tr>
                        <td>{{ $m->id }}</td>
                        <td>{{ $m->username }}</td>
                        <td>{{ $m->password }}</td>
                        <td>{{ $m->level }}</td>
                        @if (Auth::guard('admin')->user()->level === 'superadmin')
                        <td class="d-flex justify-content-center">
                                <a href="{{ route('management.edit', $m->id) }}"
                                    class="btn btn-sm btn-success align-center mr-3"><i class="fas fa-edit mr-1"></i>Edit</a>
                                <form id="delete-form{{ $m->id }}"
                                    action="{{ route('management.destroy', $m->id) }}" class="d-inline" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-sm btn-danger border-0" onclick="return confirm ('Are you sure?')">
                                        <i class="fas fa-trash-alt mr-1"></i>Hapus
                                    </button>
                                </form>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @if (Auth::guard('admin')->user()->level === 'superadmin')
                <a href="{{ route('management.create') }}" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah</span>
                </a>
            @endif
        </div>
    </div>
</div>

@endsection
