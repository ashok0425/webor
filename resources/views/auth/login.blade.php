@php
define('PAGE','home')
@endphp
      @extends('frontend.layout.master')
      @section('content')
      

        <section class="container">
          <div class="text-center mt-5">
            
    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif
              <h2 class="custom-fs-50 custom-fw-700"><span class="custom-text-secondary">Welcome to </span><span class="custom-text-primary">Rumor Has It</span></h2>
          </div>
          <div class="mt-5" style="max-width: 485px; margin: auto">
<x-errormsg />

              <form action="{{ route('login') }}" method="POST">
                @csrf
                      <div>
                          <label for="form-email" class="form-label custom-fs-16 custom-fw-400">Email</label>
                          <input type="text" id="form-email" class="custom-br-0 custom-fw-400 form-control p-2 border custom-fs-16 border-2 custom-bc-secondary" placeholder="Email Address" name="email" value="{{ old('email')}}" required>
                      </div>
                      <div class="my-4">
                          <label for="form-password" class="form-label custom-fs-16 custom-fw-400">Password</label>
                          <input type="password" id="form-password" class="custom-br-0 custom-fw-400 form-control p-2 border custom-fs-16 border-2 custom-bc-secondary" name="password">
                      </div>
                      <div class="my-4 d-flex justify-content-between">
                        <a href="{{ route('password.request') }}" class="float-right av" style="color:#005aa6!important;">Forgot password?</a>
                        <label class="remember-field">
                            <input class="frm-input " id="remember_me" type="checkbox" class="form-checkbox" name="remember"><span class="av"  style="color:#005aa6!important;">&nbsp; Remember me</span>
                        </label>
                    </div>
                  
                      <div class="d-flex align-items-center justify-content-between pt-2">
                          <button type="submit" class="btn custom-fs-25 custom-fw-400 px-5 custom-bg-secondary custom-text-white">Log in</button>
                          <div>
                              <a href="{{route('register')}}" class="custom-text-secondary custom-fs-16 custom-fw-400">Need to register?</a>
                          </div>
                      </div>
                      <div class="d-flex mt-5">
                        <a href="{{ url('auth/google') }}" class="btn custom-fs-16 custom-text-secondary custom-fw-400 px-4 custom-bg-white border-2 custom-bc-secondary" style="width:100%;">sign up with Google</a>
                        <span class="mx-2"></span>
                        <a href="{{ url('auth/facebook') }}" class="btn custom-fs-16 custom-text-secondary custom-fw-400 px-4 custom-bg-white border-2 custom-bc-secondary" style="width:100%;">sign up with Facebook</a>
                    </div>
              </form>
          </div>
      </section>
      @endsection






