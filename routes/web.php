<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

//Praktikum 1
Route::get('/', function () {
    echo "Hi! Selamat Datang di Website Laravel";
});

Route::get('/about' , function() {
    echo "2041720187 <br> Raka Bagas Fitriansyah <br> TI-2G";
});

Route::get('/articles/{id}' , function($id) {
    echo "Ini adalah halaman Artikel dengan ID : " . $id;
});

//Praktikum 2
Route::get('/', [PageController::class, 'index']); 

Route::get('/about', [PageController::class, 'about']); 

Route::get('/articles/{id}', [PageController::class, 'articles']); 

//Praktikum 2 (Modifikasi)
