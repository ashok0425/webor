@extends('admin.master')
@section('main-content')
@php
    define('PAGE','coupon')
@endphp

<div class="container">
    <div class="card ">
        <div class="">
            <h3 class="d-flex justify-content-between">Coupon Data  
            <a href="{{route('admin.coupon.create')}}" class="btn btn-info btn-lg" > <i class="fas fa-plus"></i> Add Service</a>

            </h3>
        </div>
        <br>
<div class="card-body">
        <table id="myTable" class="table table-responsive-sm" >
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>

                    <th>Status</th>


                    <th>Action</th>
            
                </tr>
            </thead>
            <tbody>
                @foreach ($coupon as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->description}}</td>
                

                        <td>@if ($item->status==1)
                            <a  class="badge bg-success">Active</a>
                            @else
                            <a class="badge bg-danger">Deactive</a>

                        @endif</td>
                        <td>
                         
                            <a href="{{route('admin.coupon.edit',['id'=>$item->id])}}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                            <a id="delete" href="{{route('admin.coupon.delete',['id'=>$item->id,'table'=>'coupons'])}}" class="btn btn-danger"><i class="fas fa-times"></i></a>
                            @if ($item->status==1)
                            <a href="{{route('admin.coupon.deactive',['id'=>$item->id,'table'=>'coupons'])}}" class="btn btn-primary"><i class="fas fa-thumbs-down"></i></a>
                            @else
                            <a href="{{route('admin.coupon.active',['id'=>$item->id,'table'=>'coupons'])}}" class="btn btn-primary"><i class="fas fa-thumbs-up"></i></a> 
                            @endif
                            

                        </td>
                    </tr>
                @endforeach
            </tbody>
              </table>
    </div>
</div>
</div>



@endsection