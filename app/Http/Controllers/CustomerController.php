<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;

class CustomerController extends Controller
{
    //buat fungsi baru untuk
function index(){
//echo "asoy geboy";
$Customer = Customer::get(['customer_id','name','address']);
//var_dump($Customer);
return view('Customer.index', compact('Customer'));
}
function create(){
//echo"telo";
//ingat ingat url customer/create><
return view('Customer.create');
}
function store(Request $request){
//echo "pororo";
$txtId = $request->input('txt_id');
$txtName = $request->input('txt_name');
$txtAddress = $request->input('txt_address');
echo $txtId."<br /> ".$txtName."<br /> ".$txtAddress;
Customer::create([
  'customer_id' => $txtId,
  'name' => $txtName,
  'address' => $txtAddress
]);
return redirect('/Customer');
}
public function show($id){
// echo "olaf";
// echo $id;


//select * from Customer where customer_id=$id
//$Customer = Customer::where('customer_id', $id);
//var_dump($Customer);
// return view('Customer/show',
// ['Customer' => Customer::where('customer_id', $id)]);}

$Customer = Customer:: where('customer_id', $id)->get();
return view('Customer.show', compact('Customer'));}

public function edit($id){
  // return view('Customer/edit',
  // ['Customer' => Customer::where('customer_id', $id)]);}

$Customer = Customer:: where('customer_id', $id)->get();
return view('Customer.edit', compact('Customer'));}

public function update(Request $request, $id){
$txtId = $request->input('txt_id');
$txtName = $request->input('txt_name');
$txtAddress = $request->input('txt_address');

Customer::where('customer_id', $id)->update([
'name' => $txtName,
'address' => $txtAddress
]);
return redirect('/Customer');
}
public function destroy($id){
$Customer = Customer::where('customer_id', $id)->first();
$Customer->delete();
return redirect('/Customer');
}

}
