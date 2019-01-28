<?php
Route::get('/', function () { 
    return redirect('/admin/home');
 });


Route::group([  'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');

    Route::resource('companies', 'Admin\CompaniesController');
    Route::resource('employees', 'Admin\EmployeesController');
  
    
});
 

Route::get('ListOfACEmp', 'Admin\EmployeesController@ListOfACEmp');


Auth::routes();



Route::get('lang/{lang}',  function($lang)
{
    session()->has("lang")?session()->forget("lang"):"";
    $lang=="ar"?  session()->put("lang","ar"):  session()->put("lang","en");
    return back();
});
