@foreach ($Employee as $Employeelist)
<p style="color: black">{{$Employeelist->employee_id}}</p>
<p style="color: blue">{{$Employeelist->employee_name}}</p>
<p style="color: green">{{$Employeelist->employee_address}}</p>
<p style="color: red">{{$Employeelist->employee_phone_number}}</p>
<a href="/Employee/{{$Employeelist->employee_id}}">show</a>
<br />
<a href="/Employee/{{$Employeelist->employee_id}}/edit">edit</a>
<form  action="/Employee/
{{$Employeelist->employee_id}}" method="post">
{{ csrf_field() }}
{{method_field('DELETE')}}
<button > HAPUS</button>

</form>
@endforeach
