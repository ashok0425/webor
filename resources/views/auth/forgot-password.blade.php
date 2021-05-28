@extends('frontend.layout.master')
@section('content')






<div class="container my-5">

    <div class="row">
        <div class="col-md-6 offset-3">
<p>
    Forget Password ? No worry ,Provide your valid email address we will send password reset link to your email.
</p>
   
<center>
  
    <form action="{{ route('password.email') }}" method="POST">
        @if (session('status'))
        <div class="mb-4 font-medium text-success">
            {{ session('status') }}
        </div>
        @endif
        @csrf
        <div class="form-group mt-2">
            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  aria-describedby="emailHelp"  required="">
            @error('email')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
            @enderror

        </div>
        <div class="form-group mt-3">
            <input type="submit" value="Send Link" class="form-control btn btn-success">
        </div>
    </form>
</center>
</div>
</div>
</div>
@endsection