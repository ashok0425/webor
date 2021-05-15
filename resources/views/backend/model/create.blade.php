
@extends('admin.master')
@section('main-content')



<div class="card">
    <div class="card-header">
        <h5 class="card-title">Add Modal</h5>
   
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
        <form action="{{route('admin.model.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Modal</label>
                <input type="text" name="modal" class="form-control" placeholder="Modal" value="{{old('modal')}}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Select Brand</label>
                <select name="category"  class="form-control category data" data-text="category" required>
                    <option value="">--select barnd---</option>
                    @foreach ($category as $item)
                    <option value="{{$item->id}}">{{$item->category}}</option>

                    @endforeach
                </select>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Select Device</label>
                <select name="subcategory"  class="form-control subcategory data" data-text="subcategory" required>
                    <option value="">--select device---</option>
                    
                </select>
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


