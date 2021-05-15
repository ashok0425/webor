@extends('admin.master')
@section('main-content')



<div class="card">
    <div class="card-header">
        <h5 class="card-title">Add Color</h5>
   
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
        <form action="{{route('admin.color.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{ $pid }}" name="pid">
            <div class="mb-3">
                <label class="form-label">Color</label>
                <input type="color" name="color" class="form-control" placeholder="Product name" value="{{old('color')}}" required>
            </div>
        
            <div class="mb-3">
                <label class="form-label">Thumbnail</label>
                <div class="file-upload-wrapper" data-text="Select your file!">
                    <input name="file" type="file" class="file-upload-field" value="">
                  </div>
            </div>
           <div class="d-flex ">
            <button type="submit" class="btn btn-primary">Add</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="{{ route('admin.product.attribute',['id'=>$pid]) }}" class="btn btn-info">Back</a>
            
           </div>
        </form>
    </div>
</div>
@endsection
