@extends('admin.master')
@section('main-content')
@php
    define('PAGE','device')
@endphp

<div class="card">
    <div class="card-header">
        <h5 class="card-title">Edit Modal</h5>
   
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
        <form action="{{route('admin.model.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$modal->id}}" />
            <div class="mb-3">
                <label class="form-label">Modal</label>
                <input type="text" name="modal" class="form-control" value="{{$modal->modal}}">
            </div>
    
            <div class="mb-3">
                <label class="form-label">Select Brand</label>
                <select name="category" id="" class="form-control category data" data-text="category">
                    @foreach ($category as $item)
                    <option value="{{$item->id}}" @if ($item->id==$modal->category_id)
                        selected
                    @endif>{{$item->category}}</option>

                    @endforeach
                </select>
            </div>
              <div class="mb-3">
                <label class="form-label">Select Device</label>
                <select name="subcategory"  class="form-control subcategory data" data-text="subcategory">
                  <option value="{{$modal->subcategory_id}}">{{$modal->subcat->subcategory}}</option>
                </select>
            </div>
          
            <div class="mb-3">
                <label class="form-label">Thumbnail</label>
                <div class="file-upload-wrapper" data-text="Select your file!">
                    <input name="file" type="file" class="file-upload-field" value="">
                  </div>
                  <br>
                  <img src="{{asset($modal->image)}}" alt="{{$modal->category}}" width="100">
            </div>
           
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
</div>
@endsection


