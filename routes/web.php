<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BreweryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\AddBreweryController;
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

/* Route::get('/', function () {
    return view('home');
}); */

Route::get("/",[HomeController::class,'index'])->name("home");
Route::post("/cervecerias",[BreweryController::class, 'formInput'])->name('cervecerias.create');
Route::put('/cerveceria/{id}',[BreweryController::class, 'update'])->name('cervecerias.update');
Route::delete('/cerveceria/{id}',[BreweryController::class, 'delete'])->name('cervecerias.delete');
Route::get("/cervecerias",[BreweryController::class,'todas'])->name('cervecerias');
Route::get('/cerveceria/{id}',[BreweryController::class, 'one'])->where("id","[0-9]+")->name('cerveceria');
Route::get("/newcervecerias",[AddBreweryController::class,'add'])->name('cervecerias.add');
Route::get("/contacto",[ContactoController::class,'verContact'])->name('contacto');
Route::post("/contacts",[ContactController::class, 'contactForm'])->name('contact');

//Route::get('/cerveceria/{id}',[BrewController::class, 'one'])->name('cerveceria');
