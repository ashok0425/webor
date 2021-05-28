@extends('frontend.layout.master')
@section('content')

@php
$setting = DB::table('websites')->first();
$charge = $setting->shipping_charge; 
$vat = $setting->vat; 
@endphp

<link rel="stylesheet" type="text/css" href="{{ asset('frontend/cart_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/responsive.css') }}">
	<!-- Cart -->

	<div class="pb-5">
	
		<div class="container mt-5">
	
			<div class="row">

				<div class="col-lg-9">
				
							<ul class="cart_list">
                              @php
								  $grandtotal=0
							  @endphp
                              @foreach($cart as $row)
							  @php
								      $grandtotal+=$row->qty*$row->price;

							  @endphp
							 

<li class="cart_item clearfix" >
    <div class="cart_item_image text-center"><br><img src="{{asset($row->image)}} " style="width: 70px; width: 70px;" alt=""></div>
    <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
        <div class="cart_item_name cart_info_col">
            <div class="cart_item_title">Name</div>
            <div class="cart_item_text">{{ $row->name  }}</div>
        </div>
        <div class="cart_item_total cart_info_col">
            <div class="cart_item_title">Size</div>
            <div class="cart_item_text">{{  $row->size }}</div>
        </div>

        <div class="cart_item_total cart_info_col">
            <div class="cart_item_title">Color</div>
            <div class="cart_item_text" style="background: {{ $row->color}};width:40px;height:20px;"></div>
            
        </div>

        <div class="cart_item_quantity cart_info_col">
            <div class="cart_item_title">Quantity</div> 


       
            <div class="cart_item_text">{{ $row->qty }}</div>
            

        </div>

        
     <div class="cart_item_total cart_info_col">
            <div class="cart_item_title">Price</div>
            <div class="cart_item_text">{{__getPriceunit(). $row->price }}</div>
        </div>
        <div class="cart_item_total cart_info_col">
            <div class="cart_item_title">Subtotal</div>
            <div class="cart_item_text">{{__getPriceunit(). $row->qty * $row->price}}</div>
        </div>
      
    </div>


                    
								@endforeach
								@php
								$vat_amount= ($vat*$grandtotal)/100
									
  
								@endphp
                        </li>
							</ul>
					
								<div class="card shadow py-3 mt-3">
										<div class="row">
												<div class="col-md-5 offset-md-6">
									<h5>
										Cart Total: {{__getPriceunit(). $grandtotal }}
												
									</h5>
											</div>
										</div>
										
									</div>
									
								</div>

						<!-- Order Total -->
					 <div class="col-lg-3">
						<ul>
							@if(Session::has('coupon'))
				   
							@else
				   
							 <h5> Have A promo code ? </h5>
								 <form method="post" action="{{route('coupon')}}">
									 @csrf
									 <div class="d-flex coupon_btn">
										 <input type="text" name="coupon" class="form-control" required="" placeholder="Enter Your Code"><input type="submit"  value="Apply" > 
										      	
										
									 </div>
								
								 </form>
								 @endif
								 
								</ul>
				   <br>
							 <ul class="list-group shadow">
								 @if(Session::has('coupon'))
								 <li class="list-group-item">Subtotal : <span style="float: right;">
								 ${{ Session::get('coupon')['balance'] }} </span> </li>
								  <li class="list-group-item">Coupon : ({{ Session::get('coupon')['name'] }} )
								 <a href="{{route('remove-coupon')}}" class="btn btn-danger btn-sm"><i class="fa fa-trash text-light"></i></a>
							  <span style="float: right;">{{ Session::get('coupon')['discount'] }}% </span> </li>
								 @else
								 <li class="list-group-item">Subtotal : <span style="float: right;">
								 {{__getPriceunit().$grandtotal }} </span> </li>
								 @endif
								 
								 <li class="list-group-item">Vat : <span style="float: right;">{{$vat}}% </span> </li></span> </li>
				   
								 <li class="list-group-item">Shiping Charge : <span style="float: right;">{{__getPriceunit().$charge}} </span> </li></span> </li>
								 @if(Session::has('coupon'))
								 <li class="list-group-item">Total : <span style="float: right;">{{__getPriceunit()}}{{Session::get('coupon')['balance'] + $charge+$vat_amount }} </span> </li>
								 @else
						 <li class="list-group-item">Total : <span style="float: right;">{{ __getPriceunit() }} {{ $grandtotal + $charge+$vat_amount  }} </span> </li>
								 @endif
							 
								 
							 </ul>
					<br>		 
	<div >
		&nbsp;
		&nbsp;
		&nbsp;
		<div class="checkout_btn2">
			<a href="{{route('payment')}}"  >Procced to pay</a> 

		</div>
	</div>
					 </div> 
     
            </div>
             </div>

					</div>
			


<script src="{{ asset('public/frontend/js/cart_custom.js') }}"></script>
@endsection