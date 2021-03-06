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

Route::get('/flug', function() {
    Artisan::call('cache:clear');
     Artisan::call('route:clear');
      Artisan::call('config:clear');
       Artisan::call('view:clear');
    
     return view('page');
});


Route::get('/page',         'App\Http\Controllers\TableController@nojPage')->name('nojPage');
Route::post('/nojdata',     'App\Http\Controllers\TableController@nojData')->name('nojData');
Route::post('/nojnum',       'App\Http\Controllers\TableController@nojNum')->name('nojNum');
Route::post('/submit',       'App\Http\Controllers\TableController@nojAdd')->name('nojAdd');
Route::post('/nojinfo',     'App\Http\Controllers\TableController@nojInfo')->name('nojInfo');
Route::post('/nojupdate', 'App\Http\Controllers\TableController@nojUpdate')->name('nojUpdate');






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
