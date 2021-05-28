@extends('frontend.layout.master')
@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/contact.css')}}" />
  <!-- new section -->
    <!-- contact section -->
    <div class="sv-contact">
        <div class="container">
          <div class="sv-contact-title">
            <h3>Send us a Message</h3>
            <p>Have any doubts or queries ? Just send Us a message.</p>
          </div>
  
          <!-- contact box form -->
          <div class="my-5 d-flex sv-contact-wrapper">
            <!-- left section -->
            <div class="sv-contact-left">
              <div class="sv-contat-left-title">
                <h4>Contact Information</h4>
                <h6>You can contact us for more additional information</h6>
              </div>
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
                  <div class="sv-contact-left-desc-text sv-contact-opening-hour">
                    <h6>Opening Hour</h6>
                    <p>Mon-Fri : 9 AM -8 PM</p>
                    <p>Sat : 10 AM - 8 PM</p>
                    <p>Sun : 10 AM - 7 PM</p>
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
          <!-- visit store -->
          <div class="sv-visit-store">
            <div class="container">
              <div class="sv-visti-title">
                <h3>Or Visit our Store</h3>
                <p>You can also choose to visit our store for fast service</p>
              </div>
              <div class="sv-visit-store-wrapper">
                <!--The div element for the map -->
                <div id="map"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
