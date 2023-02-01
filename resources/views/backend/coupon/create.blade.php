
@extends('admin.master')
@section('main-content')

@php
    define('PAGE','coupon')
@endphp


<div class="card">
        <h3 >ADD SERVICE</h3>
   
    <div class="card-body">
   
        <form action="{{route('admin.coupon.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter Title"value="{{old('title')}}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" name="description" class="form-control" placeholder="Enter description"value="{{old('description')}}" required>
            </div>
            
           
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
@endsection
