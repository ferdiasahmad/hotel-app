@extends('layouts.base')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Edit Kamar</h5>
    </div>
    <div class="card-body">
        <form class="room" action="{{ route('room.update',$room) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group" >
                <h6>Nama</h6>
                <input type="Text" class="form-control bg-light border-1 small" name="name"
                    id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Enter Room Name" value="{{ $room->name }}">
            </div>
            <div class="form-group" >
                <h6>Deskripsi</h6>
                <input type="Text" class="form-control bg-light border-1 small" name="description"
                    id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Enter Description" value="{{ $room->description }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control" id="exampleFormControlSelect1" name="status" value="{{ $room->status }}">
                  <option value="1"{{ $room->status ==  1 ? 'selected' : '' }} >Tersedia</option>
                  <option value="0" {{ $room->status ==  0 ? 'selected' : '' }}>Tidak Tersedia</option>
                </select>
              </div>
            <div class="form-group" >
                <h6>Harga</h6>
                <input type="number" class="form-control bg-light border-1 small" name="price"
                    id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Enter Price" value="{{ $room->price }}">
            </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Unggah Gambar</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" value="{{ $room->image}}">
                  </div>
            <button class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                </span>
                <span class="text">Edit</span>

            </button>

            <hr>
        </form>
    </div>
</div>

@endsection
