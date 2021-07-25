    <!-- Navigation bar wrapper for larger screen -->
    @php
        $logo=DB::table('websites')->value('image');
    @endphp
    <header class="d-none d-sm-block d-md-block">
      <nav class="custom-bg-white">
          <div class="container">
              <div class="d-flex justify-content-between align-items-center py-5">
                  <div>
                      <a onclick="pageSearch(this);" class="custom-cursor-pointer">
                        <i class="fas fa-search  fa-2x text-dark"></i>
                      </a>
                  </div>
                  <a class="p-0 m-0" href="{{route('/')}}">
                      <img src="{{asset($logo)}}" alt="rumor logo" class="img-fluid"/>
                  </a>
                  <div>
                      <a href="{{route('cart')}}" class="position-relative">
                         <i class="fas fa-shopping-cart fa-2x text-dark"></i>
                       @if (Auth::check())
                       @php
                       $cart=DB::table('carts')->where('uid',Auth::user()->id)->get();
                           
                       @endphp
                       <span class="bg-danger rounded-circle px-2 text-white round_cart"
                       >{{count($cart)}}</span>
                       @endif
                         
                      </a>
                      <span class="mx-3"></span>
                      @auth
                      <a href="{{route('profile')}}">
                        <i class="fas fa-user-circle fa-2x text-dark"></i>
                     </a>
                          @else 
                          <a href="{{route('login')}}">
                            <i class="fas fa-user-circle fa-2x text-dark"></i>
                         </a>
                      @endauth
                      
                  </div>
              </div>
          </div>
          <div id="navbar-searchbar" class="container d-none">
              <div class="d-flex">
                  <form class="d-flex" style="width:100%;" action="{{route('search')}}">
                      <input class="form-control custom-br-0 border-2 custom-bc-primary custom-fs-24" type="search" placeholder="Search Products..." aria-label="Search" name="product">
                      <button class="btn custom-br-0 custom-bc-primary border-0 border-end border-top border-bottom border-2 custom-text-primary custom-fs-24"
                          type="submit">Search</button>
                  </form>
                  <span class="mx-2"></span>
                  <button class="btn custom-fs-24 p-0" title="close search bar" onclick="closeSearch(this);">&#215;</button>
              </div>
          </div>
          <div class="container">
              <div class="d-flex justify-content-between py-4">
                  <span></span>
                  <a href="{{route('/')}}" class="@if (PAGE=='home')
                  custom-text-primary 
                  @else
                  custom-text-secondary
                  @endif custom-fs-16 custom-fw-400">Home</a>
                  <a href="{{route('lookbook')}}" class="@if (PAGE=='lookbook')
                  custom-text-primary 
                  @else
                  custom-text-secondary
                  @endif custom-fs-16 custom-fw-400">Look Book</a>
                  <a href="{{route('store')}}" class="@if (PAGE=='shop')
                  custom-text-primary 
                  @else
                  custom-text-secondary
                  @endif custom-fs-16 custom-fw-400">Shop</a>
                  <a href="{{route('about')}}" class="@if (PAGE=='about')
                  custom-text-primary 
                  @else
                  custom-text-secondary
                  @endif custom-fs-16 custom-fw-400">About</a>
                  <a href="{{route('contact')}}" class="@if (PAGE=='contact')
                  custom-text-primary 
                  @else
                  custom-text-secondary
                  @endif custom-fs-16 custom-fw-400">Contact</a>
                  <span></span>
              </div>
          </div>
      </nav>
  </header>