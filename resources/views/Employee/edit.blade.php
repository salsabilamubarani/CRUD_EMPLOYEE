@extends('layouts.sb-admin')
@section('content')

@foreach ($Employee as $Employeelist)
{{csrf_field() }}
{{method_field('PUT')}}
<p>No.Id  :  </p><input type="text" name="txt_id" value="{{$Employeelist->employee_id}}"><br />
<p>Nama    :  </p><input type="text" name="txt_name" value="{{$Employeelist->employee_name}}"><br />
<p>Alamat  :  </p><input type="text" name="txt_address" value="{{$Employeelist->employee_address}}"><br />
<p>Telepon  :  </p><input type="text" name="txt_phone" value="{{$Employeelist->employee_phone_number}}"><br />
@endforeach
<br />
<a class = "btn btn-info" href="{{url('Employee')}}">SAVE</a>

@endsection
