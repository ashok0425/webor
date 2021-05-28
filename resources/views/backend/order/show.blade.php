@extends('admin.master')
@section('main-content')
@php
    define('PAGE','order')
@endphp
<style>
    th,td{
        padding-left: 1rem;
    }
</style>
<div class="container">
   <div class="row">
       <div class="col-md-6">

           <div class="card ">
            <h3>Order Details of order Id {{ $order->tracking_code }}</h3>

               <table>
                   <tr>
                       <th>Order Id</th>
                       <td>{{ $order->tracking_code }}</td>
                   </tr>
                
                   <tr>
                    <th>Payment Type</th>
                    <td>{{ $order->payment_type }}</td>
                </tr>
                   <tr>
                    <th>Payment Id</th>
                    <td>{{ $order->payment_id }}</td>
                </tr>
                <tr>
                    <th>Cart Value</th>
                    <td>{{__getPriceunit()}}{{  $order->cart_value }}</td>
                </tr>
                <tr>
                    <th>Shipping</th>
                    <td>{{__getPriceunit()}}{{ $order->shipping_charge }}</td>
                </tr>
                <tr>
                    <th>Tax %</th>
                    <td>{{ $order->tax }}%</td>
                </tr>
                <tr>
                    <th>Coupon({{ $order->coupon }})</th>
                    <td>{{ $order->coupon_value }}%</td>
                </tr>
                <tr>
                    <th>Grand Total</th>
                   
                    <td>{{__getPriceunit()}}{{ $order->total }}</td>
                </tr>
               </table>

           </div>
       </div>
       <div class="col-md-6">

        <div class="card">
            <h3>Shipping Details of order Id {{ $order->tracking_code }}</h3>

            <table>
                <tr>
                    <th> Name</th>
                    <td>{{ $shipping->name }}</td>
                </tr>
                <tr>
                    <th> Email</th>
                    <td>{{ $shipping->email }}</td>
                </tr>
                <tr>
                    <th> Phone</th>
                    <td>{{ $shipping->phone }}</td>
                </tr>
                <tr>
                    <th> State</th>
                    <td>{{ $shipping->state }}</td>
                </tr>
             
                <tr>
                    <th>Address</th>
                    <td>{{ $shipping->city }}</td>
                </tr>
              
                <tr>
                    <th>Zip Code</th>
                    <td>{{ $shipping->zip }}</td>
                </tr>
             
             
            </table>

        </div>
    </div>
   </div>
   <div class="card">
       <h3>Product Details</h3>
       <table class="table table-responsibe-sm table-striped">
<thead>
    <th>Image</th>
    <th>Name</th>
    <th>Device</th>
    <th>Brand</th>
    <th>Color</th>
    <th>Size</th>
    <th>Price({{ __getPriceunit() }})</th>
    <th>Qty</th>
    <th>Sub Total ({{ __getPriceunit() }})</th>

</thead>
<tbody>
    @foreach ($product as $item)
    <tr>
    <td>
        {{ $item->image }}
    </td>
    <td>
        {{ $item->name }}
    </td> 
    <td>
        {{ $item->category }}
    </td>
    <td>
        {{ $item->subcategory }}
    </td>
   
    <td>
        {{ $item->color }}
    </td>
    <td>
        {{ $item->size }}
    </td>
    <td>
        {{ $item->price }}
    </td>
    <td>
        {{ $item->qty }}
    </td>
    <td>
        {{  $item->qty * $item->price }}
    </td>
</tr>
    @endforeach
   
</tbody>
       </table>
   </div>
</div>
@endsection
