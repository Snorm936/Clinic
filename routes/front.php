<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClinicController;

// Route::get('/',function()
// {
//   return view('front_home');

// });



Route::get('/',[ClinicController::class,'index']);
Route::get('/about',[ClinicController::class,'about']);
Route::get('/service',[ClinicController::class,'service']);
Route::get('/feature',[ClinicController::class,'feature']);
Route::get('/doctor',[ClinicController::class,'doctor']);
Route::get('/appointment',[ClinicController::class,'appointment']);
Route::get('/testimonial',[ClinicController::class,'testimonial']);
Route::get('/error',[ClinicController::class,'error']);
Route::get('/contact',[ClinicController::class,'contact']);