<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactController;
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
    return view('home');
});
Route::get('/welcome', function () {
    return view('home');
})->name('welcome');;


Auth::routes();


Route::get('policies', function () {
    return view('policies');
})->name('policies');



Route::get('Quition', function () {
    return view('Quition');
})->name('Quition');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/payment/{id}/', [App\Http\Controllers\PaymentController::class, 'index'])->name('payment');



Route::post('/saveCondition', [App\Http\Controllers\ContactController::class, 'saveCondition'])->name('saveCondition');
Route::post('/contact.store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact.index', [ContactController::class, 'index'])->name('contact.index');


// Route::get('contact', function () {
//     return view('contact');
// })->name('contact');


Route::get('condition/{id}', function ($id) {

   
    return view('condition',['id'=>$id]);
})->name('condition');


Route::get('Professionalism', function () {
    return view('Professionalism');
})->name('Professionalism');






Route::get('about', function () {
    return view('about');
})->name('about');


Route::get('price', function () {
    return view('price');
})->name('price');


Route::get('service', function () {
    return view('service');
})->name('service');