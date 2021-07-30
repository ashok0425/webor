@php
define('PAGE','shop')
@endphp
@section('title')
Cart
@endsection
@push('style')
<style>
	.btn_group{
		display: flex;
		justify-content: space-between;
	}
		.checkout{
		background: var(--custom-primary);
		color:#fff;
	}
	.checkout:hover{
		color:#fff;
		
	}
	.shop{
		background: var(--custom-primary);
		color:#fff;
	}
	.shop:hover{
		background: var(--custom-primary);
		color:#fff;
	}
	
	h4{
		width: 300px;
		margin-left: auto;
		font-size: 1.1rem!important;
		font-weight: 600;
	}
	.dlist-align{
		display: flex;
		justify-content: space-between
	}
</style>
@endpush
@extends('frontend.layout.master')

@section('header')
<section class="section-pagetop bg-gray ">
    <div class="container">
        <h2 class="title-page">My Cart</h2>
    </div> <!-- container //  -->
    </section>
@endsection
@section('content')

@php
    $vat=DB::table('websites')->first();
@endphp

<section class="cart mt-5">
    <div class="container">
    @if (count($cart)>0)
		
    <div class="row">
        <main class="col-md-9">
    <div class="card shadow px-2 py-3">
    <div class="row">
		<div class="col-md-3 text-muted d-none d-md-block">
<div>Product</div>
		</div>
		<div class="col-md-4 text-muted d-none d-md-block">
			<div class="text-center">Quantity</div>
					</div>
		<div class="col-md-3 text-muted d-none d-md-block">
		<div>Price ({{ __getPriceunit() }})</div>
								</div>	
		<div class="col-md-2 text-muted d-none d-md-block">
		<div>Action</div>
		</div>
	</div>
    @php
		
            $carttotal=0;
        @endphp
@foreach ($cart as $item)
@php
    $carttotal=$item->qty*$item->price
    
@endphp
<div class="row">
	<div class="col-md-3 col-6 order-1">
		<a href="{{ route('product.detail',['id'=>$item->id,'name'=>$item->name]) }}"><img src="{{ asset($item->image) }}" class="img-sm" width="70"></a>
		<figcaption class="info">
			<a href="#" class="title text-dark">{{ $item->name }}</a>
			<p class="text-muted small">
				@if ($item->color !='')
				color: <span style="width:50px;height:10px;background:{{ $item->color }};color:white;padding:3px 2px;">{{ $item->color }}</span>
				<br>
				
			@endif 
			@if ($item->size !='')
			Size: {{ $item->size }}
			<br>
			
		@endif
			</p>
		</figcaption>
	</figure>
	</div>
	<div class="col-md-4 order-md-2 order-4">
         
		<div class="qty mt-3 d-flex ">

			<button  class="incrementbtn px-4 py-1 text-white" style="background: var(--custom-primary);border-color:var(--custom-primary)" type="button" data-input="demoInput{{ $item->id }}" data-id="{{ $item->id }}" data-price="{{ $item->price }}" @if (Session::has('coupon')) disabled title="You can't increase item quantity once coupon is applied"
				
			@endif>+</button> 
			<input id="demoInput{{ $item->id }}" type="number" readonly value="{{ $item->qty }}" class="value text-center  py-1" name="qty" style="max-width: 80px" min="1">
	  
			<button  class="decrementbtn px-4 py-1  text-white" style="background: var(--custom-primary);border-color:var(--custom-primary);" type="button" data-input="demoInput{{ $item->id }}" data-id="{{ $item->id }}" data-price="{{ $item->price }}" @if (Session::has('coupon'))disabled
				title="You can't descrease item quantity once coupon is applied"
			@endif>-</button>
		  </div>
	</div>
	<div class="col-md-3 order-2 order-md-3 col-6">
		<div class="price-wrap"> 
			<var class="price" id="priced{{ $item->id }}">{{__getPriceunit()}} {{ $item->price * $item->qty }}</var> 
			<br>
			<small class="text-muted">{{__getPriceunit()}}  {{ $item->price }} each </small> 
		</div> <!-- price-wrap .// -->
	</div>
	<div class="col-md-2 order-3 order-md-4">
        <a href="{{ route('cartremove',['id'=>$item->id]) }}" class="btn checkout"> Remove</a>

	</div>
</div>
    
              
       
