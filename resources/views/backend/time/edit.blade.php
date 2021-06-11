@extends('admin.master')
@section('main-content')
@php
    define('PAGE','time')
@endphp

<div class="card">
        <h3 >Edit Time</h3>
   
    <div class="card-body">
  
        <form action="{{route('admin.time.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$category->id}}" />
            <div class="mb-3">
                <label class="form-label">Time</label>
                <input type="time" name="time" class="form-control" " value="{{$category->times}}">
            </div>
            <div class="mb-3">
                <label class="form-label">AM/PM</label>
         <select name="unit" id="" class="form-control">
             <option value="AM" @if ($category->unit=='AM')
                 selected
             @endif>AM</option>
             <option value="PM" @if ($category->unit=='PM')
                 selected
             @endif>PM</option>

         </select>
            </div>
           
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
</div>
@endsection
