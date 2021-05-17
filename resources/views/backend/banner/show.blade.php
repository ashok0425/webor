@extends('admin.master')
@php
    define('PAGE','setting')
@endphp

@section('main-content')
<style>
    @media print {
    #printbtn {
        display :  none;
    }
    h5{
        display: none;
    }
    .navbar{
        display: none;
    }
    .container div{
    float:left;
    width:100px;

}
}.container div{
    float:left;
    width:200px;
}
</style>
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h5 class="card-title">Show Banner Detail</h5>
   <button onclick="print()" class="btn btn-lg btn-danger" id="printbtn"><i class="fas fa-print"></i> Print</button>
    </div>
    <div class="card-body">
        <h4 style="text-align: center;border-bottom:1px solid gray;padding-bottom:1rem;">Banner Details</h4>
      <div class="container">
          
               <div >
<h4>Banner Image</h4>
<p><img src="{{asset($category->image)}}" alt="{{$category->image}}" width="100"></p>
              </div>
              <div >
<h4>Banner Title</h4>
<p>{{$category->title}}</p>
              </div>
           Banner  Detail</h4>
<p>{{$category->text}}</p>

              </div>
   
          </div>
    </div>
</div>
@endsection
