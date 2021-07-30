@php
define('PAGE','shop')
@endphp
@section('title')
Payment
@endsection
@extends('frontend.layout.master')
@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/contact.css')}}" />
<link rel="stylesheet" href="{{ asset('frontend/css/productinfo.css')}}" />

  <!-- new section -->
    <!-- contact section -->
<style>
  .sv-contact-right h4{
    font-family: poppins;
    color: brown;
    font-weight: 700;
    font-size: 1.3rem;
    border-bottom: 1px solid #000;
    padding-bottom: .8rem;
  }
</style>
    @php
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

  @php
  $vat_amount= ($vat*$grandtotal)/100

  @endphp
    <div class="sv-contact">
        <div class="container">
          <div class="sv-contact-title">
            <h3>Please Fill all the details correctly</h3>
         
          </div>
  
          <!-- contact box form -->
          <div class="my-5 sv-contact-wrapper">
            
        
  <div class="row">
      <div class="col-md-8">
        <x-errormsg/>

      <!-- right section -->
            <div class="sv-contact-right">
              <form action="{{ route('payment.store') }}" method="POST">
                @csrf
                <input type="hidden" value="{{ $grandtotal }}" name="cart">
                <input type="hidden" name="total" value="@if(Session::has('coupon')) 
                {{ Session::get('coupon')['balance'] + $charge+$vat_amount  }} 
                @else  
                {{ $grandtotal + $charge+$vat_amount  }}
                @endif">

                @if(Session::has('coupon'))
                <input type="hidden" name="coupon" value="{{ Session::get('coupon')['name'] }}">
                <input type="hidden" name="coupon_value" value="{{ Session::get('coupon')['discount'] }}">

                @else 

                @endif
                <input type="hidden" name="vat" value="{{ $vat }}">
                <input type="hidden" name="charge" value="{{ $charge }}">

                <div class="row">
                  <div class="col-md-6">
                    <div class="sv-contact-group">
                      <div class="sv-contact-group-title" for="fname">
                        Full Name <span class="req">*</span>
                      </div>
                      <input type="text" name="name" placeholder="Full Name" required/>
                    </div>
                  </div>
               
                  <div class="col-md-6">
                    <div class="sv-contact-group">
                      <div class="sv-contact-group-title" for="email">Email <span class="req">*</span></div>
                      <input type="email" name="email" placeholder="Email" required/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="sv-contact-group">
                      <div class="sv-contact-group-title" for="phone">Phone

                        <span class="req">*</span>
                      </div>
                      <input type="text" name="phone" placeholder="Phone no"required />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="sv-contact-group">
                      <div class="sv-contact-group-title" for="state">
                        state
                        <span class="req">*</span>
                      </div>
                      <input type="text" name="state" placeholder="State" required/>
                    </div>
                  </div>
  
                  <div class="col-md-6">
                    <div class="sv-contact-group">
                      <div class="sv-contact-group-title" for="address">
                        Address
                        <span class="req">*</span>
                      </div>
                      <input type="text" name="address" placeholder=" Address" required/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="sv-contact-group">
                      <div class="sv-contact-group-title" for="fname">
                        Zip Code
                        <span class="req">*</span>
                      </div>
                      <input type="text" name="zip" placeholder="zip code" required/>
                    </div>
                  </div>

                  <div class="row ">
                    <h4>Payment Type</h4>
                    <div class="col-md-6">
                      <div class=" buttongroup payment">
                        <input id="paypal" type="radio" value="paypal" name="storage"  checked required /> 
                        <label for="paypal" >    
                      <img src="{{ asset('frontend/paypal.png') }}" alt="somerville payment method" class="img-fluid" >
                      </label>

                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class=" buttongroup payment">
                        <input id="cod" type="radio" value="cod" name="storage"  required /> 
                        <label for="cod" >    
                          <img src="{{ asset('frontend/cod.png') }}" alt="somerville payment method" class="img-fluid" >
                      </label>

                      </div>
                    </div>
                  </div>


                  
                  <div class="col-lg-12">
                    <div class="text-center sv-contact-group">
                      <button type="submit">Order Now</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4 ">
            <ul class="list-group shadow">
              @if(Session::has('coupon'))
              <li class="list-group-item">Subtotal : <span style="float: right;">
              ${{ Session::get('coupon')['balance'] }} </span> </li>
               <li class="list-group-item">Coupon : ({{ Session::get('coupon')['name'] }} )
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
        </div>
        
        </div>
    </div>
             
         
        </div>
      </div>
@endsection
