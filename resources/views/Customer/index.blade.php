@extends('layouts.sb-admin')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">CUSTOMER</h1>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Data Customer 
                </div>
                
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Action</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        @foreach ($Customer as $Customerlist)
                            <tr class="odd gradeX">
                                <td>{{$Customerlist->customer_id}}</td>
                                <td>{{$Customerlist->name}}</td>
                                <td>{{$Customerlist->address}}</td>
                                <td class="center">
                                    <a class ="btn btn-warning" href= "Customer/{{ $Customerlist->customer_id}}">show</a>
                                    <a class ="btn btn-success" href= "Customer/{{ $Customerlist->customer_id}}/edit">edit</a>
                                </td>
                                <td class="center">
                                    <form action ="/Customer/{{ $Customerlist->customer_id }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class ="btn btn-danger">HAPUS</button>
                                    </form>
                                </td>
                       
                            </tr>
                        @endforeach 

                        </tbody>
                        
                    </table>
                    <a class = "btn btn-info" href= "{{ url('Customer/create')}}">TAMBAH DATA</a>
@endsection
