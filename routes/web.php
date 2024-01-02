<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\SokhnaController;
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
Route::get('/', [SokhnaController::class, 'accueil']);
Route::get('/register', [SokhnaController::class, 'form_register']);
Route::get('/login', [SokhnaController::class, 'form_login']);


// Les Routes pour le traitement de la page de connexion et d'inscription.
Route::post('login', 'SokhnaController@enregistrerANFANTS')->name('login');
Route::post('inscription', 'SokhnaController@enregistrerANFANTS')->name('inscription');

Route::get('/welcome', function () {
    return view('welcome');

});



Route::get('/accueil', function () {
    return view('accueil');

});


Route::get('/login', function () {
    return view('login');

});
Route::get('/register', function () {
    return view('register');

});




