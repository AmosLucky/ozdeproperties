<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function getmsg(){
        $msg = "This is a simple message.";
        return response()->json(array('msg'=> $msg), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        $route = Route::currentRouteName();
        //$route = Route::getCurrentRoute()->getPath();
        $company = company::find(1);

        switch ($route) {
            case 'index':
                return  view("welcome", compact('company'));
            case 'about':
                return  view("pages.about_us", compact('company'));
           case 'contact':
                return  view("pages.contact", compact('company'));
            case 'contact':
                return  view("pages.contact", compact('company'));
            case 'listings':
                return  view("pages.listings", compact('company'));
            case 'lands':
                return  view("pages.listings", compact('company'));
            case 'houses':
                return  view("pages.listings", compact('company'));
            case 'register':
                return  view("pages.register", compact('company'));                          
            
            default:
                # code...
                return  view("welcome", compact('company'));
        }

        

       

        
       
        
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
