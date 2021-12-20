<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewtestController;
use App\Http\Controllers\assignedtestController;
use App\Http\Controllers\onthewaytestController;
use App\Http\Controllers\samplecollectedController;
use App\Http\Controllers\sentlabController;
use App\Http\Controllers\reportdeliveredController;
use App\Http\Controllers\alltestController;
use App\Http\Controllers\datereportController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\testdetailsController;
use App\Http\Controllers\addphlebotomistController;
use App\Http\Controllers\managephlebotomistController;



use App\Models\sentlab;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//<!--Route::get('/newtest', function(){
  //  return view('test');
//});-->

Route::get('/newtest',[NewtestController::class,'show']);

Route::get('/assignedtest',[assignedtestController::class,'show']);

Route::get('/onthewaytest',[onthewaytestController::class,'show']);

Route::get('/samplecollected',[samplecollectedController::class,'show']);

Route::get('/sentlab',[sentlabController::class,'show']);

Route::get('/reportdelivered',[reportdeliveredController::class,'show']);

Route::get('/alltest',[alltestController::class,'show']);

Route::get('/datereport',[datereportController::class,'show']);

Route::get('/search',[searchController::class,'show']);

Route::get('/testdetails',[testdetailsController::class,'show']);

Route::get('/addphlebotomist',[addphlebotomistController::class,'show']);

Route::get('/managephlebotomist',[managephlebotomistController::class,'show']);