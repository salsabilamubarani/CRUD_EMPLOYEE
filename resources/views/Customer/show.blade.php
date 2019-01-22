ini halaman show

@foreach ($Customer as $Customerlist)
<p style="color: black">{{$Customerlist->customer_id}}</p>
<p style="color: blue">{{$Customerlist->name}}</p>
<p style="color: green">{{$Customerlist->address}}</p>
<a href="/Customer/{{$Customerlist->customer_id}}">show</a>
<br />
@endforeach
<a href="{{url('Customer/create')}}">pencet saya donk</a>
