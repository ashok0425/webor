@extends('frontend.layout.master')

@section('content')
<div class="container my-5">


<div class="row my-5">
    <div class="col-md-3 col-3">
<div class="sv-feature-product-box filter ">
    <div class="filter_data">
        <h2>Filter</h2>
        
        
    </div>
    <div class="filter_data px-2">

        <p>Price Range</p>
   
                      
                <input type="hidden" name="" id="hidden_min">
                <input type="hidden" name="" id="hidden_max">
         
               <input type="button" id="price" style="border:0; color:rgb(228, 15, 192); font-weight:bold;background: transparent;">
         
             <div id="mySlider" style="height: 5px;background-color:rgb(228, 15, 61);width:90%;margin:auto;"></div>
       
    </div>
    <div class="filter_data">
       <p>Type</p>
       @foreach ($device as $item)
<div>
    <label ><input type="checkbox" value="{{ $item->id }}" class="selector category"> &nbsp; &nbsp;{{ $item->category }}</label>
    
</div>        
       @endforeach
    </div>
    <div class=" filter_data">
        <p>Brand</p>
        @foreach ($brand as $item)
        <div>
            <label ><input type="checkbox" value="{{ $item->id }}" class="selector subcategory"> &nbsp; &nbsp;{{ $item->subcategory }}</label>

        </div>
            
        @endforeach
     </div>
     <div class="filter_data">
        <p>Ram/Space</p>
        @foreach ($space as $item)
        <div>
            <label ><input type="checkbox" value="{{ $item->id }}" class="selector space"> &nbsp; &nbsp;{{ $item->variation }}</label>

        </div>
            
        @endforeach
     </div>
  
 
</div>
    </div>
    <div class="col-md-9 col-9">
        <div class="row product_grid">

        @foreach ($product as $item)
        <div class="col-md-3 col-12">

        <a href="#" class="swiper-slide sv-feature-product-box m-2">
            <div class="sv-feature-product-img">
              <img src="{{ asset($item->image)}}" alt="{{ $item->name }}" class="img-fluid" />
            </div>
            <div class="sv-feature-product-desc">
              <p class="sv-feature-product-name">{{ $item->name }}</p>
              <p class="sv-feature-product-price">{{ $item->price }}</p>
            </div>
          </a>
        </div>

        @endforeach
    </div>
     
    </div>
</div>
</div>

@endsection
