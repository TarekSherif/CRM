<?php

namespace App\Http\Controllers\Admin;
use File;

use Storage;
use Response;
use App\Mail\SendMail;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CompaniesRequest;
 

class CompaniesController extends Controller
{
    

    /**
     * Display a listing of Company.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();

        return view('admin.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating new Company.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $company =new Company;
       $Data = array('company' => $company );
       return view('admin.companies.create',$Data);
    }

    /**
     * Store a newly created Company in storage.
     *
     * @param  \App\Http\Requests\CompaniesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompaniesRequest $request)
    {
        // Storage::putFile("public",$request->logo);
       
     
      
        $company =new Company;

        $this->SaveCompany( $request, $company);
    
        try {
            Mail::to("eng.tarek.sherif@gmail.com")->send(new SendMail($company));
        } catch (\Throwable $th) {
            //throw $th;
        }
            

       
        return redirect()
        ->action('Admin\CompaniesController@index')
        ->with('success', trans('CRM.Added'));
    }

    private function SaveCompany( $request, $company)
    {
        $company->name=$request->name;
        $company->email=$request->email;
        $company->website=$request->website;
        $company->save();
        if($request->logo)
        {
            $logo=$request->logo;
            $company->logo= $company->id.'.'.$logo->getClientOriginalExtension();
            $company->save();
            Storage::putFileAs("public", $logo,  $company->logo);
        }
    }
    /**
     * Show the form for editing Company.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        $company = Company::findOrFail($id);

        return view('admin.companies.edit', compact('company'));
    }

    /**
     * Update Company in storage.
     *
     * @param  \App\Http\Requests\CompaniesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompaniesRequest $request, $id)
    {
    
        $company = Company::findOrFail($id);
        $this->SaveCompany( $request, $company);

        // return redirect()->route('admin.companies.index');
        return redirect()
        ->action('Admin\CompaniesController@index')
        ->with('success',  trans('CRM.updated'));
    }


    /**
     * Display Company.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
        
        $employees = \App\Models\Employee::where('cid_id', $id)->get();

        $company = Company::findOrFail($id);

        return view('admin.companies.show', compact('company', 'employees'));
    }


    /**
     * Remove Company from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
   
        
        $company = Company::findOrFail($id);
        Storage::delete("public/$company->logo");
        $company->delete();
       
        return redirect()
        ->action('Admin\CompaniesController@index')
        ->with('error', trans('CRM.Deleted'));
    }


   
 
    
}
