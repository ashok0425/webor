@php
    $services=DB::table('coupons')->where('status',1)->get();
@endphp
<div class="our_services_wrapper container">
    <x-ServiceHeader
      title="Our Services"
      description="Our latest item collection of 2021"
    />
    <div class="row">
      @foreach ($services as $service)
          
          <div
            class="col-12 col-md-6 col-xl-3 pb-4 px-2  ">
            <div class="service_card">
              <p class="h4 pt-2">{{$service->title}}</p>
              <p class="p pt-1">{{$service->subtitle}}</p>
            </div>
          </div>
          @endforeach

    </div>
  </div>