@extends('mail.layout')
@section('content')
    
@php
        $page=DB::table('pages')->first();
    
@endphp
<tr class="information">
    <td colspan="4">
        <h2>Hello, {{$name}}</h2>
       <h3>Thank you for Contacting us.We will get back to you as soon as possible.</h3>
    
       <h4>Here is Your information</h4>
       <p>Full Name: {{$name}}</p>
       <p>Address: {{$address}}</p>
       <p>Email: {{$email}}</p>
       <p>Phone: {{$phone}}</p>
       <h4>Message</h4>
       {{$msg}}



    </td>
</tr>
@endsection