<div class="sv-caresoul">
    @php
        $banner=DB::table('banners')->first();
    @endphp
    <div class="sv-caresoul-wrapper">
      <div class="sv-caresoul-imgbox">
        <img src="{{asset($banner->image) }}" alt="sommerville banner" />
      </div>
      <!-- caresoul gradient -->
      <div class="sv-caresoul-gradient"></div>
      <div class="sv-caresoul-text">
        <h3>Mobile</h3>
        <h2>{!! $banner->title !!}</h2>
        <p>
          {!!$banner->text!!}
        </p>
        <div class="sv-caresoul-btn">
          <button><a href="">Repair</a></button>
          {{-- <button><a href="">Buy</a></button> --}}
        </div>
      </div>
    </div>
  </div>
