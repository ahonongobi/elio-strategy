<?php

use App\Http\Controllers\ActionCOntroller;
use App\Http\Controllers\DetailsController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

//route about
Route::get('/about', function(){
    return view('about');
});

//route contact
Route::get('/contact', function(){
    return view('contact');
});
Route::get('blog.eliostrategy.com',function(){
  return redirect()->to('http://blog.eliostrategy.com');
});
//route product
Route::get('/product', function(){
    return view('produit');
});
//route mention
Route::get('/mention', function(){
    return view('mention');
});

Route::get('details/turbine', function(){
    return view('turbine');
});
Route::get('sucess', function(){
    return view('sucess');
});
//details 
Route::get('details/germanium',[DetailsController::class,'detailsGermanium']);
Route::get('details/indium',[DetailsController::class,'detailsindium']);
Route::get('details/dysprosium',[DetailsController::class,'detailsdysprosium']);
Route::get('details/gallium',[DetailsController::class,'detailsgallium']);
Route::get('details/terbium',[DetailsController::class,'detailsterbium']);
Route::get('details/neodyme',[DetailsController::class,'detailsneodyme']);
Route::get('details/hafnium',[DetailsController::class,'detailshafnium']);
Route::get('details/praseodymium',[DetailsController::class,'detailspraseodymium']);

Route::post('subscribe',[ActionCOntroller::class,'subscribe']);
Route::post('contactMessage',[ActionCOntroller::class,'contactMessage']);


