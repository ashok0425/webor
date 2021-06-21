@extends('frontend.layout.master')

@section('content')
<div class="container my-5">


<div class="row my-5">
    <div class="col-md-3 col-5 col-sm-5 m-0 p-0">
<div class="sv-feature-product-box filter ">
    <div class="filter_data">
        <h2>Filter</h2>
        
        
    </div>
    <div class="filter_data px-2">

        <p>Price Range</p>
   
                      
                <input type="hidden" name="" id="hidden_min">
                <input type="hidden" name="" id="hidden_max">
         
               <input type="button" id="price" style="border:0; color:rgb(0, 0, 0); font-weight:bold;background: transparent;">
         
             <div id="mySlider" style="height: 5px;background-color:rgb(255, 145, 2);width:90%;margin:auto;"></div>
       
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
        <p>Storage</p>
        @foreach ($space as $item)
        <div>
            <label ><input type="checkbox" value="{{ $item->variation}}" class="selector space"> &nbsp; &nbsp;{{ $item->variation }}</label>

        </div>
          
        @endforeach
     </div>
     {{-- <div class="filter_data">
        <p>Space</p>
        @foreach ($space as $item)
        <div>
            <label ><input type="checkbox" value="{{ explode( '/',$item->variation)[1] }}" class="selector space"> &nbsp; &nbsp;{{  explode( '/',$item->variation)[1] }} </label>

        </div>
            
        @endforeach
     </div> --}}
  
 
</div>
    </div>
    <div class="col-md-8 col-7">
   
     
        <div class="row product_grid">
          @if (count($product)<=0)
          <center><div class="text-center font-weight-bold text-danger">No item found</div></center>
      @else 
        @foreach ($product as $item)
        <div class="col-md-4 col-12 mb-2">

        <a href="{{ route('product.detail',['id'=>$item->id,'name'=>$item->name]) }}" class="swiper-slide sv-feature-product-box m-2">
            <div class="sv-feature-product-img">
              <img src="{{ asset($item->image)}}" alt="{{ $item->name }}" class="img-fluid" />
            </div>
            <div class="sv-feature-product-desc">
              <p class="sv-feature-product-name">{{ $item->name }}</p>
              <p class="sv-feature-product-price">{{ __getPriceunit().number_format((float)$item->price,2) }}</p>
            </div>
          </a>
        </div>

        @endforeach
    @endif

    </div>
    </div>
</div>
</div>

@endsection
@push('scripts')
 <script>
  $(document).ready(function() {
    $('#sort').on('change',function(){//onchange
    var value=$(this).val();

product_filter();
  });
    $( "#mySlider" ).slider({//price range slider
    range: true,
    min: 0,
    max: 2500,
    values: [ 0, 2500 ],
    step:50,
    stop: function( event, ui ) {
$( "#price" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
$( "#hidden_max" ).val(ui.values[ 1 ]);
$( "#hidden_min" ).val(ui.values[ 0 ]);
product_filter();

},

});

$( "#price" ).val( "$ " + $( "#mySlider" ).slider( "values", 0 ) +
         " - $" + $( "#mySlider" ).slider( "values", 1 ) );
    //function filter data
    function product_filter(){
let order=$('#sort').val();
let category=get_category('category');
let space=get_category('space');
let subcategory=get_category('subcategory');
let min=$( "#hidden_min" ).val();
let max=$( "#hidden_max" ).val();
let _token   = $('meta[name="csrf-token"]').attr('content');

      $.ajax({//aax call
      url:'{{url('filterproduct/ajax')}}/',
      type:"GET",
    data:{min:min,max:max,category:category,space:space,subcategory:subcategory,order:order,_token:_token},
beforeSend:function(){

    $(".loading").css("display",'block');

},
dataType:"json",
success:function(data){
$('.product_grid').empty();

console.log(data);
  $('.product_grid').append(data);
},
complete:function(){
            $(".loading").css('display','none');
}
})
    }
//getting category/brand
function get_category(class_name){
  let product=[];
  $('.'+class_name+':checked').each(function(){
product.push($(this).val());
  })
  return product;
}

  $('.selector').on("click",function(){
    // alert($(this).val())
    product_filter();
  })
})
</script>
@endpush