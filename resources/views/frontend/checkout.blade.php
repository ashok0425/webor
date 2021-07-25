@php
define('PAGE','shop')
@endphp
@extends('frontend.layout.master')
<style>
    /* storage section */
.buttongroup label {
	padding: 6px 12px;
	cursor: pointer;
	transition: all 0.2s;
}

.buttongroup label {
margin-right: 3rem;
}



/* Hide the radio button */
input[name='payment'] {
	display: none;
}
/* The checked buttons label style */
input[name='payment']:checked + label {
  border: 3px solid var(--brand-two);

}
.form-control{
	box-shadow: none!important;
	outline: none!important;
	border-radius: 0!important;
}
.form-control:focus{
	box-shadow: none!important;
	outline: none!important;
}
.sub{
	background:var(--custom-primary);
	color: #fff;
	border:0;
	padding-top: .7rem;
	padding-bottom: .7rem;

	border-radius: 100px;
}
.pay{
	font-family: 'Poppins';
	font-weight: 600;
	margin: 1rem;
	font-size: 1.2rem;
}
</style>
@section('header')
<section class="section-pagetop bg-gray ">
    <div class="container">
        <h2 class="title-page">Checkout</h2>
    </div> <!-- container //  -->
    </section>
@endsection
@section('content')
@php
$cart=DB::table('carts')->where('uid',Auth::user()->id)->get();
$setting = DB::table('websites')->first();
$charge = $setting->shipping_charge; 
$vat = $setting->vat; 
@endphp
@php
$grandtotal=0
@endphp
            @foreach($cart as $row)
@php
    $grandtotal+=$row->qty*$row->price;

@endphp
@endforeach



<section class="section-content padding-y mt-5">
    <div class="container" style="max-width: 720px;">
    <form action="{{ route('payment.store') }}" method="POST">
        @csrf
                <input type="hidden" name="total" value="@if(Session::has('coupon')) 
                {{ ___getPriceafterVat(Session::get('coupon')['balance'],$vat,$charge)  }} 
                @else  
                {{ ___getPriceafterVat($grandtotal,$vat,$charge)  }} 
                @endif">

                @if(Session::has('coupon'))
                <input type="hidden" name="coupon" value="{{ Session::get('coupon')['name'] }}">
                <input type="hidden" name="coupon_value" value="{{ Session::get('coupon')['discount'] }}">

                @else 

                @endif
                <input type="hidden" name="vat" value="{{ $vat }}">
                <input type="hidden" name="charge" value="{{ $charge }}">
                <input type="hidden" name="cart_value" value="{{ $grandtotal }}">


    <div class="card mb-4 shadow">
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
              @endif
          <div class="card-body">
          <h4 class="card-title mb-3">Delivery info</h4>
    
        <div class="form-row">
            <div class="col form-group">
                <label>Full name</label>
                  <input type="text" class="form-control" required name="name">
            </div> <!-- form-group end.// -->
           
        </div> <!-- form-row end.// -->
    
        <div class="form-row">
            <div class="col form-group">
                <label>Email</label>
                  <input type="email" class="form-control" required name="email">
            </div> <!-- form-group end.// -->
            <div class="col form-group">
                <label>Phone</label>
                  <input type="text" class="form-control" required name="phone">
            </div> <!-- form-group end.// -->
        </div> <!-- form-row end.// -->
    
        <div class="form-row mt-1">
			<div class="row">
            <div class="form-group col-md-6">
                <label>State</label>
                <input type="text" class="form-control" name="state" required>
              </div> <!-- form-group end.// -->
            <div class="form-group col-md-6">
              <label>Zip Code</label>
              <input type="text" class="form-control" name="zip" required>
            </div> <!-- form-group end.// -->
		</div>
        </div> <!-- form-row.// -->
        <div class="form-group">
            <label>Adress</label>
           <textarea class="form-control" rows="2" name="address"></textarea>
        </div> <!-- form-group// -->  
    
          </div> <!-- card-body.// -->

          {{-- <h3 class="px-3 pay">Payment Method</h3>--}}
          
        <div class="row px-3 pb-4">
            {{-- <div class="col-md-6">
              <div class=" buttongroup payment">
                <input id="paypal" type="radio" value="paypal" name="payment"    /> 
                <label for="paypal" >    
              <img src="{{ asset('paypal.png') }}" alt=" payment method" class="img-fluid" style="max-height: 60px;min-width:200px" >
              </label>

              </div>
            </div>
            <div class="col-md-6">
              <div class=" buttongroup payment">
                <input id="cod" type="radio" value="cod" name="payment"  required checked /> 
                <label for="cod" >    
                  <img src="{{ asset('cod.png') }}" alt=" payment method" class="img-fluid" style="max-height: 60px;min-width:200px">
              </label>

              </div>
            </div>
            --}}
          <button class="  sub mt-4" type="submit">Checkout Now</button>

          </div> 
        </form>
        </div>  <!-- card .// -->
    
    
    
    </div> <!-- container .//  -->
    </section>
    @endsection