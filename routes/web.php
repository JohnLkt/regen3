<?php

use App\Http\Controllers\bookcontroller;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/create/book', [bookcontroller::class, 'createbook'])->name('createbook');
Route::post('/store/book', [bookcontroller::class, 'storebook'])->name('storebook');
Route::get('read/book', [bookcontroller::class, 'readbook'])->name('readbook');
Route::get('read/book/{$id}', [bookcontroller::class, 'readbookbyid'])->name('readbookbyid');