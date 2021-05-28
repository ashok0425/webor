
@extends('admin.master')
@section('main-content')

@php
    define('PAGE','blog')
@endphp


<div class="card">
    <div class="card-header">
        <h5 class="card-title">Edit Blog</h5>
   
    </div>
    <div class="card-body">
 
        <form action="{{route('admin.blog.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{ $blog->id }}" name="id">
           
            <div class="mb-3">
                <label class="form-label">Select Category</label>
                <select name="category"  class="form-control">
                    @foreach ($category as $item)
                        <option value="{{ $item->id}}" @if ( $item->id==$blog->id)
                      selected      
                        @endif>{{ $item->category }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Blog Title</label>
                <input type="text" name="title" class="form-control" placeholder="Blog title"value="{{$blog->title}}" required>
            </div>
           
            <div class="mb-3">
                <label class="form-label">Blog Short Description</label>
                <textarea type="text" name="short_desc"  class="form-control" placeholder="Blog Detail" required>
                    {{$blog->short_desc}}
                </textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Blog Detail</label>
                <textarea type="text" name="detail" id="summernote" class="form-control" placeholder="Blog Detail" required>
                    {!! $blog->detail!!}
                </textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Thumbnail</label>
                <div class="file-upload-wrapper" data-text="Select your file!">
                    <input name="file" type="file" class="file-upload-field" value="">
                  </div>
                  <br>
                  <img src="{{asset($blog->image)}}" alt="" class="img-fluid" width="100">
            </div>
            1KJ@0,k0%8ST
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
