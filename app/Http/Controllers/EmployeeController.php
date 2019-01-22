<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class EmployeeController extends Controller
{
    //
    //buat fungsi baru untuk
    function index(){
    //echo "asoy geboy";
    $Employee = Employee::get(['employee_id','employee_name','employee_address','employee_phone_number']);
    //var_dump($Customer);
    return view('Employee.index', compact('Employee'));
    }
    function create(){
    //echo"telo";
    //ingat ingat url customer/create><
    return view('Employee.create');
    }
    function store(Request $request){
    //echo "pororo";
    $txtId = $request->input('txt_id');
    $txtName = $request->input('txt_name');
    $txtAddress = $request->input('txt_address');
    $txtPhone = $request->input('txt_phone');
    echo $txtId."<br /> ".$txtName."<br /> ".$txtAddress."<br /> ".$txtPhone;
    Employee::create([
    'employee_id' => $txtId,
    'employee_name' => $txtName,
    'employee_address' => $txtAddress,
     'employee_phone_number' => $txtPhone,
    ]);
    return redirect('/Employee');
    }
    public function show($id){

    $Employee = Employee:: where('employee_id', $id)->get();
    return view('Employee.show', compact('Employee'));}

    public function edit($id){

    $Employee = Employee:: where('employee_id', $id)->get();
    return view('Employee.edit', compact('Employee'));}

    public function update(Request $request, $id){
    $txtId = $request->input('txt_id');
    $txtName = $request->input('txt_name');
    $txtAddress = $request->input('txt_address');
    $txtPhone = $request->input('txt_phone');

    Employee::where('employee_id', $id)->update([
    'employee_name' => $txtName,
    'employee_address' => $txtAddress,
    'employee_phone_number' => $txtPhone
    ]);
    return redirect('/Employee');
    }
    public function destroy($id){
    $Employee = Employee::where('employee_id', $id)->first();
    $Employee->delete();
    return redirect('/Employee');
    }
}
