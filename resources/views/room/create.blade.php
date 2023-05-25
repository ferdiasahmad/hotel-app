@extends('layouts.base')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Add Room</h5>
    </div>
    <div class="card-body">
        <form class="customer" action="{{ route('room.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" >
                <h6>Name</h6>
                <input type="Text" class="form-control bg-light border-1 small" name="name"
                    id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Enter Room Name">
            </div>
            <div class="form-group" >
                <h6>Description</h6>
                <input type="Text" class="form-control bg-light border-1 small" name="description"
                    id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Enter Description">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control" id="exampleFormControlSelect1" name="status">
                  <option value="1" >Available</option>
                  <option value="0" >Not Available</option>
                </select>
              </div>
            <div class="form-group" >
                <h6>Price</h6>
                <input type="number" class="form-control bg-light border-1 small" name="price"
                    id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Enter Price">
            </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Upload Image</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                  </div>
            <button class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                </span>
                <span class="text">Add</span>

            </button>

            <hr>
        </form>
    </div>
</div>

@endsection
