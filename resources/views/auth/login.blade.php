
      @extends('frontend.layout.master')
      @section('content')
      <style>
          .forms{
    background: #fff;
    box-shadow: 0 4px 22px 0 rgb(115 49 165 / 47%);
    border-radius: 8px;
    padding:1rem;
}
  .forms .form-control{
            border: none;
            outline: none;
            box-shadow:none;
            background: transparent;
            border-radius: 0;
          }

          .forms .form-group{
        border-bottom: 1px solid #e8e8e8;
    }
   .forms input[type=submit]{
            background: linear-gradient(
    90deg
    , #ce1160 0%, #b63f81 100%);
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
  font-size: 1.2rem;
  font-weight: 500;
  padding: .3rem 1.5rem;
  margin-bottom: 0;

}


.tab{
    text-align: center;
    border-bottom: 1px solid gray;
}
.login h2{
color: rgb(14, 13, 13);
font-size: 2.2rem;
font-weight: 700;
letter-spacing: 2px;
margin-bottom: 0;
padding: 0;
}
.login p{
    color: rgb(34, 34, 34);
}
.tab button.active{
  border-bottom: 2px solid var(--brand-two);
  color: var(--brand-two);
}
 .forget{
            color: var(--brand-two)
        }


      </style>

      <div class="bg_img " style="width: 100%;
      background:  url({{asset('frontend/img/login.jpg')}});
      background-position: center center;
      background-repeat: no-repeat;
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
    <div class="col-md-4 forms order-md-1 order-2">
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
                <div class="col-md-4 col-6">
                    <button class="tablinks mr-md-5" onclick="openCity(event, 'login')" id="defaultOpen">LogIn</button>
                </div>
           
                <div class="col-md-5 offset-md-2 col-6">
                    <button class="tablinks" onclick="openCity(event, 'register')">SignUp</button>

                </div>

            </div>
          
        </div>
       
        <div id="login" class="tabcontent">
            <form action="{{ route('login') }}" method="POST">
            @csrf
                <div class="form-group my-4">
                {{-- <label>  Email <span class="req">*</span></label> --}}
                <input type="email"  placeholder="Email" name="email" value="{{ old('email')}}" required autofocus class="form-control"/>

                </div>
         
            
                <div class="form-group my-4">
                  {{-- <label>  Password <span class="req">*</span></label> --}}
                  <input type="password" name="password" required autocomplete="current-password" class="form-control" placeholder="Password" />

                </div>

                <div class="d-flex justify-content-between" >
                
                 <label> <input type="checkbox" name="remember" id="checkbox"/> &nbsp;Remember me</label>  
                 <a href="{{ route('password.request') }}" class="forget">Forget Password</a>
              
              </div>

                <input type="submit" value="Login" class="form-control btn-block">
            
        </form>
        </div>
        
        <div id="register" class="tabcontent ">
     
            <form action="{{ route('register') }}" method="POST">
            @csrf
                <div class="form-group my-4">
                    <input type="text"  placeholder="Full name" name="name" value="{{ old('name')}}" required autofocus class="form-control"/>
    
                    </div>
             
                <div class="form-group my-4">
                <input type="email"  placeholder="Email" name="email" value="{{ old('email')}}" required autofocus class="form-control"/>

                </div>
         
            
                <div class="form-group my-4">
                  <input type="password" name="password" required autocomplete="current-password" class="form-control" placeholder="Password" />

                </div>

                <div class="form-group my-4">
                    <input type="password" name="password_confirmation" required autocomplete="current-password" class="form-control" placeholder="Confirm  Password" />
  
                  </div>
                  <label> <input type="checkbox" name="remember" id="checkbox"/> &nbsp; I aggree with all the <a href="">term & conditions</a></label> 
                  <input type="submit" value="Singup" class="form-control btn-block">

               
        </form>
        </div>
        
        
      


        </div>
        <div class="col-md-7 offset-md-1 text-center login order-md-2 order-1 mb-5  mb-md-0">
            <h2>Welcome To Sommerville
                <br>
                Communication
            </h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla autem beatae velit accusantium. Voluptas alias porro perferendis a in quia!</p>
        </div>
        
    </div>
</div>





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
    </script>
      @endsection






