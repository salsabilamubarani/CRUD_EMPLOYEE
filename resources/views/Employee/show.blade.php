@extends('layouts.sb-admin')
@section('content')

@foreach ($Employee as $Employeelist)
<p>{{$Employeelist->employee_id}}</p>
<p>{{$Employeelist->employee_name}}</p>
<p>{{$Employeelist->employee_address}}</p>
<p>{{$Employeelist->employee_phone_number}}</p>
@endforeach
<a class = "btn btn-info" href="{{ url('Employee')}}">BACK TO DATA</a>

@endsection