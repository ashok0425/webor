@extends('admin.master')
@section('main-content')
@php
    define('PAGE','product')
@endphp
<div class="card">
        <h3>Edit Product</h3>

    <div class="card-body">

        <form action="{{route('admin.product.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
       <input name="id" value="{{$product->id}}" type="hidden"/>
            <div class="mb-3">
                <label class="form-label">Product</label>
                <input type="text" name="name" class="form-control" placeholder="Accessories" value="{{$product->name}}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Select Brand</label>
                <select name="category"  class="form-control category data" data-text="category" required>

                    @foreach ($category as $item)
                    <option value="{{$item->id}}" @if($item->id==$product->id)selected @endif >{{$item->category}}</option>

                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Select Subcategory</label>
                @if ($product->subcategory_id!==null)
                     <option value="{{$product->subcategory_id}}">{{$product->subcat->subcategory}}</option>
                @endif


                </select>
            </div>

             <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{$product->price}}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Thumbnail</label>
                <div class="file-upload-wrapper" data-text="Select your file!">
                    <input name="file" type="file" class="file-upload-field" value="">
                  </div>
                  <br>
                  <img src="{{asset($product->image)}}" width='100'/>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                    <textarea name="descr" id="summernote1" required >
                        {{$product->long_desc}}
                    </textarea>
            </div>
            <h3>Extra Option</h3>
            <div class="row my-3">
                <div class="col-md-4 col-6">
                    <label><input type="checkbox" name="featured" @if ($product->featured==1)
                        checked
                    @endif value="1"> Featured Product</label>
                </div>
                <div class="col-md-4 col-6">
                 <label><input type="checkbox" name="top_rated" @if($product->top_rated==1)
                    checked
                @endif  value="1"> Top Rated Product</label>
             </div>
             <div class="col-md-4 col-6">
                 <label><input type="checkbox" name="bestseller" @if($product->bestseller==1)
                    checked
                @endif  value="1"> Best Seller Product</label>
             </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
