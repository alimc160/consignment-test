<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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



Route::middleware('auth')->group(function (){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/consignments/create',[HomeController::class, 'addConsignmentPage'])->name('consignments.create');
    Route::post('/consignments/store',[HomeController::class, 'storeConsignment'])->name('consignments.store');
    Route::get('/consignments/download/{id}', [HomeController::class, 'download'])->name('consignments.download');

});
