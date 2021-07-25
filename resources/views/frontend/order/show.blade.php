@extends('frontend.layout.master')
@section('content')

<style>
    th,td{
        padding-left: 1rem;
        border:1px solid gray;
    }
</style>
<div class="container mt-5">
   <div class="row">
       <div class="d-flex justify-content-between mb-3">
        <h4>Order Details of order ID {{ $order->tracking_code }}</h4>
<a href="{{ route('order') }}" class="btn btn-info text-white">Back</a>
       </div>

       <div class="col-md-6">

           <div class="card shadow">

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

        <div class="card shadow">

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
   <div class="card mt-3 shadow">
       <h3>Product Details</h3>
       <table class="table table-responsive table-striped">
<thead>
    <th>Image</th>
    <th>Name</th>
    <th>Size</th>
    <th>Price({{ __getPriceunit() }})</th>
    <th>Qty</th>
    <th>Sub Total ({{ __getPriceunit() }})</th>

</thead>
<tbody>
    @foreach ($product as $item)
    <tr>
    <td>
       <img src=" {{ asset($item->image) }}" alt="Product image" class="img-fluid" width="80">
    </td>
    <td>
        {{ $item->name }}
        <br>
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
