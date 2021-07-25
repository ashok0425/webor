@php
    define('PAGE','contact')
@endphp
@extends('frontend.layout.master')

@php
$social=DB::table('websites')->first()
@endphp
@section('content')
<section style="overflow-x: hidden;">
  <div class="container my-5 pb-5">
      <div class="row">
          <div class="col-lg-6"><img class="custom-lookbook-resize" src="{{asset('frontend/images/gallery-img-4.jpg')}}" alt="look book image/thumbnail" /></div>
          <div class="col-lg-6">
              <h2 class="custom-fs-75 custom-text-primary custom-fw-600 mb-5" style="text-align: right;">Contact Us</h2>
              <div class="d-flex justify-content-end" style="position: relative;">
                  <div class="custom-bg-secondary d-flex align-items-end contact-part-resize">
                      <div class="d-flex justify-content-around py-3" style="width: 100%;">
                          <a href="{{$social->instagram1}}" target="_blank">
                            <i class="fab fa-instagram text-white fa-2x"></i>
                            
                          </a>
                          <a href="{{$social->other1}}" target="_blank">
                            <i class="fab fab fa-tiktok text-white fa-2x"></i>
                                
                          </a>
                          <a href="{{$social->facebook1}}" target="_blank">
                            <i class="fab fab fa-facebook text-white fa-2x"></i>
                                
                          </a>
                      </div>
                  </div>

                
                  <div style="width: 100%;" class="custom-shadow custom-bg-white p-5 contact-page-reposition">
                      <h3 class="custom-fw-700 custom-fs-35 custom-text-secondary custom-font-work">info</h3>
                      <div class="d-flex align-items-center">
                          <p class="m-0 custom-font-work custom-fw-400 custom-fs-28 custom-text-secondary ">
                           <span><i class="fas fa-envelope"></i></span>
                              <span>{{$social->email1}}</span>
                          </p>
                      </div>
                      <div class="d-flex align-items-center my-2">
                          <p class="m-0 custom-font-work custom-fw-400 custom-fs-28 custom-text-secondary">
                            <span><i class="fas fa-phone-alt"></i></span>

                              <span>{{$social->phone1}}</span>
                          </p>
                      </div>
                      <div class="d-flex align-items-center">
                          <p class="m-0 custom-font-work custom-fw-400 custom-fs-28 custom-text-secondary" >
                            <span><i class="fas fa-map-marker-alt"></i></span>
                               
                              <span>{{$social->address1}}</span>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="container-fluid custom-bg-light py-5">
      <div style="max-width: 450px; margin: auto;">
      <x-errormsg />

          <form action="{{route('contact.store')}}" method="POST">
            @csrf
              <h2 class="custom-font-work custom-fw-700 custom-fs-50 custom-text-secondary">Let's get in Touch.</h2>
              <p class="custom-text-secondary custom-fw-400 custom-fs-28">Fell free to write to us.</p>
              <div class="">
                  <input type="text" class="custom-bg-light form-control custom-fs-30 custom-fw-400 custom-text-secondary custom-font-work border border-0 border-1 border-bottom custom-bc-secondary" id="form-name" placeholder="Name" name="name">
              </div>
              <div class="my-4">
                  <input type="email" class="custom-bg-light form-control custom-fs-30 custom-fw-400 custom-text-secondary custom-font-work border border-0 border-1 border-bottom custom-bc-secondary" id="form-email" placeholder="E-mail" name="email">
              </div>

              <div class="my-4">
                <input type="number" class="custom-bg-light form-control custom-fs-30 custom-fw-400 custom-text-secondary custom-font-work border border-0 border-1 border-bottom custom-bc-secondary" id="form-email" placeholder="Phone" name="phone">
            </div>

              <div class="">
                  <input type="text" class="custom-bg-light form-control custom-fs-30 custom-fw-400 custom-text-secondary custom-font-work border border-0 border-1 border-bottom custom-bc-secondary" id="form-message" placeholder="Message" name="message">
              </div>

              <div class="text-center mt-4">
                  <button class="btn border-1 custom-bc-secondary custom-fs-25 custom-fw-400 custom-text-secondary px-5" type="submit">Send</button>
              </div>
          </form>
      </div>
  </div>
</section>
@endsection
