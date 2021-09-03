@extends('admin.master')
@section('main-content')
@php
    define('PAGE','gallery')
@endphp

<div class="container">
    <div class="card py-3 px-4">
        <div class="d-flex justify-content-between">
            <h3>Modal Data</h3>
            <a href="{{route('admin.model.create')}}" class="btn btn-info btn-lg" >Add Modal</a>
        </div>
        <br>

        <table id="myTable" class="table table-responsive-sm" >
            <thead>
                <tr>
                    <th>#</th>


                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($modal as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>


                        <td> <img src="{{asset($item->image)}}" width="80" alt=""></td>
                        <td>@if ($item->status==1)
                            <a  class="btn btn-success">Active</a>
                            @else
                            <a class="btn btn-danger">Deactive</a>

                        @endif</td>
                        <td>

                            <a href="{{route('admin.model.edit',['id'=>$item->id])}}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                            <a id="delete" href="{{route('admin.model.delete',['id'=>$item->id,'table'=>'modals'])}}" class="btn btn-danger"><i class="fas fa-times"></i></a>
                            @if ($item->status==1)
                            <a href="{{route('admin.model.deactive',['id'=>$item->id,'table'=>'modals'])}}" class="btn btn-primary"><i class="fas fa-thumbs-down"></i></a>
                            @else
                            <a href="{{route('admin.model.active',['id'=>$item->id,'table'=>'modals'])}}" class="btn btn-primary"><i class="fas fa-thumbs-up"></i></a>
                            @endif


                        </td>
                    </tr>
                @endforeach
            </tbody>
              </table>
    </div>
</div>



@endsection
