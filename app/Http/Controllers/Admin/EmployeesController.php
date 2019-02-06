<?php

namespace App\Http\Controllers\Admin;
use DB;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EmployeesRequest;

class EmployeesController extends Controller
{
    /**
     * Display a listing of Employee.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();

        return view('admin.employees.index', compact('employees'));
    }

    /**
     * Show the form for creating new Employee.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
      
        $Data = array(
           
              'cids' => \App\Models\Company::get()->pluck('name', 'id')->prepend(trans('CRM.qa_please_select'), '')
              );
        return view('admin.employees.create', $Data);
    }

    /**
     * Store a newly created Employee in storage.
     *
     * @param  \App\Http\Requests\EmployeesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeesRequest $request)
    {
        $employee = Employee::create($request->all());
       
        return redirect()
        ->action('Admin\EmployeesController@index')
        ->with('success', trans('CRM.Added'));
    }


    /**
     * Show the form for editing Employee.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $cids = \App\Models\Company::get()->pluck('name', 'id')->prepend(trans('CRM.qa_please_select'), '');

        $employee = Employee::findOrFail($id);

        return view('admin.employees.edit', compact('employee', 'cids'));
    }

    /**
     * Update Employee in storage.
     *
     * @param  \App\Http\Requests\EmployeesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeesRequest $request, $id)
    {
    
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());



        return redirect()
        ->action('Admin\EmployeesController@index')
        ->with('success', trans('CRM.updated'));
    }


    /**
     * Display Employee.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $employee = Employee::findOrFail($id);

        return view('admin.employees.show', compact('employee'));
    }


    /**
     * Remove Employee from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()
        ->action('Admin\EmployeesController@index')
        ->with('error', trans('CRM.Deleted'));
    }


      public function ListOfACEmp()
    {
      $Result =  array();
    
          try
          {
            

            $where="'".((isset($_GET['term']))?$_GET['term']:"")."%'";
               
                $whereBID="";
                $SQL="SELECT  `id` ,  CONCAT(`f_name`, ' ',`l_name`)  as label , `phone` 
                       FROM `Employees`
                       where  CONCAT(`f_name`, ' ',`l_name`) like $where  
             ";
                     



              $Data= DB::select($SQL);
             
              $Result =$Data;
             
          }
          catch(Exception $ex)
          {
              //Return error Message
              $Result['Result'] = "ERROR";
              $Result['Message'] = $ex->getMessage();
             
          }
          return response()->json($Result);
          }


          
    public function ListOfEmployees($id=null)
    {
        $jTableResult =  array();
        $where=($id)?"  where   `companies`.`id`=$id":"";
        try
        {
            $SQL ="SELECT `employees`.`id`, `employees`.`f_name`, `employees`.`l_name`, `employees`.`email`, `employees`.`phone`,companies.name as Cname
            FROM `employees` 
            LEFT JOIN `companies`  on `employees`.`cid_id`=`companies`.`id` $where
            ORDER BY  ".$_GET["jtSorting"] ." 
            LIMIT ".$_GET["jtStartIndex"] ." , ".$_GET["jtPageSize"]  ;

            $Data= DB::select($SQL);

            $SQL ="SELECT Count(*) as TotalRecordCount  from Employees";
            $TotalRecordCount= DB::select($SQL)[0]->TotalRecordCount;
            
            $jTableResult['Result'] = "OK";
            $jTableResult['Records'] =$Data;
            $jTableResult['TotalRecordCount'] =$TotalRecordCount;
      
           
        }
        catch(Exception $ex)
        {
            //Return error Message
            $jTableResult['Result'] = "ERROR";
            $jTableResult['Message'] = $ex->getMessage();
           
        }
        return response()->json($jTableResult);
    }
    
    public function DeleteEmployee()
    {
      $jTableResult =  array();
          try
          {
                  //Delete from database
                  $SQL="DELETE FROM Employees WHERE id ='" . $_POST["id"]."';" ;
                  DB::delete($SQL);
                  //Return result to jTable
                  $jTableResult['Result'] = "OK";
               
          }
          catch(Exception $ex)
          {
              //Return error Message
              $jTableResult['Result'] = "ERROR";
              $jTableResult['Message'] = $ex->getMessage();
         }
        return response()->json($jTableResult);
    }

}
