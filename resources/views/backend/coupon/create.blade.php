
@extends('admin.master')
@section('main-content')

@php
    define('PAGE','coupon')
@endphp


<div class="card">
    <div class="card-header">
        <h5 class="card-title">Add Coupon</h5>
   
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
        <form action="{{route('admin.coupon.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Coupon</label>
                <input type="text" name="coupon" class="form-control" placeholder="Coupon"value="{{old('coupon')}}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Coupon Discount %</label>
                <input type="text" name="price" class="form-control" placeholder="Coupon Price"value="{{old('price')}}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Cart Value</label>
                <input type="text" name="card_value" class="form-control" placeholder="Coupon Price"value="{{old('card_value')}}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Coupon Expire Date</label>
                <input type="date" name="expire_at" class="form-control" placeholder="Coupon Expire Date"value="{{old('expire_at')}}" required>
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
