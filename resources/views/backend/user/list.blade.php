@extends('admin.master')
@section('main-content')
@php
    define('PAGE','user')
@endphp

<div class="container">
    <div class="card py-3 px-4">

        <table id="myTable" class="table table-responsive-sm" >
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Register on</th>
                  
            
                </tr>
            </thead>
            <tbody>
                
                @foreach ($user as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->created_at->diffForHumans()}}</td>


                       
                    </tr>
                @endforeach
            </tbody>
              </table>
    </div>
</div>



@endsection