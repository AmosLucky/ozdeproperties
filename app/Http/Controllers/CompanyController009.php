<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class CompanyController extends Controller
{
    //
    public function index(Request $request){
       // $url = $request->url();
        $route = Route::currentRouteName();
        //$route = Route::getCurrentRoute()->getPath();
        
        return $u;
        
       
    }
}
