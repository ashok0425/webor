@extends('frontend.layout.master')
@section('content')


<div class="container my-5">
    <h3>Personal Detail</h3>

    <div class="card py-3 px-4 shadow">
            

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


    <div class="card py-3 px-4 shadow mt-4">
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
                price
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
    </div>
</div>



@endsection