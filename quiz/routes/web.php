<?php

use Illuminate\Support\Facades\Route;
//namespace App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\AdminHomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';




route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
route::namespace('Auth')->group(function(){

 
route::get('login','AuthenticatedSessionController@create')->name('login');
route::post('login','AuthenticatedSessionController@store')->name('adminlogin');


});
route::get('dashboard',[AdminHomeController::class,'index'])->name('dashboard');
});
//