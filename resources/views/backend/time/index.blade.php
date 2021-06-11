@extends('admin.master')
@section('main-content')
@php
    define('PAGE','time')
@endphp

<div class="container">
    <div class="card py-3 px-4">
        <div class="d-flex justify-content-between">
            <h3>Time Data</h3>
            <a href="{{route('admin.time.create')}}" class="btn btn-info btn-lg" >Add Time</a>
        </div>
        <br>

        <table id="myTable" class="table table-responsive-sm" >
            <thead>
                <tr>
                    <th>#</th>
                    <th>Time</th>
                    
                    <th>Status</th>

                    <th>Action</th>
            
                </tr>
            </thead>
            <tbody>
                @foreach ($coupon as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->times.$item->unit}}</td>
                        

                        <td>@if ($item->status==1)
                            <a  class="badge bg-success">Active</a>
                            @else
                            <a class="badge bg-danger">Deactive</a>

                        @endif</td>
                        <td>
                         
                            <a href="{{route('admin.time.edit',['id'=>$item->id])}}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                            <a id="delete" href="{{route('admin.time.delete',['id'=>$item->id,'table'=>'times'])}}" class="btn btn-danger"><i class="fas fa-times"></i></a>
                            @if ($item->status==1)
                            <a href="{{route('admin.time.deactive',['id'=>$item->id,'table'=>'times'])}}" class="btn btn-primary"><i class="fas fa-thumbs-down"></i></a>
                            @else
                            <a href="{{route('admin.time.active',['id'=>$item->id,'table'=>'times'])}}" class="btn btn-primary"><i class="fas fa-thumbs-up"></i></a> 
                            @endif
                            

                        </td>
                    </tr>
                @endforeach
            </tbody>
              </table>
    </div>
</div>



@endsection