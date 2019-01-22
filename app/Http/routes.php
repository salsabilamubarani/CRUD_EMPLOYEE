<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    echo "paman gober";
});
Route::get('/home', function () {
    echo "disini rumah";
});
Route::get('/lemot', function () {
    echo "kenapa kok lemot";
});
Route::get('/pohong', function () {
    echo "telo";
});
//pakai kontroller
Route::get('/terong', 'capungController@index');
//memanggil controller capung dengan fungsi pujangga
Route::get('/brokoli', 'capungController@pujangga');

//sekarang bikin route untuk customer
// Route::get('/Customer', 'CustomerController@index');
// Route::get('/Supplier', 'SupplierController@index');
// //bikin route untuk add customer_id
// Route::get('/Customer/create', 'CustomerController@create');
// //untuk store dari customer
// Route::get('/Customer/store', 'CustomerController@store');
Route::resource('/Customer', 'CustomerController');
Route::resource('/Supplier', 'SupplierController');
Route::resource('/Employee', 'EmployeeController');
