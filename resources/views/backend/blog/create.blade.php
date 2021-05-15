
@extends('admin.master')
@section('main-content')



<div class="card">
    <div class="card-header">
        <h5 class="card-title">Add Blog</h5>
   
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
        <form action="{{route('admin.blog.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Blog Title</label>
                <input type="text" name="title" class="form-control" placeholder="Blog title"value="{{old('title')}}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Blog Detail</label>
                <textarea type="text" name="detail" class="form-control" placeholder="Blog Detail" required>
                </textarea>
            </div>
           
            <div class="mb-3">
                <label class="form-label">Thumbnail</label>
                <div class="file-upload-wrapper" data-text="Select your file!">
                    <input name="file" type="file" class="file-upload-field" value="">
                  </div>
            </div>
           
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
@endsection
