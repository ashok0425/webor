@extends('admin.master')
@section('main-content')
@php
    define('PAGE','product')
@endphp

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
        <h5 class="card-title">Show Accessory</h5>
   <button onclick="print()" class="btn btn-lg btn-danger" id="printbtn"><i class="fas fa-print"></i> Print</button>
    </div>
    <div class="card-body">
        <h4 style="text-align: center;border-bottom:1px solid gray;padding-bottom:1rem;">Accesories Details</h4>
      <div class="container">
          
               <div >
<h4>Brand</h4>
<p>{{$category->cat->category}}</p>
              </div>
              <div >
<h4>Device</h4>
<p>{{$category->subcat->subcategory}}</p>
              </div>
               <div >
<h4>Model</h4>
<p>{{$category->modal->modal}}</p>

              </div>
               <div >
<h4>Accessory</h4>
<p>{{$category->part}}</p>
              </div>
               <div >
<h4>Price</h4>
<p>{{$category->price}}</p>
              </div>
              <div >
                <h4>Subategory Thumbnail</h4>
                <p><img src="{{asset($category->image)}}" alt="{{$category->image}}" width="100"></p>
            </div>
          </div>
    </div>
</div>
@endsection
