@extends('layouts.sb-admin')
@section('content')

<form method="POST"
action="/Employee">
{{csrf_field()}}
<p>No.Id  :  </p><input type="text" name="txt_id" /> <br />
<p>Nama    : </p><input type="text" name="txt_name" /><br />
<p>Alamat  : </p><input type="text" name="txt_address" /><br />
<p>Telepon : </p><input type="text" name="txt_phone" /><br />
<br /> 
<p>
<input class="btn btn-info" type="submit"
 name="sbm_save"
 value="save"/>
</p>

</form>

@endsection
