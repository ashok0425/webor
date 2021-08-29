@push('style')
<style>
    .navbar button{
        border: 0!important;
        outline: none!important;
        box-shadow: none!important;
    }
    .navbar button:focus{
        border: 0!important;
        outline: 0!important;
        box-shadow: none!important;
    }
</style>
@endpush

    <!-- Navigation bar wrapper for smaller screen -->
    <header class="d-sm-none d-md-none d-lg-none">
        @php
        $logo=DB::table('websites')->value('image');
    @endphp
      <nav class="navbar">
          <div class="container pt-2 pb-5">
              <button class="navbar-toggler p-0  " type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                  aria-label="Toggle navigation">

                  <span class="navbar-toggler-icon">
                  <i class="fas fa-bars"></i>
                  </span>
              </button>
              <a class="navbar-brand p-0 m-0" href="{{route('/')}}">
                <img src="{{asset($logo)}}" alt="rumor logo" class="img-fluid" width="140"/>

              </a>
              <div style="position: relative;">
                  <a href="{{route('cart')}}">
                    <i class="fas fa-shopping-cart fa-2x text-dark"></i>

                      <span class="bg-danger rounded-circle p-0 px-1 custom-fs-16 text-white"
                          style="position:absolute; left:18px; top:-10px;">0</span>
                  </a>
                  <span class="mx-1"></span>
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
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                          <a href="{{route('/')}}" class="nav-link @if (PAGE=='home')
                          custom-text-primary 
                          @else
                          custom-text-secondary
                          @endif  custom-fs-16 custom-fw-400 ">Home</a>
                      </li>
                      
                      <li class="nav-item" >
                          <a href="{{route('lookbook')}}"
                              class="nav-link  custom-fs-16 @if (PAGE=='lookbook')
                              custom-text-primary 
                              @else
                              custom-text-secondary
                              @endif custom-fw-400">Look Book</a>
                      </li>
                      <li class="nav-item">
                          <a href="{{route('store')}}"
                              class="nav-link @if (PAGE=='shop')
                              custom-text-primary 
                              @else
                              custom-text-secondary
                              @endif custom-fs-16 custom-fw-400">Shop</a>
                      </li>
                      <li class="nav-item">
                          <a href="{{route('about')}}"
                              class="nav-link @if (PAGE=='about')
                              custom-text-primary 
                              @else
                              custom-text-secondary
                              @endif custom-fs-16 custom-fw-400">About</a>
                      </li>
                      <li class="nav-item">
                          <a href="{{route('contact')}}"
                              class="nav-link @if (PAGE=='contact')
                              custom-text-primary 
                              @else
                              custom-text-secondary
                              @endif custom-fs-16 custom-fw-400">Contact</a>
                      </li>
                  </ul>
                  <form class="d-flex" action="{{route('search')}}" >
                      <input class="form-control custom-br-0 custom-bc-primary" type="search" placeholder="Search" aria-label="Search" name="product">
                      <button class="btn custom-br-0 border-0 border-end border-top border-bottom custom-bc-primary custom-text-primary"
                          type="submit">Search</button>
                  </form>
              </div>
          </div>
      </nav>
  </header>