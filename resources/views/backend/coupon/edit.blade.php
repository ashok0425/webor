@extends('admin.master')
@section('main-content')

<div class="card">
    <div class="card-header">
        <h5 class="card-title">Edit Brand</h5>
   
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
        <form action="{{route('admin.coupon.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$category->id}}" />
            <div class="mb-3">
                <label class="form-label">Coupon</label>
                <input type="text" name="coupon" class="form-control" placeholder="coupon" value="{{$category->coupon}}">
            </div>
             <div class="mb-3">
                <label class="form-label">Coupon Discount %</label>
                <input type="text" name="price" class="form-control" placeholder="Coupon Price"value="{{$category->price}}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Cart Value</label>
                <input type="text" name="card_value" class="form-control" placeholder="Coupon Price"value="{{$category->card_value}}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Coupon Expire Date</label>
                <input type="date" name="expire_at" class="form-control" placeholder="Coupon Expire Date" value="{{$category->expire_at}}" required>
                <br/>
              @if ($category->expire_at<today())
                <span class="btn btn-danger btn-sm">Expired</span>
                           
                        @endif
            </div>
            <div class="mb-3">
            <div class="mb-3">
                <label class="form-label">Thumbnail</label>
                <div class="file-upload-wrapper" data-text="Select your file!">
                    <input name="file" type="file" class="file-upload-field" value="">
                  </div>
                  <br>
                  <img src="{{asset($category->image)}}" alt="{{$category->category}}" width="100">
            </div>
           
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
</div>
@endsection
