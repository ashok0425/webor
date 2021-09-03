@php
    define('PAGE','shop')
@endphp
@section('title')
Store All Product
@endsection
@extends('frontend.layout.master')
<style>
.store select:focus{
  outline: none;
  border: 0;
  box-shadow: none;
}
</style>
@section('content')

<section class="container store">
  <div class="d-flex justify-content-between flex-sm-column flex-md-row flex-column my-5">
      <div class="">
          <div class="d-flex align-items-center">
              <p class="custom-fs-20 custom-fw-500 p-0 m-0">Filters:</p>




              <div>
                  <select class="custom-fs-20 custom-fw-400 form-select border-0 selector category" aria-label="category" >
                      <option selected>Category</option>
                      @foreach ($category as $item)
                      <option  value="{{ $item->id }}">{{$item->category}}</option>

                      @endforeach

                  </select>
              </div>
              <div>
                <select class="custom-fs-20 custom-fw-400 form-select border-0 selector subcategory" aria-label="category" >
                    <option selected>Sub Category</option>
                    @foreach ($subcategory as $item)
                    <option  value="{{ $item->id }}">{{$item->subcategory}}</option>

                    @endforeach

                </select>
            </div>
              {{-- <div class="mx-2">
                  <select class="custom-fs-20 custom-fw-400 form-select border-0" aria-label="category">
                      <option selected>Color</option>
                    @foreach ($color as $item)

                      <option value="{{$item->id}}"><span style="background: {{$item->color}}!important">{{$item->color}}</span></option>
                      @endforeach

                  </select>
              </div> --}}
              <div>
                  <select class="custom-fs-20 custom-fw-400 form-select border-0" aria-label="category">
                      <option selected>Size</option>
                    @foreach ($space as $item)

                      <option value="{{$item->id}}">{{$item->variation}}</option>
                      @endforeach

                  </select>
              </div>
          </div>
      </div>
      <div class="">
          <div class="d-flex align-items-center">
              <p class="custom-fs-20 custom-fw-500 p-0 m-0">Sort By:</p>
              <div>
                  <select class="custom-fs-20 custom-fw-400 form-select border-0" aria-label="category" id="sort">
                    <option selected>--sort by--</option>

                    <option value="1">Price Low to High</option>
                    <option value="2">Price High to Low</option>

                      <option value="3">A to Z</option>
                      <option value="4">Z to A</option>
                      <option value="5">New First</option>

                      <option value="6">Old First</option>

                  </select>
              </div>
          </div>
      </div>
  </div>

  <div>
@if (count($product)>0)
      <div class="container">
    <div class="row custom_grid">

        @foreach ($product as $item)
   <div class="col-md-4 col-12 p-0 m-0 px-2 text-center">
    <div class="card border-0">
      <a href="{{route('product.detail',['id'=>$item->id,'name'=>$item->name])}}">
      <img src="{{asset($item->image)}}" alt="product thumbnail" class='img-fluid'/>
  </a>

      <div class="card-body p-0 d-flex justify-content-between align-items-center padx-4">
          <div>
      <a href="{{route('product.detail',['id'=>$item->id,'name'=>$item->name])}}">

           <span class="custom-fs-28 custom-fw-500 custom-text-secondary">{{$item->name}}</span>
          </a>

              <p class="custom-text-secondary custom-text-secondary custom-fs-18">{{__getPriceunit()}} {{$item->price}}/-</p>
          </div>

          <form action="{{route('addtocart.cart')}}" method="GET">
              @csrf
              <input type="hidden" value="{{$item->id}}" name='pid'>
              <button class="cartbtn">

              <span><i class="fas fa-shopping-cart custom-text-secondary custom-fs-28"></i></span>
          </button>
          </form>
          </div>
  </div>
   </div>
        @endforeach
    </div>


      <!-- Pagination -->
  <div class="d-flex justify-content-center mt-5">
    <nav aria-label="Page navigation example">
     {{$product->links()}}
    </nav>
</div>
@else
<div class="custom-bg-primary text-white px-5 py-2">No item found</div>
<div class="py-5 my-5"></div>
@endif

      </div>
  </div>


</section>
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
$('.custom_grid').empty();

console.log(data);
  $('.custom_grid').append(data);
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

  $('.selector').on("change",function(){
    // alert($(this).val())
    product_filter();
  })
})
</script>
@endpush
