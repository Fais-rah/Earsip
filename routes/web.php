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
Route::get('/', function() {
    return redirect()->route('login');
});
Route::get('/index', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::Resource('departments', 'DepartmentsController');

Route::resource('outgoingmails', 'OutgoingmailsController');
//Route::get('/outgoingmails.filter/{year}/{month}', 'FilterController@inboxFilter')->name('outgoingmails.filter');
//Route::get('/outgoingmails.index', 'OutgoigmailsController@inboxFilter')->name('inbox.filter');

//Route::resource('daterange', 'DateRangeController');

Route::get('/home', 'HomeController@index')->name('home');
