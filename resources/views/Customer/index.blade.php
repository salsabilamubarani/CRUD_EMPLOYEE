apakah ini keluar

@foreach ($Customer as $Customerlist)
<p style="color: black">{{$Customerlist->customer_id}}</p>
<p style="color: blue">{{$Customerlist->name}}</p>
<p style="color: green">{{$Customerlist->address}}</p>
<a href="/Customer/{{$Customerlist->customer_id}}">show</a>
<br />
<a href="/Customer/{{$Customerlist->customer_id}}/edit">edit</a>
<form  action="/Customer/
{{$Customerlist->customer_id}}" method="post">
{{ csrf_field() }}
{{method_field('DELETE')}}
<button > HAPUS</button>

</form>
@endforeach
<!-- <a href="{{url('Customer/create')}}">pencet saya donk</a> -->
