
      @extends('frontend.layout.master')
      @section('content')
      <style>
      
          .forms{
            background: linear-gradient(
    0deg
    , #e2e3e4 0%, #ffffff 100%);
    padding: 2rem 1rem;
          }
          .forms .form-control{
            border: none;
            outline: none;
            box-shadow:none;
            background: transparent;
            border-bottom: 1px solid gray;
            border-radius: 0;
          }
       
          .forms label{
              margin-top: 1rem;
          }
          .forms input[type=submit]{
              background: linear-gradient( 
90deg
 , #ce1160 0%, #c70871 100%);;
 padding: .4rem 3rem;
 border: none;
 outline: none;
 font-weight: 600;
 color: #fff;
 border-radius: 100px;

margin-top: .6rem;
margin-bottom: .4rem;
margin-top: 2rem;

 }
 .tabcontent {
  display: none;
 }
 .forms button{
 background: transparent;
  border: none;
  font-size: 1.5rem;
  font-weight: 700;
  padding: .3rem 1.5rem;
  

}
.forms button:nth-child(1){
 
}

.forms button:nth-child(2){

 
}
.line{
    font-size: 50px;
    margin-top: -20px;
}
.tab{
    text-align: center;
}
.login h2{
color: #fff;
font-weight: bold;
font-size: 2.2rem;
font-weight: 700;
letter-spacing: 2px;

}
.login p{
    color: #fff;
}
.tab button.active{
    background:var(--brand-one);
    color: #fff;
        }
        .forget{
            color: var(--brand-one)
        }
      </style>

      <div class="bg_img " style="width: 100%;
      background: linear-gradient(100deg, #69adf1 0%, rgba(168, 109, 236, 0.39) 100%), url({{asset('frontend/contact.jpg')}});
      background-position: center center;
      background-repeat: no-repeat;
              background-blend-mode: multiply;
              height: 100vh;
              background-size:cover;
              padding:5% 0 12% 0;
            ">

 <div class="container mt-5">

    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif
<div class="row">
    <div class="col-md-4 forms">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
                @endif
        <div class="tab">
            <div class="row">
                <div class="col-md-5">
                    <button class="tablinks mr-md-5" onclick="openCity(event, 'login')" id="defaultOpen">LogIn</button>
                </div>
           <div class="col-md-2 line">|</div>
                <div class="col-md-5">
                    <button class="tablinks" onclick="openCity(event, 'register')">SignUp</button>

                </div>

            </div>
          
        </div>
       
        <div id="login" class="tabcontent">
            <form action="{{ route('login') }}" method="POST">
            @csrf
                <div class="form-group mb-2">
                <label>  Email <span class="req">*</span></label>
                <input type="email"  placeholder="Email" name="email" value="{{ old('email')}}" required autofocus class="form-control"/>

                </div>
         
            
                <div class="form-group mb-2">
                  <label>  Password <span class="req">*</span></label>
                  <input type="password" name="password" required autocomplete="current-password" class="form-control" placeholder="Password" />

                </div>

                <div class="form-group" >
                  <input type="checkbox" name="remember" id="checkbox"/>
                 <label for="checkbox">  Remember me</label>  
              
              </div>

                <input type="submit" value="SignIn">
                <div class="form-group">

                  <a href="{{ route('password.request') }}" class="forget">Forget Password</a>
                 </div>
        </form>
        </div>
        
        <div id="register" class="tabcontent ">
     
            <form action="{{ route('register') }}" method="POST">
            @csrf
                <div class="form-group mb-2">
                    <label> Full  Name <span class="req">*</span></label>
                    <input type="text"  placeholder="Full name" name="name" value="{{ old('name')}}" required autofocus class="form-control"/>
    
                    </div>
             
                <div class="form-group mb-2">
                <label>  Email <span class="req">*</span></label>
                <input type="email"  placeholder="Email" name="email" value="{{ old('email')}}" required autofocus class="form-control"/>

                </div>
         
            
                <div class="form-group mb-2">
                  <label>  Password <span class="req">*</span></label>
                  <input type="password" name="password" required autocomplete="current-password" class="form-control" placeholder="Password" />

                </div>

                <div class="form-group mb-2">
                    <label>Confirm  Password <span class="req">*</span></label>
                    <input type="password" name="password_confirmation" required autocomplete="current-password" class="form-control" placeholder="Re-type Password" />
  
                  </div>
              

                <input type="submit" value="SignUp">
               
        </form>
        </div>
        
        
      


        </div>
        <div class="col-md-6 offset-md-1 text-center login">
            <h2>Welcome To Sommerville
                <br>
                Communication
            </h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla autem beatae velit accusantium. Voluptas alias porro perferendis a in quia!</p>
        </div>
        
    </div>
</div>




{{-- 

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
  <label>Email<span class="text-danger">*</span></label>
        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
        <input type="text" class="">
    </div>

    <div class="mt-4">
        <x-jet-label for="password" value="{{ __('Password') }}" />
        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
    </div>

    <div class="block mt-4">
        <label for="remember_me" class="flex items-center">
            <x-jet-checkbox id="remember_me" name="remember" />
            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
    </div>

    <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="">
                {{ __('Forgot your password?') }}
            </a>
        @endif

        <x-jet-button class="ml-4">
            {{ __('Log in') }}
        </x-jet-button>
    </div>
</form> --}}




 </div>
      
</div>
      


<script>
openCity(event, 'login');

function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");

  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");


  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
//   document.getElementById(cityName).style.border = "1px solid red";

event.currentTarget.className += " active";

}
</script>
<script>
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script
      @endsection






