
@extends('admin.master')
@section('main-content')

@php
    define('PAGE','gallery')
@endphp


<div class="card">
        <h3 >Edit Ambassador</h3>
   
    <div class="card-body">
   
        <form action="{{route('admin.time.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{$outlook->id}}" name="id">
            <div class="mb-3">
                <label class="form-label">Time</label>
                <div class="file-upload-wrapper" data-text="Select your file!">
                    <input name="file" type="file" class="file-upload-field" value="">
                  </div>
                  <img src="{{asset($outlook->image)}}" width="70" alt="">
            </div>
            <div class="mb-3">
                <label class="form-label">Place</label>
         <select name="unit" id="" class="form-control">
            <option value="9" @if ($outlook->unit ==9 )
                selected
                
            @endif>Style</option>

             <option value="1" @if ($outlook->unit ==1 )
                selected
                 
             @endif>1st</option>
             <option value="2" @if ($outlook->unit ==2 )
                selected
                 
             @endif>2nd</option>
             <option value="3" @if ($outlook->unit ==3 )
                selected
                 
             @endif>3rd</option>
             <option value="4" @if ($outlook->unit ==4 )
                selected
                 
             @endif>4th</option>
             <option value="5" @if ($outlook->unit ==5 )
                selected
                 
             @endif>5th</option>
             <option value="6" @if ($outlook->unit ==6 )
                selected
                 
             @endif>6th</option>
             <option value="7" @if ($outlook->unit ==7 )
                selected
                 
             @endif>7th</option>
             <option value="8" @if ($outlook->unit ==8 )
                selected
                 
             @endif>8th</option>




         </select>
            </div>
           
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
