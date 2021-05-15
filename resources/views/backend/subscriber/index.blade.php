@extends('admin.master')
@section('main-content')
<div class="container">
    <div class="card py-3 px-4">
        <div class="d-flex justify-content-between">
            <h3>Blog Data</h3>
            <a href="{{route('admin.sendmail')}}" class="btn btn-info btn-lg" >Send Email To All</a>
        </div>
        <br>

        <table id="myTable" class="table table-responsive-sm" >
            <thead>
                <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>Action</th>
            
                </tr>
            </thead>
            <tbody>
                @foreach ($subscriber as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->email}}</td>
                        <td>
                            <a id="delete" href="{{route('admin.subscriber.delete',['id'=>$item->id,'table'=>'subscribers'])}}" class="btn btn-danger"><i class="fas fa-times"></i></a>
                           
                          
                            

                        </td>
                    </tr>
                @endforeach
            </tbody>
              </table>
    </div>
</div>



@endsection