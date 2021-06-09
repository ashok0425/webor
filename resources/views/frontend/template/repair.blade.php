<div class="sv-start-repair">
    <div class="container-fluid">
      <div class="sv-start-repair-wrapper">
        <div class="py-5 text-center sv-start-repair-title">
          <h2>Start Your Repair</h2>
          <p>
            Somerville Communication is your local full-service iPhone, iPad, and iPod repair shop, located
            <br>
            in Somerville Massachusetts, and East Boston. We welcome you for walk-in repairs.
          </p>
        </div>

        <div
          class="d-flex flex-wrap justify-content-center sv-start-repair-desc"
        >
          <!-- each box -->
          <div class="sv-start-repair-box">
            <a href="{{ route('repair.device',['device'=>'mobile']) }}">
            <div class="sv-start-repair-img">
              <img src="{{ asset('frontend/img/index/startrepair/iphone.png')}}" alt="spmerville repair" />
            </div>
            <div class="text-center sv-start-repair-text">
              <h3>Mobile</h3>
            </div>
          </a>
          </div>

          <!-- each box -->
          <div class="sv-start-repair-box">
            <a href="{{ route('repair.device',['device'=>'tablet']) }}">

            <div class="sv-start-repair-img">
              <img src="{{ asset('frontend/img/index/startrepair/ipad.png')}}" alt="spmerville repair" />
            </div>
            <div class="text-center sv-start-repair-text">
              <h3>Tablet</h3>
            </div>
            </a>
          </div>

          {{-- <!-- each box -->
          <div class="sv-start-repair-box">
            <div class="sv-start-repair-img">
              <img src="{{ asset('frontend/img/index/startrepair/samsung.png')}}" alt="spmerville repair" />
            </div>
            <div class="text-center sv-start-repair-text">
              <h3>Samsung</h3>
            </div>
          </div>

          <!-- each box -->
          <div class="sv-start-repair-box">
            <div class="sv-start-repair-img">
              <img src="{{ asset('frontend/img/index/startrepair/htc.png')}}" alt="spmerville repair" />
            </div>
            <div class="text-center sv-start-repair-text">
              <h3>HTC</h3>
            </div>
          </div>

          <!-- each box -->
          <div class="sv-start-repair-box">
            <div class="sv-start-repair-img">
              <img src="{{ asset('frontend/img/index/startrepair/lg.png')}}" alt="spmerville repair" />
            </div>
            <div class="text-center sv-start-repair-text">
              <h3>LG</h3>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </div



  