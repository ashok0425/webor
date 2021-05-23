<div class="sv-footer">
    <div class="container">
      @php
          $footer=DB::table('websites')->first();
      @endphp
      <div class="sv-footer-wrapper">
        <!-- footer top section -->
        <div class="sv-footer-top">
          <div class="row">
            <!-- each box -->
            <div class="col-md-3">
              <div class="footer-box">
                <div class="sv-footer-top-left">
                  <img src="{{ asset($footer->image) }}" alt="" />
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="sv-footer-bottom-box">
                <div class="sv-footer-bottom-title">
                  <h3>Useful Links</h3>
                </div>
                <div class="sv-footer-bottom-desc">
                  <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Cart</a></li>
                    <li><a href="#">Terms & Condition</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-3">
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

            <div class="col-md-3">
              <div class="sv-footer-bottom-box">
                <div class="sv-footer-bottom-title">
                  <h3>Customer Service</h3>
                </div>
                <div class="sv-footer-bottom-desc">
                  <ul>
                    <li><a href="#">Receive coupnes and other offers</a></li>
                    <li class="sv-footer-subscribe">
                      <div class="sv-footer-subscribe-email">
                        <input type="text" placeholder="Your Email" />
                      </div>
                      <input type="submit" value="Submit" />
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
                <li><i class="fab fa-facebook"></i></li>
                <li><i class="fab fa-twitter"></i></li>
                <li><i class="fab fa-instagram"></i></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- footer bottom section -->
        <div class="sv-footer-bottom">
          <div class="sv-footer-copyright">
            <div class="sv-footer-copyright-left">
              <span>&cpy 2020 Something pvt ltd</span>
            </div>
            <div class="sv-footer-copyright-right">
              <span>Desigend and Devlop by XDezo</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>