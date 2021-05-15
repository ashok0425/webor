@extends('admin.master')
@section('main-content')



<div class="card">
    <div class="card-header">
        <h5 class="card-title">Edit Color</h5>
   
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
        <form action="{{route('admin.color.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{ $color->id }}" name="id">
            <input type="hidden" value="{{ $color->product_id }}" name="pid">

            <div class="mb-3">
                <label class="form-label">Color</label>
                <input type="color" name="color" class="form-control" placeholder="Product name" value="{{$color->color}}" required>
                <br>
               <div style="background: {{ $color->color }};width:50px;height:50px;"></div>
            </div>
        
            <div class="mb-3">
                <label class="form-label">Thumbnail</label>
                <div class="file-upload-wrapper" data-text="Select your file!">
                    <input name="file" type="file" class="file-upload-field" value="">
                  </div>
                  <br>
                  <img src="{{ asset($color->image) }}" alt="" width="80px">
            </div>
           
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
</div>
@endsection
