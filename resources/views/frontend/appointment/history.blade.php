@extends('frontend.layout.master')
@section('content')

<div class="container mt-5">
    <h2 class="border-bottom mb-5 pb-2">My Appointment List</h2>

    <div class="card py-3 px-4 shadow">


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
    </div>
</div>



@endsection