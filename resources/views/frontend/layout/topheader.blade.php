<div class="sv-navbar">
     {{-- fetching logo --}}
     @php
    $logo= DB::table('websites')->first();
 @endphp
    <div class="container-fluid">
      <div class="sv-navbar-wrapper">
        <div class="row">
          <!-- left section -->
          <div class="col-md-3">
            <div class="sv-navbar-left">
              <div class="sv-navbar-logo">
                <img src="{{ asset($logo->image) }}" alt="" />
              </div>
            </div>
          </div>

          <!-- right section -->
          <div class="col-md-9">
            <div class="d-flex justify-content-end sv-navbar-right">
              <!-- each box -->
              <div class="d-flex sv-navbar-box">
                <div class="pe-3 sv-navbar-icon sv-navbar-email-icon">
                  <i class="far fa-envelope"></i>
                </div>
                <div class="sv-navbar-box-desc sv-navbar-email-desc">
                  <h3>Email</h3>
                  <p>{{ $logo->email1 }}</p>
                </div>
              </div>

              <!-- each box -->
              <div class="d-flex sv-navbar-box">
                <div class="pe-3 sv-navbar-icon sv-navbar-email-icon">
                  <i class="fas fa-phone-alt"></i>
                </div>
                <div class="sv-navbar-box-desc sv-navbar-email-desc">
                  <h3>Phone</h3>
                  <p>{{ $logo->phone1 }}</p>
                </div>
              </div>

              <!-- each box -->
              <div class="d-flex sv-navbar-box">
                <div class="pe-3 sv-navbar-icon sv-navbar-email-icon">
                  <i class="far fa-clock"></i>
                </div>
                <div class="sv-navbar-box-desc sv-navbar-email-desc">
                  <h3>Book Appointment</h3>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>