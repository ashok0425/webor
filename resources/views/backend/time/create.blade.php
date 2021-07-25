
@extends('admin.master')
@section('main-content')

@php
    define('PAGE','gallery')
@endphp


<div class="card">
        <h3 >Add Outlook</h3>
   
    <div class="card-body">
   
        <form action="{{route('admin.time.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Image</label>
                <div class="file-upload-wrapper" data-text="Select your file!">
                    <input name="file" type="file" class="file-upload-field" value="">
                  </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Place</label>
         <select name="unit" id="" class="form-control">
            <option value="9">Style</option>

             <option value="1">1st</option>
             <option value="2">2nd</option>
             <option value="3">3rd</option>
             <option value="4">4th</option>
             <option value="5">5th</option>
             <option value="6">6th</option>
             <option value="7">7th</option>
             <option value="8">8th</option>




         </select>
            </div>
           
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
@endsection
