@extends('frontend.layout.master')
@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/productinfo.css')}}" />

 <style>
     /* Style the tab */
.tab {
  float: left;
  background-color: var( --brand-two) ;
  color:white;
  width: 30%;
  /* height: 500px; */

}
.tab  .img{
    border-bottom: 1px solid var(--white);
    padding: 10px;
}
/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
  border-bottom: 1px solid var(--white);

}

/* Change background color of buttons on hover */
.tab .tablinks:hover {
  background-color: var(--white);
  color: var(--brand-two)!important;
}

/* Create an active/current "tab button" class */
.tab .tablinks.active {
  background-color: var(--white);
  color: var(--brand-two)!important;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  width: 70%;
  /* height: 500px; */
}
.tabcontent label{
    color: rgb(88, 88, 88);
}
.tabcontent h2{
  color: var(--bgblue);
  font-family: var(--font_man);
  font-size: 1.2rem;
  box-shadow: 0 0 10px gray;
  padding: 1rem 0;
  text-align: center;
  margin-bottom: 2rem;
}
.image-input {
	text-aling: center;
}

.image-input input {
	display: none;
}

.image-input label {
	display: block;
	color: #FFF;
	background: #000;
	padding: .3rem .6rem;
	font-size: 115%;
	cursor: pointer;
}

.image-input label i {
	font-size: 125%;
	margin-right: .3rem;
}

.image-input label:hover i {
	animation: shake .35s;
}

.image-input img {
	max-width: 175px;
	display: none;
}

.image-input span {
	display: none;
	text-align: center;
	cursor: pointer;
}

@keyframes shake {
	0% {
		transform: rotate(0deg);
	}

	25% {
		transform: rotate(10deg);
	}

	50% {
		transform: rotate(0deg);
	}

	75% {
		transform: rotate(-10deg);
	}

	100% {
		transform: rotate(0deg);
	}
}


 </style>
<div class="card w-75 mx-auto my-5 shadow">

<div class="">
    <div class="tab">
        <div class="img">
            <img src="@if(Auth::user()->profile_photo_path==null)  {{asset('frontend/download.webp') }}    @else  {{asset(Auth::user()->profile_photo_path)}} @endif" alt="{{Auth::user()->profile_photo_path}}" class="rounded-circle" width="100" >
            <div class="name">
                <p>{{Auth::user()->name}}</p>
            </div>
        </div>
     
         <button class="tablinks " onclick="openprofile(event, 'Profile')" id="defaultOpen" >Profile</button>
         <button class="tablinks" onclick="openprofile(event, 'appointment')" id="defaultOpen" >Appointment History</button>
        <button class="tablinks" onclick="openprofile(event, 'Password')">Change Password</button>
        <button class="tablinks" onclick="openprofile(event, 'Order')">Order History</button>
        
        <button class="tablinks" >   <a class="tablinks d-block" href="{{ route('profile.logout') }}">Logout</a></button>
     

      </div>
      
      <div id="Profile" class="tabcontent" >
       
        
              <img src="@if(Auth::user()->profile_photo_path==null)  {{asset('frontend/download.webp') }}    @else  {{asset(Auth::user()->profile_photo_path)}} @endif" alt="{{Auth::user()->profile_photo_path}}" class="rounded-circle" width="100" >
          
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Full name: {{Auth::user()->name}} </li>

               <li class="list-group-item">Email: {{Auth::user()->email}} </li>
                <li class="list-group-item">Register on: {{carbon\carbon::parse(Auth::user()->created_at)->year}}-{{carbon\carbon::parse(Auth::user()->created_at)->month}}-{{carbon\carbon::parse(Auth::user()->created_at)->day}} </li> 

            <form action="{{ route('profile.update') }}" enctype="multipart/form-data" method="POST" >
              @csrf
         
        </ul>
            
<div class="form-group">
  <div class="image-input">
    <input type="file" accept="image/*" id="imageInput" name="file">
    <label for="imageInput" class="image-button"><i class="far fa-image"></i> Choose image</label>
    <img src="" class="image-preview">
    <span class="change-image">Choose different image</span>
  </div>
