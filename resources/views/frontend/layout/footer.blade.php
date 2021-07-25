    <!-- Footer wrapper -->
    @php
        $social=DB::table('websites')->first()
    @endphp
    <footer class="py-5">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-sm-5 col-md-3 col-lg-3 col-6">
                  <a href="./">
                      <img style="width:100%; object-fit:fill;" src="{{asset('frontend/images/logo.png')}}" alt="website logo" />
                  </a>
              </div>
              <div class="col-md-9 col-lg-6">
                  <div class="row align-items-center">
                     @php
                         $category=DB::table('categories')->orderBy('id','desc')->where('status',1)->limit(6)->get();

                     @endphp
                   @foreach ($category as $item)
                   <div class=" col-sm-4 col-md-3 col-lg-2 justify-content-start my-3 col-4"><a
                    href="{{route('product.store',['id'=>$item->id,'name'=>$item->category])}}"
                    class="custom-text-secondary custom-fs-24 custom-fw-400 border-none border-bottom custom-bc-secondary my-3">{{$item->category}}</a></div>
                   @endforeach
                      <div class=" col-sm-4 col-md-4 col-lg-2 justify-content-start align-items-center my-3 col-4"><a
                              href="{{$social->instagram1}}">
                           <i class="fab fa-instagram-square fa-2x text-dark"></i>
                          </a></div>
                      <div class=" col-sm-4 col-md-4 col-lg-2 justify-content-start align-items-center my-3 col-4"><a
                              href="{{$social->other1}}">
                              <i class="fab fa-tiktok fa-2x text-dark"></i>

                          </a></div>
                      <div class=" col-sm-4 col-md-4 col-lg-2 justify-content-start align-items-center my-3 col-4"><a
                              href="{{$social->facebook1}}">
                              <i class="fab fa-facebook fa-2x text-dark"></i>

                          </a></div>
                  </div>
              </div>
              <div class=" col-lg-3">
                  <form action="{{route('subscriber.store')}}" method="POST">
                    @csrf
                    <label for="newsletter-email" class="form-label custom-fs-24 custom-text-secondary">Signup for
                        Newsletter & Discounts</label>
                    <input id="newsletter-email"
                        class="form-control custom-br-0 border border-2 custom-bc-secondary custom-fs-24" type="email"
                        placeholder="Email" name="email">
                        <input id="newsletter-email"
                        class="form-control custom-br-0 border border-2 mt-1 custom-bg-primary custom-fs-24 text-white" type="submit"
                         value="submit">
                  </form>
              </div>
          </div>
      </div>
  </footer>