<div class="sv-footer">
    <div class="container-fluid">
      @php
          $footer=DB::table('websites')->first();
      @endphp
      <div class="sv-footer-wrapper">
        <!-- footer top section -->
        <div class="sv-footer-top">
          <div class="row">
            <!-- each box -->
            <div class="col-md-2 ">
              <div class="footer-box">
                <div class="sv-footer-top-left">
                  <img src="{{ asset($footer->image) }}" alt="" />
                </div>
              </div>
            </div>

            <div class="col-md-2  ">
              <div class="sv-footer-bottom-box links">
                <div class="sv-footer-bottom-title pl-5">
                  <h3>Useful Links</h3>
                </div>
                <div class="sv-footer-bottom-desc">
                  <ul>
                    <li><a href="{{ route('about') }}">About us</a></li>
                    <li><a href="{{ route('contact') }}">Contact us</a></li>
                    <li><a href="{{ route('profile') }}">My Account</a></li>
                    <li><a href="{{ route('cart') }}">Cart</a></li>
                    <li><a href="{{ route('term') }}">Terms & Condition</a></li>
                    <li><a href="{{ route('policy') }}">Privacy Policy</a></li>

                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-3 offset-md-1">
              <div class="sv-footer-bottom-box">
                <div class="sv-footer-bottom-title">
                  <h3>Contact Us</h3>
                </div>
                <div class="sv-footer-bottom-desc footer-contact">
                  <ul>
                    <li>
                      <i class="fas fa-address-book"></i>
                      <span>{{ $footer->address1 }}</span>
                      <p></p>
                    </li>
                    <li>
                      <i class="fas fa-phone-alt"></i>
                      <span>{{ $footer->phone1 }}</span>
                    </li>
                    <li>
                      <i class="fas fa-envelope"></i>
                      <span>{{ $footer->email1 }}</span>
                    </li>
                  </ul>
                  OR
                  <ul>
                    <li>
                      <i class="fas fa-address-book"></i>
                      <span>{{ $footer->address2 }}</span>
                      <p></p>
                    </li>
                    <li>
                      <i class="fas fa-phone-alt"></i>
                      <span>{{ $footer->phone2}}</span>
                    </li>
                    <li>
                      <i class="fas fa-envelope"></i>
                      <span>{{ $footer->email2 }}</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-3 offset-md-1">
              <div class="sv-footer-bottom-box">
                <div class="sv-footer-bottom-title">
                  <h3>Customer Service</h3>
                </div>
                <div class="sv-footer-bottom-desc">
                  <ul>
                    <li><a href="#">Receive coupon and other offers</a></li>
                    <li class="sv-footer-subscribe">
                      <form action="{{ route('subscriber.store') }}" method="POST">
                        @csrf
                        <div class="sv-footer-subscribe-email">
                          <input type="email" placeholder="Your Email" name="email"/>
                        </div>
                        <input type="submit" value="Submit" />
                      </form>
                     
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- footer mid section -->
        <div class="d-flex sv-footer-mid">
          <div class="sv-footer-social-link">
            <div class="sv-footer-social-link-left">
              <p>Connect with us</p>
            </div>
            <div class="sv-footer-social-link-right">
              <ul>
                <li><a href="{{ $footer->facebook1 }}" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li>  <a href="{{ $footer->twitter1 }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="{{ $footer->instagram1 }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
<hr>
        <!-- footer bottom section -->
        <div class="sv-footer-bottom">
          <div class="sv-footer-copyright">
            <div class="sv-footer-copyright-left">
              <span>&copy {{ date('Y') }} Somervillecommunication Pvt Ltd</span>
            </div>
            <div class="sv-footer-copyright-right">
              <span>Created by <a href="https://falcontechnepal.com">Falcontechnepal Pvt Ltd</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>