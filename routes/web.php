<?php

use App\Models\Address;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('main');
Route::get('/trainers', 'App\Http\Controllers\HomeController@staff')->name('staff');
Route::get('/pricing', 'App\Http\Controllers\HomeController@pricing')->name('pricing');
Route::get('/gyms', 'App\Http\Controllers\HomeController@gyms')->name('gyms');
Route::get('/time', 'App\Http\Controllers\HomeController@time')->name('time');

Route::post('/client/login', 'App\Http\Controllers\ClientController@login')->name('client.login');
Route::post('/client/register', 'App\Http\Controllers\ClientController@register')->name('client.register');
Route::get('/client/logout', 'App\Http\Controllers\ClientController@logout')->name('client.logout');

Route::post('/make/sub', 'App\Http\Controllers\SubscriptionController@make')->name('make.sub');
Route::get('/gyms/{id}', 'App\Http\Controllers\AddressController@choose')->name('choose.gym');
Route::get('/trainers/{id}', 'App\Http\Controllers\MoneyController@make')->name('choose.trainer');
Route::post('/set/time', 'App\Http\Controllers\ClientController@setTime')->name('set.time');

Route::get('test', function () {
    $user = User::find(5);
    $user->getRole();
});
