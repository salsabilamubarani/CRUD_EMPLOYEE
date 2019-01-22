ini halaman show

@foreach ($Employee as $Employeelist)
<p style="color: black">{{$Employeelist->employee_id}}</p>
<p style="color: blue">{{$Employeelist->employee_name}}</p>
<p style="color: green">{{$Employeelist->employee_address}}</p>
<p style="color: green">{{$Employeelist->employee_phone_numberphone}}</p>
<a href="/Employee/{{$Employeelist->employee_id}}">show</a>
<br />
@endforeach
<a href="{{url('Employee/create')}}">pencet saya donk</a>
