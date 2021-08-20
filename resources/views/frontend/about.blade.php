@php
    define('PAGE','about')
@endphp
@section('title')
About us
@endsection
@extends('frontend.layout.master')
@section('content')
<section>
    <!-- Who are we -->
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-6 col-12">
                <h2 class="custom-fw-700 custom-fs-50 custom-text-secondary">Who are we?</h2>
                <p class="custom-fw-400 custom-text-secondary custom-fs-16 mt-5">
                    Rumor Has It, is a clothing brand based on [location] that always got the back of our brave girls, women, and LGBTQs. Our goal is to empower those who are living under the constant pressure to act, dress, and behave in a certain way and help them be more confident in who they are and embrace themselves.
                </p>
                <p class="custom-fw-400 custom-text-secondary custom-fs-16 mt-5">
                    We are a bold and straightforward thinking brand inspired by the real-life problems and obstacles in the real world and aims to acknowledge that and help inspire to face them head-on and come out as a winner.
                </p>
                <p class="custom-fw-400 custom-text-secondary custom-fs-16 mt-5">
                    Everything we create is informed by our customers and aims to allow them to come to terms with themselves. It encompasses everything that means to be confident in their own body and look the way we want to look. We support the movement of body positivity, equality, and all-around feeling yourself regardless of body type, race, or gender.
                </p>
                <p class="custom-fw-400 custom-text-secondary custom-fs-16 mt-5 mb-5">
                    We make fashion and style accessible to everyone and bring in eye-catching, trendy, and coolest of cool products to help you look fabulous while bending the social norms.
                </p>
            </div>
            <div class="col-md-6 col-lg-6 col-12">
                <img class="custom-shop-banner-resize" src="{{asset('frontend/images/who-are-we.jpg')}}" alt="who are we thumbnail" />
            </div>
        </div>
    </div>
    <!-- Our Story -->
    <div class="container mt-5 pt-5">
        <div class="row flex-row-reverse align-items-center">
            <div class="col-md-6 col-lg-6 col-12">
                <h2 class="custom-fw-700 custom-fs-50 custom-text-secondary">Our Story?</h2>
                <p class="custom-fw-400 custom-text-secondary custom-fs-16 mt-5">
                    We all live in a society where we (girls/women/LGBTQ) are chastised, judged, criticized, and looked down upon when embracing ourselves as we like. We become the talk of society, the rule-breaker, and the outcast.
                </p>
                <p class="custom-fw-400 custom-text-secondary custom-fs-16 mt-5">
                    Rumors spread easily like wildfire, expanding as it goes yet no one cares for the truth. This is where our story begins.
                </p>
                <p class="custom-fw-400 custom-text-secondary custom-fs-16 mt-5">
                    We don’t let society change our true self, we don’t shy away from being us and we embrace ourselves in front of society to make our point. Although we possibly can’t control the thoughts of society and how they react to us, we certainly are in control of our reactions.
                </p>
                <p class="custom-fw-400 custom-text-secondary custom-fs-16 mt-5">
                    Do we let society pull us down, demean us and hold back to progress in life? No, we rise by acknowledging and facing our problems and recreate ourselves as a phoenix.
                </p>
                <p class="custom-fw-400 custom-text-secondary custom-fs-16 mt-5 mb-5">
                    We, ‘Rumor Has It’, stand for inclusion, acceptance, and body positivity for all the Queens out there and help them look fabulous while changing and breaking societal norms
                </p>
            </div>
            <div class="col-md-6 col-lg-6 col-12">
                <img class="custom-shop-banner-resize" src="{{asset('frontend/images/our-story.jpg')}}" alt="our story thumbnail" />
            </div>
        </div>
    </div>

    <!-- Our Process -->
    <div class="container">
        <h2 class="custom-fw-700 custom-fs-50 custom-text-secondary text-center">Our Process</h2>
        <div class="my-5" style="position: relative;max-width: 1080px; margin:auto;">
            <p class="process process-top m-0">
                We empower those holding out on the constant societal pressure. Embrace our true self and redefine the norms.
            </p>
            <p class="process process-middle m-0">
                As an inclusive brand, we are inspired by our customers and their need. We are here for all the shades of beauty.
            </p>
            <p class="process process-bottom m-0">
                We are all for body positivity and acceptance of own self. We don’t shy away from being us. We embrace ourselves and accept our beauty.
            </p>
            <div class="d-none d-lg-block">
                <div class="d-flex flex-column align-items-center">
                    <div style="width:40px;height:40px;" class="border border-2 custom-bc-secondary rounded-circle"></div>
                    <div style="width:2px;height:100px" class="custom-bg-secondary"></div>
                    <div style="width:40px;height:40px;" class="border border-2 custom-bc-secondary rounded-circle"></div>
                    <div style="width:2px;height:100px" class="custom-bg-secondary"></div>
                    <div style="width:40px;height:40px;" class="border border-2 custom-bc-secondary rounded-circle"></div>
                </div>
            </div>
        </div>
    </div>
@php
    $ambassador=DB::table('apponitments')->where('status',1)->orderBy('id','desc')->get();
@endphp
    <!-- Meet our Ambassadors -->
    <div class="container pt-5">
        <h3 class="custom-fs-40 custom-fw-600 custom-text-secondary text-center mb-5">Meet our Ambassadors</h3>
        <div class="custom-product-grid">
            @foreach ($ambassador as $item)

            <div>
                <img class="custom-br-10 custom-shop-banner-resize" src="{{asset($item->image)}}" alt="brand ambassadors thumbnail" />
                <p class="custom-fs-30 custom-fw-700 text-center mt-2">{{$item->name}}</p>
            </div>
            @endforeach


        </div>
    </div>
</section>






		@endsection
