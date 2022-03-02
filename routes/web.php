<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

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
// Route::get('/', function () {
//     echo "Hi! Selamat Datang di Website Laravel";
// });

Route::get('/about' , function() {
    echo "2041720187 <br> Raka Bagas Fitriansyah <br> TI-2G";
});

Route::get('/articles/{id}' , function($id) {
    echo "Ini adalah halaman Artikel dengan ID : " . $id;
});

//Praktikum 2
// Route::get('/', [PageController::class, 'index']); 

Route::get('/about', [PageController::class, 'about']); 

Route::get('/articles/{id}', [PageController::class, 'articles']); 

//Praktikum 2 (Modifikasi)
Route::get('/', [HomeController::class, 'index']); 

Route::get('/about', [AboutController::class, 'about']); 

Route::get('/articles/{id}', [ArticleController::class, 'articles']); 

//Praktikum 3 
//Halaman Home
Route::get('/home', function () {
    echo "Hi! Selamat Datang di Halaman HOME";
});

//Halaman Products
Route::prefix('category') -> group(function(){
    Route::get("/marbel-edu-games", function(){
        echo "Tampilan marbel edu games";
    });
    Route::get("/marbel-and-friends-kids-games", function(){
        echo "Tampilan marbel and friends kids games";
    });
    Route::get("/riri-story-books", function(){
        echo "Tampilan riri story books";
    });
    Route::get("/kolak-kids-songs", function(){
        echo "Tampilan kolak kids songs";
    });
});

//Halaman News
Route::prefix('news') -> group(function(){
    Route::get("", function(){
        echo "Tampilan news";
    });
    Route::get("/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19", function(){
        echo "Tampilan educa studio berbagi untuk warga sekitar terdampak covid 19";
    });
});

//Halaman Program
Route::prefix('program') -> group(function(){
    Route::get("/karir" , function(){
        echo "Tampilan karir";
    });
    Route::get("/magang" , function(){
        echo "Tampilan magang";
    });
    Route::get("/kunjungan-industri" , function(){
        echo "Tampilan kunjungan industri";
    });
});

//Halaman About Us
Route::get("/about-us" , function(){
    echo "ABOUT US <br><br> Raka Bagas Fitriansyah <br> 2041720187 <br> TI - 2G";
});



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Praktikum Minggu 3
Route::get('/', function () {
    return view('index');
});
