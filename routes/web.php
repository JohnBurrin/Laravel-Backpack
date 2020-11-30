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

Auth::routes(['verify' => true]);


Route::get('/auth/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/', 'App\Http\Controllers\PageController@homepage')->name('home');
Route::get('/welcome', 'App\Http\Controllers\PageController@welcome')->name('welcome');
#Route::get('/welcome', [App\Http\Controllers\PageController::class, 'index'])->name('welcome');

/** CATCH-ALL ROUTE for Backpack/PageManager - needs to be at the end of your routes.php file  **/
Route::get('{page}/{subs?}', ['uses' => '\App\Http\Controllers\PageController@index'])
->where(['page' => '^(((?=(?!admin))(?=(?!\/)).))*$', 'subs' => '.*']);
