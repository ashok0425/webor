
@extends('admin.master')
@section('main-content')

@php
    define('PAGE','gallery')
@endphp


<div class="card">
        <h3 >Edit Ambassador</h3>

    <div class="card-body">

        <form action="{{route('admin.ambassador.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{$outlook->id}}" name="id">
            <div class="mb-3">
                <label class="form-label">Time</label>
                <div class="file-upload-wrapper" data-text="Select your file!">
                    <input name="file" type="file" class="file-upload-field" value="">
                  </div>
                  <img src="{{asset($outlook->image)}}" width="70" alt="">
            </div>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input name="name" type="text" class="form-control" value="{{$outlook->name}}">

            </div>  <div class="mb-3">


         </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
