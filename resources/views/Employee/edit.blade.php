ini halaman edit <br />

@foreach ($Employee as $Employeelist)
<form action="{{route('Employee.update', $Employeelist->employee_id)}}" method="post">
{{csrf_field() }}
{{method_field('PUT')}}
<input type="text" name="txt_name" value="{{$Employeelist->employee_name}}"><br />
<input type="text" name="txt_address" value="{{$Employeelist->employee_address}}"><br />
<input type="text" name="txt_phone" value="{{$Employeelist->employee_phone_number}}"><br />
@endforeach
<button type="submit">Submit</button>
<a href="{{url('Employee')}}">index</a>
