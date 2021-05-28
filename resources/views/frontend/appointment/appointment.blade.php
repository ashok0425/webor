@extends('frontend.layout.master')

@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/repair.css') }}" />
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
          <div class="sv-repair-device-model-title">
            <h3>What device you use</h3>
            <p>
              In order to determine which repair solution is best for you tell
              us about your device
            </p>
          </div>
          <form action="{{ route('appointment.store') }}" method="POST">
            @csrf
          <div class="sv-repair-device-model-desc">
            <!-- mobile section -->
            <div class="sv-repair-device-model-phone">
              <img src="{{ asset('frontend/img/repair/iphone.png')}}" alt="iphone.png" />
            </div>
            <!-- tablet section -->
            <div class="sv-repair-device-model-tablet">
              <img src="{{ asset('frontend/img/repair/ipad.png')}}" alt="ipad.png" />
            </div>
          </div>

          <!-- new section -->
          <!-- device repair form section -->
          <div class="sv-repair-device-option">
        {{-- fetching Device  --}}
            @php
                $device=DB::table('categories')->where('status',1)->get();
            @endphp

            <div class="sv-repair-device-option-group">
                <div class="sv-repair-device-option-title">
                  Choose your Device
                </div>
                <select name="device" id="repair-deivce-brand" class="category data" data-text="category" required>
                    @foreach ($device as $item)
                        
                  <option value="{{ $item->id }}">{{ $item->category }}</option>
               
                  @endforeach

                </select>
              </div>
  
            <!-- each group -->
            <div class="sv-repair-device-option-group">
              <div class="sv-repair-device-option-title">
                Choose your Brand
              </div>
              <select name="brand" id="repair-deivce-brand" class=" subcategory data" data-text="subcategory" required>
                
              </select>
            </div>

            <!-- each group -->
            <div class="sv-repair-device-option-group">
              <div class="sv-repair-device-option-title">
                Choose your Model
              </div>
              <select name="model" id="repair-deivce-model"  class="model data" data-text="model" required>
              
             
              </select>
            </div>

            <!-- each group -->
            <div class="sv-repair-device-option-group">
              <div class="sv-repair-device-option-title">
                Choose your part
              </div>
                <select name="part" id="repair-deivce-model" class="part">
                
                </select>
            
            </div>
 <!-- each group -->
 <div class="sv-repair-device-option-group">
    <div class="sv-repair-device-option-title">
  Price
    </div>
     <input type="text" class="price form-control" name="price" required readonly>
  
  </div>
            <!-- each group -->
            <div class="sv-repair-device-option-group">
              <textarea placeholder="Your Messege" name="msg"></textarea>
            </div>
          </div>

          <!-- new section -->
          <!-- Book appointment -->
          <div class="sv-repair-appointment">
            <div class="container">
              <div class="sv-repair-appointment-title">
                <p>Okay we are ready to reapir your phone</p>
                <h3>Book Appointment</h3>
              </div>
              <div class="sv-repair-appointement-wrapper">
                
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
  <!-- each group -->
  <div class="sv-repair-appointment-group">
    <div class="sv-repair-appointment-group-title">
     Date
    </div>
    <div class="sv-repair-appointment-group-input">
        <input id="txtdate" type="text" name="date" required>

    </div>
  </div>
    <!-- each group -->
    <div class="sv-repair-appointment-group">
        <div class="sv-repair-appointment-group-title">
   Time
        </div>
        <div class="sv-repair-appointment-group-input">
            <input id="txtdate" type="time" name="time" required>
    
        </div>
      </div>
                  <div class="sv-repair-appointment-group">
                    <div class="sv-repair-appointment-group-input">
                      <input type="submit" value="Submit" />
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
