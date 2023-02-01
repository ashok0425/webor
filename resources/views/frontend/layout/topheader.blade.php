    <!-- Navigation bar wrapper for larger screen -->
    @php
        $logo=DB::table('websites')->first();
        $categories=DB::table('categories')->where('status',1)->get();

    @endphp
  
  <nav class="nav_bar navbar navbar-expand-lg">
    <div class="container">
      <img
        src="{{$logo->image}}"
        width="150"
        height="60"
        alt=" {{$logo->title}}"
      />

      <div
        class="d-flex gap-5 d-none d-lg-block "
        id="navbarTogglerDemo02">

        <a href="">
          <a
            type="button"
            class="nav_link">
            Home
          </a>
        </a>

        <a
          type="button"
          class=" dropdown-toggle px-3 nav_link"
          data-bs-toggle="dropdown">
          Category
        </a>

        <div class="nav_drop_large dropdown-menu">
          <div class="row">
      
           @foreach ($categories as $category)
               
                <a class='col-md-2 mx-1' href="">
                  <div
                    class=" border px-0 pb-2">
                    <div class="">
                      <img
                        src="{{asset($category->image)}}"
                        alt="img"
class="img-fluid w-100 max_height"
                      />
                    </div>
                    <h6 class="pt-2 text-white text-center h6 pb-0 mb-0">{{$category->category}}</h6>
                  </div>
                </a>
                @endforeach

          </div>
        </div>

        <a href="">
          <a
            type="button"
            class="nav_link px-3">
            About
          </a>
        </a>

        <a href="">
          <a
            type="button"
            class="nav_link px-3">
            Products
          </a>
        </a>

        <a href="">
          <a
            type="button"
            class="nav_link ps-3">
            Contact
          </a>
        </a>
      </div>
      <button
        typeof="button"
        class="navbar-toggler d-flex d-block d-lg-none m-0 p-0"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar">
        <i class="fas fa-bars"></i>
      </button>
      <div
        class="off_canvas_wrapper offcanvas offcanvas-end d-lg-none"
        id="offcanvasNavbar"
        aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5
            class="offcanvas-title fw-bold"
            id="offcanvasNavbarLabel">
            Gem Plastic
          </h5>

          <i
            class="off_canvas_button_close btn-close m-0 p-0"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
          ></i>
        </div>
        <div class="offcanvas-body">
          <div class="navbar-nav justify-content-end flex-grow-1 pe-3 mb-5">
            <Link href="">
              <div
                class="off_canvas_nav_active off_canvas_nav_link  d-flex align-items-center gap-2 pb-3 "
                data-bs-dismiss="offcanvas">
                <ImHome />
                Home
              </div>
            </Link>
            <Link href="">
              <div
                class="{`off_canvas_nav_active  off_canvas_nav_link  d-flex align-items-center gap-2  pb-3 "
                data-bs-dismiss="offcanvas">
                {{-- <HiTemplate /> --}}
                Products
              </div>
            </Link>

            <div class="dropdown">
              <button
                type="button"
                class="category_off_canvas_dropdown dropdown-toggle p-0 pb-3 ""
                data-bs-toggle="dropdown"
                aria-expanded="false">
                <FaSitemap class="me-2" />
                Categories
              </button>
              <ul class="off_canvas_category_drop dropdown-menu mb-3">
                @foreach ($categories as $category)
                    
                    <a
                      data-bs-dismiss="offcanvas">
                      <Link href="">
                        <a
                          class="dropdown_item dropdown-item "
                          href="#">
                          {{$category->category}}
                        </a>
                      </Link>
                    </a>
                    @endforeach

              </ul>
            </div>

            <Link href="">
              <div
                class=" off_canvas_nav_active  off_canvas_nav_link  d-flex align-items-center gap-2 pb-3 "
                data-bs-dismiss="offcanvas">
                {{-- <HiInformationCircle /> --}}
                About
              </div>
            </Link>

            <Link href="">
              <div
                class=" off_canvas_nav_active  off_canvas_nav_link d-flex align-items-center gap-2 pb-3 "
                data-bs-dismiss="offcanvas">
                {{-- <GrMail /> --}}
                Contact
              </div>
            </Link>
          </div>
        </div>
      </div>
    </div>
  </nav>