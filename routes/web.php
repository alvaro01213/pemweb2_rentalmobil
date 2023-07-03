<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MobilController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function() {
    echo "Selamat Datang di laravel";
});



Route::get('/greeting', function() {
    return view('greeting');
});

Route::middleware(['auth'])->group(function(){ 
Route::get('/', function() {return view('index');});
    
    
    
Route::get('/merk', [Merkcontroller::class, 'index']);
Route::get('/merk/create', [Merkcontroller::class, 'create']);
Route::post('/merk/simpanData', [Merkcontroller::class, 'store']);
Route::get('/merk/edit/{id}', [Merkcontroller::class, 'edit']);
Route::post('/merk/update/{id}', [Merkcontroller::class, 'update']);
Route::get('/merk/delete/{id}', [Merkcontroller::class, 'delete']);

// Route Folder Tipe Mobil
Route::get('/tipe_mobil', [TipeMobilController::class, 'index']);
Route::get('/tipe_mobil/create', [TipeMobilController::class, 'create']);
Route::post('/tipe_mobil/simpan-data', [TipeMobilController::class, 'store']);
Route::get('/tipe_mobil/edit/{id}', [TipeMobilController::class, 'edit']); //edit data
Route::post('/tipe_mobil/update/{id}', [TipeMobilController::class, 'update']);
Route::get('/tipe_mobil/delete/{id}', [TipeMobilController::class, 'delete']);

Route::get('/mobil',[MobilController::class,'index']);
Route::get('/mobil/create',[MobilController::class,'create']); //memanggil form
Route::post('/mobil/simpan-data',[MobilController::class,'store']); //mengirim request
Route::get('/mobil/delete/{id}',[MobilController::class,'delete']);
Route::post('/mobil/update/{id}',[MobilController::class,'update']);
Route::get('/mobil/edit/{id}',[MobilController::class,'edit']);

Route::get('/mobil',[MobilController::class,'index']);
Route::get('/mobil/create',[MobilController::class,'create']); //memanggil form
Route::post('/mobil/simpan-data',[MobilController::class,'store']); //mengirim request
Route::get('/mobil/delete/{id}',[MobilController::class,'delete']);
Route::post('/mobil/update/{id}',[MobilController::class,'update']);
Route::get('/mobil/edit/{id}',[MobilController::class,'edit']);


Route::get('/logout',[Auth\LoginController::class,'Logout']);
    
});




Route::get('/login',[Auth\LoginController::class,'index'])->name('Login');
Route::post('/login/proses',[Auth\LoginController::class,'login']);
Route::get('/register',[Auth\RegisterController::class,'index']);
Route::post('/register/proses',[Auth\RegisterController::class,'register']);