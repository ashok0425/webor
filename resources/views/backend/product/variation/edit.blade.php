@extends('admin.master')
@section('main-content')
@php
    define('PAGE','product')
@endphp
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
        <form action="{{route('admin.variation.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{ $color->id }}" name="id">
            <input type="hidden" value="{{ $color->product_id }}" name="pid">

            <div class="mb-3">
                <label class="form-label">Variation</label>
                <input type="text" name="variation" class="form-control" placeholder="Product name" value="{{$color->variation}}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">price</label>
                <input type="text" name="price" class="form-control" placeholder="Product name" value="{{$color->price}}" required>
            </div>
          
           
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
</div>
@endsection
