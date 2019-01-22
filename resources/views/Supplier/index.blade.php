@foreach ($Supplier as $Supplierlist)
<p style="color: black">{{$Supplierlist->supplier_id}}</p>
<p style="color: blue">{{$Supplierlist->supplier_name}}</p>
<p style="color: green">{{$Supplierlist->supplier_address}}</p>
@endforeach
<a href="{{url('Supplier/create')}}">pencet saya donk</a>
