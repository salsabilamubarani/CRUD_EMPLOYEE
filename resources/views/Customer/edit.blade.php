

ini halaman edit <br />

@foreach ($Customer as $Customerlist)
<form action="{{route('Customer.update', $Customerlist->customer_id)}}" method="post">
{{csrf_field() }}
{{method_field('PUT')}}
<input type="text" name="txt_name" value="{{$Customerlist->name}}"><br />
<input type="text" name="txt_address" value="{{$Customerlist->address}}"><br />
@endforeach
<button type="submit">Submit</button>
<a href="{{url('Customer')}}">index</a>
