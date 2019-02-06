<?php
Route::get('/', function () { 
    return redirect('/admin/home');
 });


Route::group([  'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');

    Route::resource('companies', 'Admin\CompaniesController');
    Route::post('ListOfCompanys', 'Admin\CompaniesController@ListOfCompanys');
    Route::post('DeleteCompany', 'Admin\CompaniesController@DeleteCompany');

    Route::resource('employees', 'Admin\EmployeesController');
    Route::post('ListOfEmployees/{id?}', 'Admin\EmployeesController@ListOfEmployees');
    Route::post('DeleteEmployee', 'Admin\EmployeesController@DeleteEmployee');


    
    Route::get('TestMail', function ()
    {
        
        return new App\Mail\SendMail(new App\Models\Company());
        
    });  
    
});
 

Route::get('ListOfACEmp', 'Admin\EmployeesController@ListOfACEmp');

Route::get('lang/{lang}',  function($lang)
{
    session()->has("lang")?session()->forget("lang"):"";
    $lang=="ar"?  session()->put("lang","ar"):  session()->put("lang","en");
    return back();
});


 // Authentication Routes...
 Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
 Route::post('login', 'Auth\LoginController@login');
 Route::post('logout', 'Auth\LoginController@logout')->name('logout');

 
 // Password Reset Routes...
 Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
 Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
 Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
 Route::post('password/reset', 'Auth\ResetPasswordController@reset');