@endforeach
   
        <hr>

            <h4 class="total">Cart Total : {{ __getPriceunit() }} <span id="carttotal">{{ $carttotal }}</span></h4>
      
   
    
    <div class="card-body border-top  ">
        
     <div class="row">
		 <div class="col-md-4  d-none d-md-block">
			<a href="{{ route('store') }}" class="btn shop"> <i class="fa fa-chevron-left"></i> Continue shop </a>
		 </div>
		 <div class="col-md-4 offset-md-4">
			<a href="{{ route('checkout') }}" class="btn  checkout"> Make Purchase <i class="fa fa-chevron-right"></i> </a>

		 </div>
	 </div>
    </div>	
    </div> <!-- card.// -->
   
    
        </main> <!-- col.// -->
        <aside class="col-md-3 ">
          <div class="card shadow mt-3 mt-md-0 px-4 py-3">
                        @if(Session::has('coupon'))
               <div class="text-success mb-2 ">Coupon  ({{ Session::get('coupon')['name'] }} ) hasbeen Applied</div>
                        @else
                        <form action="{{route('coupon')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Have coupon?</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="coupon" placeholder="Coupon code">
                                    <span class="input-group-append"> 
                                        <button class="btn checkout">Apply</button>
                                    </span>
                                </div>
                            </div>
                        </form>
                             @endif
                             
           <br>
                       
                        @if(Session::has('coupon'))

                        <dl class="dlist-align">
                            <dt>Sub-Total :</dt>
                            <dd class="text-right">{{ __getPriceunit() }} {{ number_format((float)Session::get('coupon')['balance'],2)}}</dd>
                          </dl>
                          <dl class="dlist-align">
                              <dt>Coupon <a href="{{route('couponremove')}}" class="btn btn-danger btn-sm"><i class="fa fa-trash text-light"></i></a>:</dt>
                              <dd class="text-right">{{Session::get('coupon')['discount']}}%</dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Vat:</dt>
                                <dd class="text-right ">{{$vat->vat}}% </dd>
                              </dl>
                            <dl class="dlist-align">
                                <dt>Shipping :</dt>
                                <dd class="text-right ">{{ __getPriceunit() }} {{ $vat->shipping_charge }} </dd>
                              </dl>
                              <dl class="dlist-align">
                                <dt>Total:</dt>
                                <dd class="text-right ">{{ __getPriceunit()}}  {{ number_format((float) ___getPriceafterVat(Session::get('coupon')['balance'], $vat->vat,$vat->shipping_charge),2) }}</dd>
                              </dl>
                            @else 
                           
                              
                        <dl class="dlist-align">
                            <dt>Sub-Total :</dt>
                            <dd class="text-right">{{ __getPriceunit() }} <span id="subtotal">{{ number_format((float)$carttotal,2)}}</span></dd>
                          </dl>
                       
                            <dl class="dlist-align">
                                <dt>Vat:</dt>
                                <dd class="text-right ">{{$vat->vat}}% </dd>
                              </dl>
                            <dl class="dlist-align">
                                <dt>Shipping :</dt>
                                <dd class="text-right ">{{ __getPriceunit() }} {{ $vat->shipping_charge }} </dd>
                              </dl>
                              <dl class="dlist-align">
                                <dt>Total:</dt>
                                <dd class="text-right ">{{ __getPriceunit()}}  <span id="grandtotal">{{ number_format((float) ___getPriceafterVat($carttotal, $vat->vat,$vat->shipping_charge),2) }}</span></dd>
                              </dl>
                                @endif

                       
                        <hr>
                      
                        
                </div> <!-- card-body.// -->
        </aside> <!-- col.// -->
    </div>
	@else 
	<div class="px-5 py-3" style="background: var(--custom-primary)">Yor Cart Is Empty</div>
	<div class="pt-5 my-5"></div>
	<div class="pt-5 my-5"></div>

	@endif
    
    </div> <!-- container .//  -->
    </section>
    @endsection
	@push('scripts')
		{{-- price increment and decrement  --}}
	<script>
		$('.incrementbtn').click(function(){
			let  qty= $(this).data('input');
			let   preval=parseInt($(document).find('#'+qty).val());
			let  id= $(this).data('id');
			let  price= $(this).data('price');
		   let element =$(this)
val=preval+1
		   $(document).find('#'+qty)[0].stepUp()
		   $.ajax({
			   url:'{{ url('cartqty') }}/'+val+'/'+id+'/'+price,
			   type:"GET",
			   dataType:'json',
			   success:function(data){
				$(document).find('#priced'+id).html(data['total']);
$('#carttotal').html(data['carttotal'])
$('#subtotal').html(data['carttotal'])
$('#grandtotal').html(data['grandtotal'])


				   console.log(data);
			   }
		   })
		})

		$('.decrementbtn').click(function(){
			let  qty= $(this).data('input');
			let   preval=parseInt($(document).find('#'+qty).val());
			let  id= $(this).data('id');
			let  price= $(this).data('price');

if(preval!==1){
val=preval-1

}
		   $(document).find('#'+qty)[0].stepDown()
		   $.ajax({
			   url:'{{ url('cartqty') }}/'+val+'/'+id+'/'+price,
			   type:"GET",
			   dataType:'json',
			   success:function(data){
				$(document).find('#priced'+id).html(data['total']);
$('#carttotal').html(data['carttotal'])
$('#subtotal').html(data['carttotal'])
$('#grandtotal').html(data['grandtotal'])

				   console.log(data);
			   }
		   })
		})
	   
	</script>
	@endpush