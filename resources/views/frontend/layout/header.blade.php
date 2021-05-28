<div class="sv-mini-navbar">
 
    <div class="sv-mini-navbar-wrapper">
      <!-- left section -->
      <div class="sv-mini-navbar-left">
        <div class="mini-nav-hamburger">
          <i class="fas fa-bars"></i>
        </div>
        <ul class="sv-mini-navbar-menu-left">
          <li><a href="{{ route('/') }}">Home</a></li>
          <li><a href="{{ route('store') }}">Shop</a></li>
          <li><a href="{{ route('appointment') }}">Repair</a></li>
          <li><a href="{{ route('blog') }}">Blog</a></li>
          <li><a href="{{ 'contact' }}">Contact Us</a></li>
        </ul>
      </div>
      {{-- fetching cart value  --}}
      @php
          $cart=DB::table('carts')->where('uid',1)->count();
      @endphp
      <!-- right section -->
      <ul class="d-flex sv-mini-navbar-menu-right">
        <li class="nav-search-btn"><i class="fas fa-search"></i></li>
        <li><a href="{{ route('cart') }}" class="shopping"><span>{{ $cart }}</span> <i class="fas fa-shopping-bag"></i></a></li>
        <li><a href="@guest{{ route('login') }}@else {{ route('profile')}}@endguest"><i class="fas fa-user"></i></a></li>

      </ul>
    </div>
  </div>
  
    <!-- global background overlay -->
    <div class="sv-mini-navbar-global-overlay"></div>

    <!-- navbar global search -->
    <!-- navbar search box -->
    <div class="sv-mini-navbar-search">
      <div class="sv-mini-navbar-close">
        <i class="fas fa-times"></i>
      </div>
      <div class="sv-mini-navbar-search-wrapper">
        <form class="sv-mini-navbar-search-box" action="">
          <div class="sv-mini-navbar-search-tab">
            <input type="text" placeholder="Search" />
          </div>
          <button><i class="fas fa-search"></i></button>
        </form>
      </div>
    </div>