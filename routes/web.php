<?php

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


Auth::routes();

// Qui sto creando le rotte Admin protette dal Middleware auth
Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->namespace('admin')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('home');

        // Crea le CRUD di Posts
        Route::resource('posts', 'PostController');

        //Usando questa rotta se sull'url scrivo 'admin/esempio' mi manda in 404 e non su Vue
        Route::get('/{any}', function () {
            abort(404);
        })->where('any', '.*');
    });

// Qui gestisco tutte le rotte con Vue. qualunque rotta che non inizia con /admin se la gestisce Vue
Route::get('{any?}', function () {
    return view('guest.home');
})->where("any", ".*");
