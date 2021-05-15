@extends('admin.master')
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
}.container div{
    float:left;
}
</style>
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h5 class="card-title">Show Model</h5>
   <button onclick="print()" class="btn btn-lg btn-danger" id="printbtn"><i class="fas fa-print"></i> Print</button>
    </div>
    <div class="card-body">
        <h4 style="text-align: center;border-bottom:1px solid gray;padding-bottom:1rem;">Model Details</h4>
      <div class="container">
          
               <div style="width: 200px;" >
<h4>Brand</h4>
<p>{{$category->cat->category}}</p>
              </div>
             
               <div style="width: 200px;">
<h4>Device</h4>
<p>{{$category->subcategory}}</p>
              </div>
              <div style="width: 200px;">
                <h4>Subategory Thumbnail</h4>
                <p><img src="{{asset($category->image)}}" alt="{{$category->image}}" width="100"></p>
            </div>
          </div>
    </div>
</div>
@endsection
