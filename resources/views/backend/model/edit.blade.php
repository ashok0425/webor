@extends('admin.master')
@section('main-content')
@php
    define('PAGE','gallery')
@endphp

<div class="card">
        <h3>Edit Gallery</h3>
   
    <div class="card-body">

        <form action="{{route('admin.model.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
           
          
            <div class="mb-3">
                <label class="form-label">Image</label>
                <div class="file-upload-wrapper" data-text="Select your file!">
                    <input name="file" type="file" class="file-upload-field" value="">
                  </div>
                  <br>
                  <img src="{{asset($modal->image)}}" alt="{{$modal->image}}" width="100">
            </div>
           
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
</div>
@endsection


