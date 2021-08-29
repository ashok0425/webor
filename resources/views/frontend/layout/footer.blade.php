    <!-- Footer wrapper -->
    @php
        $social=DB::table('websites')->first()
    @endphp



    <footer class="py-5">
        <div class="footer custom-bg-primary  mx-0 px-0">
            <div class="container">
            <div class="row">
                <div class="col-md-2 offset-md-3 ">
                    <span class="news   text-right">Newsletter</span>
                </div>
                <div class="col-md-4  text-center ">
                    <form action="{{route('subscriber.store')}}" method="POST">
                        @csrf

                        <input   type="email"
                            placeholder="Email" name="email" required>
                            <button
                             ><i class="fas fa-location-arrow"></i></button>
                      </form>
                </div>
            </div>
        </div>
        </div>
      <div class="container">
          <div class="row">

              <div class="col-md-10 col-lg-10 offset-md-1">
                  <div class="row ">
                     @php
                         $category=DB::table('categories')->orderBy('id','desc')->where('status',1)->limit(6)->get();

                     @endphp
                   @foreach ($category as $item)
                   <div class=" col-sm-4 col-md-2 col-lg-2  my-3 col-4"><a
                    href="{{route('product.store',['id'=>$item->id,'name'=>$item->category])}}"
                    class="custom-text-secondary custom-fs-24 custom-fw-400 border-none border-bottom custom-bc-secondary my-3">{{$item->category}}</a></div>
                   @endforeach
                  </div>
              </div>
              <div class="col-md-8 col-lg-8 offset-md-4 pad_l">

              <div class="row ">
                <div class=" col-sm-4 col-md-2 col-lg-2  my-3 col-4 text-center"><a
                    href="{{$social->instagram1}}">
                 <i class="fab fa-instagram-square fa-2x text-dark"></i>
                </a></div>
            <div class=" col-sm-4 col-md-2 col-lg-2  my-3 col-4 text-center"><a
                    href="{{$social->other1}}">
                    <i class="fab fa-tiktok fa-2x text-dark"></i>

                </a></div>
            <div class=" col-sm-4 col-md-2 col-lg-2  my-3 col-4 text-center"><a
                    href="{{$social->facebook1}}">
                    <i class="fab fa-facebook fa-2x text-dark"></i>

                </a></div>
             </div>
            </div>


<div class="col-md-6 offset-md-3 text-center ml-2">
    &copy;2021 <a href="{{route('/')}}"  class="custom-text-secondary">RumorhasitNepal</a> All Rights Reserved.&nbsp; Powered by <a href="https://falcontechnepal.com"  class="custom-text-secondary">Falcon Tech </a>
</div>

                  </div>
              </div>

          </div>
      </div>
  </footer>
