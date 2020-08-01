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

Route::get('/', function () {
    return view('welcome');
});

// albums

Route::get('/albums', 'AlbumsController@AlbumsStore')->name('AlbumsStore');

Route::get('/albums/{id}', 'AlbumsController@Details')->name('AlbumsDetails');

Route::post('/albums/comment', 'AlbumsController@AddComment')->name('AlbumsComments');


// admin albums

Route::get('/admin/albums', 'AlbumsController@Index');

Route::get('/admin/albums/create', "AlbumsController@Create");

Route::post('/admin/albums/create', "AlbumsController@Store");

Route::get('/admin/albums/delete/{id}', "AlbumsController@Delete");

Route::get('/admin/albums/edit/{id}', "AlbumsController@Edit");

Route::get('/admin/albums/{id}', "AlbumsController@Show");

Route::post('/admin/albums/edit', "AlbumsController@Update");

Route::delete('/admin/albums/delete', "AlbumsController@Remove");


// apps

Route::get('/apps', 'AppsController@AppsStore')->name('AppsStore');

Route::get('/apps/{id}', 'AppsController@Details')->name('AppsDetails');

Route::post('/apps/comment', 'AppsController@AddComment')->name('AppsComments');


// admin apps

Route::get('/admin/apps', 'AppsController@Index');

Route::get('/admin/apps/create', "AppsController@Create");

Route::post('/admin/apps/create', "AppsController@Store");

Route::get('/admin/apps/delete/{id}', "AppsController@Delete");

Route::get('/admin/apps/edit/{id}', "AppsController@Edit");

Route::get('/admin/apps/{id}', "AppsController@Show");

Route::post('/admin/apps/edit', "AppsController@Update");

Route::delete('/admin/apps/delete', "AppsController@Remove");


// netflix

Route::get('/netflixs', 'NetflixsController@NetflixsStore')->name('NetflixsStore');

Route::get('/netflixs/{id}', 'NetflixsController@Details')->name('NetflixsDetails');

Route::post('/netflixs/comment', 'NetflixsController@AddComment')->name('NetflixsComments');


// admin netflix

Route::get('/admin/netflixs', 'NetflixsController@Index');

Route::get('/admin/netflixs/create', "NetflixsController@Create");

Route::post('/admin/netflixs/create', "NetflixsController@Store");

Route::get('/admin/netflixs/delete/{id}', "NetflixsController@Delete");

Route::get('/admin/netflixs/edit/{id}', "NetflixsController@Edit");

Route::get('/admin/netflixs/{id}', "NetflixsController@Show");

Route::post('/admin/netflixs/edit', "NetflixsController@Update");

Route::delete('/admin/netflixs/delete', "NetflixsController@Remove");


// toys

Route::get('/toys', 'ToysController@ToysStore')->name('ToysStore');

Route::get('/toys/{id}', 'ToysController@Details')->name('ToysDetails');

Route::post('/toys/comment', 'ToysController@AddComment')->name('ToysComments');

// admin toys

Route::get('/admin/toys', 'ToysController@Index');

Route::get('/admin/toys/create', "ToysController@Create");

Route::post('/admin/toys/create', "ToysController@Store");

Route::get('/admin/toys/delete/{id}', "ToysController@Delete");

Route::get('/admin/toys/edit/{id}', "ToysController@Edit");

Route::get('/admin/toys/{id}', "ToysController@Show");

Route::post('/admin/toys/edit', "ToysController@Update");

Route::delete('/admin/toys/delete', "ToysController@Remove");



Route::get('/mongodb', function () {
    return view('mongodb');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

