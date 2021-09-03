@extends('mail.layout')
@section('content')

@php
        $page=DB::table('pages')->first();

@endphp
<tr class="information">
    <td colspan="4">
       <h2>Thank you for subscribing our newsletter.</h2>
       Rumor Has It, is a clothing brand based on [location] that always got the back of our brave girls, women, and LGBTQs. Our goal is to empower those who are living under the constant pressure to act, dress, and behave in a certain way and help them be more confident in who they are and embrace themselves.
<br>
       We are a bold and straightforward thinking brand inspired by the real-life problems and obstacles in the real world and aims to acknowledge that and help inspire to face them head-on and come out as a winner.
<br>

       Everything we create is informed by our customers and aims to allow them to come to terms with themselves. It encompasses everything that means to be confident in their own body and look the way we want to look. We support the movement of body positivity, equality, and all-around feeling yourself regardless of body type, race, or gender.
<br>

       We make fashion and style accessible to everyone and bring in eye-catching, trendy, and coolest of cool products to help you look fabulous while bending the social norms.
    </td>
</tr>
@endsection
