@extends('mail.layout')
@section('content')
    
@php
        $page=DB::table('pages')->first();
    
@endphp
<tr class="information">
    <td colspan="4">
        <h2>Hello, {{$name}}</h2>
       
    
       {!!$detail!!}



    </td>
</tr>
@endsection