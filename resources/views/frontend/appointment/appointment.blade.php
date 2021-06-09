@extends('frontend.layout.master')
@push('style')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" >
<style>
  #demo-2 input[type=search] {
    padding-right: 20px;

}
.sv-footer-subscribe input[type="submit"] {
  
    right: 10px;

    padding: 9px 14px;
 
}
  /* storage section */
.buttongroup label {
padding: 6px 12px;
cursor: pointer;
transition: all 0.2s;
overflow: hidden;
}

.buttongroup label {
margin-right: 3rem;
}

.has-error{
  position: relative;
}
.has-error::before
{
  content: 'This field is required';
  position: absolute;
  color: red;
  bottom: -15px;
  left: 20px;
}
/* Hide the radio button */
input[name='device'] {
display: none;
}
/* The checked buttons label style */
input[name='device']:checked + label {
border: 3px solid #e05d29;
}
.sv-repair-device-model-tablet
{
  max-width: 200px;
  max-height: 200px;

}



.stepwizard-step p {
    margin-top: 10px;
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;

}

.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
  background: var(--brand-two);
  border-color:var(--brand-two);

}
.btn-circle:hover,.btn-circle:focus{
  background: var(--brand-two);
  border-color:var(--brand-two);
}
.nextBtn{
  background: var(--brand-two);
  color:#fff;
  outline:none;
  border:none;
border-radius:50px;
margin-top: 1rem;
}
.nextBtn:hover{
  background: var(--brand-two);
  color:#fff;

}
.error{
  
}
</style>
<link rel="stylesheet" href="{{ asset('frontend/css/repair.css') }}" />

@endpush
<!------ Include the above in your HEAD tag ---------->
@section('content')

<div class="sv-repair">
    <div class="container">
      <div class="sv-repair-title">
        <h3>Let's Repair Phone</h3>
        <p>
          with our convient service opition and lighting fast repairs, we get
          back to what's important with more service option than ever before
          option than ever before, repair is close than you think
        </p>
      </div>
      <div class="sv-repair-wrapper">
        
        <div class="sv-repair-device-model">
        <x-errormsg/>

          <div class="sv-repair-device-model-title">
            <h3>What device you use</h3>
            <p>
              In order to determine which repair solution is best for you tell
              us about your device
            </p>
          </div>
          
            
          

          <!-- new section -->
          <!-- device repair form section -->
          <div class="sv-repair-device-option">
            <div class="stepwizard">
              <div class="stepwizard-row setup-panel">
                  <div class="stepwizard-step">
                      <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                      <p>Select Device</p>
                  </div>
                  <div class="stepwizard-step">
                      <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                      <p>Device Detail</p>
                  </div>
                  <div class="stepwizard-step">
                      <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                      <p>Appointment Shedule</p>
                  </div>
                  <div class="stepwizard-step">
                      <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                      <p>Personal Detail</p>
                  </div>
              </div>
          </div>



        <form action="{{ route('appointment.store') }}" method="POST">
          @csrf
          <div class="row setup-content" id="step-1">
           @php
               $device=DB::table('categories')->where('status',1)->get();
           @endphp
            <div class="sv-repair-appointment-title">
              <h3>Choose Your Device</h3>
            </div>
                    <div class="sv-repair-device-model-desc">
                      <!-- mobile section -->
                      @foreach ($device as $item)
                          
                        <div class=" buttongroup device form-group">
                        <input id="{{ $item->category }}" type="radio" value="{{ $item->id }}" name="device"    class="data category " data-text='category'  @if ($loop->first)
                        required="required"
                        @endif/> 
                        <label for="{{ $item->category }}" > 
                          <div class="sv-repair-device-model-tablet">
                            <img src="{{ asset($item->image)}}" alt="ipad.png" />
                          </div>
                      
                      </label>
                      <p class="text-center">{{ $item->category }}</p>
                      </div>
                      <!-- tablet section -->
                     
                    
                      @endforeach

                    </div>
                <button class="  nextBtn btn-lg pull-right" type="button" >Next</button>

            </div>
        
        <div class="row setup-content" id="step-2">
        
          <div class="sv-repair-appointment-title">
            <h3>Fill up the device details</h3>
          </div>
                
            <!-- each group -->
            <div class="sv-repair-device-option-group">
              <div class="sv-repair-device-option-title">
                Choose your Brand
              </div>
              <div class="form-group">

              <select name="brand" id="repair-deivce-brand" class=" subcategory data abc" data-text="subcategory" required="required">
                
              </select>
            </div>

            </div>
               <!-- each group -->
               <div class="sv-repair-device-option-group">
                <div class="sv-repair-device-option-title">
                  Choose your Model
                </div>
              <div class="form-group">

                <select name="model" id="repair-deivce-model"  class="model data abc" data-text="model"  required="required">
               
                </select>
              </div>
            </div>

  
              <!-- each group -->
              <div class="sv-repair-device-option-group form-group">
                <div class="sv-repair-device-option-title">
                  Choose your part
                </div>
              <div class="">

                  <select name="part" id="repair-deivce-model" class="part abc" required="required">
                  
                  </select>
              </div>
              </div>
   <!-- each group -->
   <div class="sv-repair-device-option-group">
      <div class="sv-repair-device-option-title">
    Price
      </div>
       <input type="text" class="price form-control" name="price" required="required" readonly>
    
    </div>
              <!-- each group -->
              <div class="sv-repair-device-option-group">
                <textarea placeholder="Your Messege" name="msg"></textarea>
              </div>
                  <button class="  nextBtn btn-lg pull-right" type="button" >Next</button>
              </div>


              <div class="row setup-content" id="step-3">
                <div class="sv-repair-appointment-title">
                  <h3>Your Appointment Shedule</h3>
                </div>
               <!-- each group -->
    <div class="sv-repair-appointment-group">
      <div class="sv-repair-appointment-group-title">
       Date
      </div>
      <div class="sv-repair-appointment-group-input form-group">
          <input id="txtdate" type="text" name="date" required="required">
  
      </div>
    </div>
      <!-- each group -->
      <div class="sv-repair-appointment-group ">
          <div class="sv-repair-appointment-group-title">
     Time
          </div>
          <div class="sv-repair-appointment-group-input form-group" >
              <input id="txtdate" type="time" name="time" required="required">
      
          </div>
        </div>
          
        <button class="  nextBtn btn-lg pull-right" type="button" >Next</button>
      </div>

  
            <div class="row setup-content" id="step-4">
        
             <!-- each group -->
    <div class="sv-repair-appointment-group-title">
  
          
            <div class="sv-repair-appointment-title">
              <p>Okay we are ready to reapir your phone</p>
              <h3>Fill up the following details.</h3>
            </div>
              <!-- each group -->
              <div class="sv-repair-appointment-group">
                <div class="sv-repair-appointment-group-title">
                  Full Name
                </div>
                <div class="sv-repair-appointment-group-input">
                  <input type="text" placeholder="full name" name="name"  required/>
                </div>
              </div>

              <!-- each group -->
              <div class="sv-repair-appointment-group">
                <div class="sv-repair-appointment-group-title">Email</div>
                <div class="sv-repair-appointment-group-input">
                  <input type="email" placeholder="email" name="email" required/>
                </div>
              </div>

              <!-- each group -->
              <div class="sv-repair-appointment-group">
                <div class="sv-repair-appointment-group-title">Phone</div>
                <div class="sv-repair-appointment-group-input">
                  <input type="text" placeholder="contact number" name="phone" required/>
                </div>
              </div>
              <!-- each group -->
              <div class="sv-repair-appointment-group">
                <div class="sv-repair-appointment-group-title">
                  Address
                </div>
                <div class="sv-repair-appointment-group-input">
                  <input type="text" placeholder="address" name="address" required/>
                </div>
              </div>

              
        </div>
              <button class="btn  nextBtn btn-lg pull-right" type="submit" >Book Now</button>
         

            </div>

        </form>

        </div>



              </div>
            </div>
          </div>
        </div>



