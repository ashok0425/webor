@extends('admin.master')
@section('main-content')
@php
    define('PAGE','appointment')
    
@endphp
<div class="container">
    <div class="card py-3 px-4">
            <h3>Detail of {{ $appointment->name }}</h3>
            

        <table class="table table-responsive-sm" >
            <thead>
                <tr>
                
                    <th>Full name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Total</th>
                    <th>IsPaid</th>


                    <th>
                        status
                    </th>
            
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{$appointment->name}}</td>

                        <td>{{$appointment->email}}</td>
                        <td>{{$appointment->phone}}</td>
                        <td>{{$appointment->date}}</td>
                        <td>{{$appointment->time}}</td>
                        <td>{{$appointment->total}}</td>

                        <td>@if ($appointment->ispaid==0)
                            <div class="badge bg-warning">unpaid</div>
                           
                            @else 

                            <div class="badge bg-success">paid</div>

                        @endif</td>
<td>
    @if ($appointment->status==0)
                            <div class="badge bg-warning">Pending</div>
                            @elseif($appointment->status==1)
                            <div class="badge bg-warning">Not Visited</div>

                            @else 

                            <div class="badge bg-success">Completed</div>

                        @endif
</td>
                    </tr>
            </tbody>
              </table>
    </div>


    <div class="card py-3 px-4">
            <h3>Detail about Accesssories</h3>
            
        <br>

        <table class="table table-responsive-sm" >
            <thead>
                <tr>
                    <th>#</th>
                    <th>Accessories</th>
                    <th>Device</th>
                    <th>Brand</th>
                    <th>
                       Model
                    </th>
            <th>
                price ({{ __getPriceunit() }})
            </th>
                </tr>
            </thead>
            <tbody>
             @foreach ($appo as $item)
                 
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->device}}</td>

                        <td>{{$item->brand}}</td>
                        <td>{{$item->modal}}</td>
                        <td>{{$item->part}}</td>
                        <td>{{$item->price}}</td>

                      
                      
                    </tr>
             @endforeach
            </tbody>
              </table>
<br>
<h3>Change Status</h3>
              <form action="{{ route('admin.appointment.update') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $appointment->id }}">
                  <div class="form-group">
                      <select name="status" id="" class="form-control">
                          <option value="1"  @if ($appointment->status==1)
                            selected
                     
                            
                        @endif>Not Visited</option>
                          <option value="2"  @if ($appointment->status==2)
                            selected
                     
                            
                        @endif>Complete</option>

                      </select>
                  </div>
                  <input type="submit" value="Change Status" class="btn btn-block mt-3 btn-info">
              </form>
<br>

<h3>Change Paid Status</h3>

<br>
<form action="{{ route('admin.appointment.paidstatus') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $appointment->id }}">
      <div class="form-group">
          <select name="ispaid" id="" class="form-control">
              <option value="0" @if ($appointment->ispaid==0)
                  selected
           
                  
              @endif>Not Paid</option>
              <option value="1"  @if ($appointment->ispaid==1)
                selected
         
                
            @endif>Paid</option>

          </select>
      </div>
      <input type="submit" value="Update Paid status" class="btn btn-block mt-3 btn-info">
  </form>

    </div>
</div>



@endsection