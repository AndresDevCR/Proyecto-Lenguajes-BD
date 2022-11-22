<?php

use App\Http\Controllers\contactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\newCarContoller;
use App\Http\Controllers\usedCarContoller;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;



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
Route::controller(contactController::class)->group(function () {
    Route::get('/clients', 'contactMain')->name('contactMain');
    Route::get('/create', 'create')->name('create');
    Route::post('/add', 'add')->name('contact.add');

    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update', 'update')->name('contact.update');

    Route::get('/findByID/{id}', 'findByID')->name('findByID');
    Route::get('/delete/{id}', 'delete')->name('delete');

    Route::get('/contact', 'contact')->name('contact');
    Route::post('/send', 'send')->name('send');
});

Route::controller(indexController::class)->group(function () {
    Route::get('/', 'index')->name('index');;
});

Route::controller(newCarContoller::class)->group(function () {
    Route::get('/nuevos', 'newCar')->name('newCar');
    Route::get('/newCarDetail', 'newCarDetail')->name('newCarDetail');

    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update', 'update')->name('auto.update');

    Route::get('/findByID/{id}', 'findByID')->name('findByID');
});

Route::controller(usedCarContoller::class)->group(function () {
    Route::get('/usados', 'usedCar')->name('usedCar');
    Route::get('/usedCarDetail', 'usedCarDetail')->name('usedCarDetail');
});