@endsection
@push('scripts')
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

   <script>
  $(document).ready(function () {

var navListItems = $('div.setup-panel div a'),
    allWells = $('.setup-content'),
    allNextBtn = $('.nextBtn');
    console.log(navListItems)

allWells.hide();

navListItems.click(function (e) {
e.preventDefault();
var $target = $($(this).attr('href')),
        $item = $(this);

if (!$item.hasClass('disabled')) {
    navListItems.removeClass('btn-primary').addClass('btn-default');
    $item.addClass('btn-primary');
    allWells.hide();
    $target.show();
    $target.find('input:eq(0)');
}
});

allNextBtn.click(function(){
var curStep = $(this).closest(".setup-content"),
    curStepBtn = curStep.attr("id"),
    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
    curInputs = curStep.find("input[type='text'],input[type='time'],input[type='radio'],input[type='email'],input[type='number'],input[type='url'],.abc"),
    isValid = true;

$(".form-group").removeClass("has-error");
for(var i=0; i<curInputs.length; i++){
    if (!curInputs[i].validity.valid){
        isValid = false;
        $(curInputs[i]).closest(".form-group").addClass("has-error");
    }
}

if (isValid)
    nextStepWizard.removeAttr('disabled').trigger('click');
});

$('div.setup-panel div a.btn-primary').trigger('click');
});
</script>






<script>

  $(document).ready(function(){
  $(document).on('click','.data',function(){
          let datas=$(this).attr('data-text');
          let id=$(this).val();
            if(datas=='subcategory'){
              
            let option1=	$('.category').val();
                loadData(datas,id,option1)	
            
            }else if(datas=='model'){
              
              $('.part').html();
              let option1=	$('.category').val();
              let option2=	$('.subcategory').val();
              loadData(datas,id,option1,option2)	


            }
            
            else{
              

                loadData(datas,id)	
            
            }
      })
  })
      
      function loadData(table,id,option1,option2){
  $.ajax({
      
      url:'{{url('loaddata')}}/'+table+'/'+id+'/'+option1+'/'+option2,
      DataType:'json',
      type:'GET',
      beforeSend:function(){
        $('.loading').css('display','block')
      },
      success:function($data){
      
          if(table=='category'){
            $('.model').html('');
              $('.subcategory').html('');
              $('.part').html('');
              $('.price').html('');

  
              $('.subcategory').html($data);
          }
          if(table=='subcategory'){
            $('.model').html('');
              $('.part').html('');
              $('.price').html('');

              $('.model').html($data);
          }
          if(table=='model'){
                  $('.part').html('');
                 $('.price').val('')

                 $('.part').html($data);
                $id= $('.part').val();;
loadprice($id);
          }
      },
      complete:function(){
        $('.loading').css('display','none')
      }
  })
      }


  function loadprice(id){
    $.ajax({
      url:'{{url('loadprice')}}/'+id,
      DataType:'json',
      type:'GET',
      beforeSend:function(){
        $('.loading').css('display','block')
        
      },
      success:function(data){
       $('.price').val(data)
      },
      complete:function(){
        $('.loading').css('display','none')
      }
    })
  }
  </script>
@endpush