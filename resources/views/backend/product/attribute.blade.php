@extends('admin.master')
@section('main-content')
@php
    define('PAGE','product')
@endphp

<div class="container">
    <h2>Product Attributes</h2>

<div class="card py-3 px-4">
<div class='row'>
<div class="col-md-6 border-right">
        <div class="d-flex justify-content-between">
            <h3>Color Data</h3>
            <a href="{{route('admin.color.create',['id'=>$pid])}}" class="btn btn-info btn-lg" >Add Multiple Image</a>
        </div>
        <br>

        <table  class="table table-responsive-sm" >
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($color as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                       
                        <td> <img src="{{asset($item->image)}}" width="80" alt=""></td>
                      
                        <td>

                      <a href="{{route('admin.color.edit',['id'=>$item->id])}}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                            <a id="delete" href="{{route('admin.color.delete',['id'=>$item->id,'table'=>'productcolors'])}}" class="btn btn-danger"><i class="fas fa-times"></i></a>
                         
                        </td>
                    </tr>
                @endforeach
            </tbody>
              </table>
    </div>
    <div class="col-md-6">
        <div class="d-flex justify-content-between">
            <h3>Product Size</h3>
            <a href="{{route('admin.variation.create',['id'=>$pid])}}" class="btn btn-info btn-lg" >Add variation</a>
        </div>
        <br>
        <table  class="table table-responsive-sm" >
            <thead>
                <tr>
                    <th>#</th>
                    <th>Size</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($variation as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->variation}}
                            
                        </td>
                        
                        <td>

                      <a href="{{route('admin.variation.edit',['id'=>$item->id])}}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                            <a id="delete" href="{{route('admin.variation.delete',['id'=>$item->id,'table'=>'productvariations'])}}" class="btn btn-danger"><i class="fas fa-times"></i></a>
                         
                        </td>
                    </tr>
                @endforeach
            </tbody>
              </table>
        
    </div>
</div>
</div>
</div>



@endsection