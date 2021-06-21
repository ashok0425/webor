@extends('frontend.layout.master')
@section('content')
<style>
 .abouts{
     /* background: rgb(1, 35, 146); */
  padding: 2.4rem 2rem;
 }
 .abouts h2{
    color: #000;
    margin-bottom: 1rem;
 }
 .abouts .cat_title .divider{
     background: gray!important;
 }
 .abouts p{
     color: #000;
     margin: .4rem 0;
 }
 .abouts li{
     list-style: disc;
     margin-bottom: .6rem;
 }
    .btns{
background: var(--brand-two);
padding: .6rem 2rem;
transition: all .5s ease-in;
margin-top: 2rem!important;
color: #fff;
border-radius: 50px;
max-width: 200px;
text-align: center;
    }
    .btns:hover{
color: #fff;

    }
    h3{
      color:#000;
      margin-bottom: 0rem;
      margin-top: .3rem;
      font-size: 1.1rem
    }
    .abouts img:nth-child(1){
height: 400px;
width: 90%;
    }
    .row{
        margin-bottom: 1rem;
    }
    .abouts li,.abouts p{
        font-family: 'Poppins'!important;
        font-weight: 300!important;
    }

</style>
 
{{-- <div class="container"> --}}
   
        <div class="container mt-4 abouts">

<div class="row">
    <div class="col-md-5 p-0 m-0">
<img src="{{asset('about1.jpg')}}" alt="" class="img-fluid"  >
    </div>
    <div class="col-md-7 ">
       
        <h1 class="text-center mb-3">About us </h1>
       <h3>Who Are We:</h3> 
<p>
    Somerville Communications is a digital device repair company that mainly deals with phones primarily from our two outlets at 376 Chelsea street, East Boston, 02128 and 52 Broadway, Somerville, MA, 02145.
</p>
        <p>
            We take care of your digital repairs from broken screens to data recovery with the help of our industry experts. We have professional experience in diagnosing and fixing problems with mobile phones.
        </p>
        
        <p>
            We not only repair your phones and fix any existing problems, but also provide affordable solutions that will not break your bank. We aim to create an easy solution for both your device and wallet.
        </p>
        
     <p>
        You can visit the Somerville Communications walk-in store at East Boston and Somerville, MA to get your device looked at and repaired. Moreover, we also give you free estimations of the cost before the repair to let you decide if it’s worth the repair.
     </p>
        

        
        
</div>
</div>


<div class="row">
  
    <div class="col-md-7  ">
        <h2>Problems  solve at Somerville Communications</h2>
        <ul>
            <li>
            <h3>iPhone Repairs</h3>
                Do you need your iPhone fixed and repaired? We provide expert service to fix your iPhones.
            </li>
            <li>
              <h3>
                Andriod Repairs
              </h3>
                From cracked screens and unresponsive buttons to battery problems, we take your damaged Samsungs and return them to good as new.
            </li>
            <li>
                <h3>iPad Repairs</h3>
                Is your iPad damage causing you problems? No worries, you can drop by with us to get it fixed.
            </li>
            <li>
                <h3>Tablet Repairs</h3>
                Is your Samsung or google tablet giving you a hard time and needs a repair? We’ll take care of the servicing the device needs.
            </li>
            <li>
                <h3>Trade-In and Buybacks</h3>
                Are you looking for a new phone at a reasonable price or trying to sell your old phones? Here at Somerville Communications take care of such needs as well
            </li>
        </ul>
</div>
     
        <div class="col-md-5 ">
            <img src="{{asset('about2.jpg')}}" alt="" class="img-fluid">
                </div>
</div>


<div class="row">
    <div class="col-md-5">
<img src="{{asset('about3.jpg')}}" alt="" class="img-fluid">
    </div>
    <div class="col-md-7 abouts">
       
        <h2>Why Work With Us? </h2>
      
            <h3>
            Trustworthy, Professional, and Knowledgeable Staff

            </h3>
            <p>
            We offer you the best repair service and products and guarantee an excellent customer experience on our premises. We are a team of professionals with staff trained and knowledgeable on the finding best solutions for your problem.
            We are one of the most trustworthy repair shops in Massachusetts.
        </p>
       
            <h3> Wide Experience</h3>
        <p>

            We have been in the repair field for many years and accumulated wide experience in providing phone repair service. With our skilled repair technicians who have eye for detail and precision, we guarantee to meet your expectation and repair your device in no time.
        </p>
       
            <h3>
                Extensive Range Of Repairs
            </h3>
        <p>

            We are not limited by any brands or companies and provide repair service to any phone model. Additionally, we provide an extensive range of repairs for different issues as well.
        </p>
       
        
           <h3>Fast Service</h3>
       <p>

           Our in-house experts and repair veterans believe in saving time for both customers and ourselves. Therefore we work to ensure fast and convenient repair service to our customers. 
       </p>
       
        
            <h3>
                Discounted Price
            </h3>
            <p>

                We provide an accurate estimation of repairs and don’t charge unusual fees for simple solutions. We are devoted to providing the best solutions to everyone in need and not break their bank.
        </p>
      
        
      
       
        
</div>
</div>
<a href="{{ route('/') }}" class="btns">Back</a>

</div>




  
		@endsection