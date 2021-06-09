@extends('frontend.layout.master')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/cart_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/cart_responsive.css') }}">
	<!-- Cart -->
<style>
	.empty{
	background: orangered;
	}
</style>
	<div style="margin-top:1rem;">
		@if(isset($cart) && count($cart)>=1)
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					
					<div class="cart_container mt-2">
						<h2 class="text-center mb-0">Your Cart Item

						</h2>
						<div class="cart_items">
							<ul class="cart_list">
								@php

                              $grandtotal=0
									
								@endphp
                              @foreach($cart as $row)
                             @php
                              $grandtotal+=$row->price*$row->qty
								 
							 @endphp

		<li class="cart_item clearfix">
			<div class="cart_item_image text-center"><br><br><img src="{{asset($row->image)}} " style="width: 70px; width: 70px;" alt=""></div>
			<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
				<div class="cart_item_name cart_info_col text-center">
					<div class="cart_item_title">Name</div>
					<div class="cart_item_text">{{ $row->name  }}</div>
				</div>
				<div class="cart_item_total cart_info_col ext-center">
					<div class="cart_item_title">Size</div>
					<div class="cart_item_text">{{  $row->size }}</div>
				</div>

				<div class="cart_item_total cart_info_col ext-center">
					<div class="cart_item_title">Color</div>
					<div class="cart_item_text" style="background: {{ $row->color}};width:40px;height:20px;"></div>
					
				</div>

				<div class="cart_item_quantity cart_info_col ext-center">
					<div class="cart_item_title">Quantity</div>
<div class="cart_item_text">
           <form method="post" action="{{ route('cart.update') }}">
           	@csrf
			   <input type="hidden" name="cartid" value="{{ $row->id }}">

			   
           	<input type="number" name="qty" value="{{ $row->qty }}" style="width: 50px;">
           	<button type="submit" class="btn btn-success btn-sm" ><i class="fa fa-plus"></i> </button>
 
           </form>  
				</div>
			</div>
				
             <div class="cart_item_total cart_info_col">
					<div class="cart_item_title">Price</div>
					<div class="cart_item_text">{{__getPriceunit(). $row->price }}</div>
				</div>
				<div class="cart_item_total cart_info_col">
					<div class="cart_item_title">Subtotal</div>
					<div class="cart_item_text">{{__getPriceunit(). $row->qty * $row->price}}</div>
				</div>
                <div class="cart_item_total cart_info_col">
					<div class="cart_item_title">Action</div>
					<div class="cart_item_text ">
						<a href="{{ route('cart.remove',['id'=>$row->id]) }}"><i class="fas fa-trash text-danger"></i></a>

					</div>
				</div>
			</div>
	
		</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				</div>
				</div>
						
	<div class="container">
					
<div class="card shadow py-3 mt-3">
		<div class="row">
				<div class="col-md-3 offset-md-9">
	<h5>
		Cart Total: {{__getPriceunit(). $grandtotal }}
				
	</h5>
			</div>
		</div>
		
	</div>
	
</div>



<div class="container">

<div class="row my-4 ">
	<div class="col-md-3 offset-md-7 checkout_btn1 mb-4">
		<a href="{{ route('store') }}">

				Continue Shopping
			</a>
			
	</div>
	<div class="col-md-2 checkout_btn2 mb-4">
		
		<a href="{{ route('checkout') }}">
			Checkout
		</a>
</div>

</div>

		@else 
<div class="container p-0 mt-5 py-3 d-block  empty">
			<p class="px-5 text-light">Your cart is empty</p>
	
</div>
		@endif
	</div>
</div>



@endsection