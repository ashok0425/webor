@extends('frontend.layout.master')

@section('content')
@push('style')
<link rel="stylesheet" href="{{ asset('frontend/css/contact.css')}}" />
<style>
  .contact{
    margin-top: 6rem;
    margin-bottom: 3rem;

  }
  .contact a{
    color: #000;
  }
  .contact p{
    margin-bottom: .3rem;
    font-weight: 500;
  }
</style>

@endpush
  <!-- new section -->
    <!-- contact section -->
    <div class="sv-contact">
        <div class="container">
          <div class="text-center mt-5">
            <h4>Contact Information</h4>
            <h6>If you require your phones to get checked and need them repaired,   then you can give us a quick <br>
              visit or contact us in our two outlets</h6>
          </div>
          <div class="row contact">
            <div class="col-md-4 offset-md-1">
<p><span><i class="fas fa-map-marker-alt"></i></span> &nbsp; &nbsp; {{ $contact->address1 }}</p>
<p><span><i class="fas fa-envelope"></i></span> &nbsp; &nbsp; {{ $contact->email1 }}</p>
<p><span><i class="fas fa-phone-alt"></i></span> &nbsp; &nbsp; {{ $contact->phone1 }}</p>
{{-- <p class="d-flex justify-content-evenly ">
  <a href="{{ $contact->facebook1 }}"><i class="fab fa-facebook"></i></a>
  <a href="{{ $contact->twitter1 }}"><i class="fab fa-twitter"></i></a>
  <a href="{{ $contact->instagram1 }}"><i class="fab fa-instagram"></i></a>

</p> --}}
<div class="sv-contact-left-desc-text sv-contact-opening-hour">
  <p>Mon-Sat: 10:00 AM - 8:00 PM</p> 
  <p>Sun: 10:00 AM - 7:00 PM</p>
</div>

            </div>
            <div class="col-md-4 offset-md-2 mt-md-0 mt-3">
              <p><span><i class="fas fa-map-marker-alt"></i></span> &nbsp; &nbsp; {{ $contact->address2 }}</p>
              <p><span><i class="fas fa-envelope"></i></span> &nbsp; &nbsp; {{ $contact->email2 }}</p>
              <p><span><i class="fas fa-phone-alt"></i></span> &nbsp; &nbsp; {{ $contact->phone2 }}</p>
              <p class="d-flex justify-content-evenly ">
                {{-- <a href="{{ $contact->facebook1 }}"><i class="fab fa-facebook"></i></a>
                <a href="{{ $contact->twitter1 }}"><i class="fab fa-twitter"></i></a>
                <a href="{{ $contact->instagram1 }}"><i class="fab fa-instagram"></i></a>
              
              </p> --}}
              <div class="sv-contact-left-desc-text sv-contact-opening-hour">
               <p>Mon-Sat: 10:00 AM - 7:00 PM</p> 
               <p>Sun: 10:00 AM - 6:00 PM</p>

              </div>
              
              
                          </div>
            
          </div>
          <div class="row">
            <div class="col-md-6">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3593958.0912229526!2d84.13014975!3d28.39738195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1623063953374!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-md-6">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3593958.0912229526!2d84.13014975!3d28.39738195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1623063953374!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
          <x-errormsg/>
          {{-- <div class="sv-contact-title">
            <h3>Send us a Message</h3>
            <p>Have any doubts or queries ? Just send Us a message.</p>
          </div> --}}
  
          <!-- contact box form -->
          <div class="my-5 d-flex sv-contact-wrapper">
            <!-- left section -->
            <div class="sv-contact-left">
            
              <div class="sv-contact-left-desc">
                <div class="sv-contact-left-blue-circle"></div>
                <!-- each box -->
                <div class="d-flex sv-contact-left-desc-box">
                  <div class="sv-contat-left-desc-icon">
                    <i class="far fa-envelope"></i>
                  </div>
                  <div class="sv-contact-left-desc-text sv-contact-email">
                    <h6>Email</h6>
                    <p>{{ $contact->email1 }}</p>
                  </div>
                </div>
  
                <!-- each box -->
                <div class="d-flex sv-contact-left-desc-box">
                  <div class="sv-contat-left-desc-icon">
                    <i class="fas fa-phone-alt"></i>
                  </div>
                  <div class="sv-contact-left-desc-text sv-contact-phone">
                    <h6>Phone</h6>
                    <p>{{ $contact->phone1 }}</p>
                  </div>
                </div>
  
                <!-- each box -->
                <div class="d-flex sv-contact-left-desc-box">
                  <div class="sv-contat-left-desc-icon">
                    <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <div class="sv-contact-left-desc-text sv-contact-location">
                    <h6>Location</h6>
                    <p>
                      {{ $contact->address1 }}
                    </p>
                  </div>
                </div>
  
                <!-- each box -->
                <div class="d-flex sv-contact-left-desc-box">
                  <div class="sv-contat-left-desc-icon">
                    <i class="far fa-clock"></i>
                  </div>
                  
                </div>
  
                <!-- each box -->
                <div class="d-flex sv-contact-left-desc-box">
                  <div class="sv-contact-left-desc-text sv-contact-social-link">
                    <h6>Follow us on</h6>
                    <div class="sv-contact-social-link-wrapper">
                        <a href="{{ $contact->facebook1 }}">
                            <i class="fab fa-facebook"></i>
                        </a>
                      <a href="{{ $contact->twitter1 }}">
                        <i class="fab fa-twitter"></i>

                      </a>
                      <a href="{{ $contact->instgram1 }}">
                        <i class="fab fa-instagram"></i>

                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <!-- right section -->
            <div class="sv-contact-right">
              <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="sv-contact-group">
                      <div class="sv-contact-group-title" for="fname">
                        First Name
                      </div>
                      <input type="text" name="fname" placeholder="First Name" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="sv-contact-group">
                      <div class="sv-contact-group-title" for="fname">
                        Last Name
                      </div>
                      <input type="text" name="lname" placeholder="Last Name" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="sv-contact-group">
                      <div class="sv-contact-group-title" for="fname">Email</div>
                      <input type="email" name="email" placeholder="Last Name" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="sv-contact-group">
                      <div class="sv-contact-group-title" for="fname">Phone</div>
                      <input type="text" name="phone" placeholder="Last Name" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="sv-contact-group">
                      <div class="sv-contact-group-title" for="fname">
                        Message
                      </div>
                      <textarea placeholder="Your Message" name="msg"></textarea>
                    </div>
                  </div>
  
                  <div class="col-lg-12">
                    <div class="text-center sv-contact-group">
                      <button>Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
  
          <!-- new section -->
         
        </div>
      </div>
@endsection
