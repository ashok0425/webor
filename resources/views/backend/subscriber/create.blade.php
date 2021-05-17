
@extends('admin.master')
@section('main-content')
@php
    define('PAGE','subscriber')
    
@endphp


<div class="card">
    <div class="card-header">
        <h5 class="card-title">Send Email </h5>
   
    </div>
    <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{route('admin.sendmail.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
        
            <div class="mb-3">
                <label class="form-label">Mail Subject</label>
                <input type="text" name="title" class="form-control" placeholder="Mail title"value="{{old('title')}}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Mail Body</label>
                <textarea type="text" name="detail" id="summernote" class="form-control" placeholder="Blog Detail" required>
                    {{old('detail')}}
                </textarea>
            </div>
           
            <div class="mb-3">
                <label class="form-label">Attachement</label>
                <div class="file-upload-wrapper" data-text="Select your file!">
                    <input name="file" type="file" class="file-upload-field" value="">
                  </div>
                  <br>
            </div>
           
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
