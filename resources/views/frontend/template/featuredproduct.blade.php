<div class="sv-feature-product">
    <div class="container-fluid">
        <div class="sv-why-work-title">
            <h2>Featured Product</h2>
          </div>
        @php
            $product=DB::table('products')->where('featured',1)->where('status',1)->get();
        @endphp
      <!-- Swiper -->
      <div class="swiper-container feature-swiper">
        <div class="swiper-wrapper">
          <!-- each box -->
          @foreach ($product as $item)
          <a href="{{ route('product.detail',['id'=>$item->id,'name'=>$item->name]) }}" class="swiper-slide sv-feature-product-box">
            <div class="sv-feature-product-img">
              <img src="{{ asset($item->image)}}" alt="" />
            </div>
            <div class="sv-feature-product-desc">
              <p class="sv-feature-product-name">{{ $item->name }}</p>
              <p class="sv-feature-product-price">{{ $item->price }}</p>
            </div>
          </a>
          @endforeach
       

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>

      <!-- extra links -->
      <div class="text-center sv-feature-product-more">
      <a href="{{ route('store') }}">
        <p>View more Products <i class="fas fa-chevron-right"></i></p>
      </a>
      </div>
    </div>
  </div>