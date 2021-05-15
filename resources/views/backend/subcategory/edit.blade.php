@extends('admin.master')
@section('main-content')

<div class="card">
    <div class="card-header">
        <h5 class="card-title">Edit Device</h5>
   
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
        <form action="{{route('admin.subcategory.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$subcategory->id}}" />
            <div class="mb-3">
                <label class="form-label">Brand</label>
                <input type="text" name="subcategory" class="form-control" placeholder="Category" value="{{$subcategory->subcategory}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Select Brand</label>
                <select name="category" id="" class="form-control">
                    @foreach ($category as $item)
                    <option value="{{$item->id}}" @if ($item->id==$subcategory->category_id)
                        selected
                    @endif>{{$item->category}}</option>

                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Thumbnail</label>
                <div class="file-upload-wrapper" data-text="Select your file!">
                    <input name="file" type="file" class="file-upload-field" value="">
                  </div>
                  <br>
                  <img src="{{asset($subcategory->image)}}" alt="{{$subcategory->category}}" width="100">
            </div>
           
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
</div>
@endsection
