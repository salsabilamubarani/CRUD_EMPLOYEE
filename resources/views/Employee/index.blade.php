
@extends('layouts.sb-admin')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">EMPLOYEE</h1>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Data Employee
                </div>
                
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Telepon</th>
                                <th>Action</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        @foreach ($Employee as $Employeelist)
                            <tr class="odd gradeX">
                                <td>{{$Employeelist->employee_id}}</td>
                                <td>{{$Employeelist->employee_name}}</td>
                                <td>{{$Employeelist->employee_address}}</td>
                                <td>{{$Employeelist->employee_phone_number}}</td>

                                <td class="center">
                                    <a class ="btn btn-warning" href= "Employee/{{ $Employeelist->employee_id}}">show</a>
                                    <a class ="btn btn-success" href= "Employee/{{ $Employeelist->employee_id}}/edit">edit</a>
                                </td>
                                <td class="center">
                                    <form action ="/Employee/{{ $Employeelist->employee_id }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class ="btn btn-danger">HAPUS</button>
                                    </form>
                                </td>
                       
                            </tr>
                        @endforeach 

                        </tbody>
                        
                    </table>
                    <a class = "btn btn-info" href= "{{ url('Employee/create')}}">TAMBAH DATA</a>
@endsection

