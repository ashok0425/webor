@extends('frontend.layout.master')

@section('content')
  

	<div class="container my-5">
<br>
<br>
<br>
@php
    $order=DB::table('orders')->where('tracking_code',$code)->value('id');
@endphp
        <center>
       <span class="text-success"> Thank you for Shopping with us.Your order ID is <span><strong class="text-info"><a href="{{ route('order.show',['id'=>$order]) }}" title="view order detail">{{$code}}</a></strong></span></span>
<br><br>
<br>
           <a href="/" style="background: var(--custom-primary);padding:1rem 2rem;color:#fff;border-radius:100px" >&laquo; Back to home page</a>
        </center>
        <br>
<br>
<br>

    </div>


@endsection