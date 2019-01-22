<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Supplier;

class SupplierController extends Controller
{
    //buat fungsi baru untuk
function index(){
//echo "asoy geboy";
$Supplier = Supplier::get(['supplier_id','supplier_name','supplier_address']);
//var_dump($Customer);
return view('Supplier.index', compact('Supplier'));
}
function create(){
//echo"telo";
//ingat ingat url customer/create><
return view('Supplier.create');
}
function store(Request $request){
//echo "pororo";
$txtId = $request->input('txt_id');
$txtName = $request->input('txt_name');
$txtAddress = $request->input('txt_address');
echo $txtId."<br /> ".$txtName."<br /> ".$txtAddress;
Supplier::create([
  'supplier_id' => $txtId,
  'supplier_name' => $txtName,
  'supplier_address' => $txtAddress
]);
return redirect('/Supplier');
}
}
