@extends('admin.master')
@section('main-content')
@php
    define('PAGE','product')
@endphp
<div class="card">
    <div class="card-header">
        <h5 class="card-title">Add Size</h5>
   
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
        <form action="{{route('admin.variation.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{ $pid }}" name="pid">
            <div class="mb-3">
                <label class="form-label">variation</label>
                <input type="text" name="variation" class="form-control" placeholder="Product variation" value="{{old('variation')}}" required>
            </div>
        
            {{-- <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="Product variation price" value="{{old('price')}}" required>
            </div> --}}
           <div class="d-flex ">
            <button type="submit" class="btn btn-primary">Add</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="{{ route('admin.product.attribute',['id'=>$pid]) }}" class="btn btn-info">Back</a>
            
           </div>
        </form>
    </div>
</div>
@endsection