</div>
    
  
 
      

            <div class="sv-product-info-checkout mt-2">

                <input type="submit"  value="Add profile photo">

                <input type="hidden"  value="Add profile photo">

            </div>
     
          </form>
           
              
          
          </div>
          
  
   
    
      <div id="Password" class="tabcontent">
       
        <div class="row pt-3">
          <div class="col-md-6 offset-md-2">
            <form method="POST" action="{{ route('profile.password') }}">
              @csrf
          
                  <div class="form-group">
                  <label>Current Password</label>
                     <input id="oldpass" type="password" class="form-control{{ $errors->has('oldpass') ? ' is-invalid' : '' }}" name="currentpassword" value="{{ $oldpass ?? old('currentpassword') }}" required placeholder="old password">
                  </div> <!-- form-group// -->
                  <div class="form-group">
                  <label>New Password</label>
  
                      <input id="password" type="password" class="form-control{{ $errors->has('newpassword') ? ' is-invalid' : '' }}" name="newpassword" required placeholder="new password">
                  </div> <!-- form-group// -->
                  <div class="form-group">
                  <label>Confirm Password</label>
  
                      <input id="password-confirm" type="password" class="form-control" name="confirmpassword" required placeholder="Confirm password">
                    </div> <!-- form-group// -->
                 
                 
                  <div class="form-group text-center sv-product-info-checkout mt-2 d-block">
                      <input type="submit" value="Update Password "> 
                  </div> <!-- form-group// -->   
          </form> 
          </div>
        </div>
  
            </div>
{{-- apointment section tab --}}

<div id="appointment" class="tabcontent " >  @php
  if(Auth::check()){
    $appointment = DB::table('apponitments')->where('user_id',Auth::id())->orderBy('id','desc')->limit(5)->get();
  
}
@endphp
<table id="myTable" class="table table-responsive-sm" >
  <thead>
      <tr>
          <th>#</th>
          <th>Date</th>
          <th>Time</th>
          <th>Total</th>
          <th>IsPaid</th>


          <th>
              status
          </th>
          <th>Action</th>
  
      </tr>
  </thead>
  <tbody>
      @foreach ($appointment as $item)
          <tr>
              <td>{{$loop->iteration}}</td>

              <td>{{$item->date}}</td>
              <td>{{$item->time}}</td>
              <td>{{$item->total}}</td>

              <td>@if ($item->ispaid==0)
                  <div class="badge bg-warning">unpaid</div>
                 
                  @else 

                  <div class="badge bg-success">paid</div>

              @endif</td>


              <td>@if ($item->status==0)
                  <div class="badge bg-danger">Pending</div>
                  @elseif($item->status==1)
                  <div class="badge bg-info">Not Visited</div>

                  @else 

                  <div class="badge bg-success">Completed</div>

              @endif
              <td>
                  <a  href="{{route('appointment.show',['id'=>$item->id])}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                
              </td>
          </tr>
      @endforeach
  </tbody>
    </table>
             <div class="checkout_btn1 text-center mb-3">
              <a href="{{ route('appointment.history') }} " class="text-center">View All</a>

             </div>
              
            </div>




      
      {{-- order section tab  --}}
      <div id="Order" class="tabcontent " >  @php
            if(Auth::check()){
              $order = DB::table('orders')->where('user_id',Auth::id())->orderBy('id','desc')->limit(5)->get();
            
          }
      @endphp
                 <table id="myTable" class="table table-responsive-sm" >
                    <thead>
                        <tr>
                            <th>#</th>
        
                            <th>Date</th>
                            <th>Tracking ID</th>
                            <th>Total Price  ({{ __getPriceunit() }})</th>
                            <th>Payment Method</th>
                          
                            <th>Status</th>
                            <th>Action</th>
        
          
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($order as $item)
                            <tr> 
                                <td>{{$loop->iteration}}</td>
                                <td>{{carbon\carbon::parse($item->created_at)->year}}-{{carbon\carbon::parse($item->created_at)->month}}-{{carbon\carbon::parse($item->created_at)->day}}</td>
                                <td>{{$item->tracking_code}}</td>
                                <td>{{$item->total}}</td>
                                <td>{{$item->payment_type}}</td>
        
                                <td>
                            @if ($item->status==0)
                            <span class="badge text-white bg-danger">
                                 In review                  
                            </span>
                            @endif
                                    
                            @if ($item->status==1)
                            <span class="badge text-white bg-primary">
                                           Proccessing            
                            </span>
                            @endif
                            @if ($item->status==2)
                            <span class="badge text-white bg-info">
                                  Shipping                     
                            </span>
                            @endif @if ($item->status==3)
                            <span class="badge text-white bg-success">
                                   Delivery                   
                            </span>
                            @endif @if ($item->status==4)
                            <span class="badge text-white bg-danger">
                                   Cancel                    
                            </span>
                            @endif
                                </td>
                               
        <td>
            <a href="{{ route('order.show',['id'=>$item->id]) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
        </td>
                            
                            </tr>
                        @endforeach
                    </tbody>
                      </table>
                       <div class="checkout_btn1 text-center mb-3">
                        <a href="{{ route('order') }} " class="text-center">View All</a>

                       </div>
                        
                      </div>
                
                    </div>
                </div>
                   
                             
                        
<div style="clear: both"></div>
      <script>
        openprofile('event','Profile')
      function openprofile(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
      }
      
      // Get the element with id="defaultOpen" and click on it
     
    </script>
@endsection





