
@extends('admin.master')
@section('main-content')

@php
    define('PAGE','time')
@endphp


<div class="card">
        <h3 >Add Time</h3>
   
    <div class="card-body">
   
        <form action="{{route('admin.time.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Time</label>
                <input type="time" name="time" class="form-control" value="{{old('time')}}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">AM/PM</label>
         <select name="unit" id="" class="form-control">
             <option value="AM">AM</option>
             <option value="PM">PM</option>

         </select>
            </div>
           
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
@endsection
