
@extends('admin.master')
@section('main-content')
@php
    define('PAGE','product')
@endphp
<div class="card">
        <h3>Add Product</h3>
   

        <form action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" name="name" class="form-control" placeholder="Product name" value="{{old('name')}}" required>
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
                <select name="subcategory"  class="form-control subcategory data" data-text="subcategory" >
                    <option value="">--select device---</option>
                    
                </select>
            </div>
               
             <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{old('price')}}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Thumbnail</label>
                <div class="file-upload-wrapper" data-text="Select your file!">
                    <input name="file" type="file" class="file-upload-field" value="">
                  </div>
            </div>
            <h3>Extra Option</h3>
           <div class="row my-3">
               <div class="col-md-4 col-6">
                   <label><input type="checkbox" name="featured" > Featured Product</label>
               </div>
               <div class="col-md-4 col-6">
                <label><input type="checkbox" name="top_rated" > Top Rated Product</label>
            </div>  
            <div class="col-md-4 col-6">
                <label><input type="checkbox" name="bestseller" > Best Seller Product</label>
            </div>
           </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
@endsection
