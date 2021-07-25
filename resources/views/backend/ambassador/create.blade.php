
@extends('admin.master')
@section('main-content')

@php
    define('PAGE','gallery')
@endphp


<div class="card">
        <h3 >Add Ambassador</h3>
   
    <div class="card-body">
   
        <form action="{{route('admin.ambassador.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Image</label>
                <div class="file-upload-wrapper" data-text="Select your file!">
                    <input name="file" type="file" class="file-upload-field" value="">
                  </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input name="name" type="text" class="form-control" value="{{old('name')}}">

            </div>
           
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
@endsection
