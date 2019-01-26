@extends('layouts.sb-admin')
@section('content')

@foreach ($Customer as $Customerlist)
<form action="{{route('Customer.update', $Customerlist->customer_id)}}" method="post">
{{csrf_field() }}
{{method_field('PUT')}}
<input type="text" name="txt_name" value="{{$Customerlist->customer_name}}"><br />
<input type="text" name="txt_address" value="{{$Customerlist->customer_address}}"><br />
@endforeach
<a class = "btn btn-info" href="{{url('Customer')}}">SAVE</a>

@endsection
