<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\CompanyController::class, 'show'])->name("index");
Route::get('/about', [App\Http\Controllers\CompanyController::class, 'show'])->name("about");
Route::get('/listings', [App\Http\Controllers\CompanyController::class, 'show'])->name("listings");
Route::get('/contact', [App\Http\Controllers\CompanyController::class, 'show'])->name("contact");
Route::get('/register', [App\Http\Controllers\CompanyController::class, 'show'])->name("register");
Route::get('/login', [App\Http\Controllers\CompanyController::class, 'show'])->name("login");
Route::get('/lands', [App\Http\Controllers\CompanyController::class, 'show'])->name("lands");
Route::get('/houses', [App\Http\Controllers\CompanyController::class, 'show'])->name("houses");



///Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('home');



Auth::routes();
// Route::get('/dashboard', function () {
//     // if (!auth()->user()) {
//     //     return "Login first";
//     // }
//      return view('dashboard.index');
// })->middleware('auth');
// Route::get('/add_property', function () {
//     return view('dashboard.add_property');
// })->middleware('auth');
Route::group( [ 'middleware' => 'auth' ], function(){
    Route::get('/home',  function(){
        return view('dashboard.index');});
        Route::get('/dashboard',  function(){
            return view('dashboard.index');});
        Route::get('add_property',  function(){
                return view('dashboard.add_property');}); 
        // Route::get('add_property',  function(){
        //             return view('dashboard.add_property');}); 
Route::post('/uploadimage', [App\Http\Controllers\PropertyController::class, 'uploadimage'])->name("uploadimage");
          

});

// Route::get('/dashboard', function () {
//     // Only authenticated users may access this route...
// })->middleware('auth');


Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
