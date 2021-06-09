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
    
     
      <!-- right section -->
      <ul class="d-flex sv-mini-navbar-menu-right ">
        <li> <form id="demo-2" class="p-0 m-0">
          <input type="search" placeholder="Search">
        </form></li>
        <li><a href="{{ route('cart') }}" class="shopping">
          
          @guest
          @else 
          @php
          $cart=DB::table('carts')->where('uid',Auth::user()->id)->count();
          
      @endphp
      <span>{{ $cart }}</span>
      @endguest
           <i class="fas fa-shopping-bag"></i></a></li>
        <li><a href="@guest{{ route('login') }}@else {{ route('profile')}}@endguest"><i class="fas fa-user"></i></a></li>

      </ul>
    </div>
  </div>
  

