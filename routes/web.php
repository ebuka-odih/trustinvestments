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

Route::view('/', 'pages.index')->name('homepage');
Route::view('why_us', 'pages.why_us')->name('why_us');
Route::view('legal_policy', 'pages.legal_policy')->name('legal_policy');
Route::view('partnerships', 'pages.partnerships')->name('partnerships');
Route::view('forex_trading', 'pages.forex_trading')->name('forex_trading');
Route::view('broker', 'pages.broker')->name('broker');
Route::view('faqs', 'pages.faqs')->name('faqs');
Route::view('crypto', 'pages.crypto')->name('crypto');
Route::view('spreads', 'pages.spreads')->name('spreads');
Route::view('swap', 'pages.swap')->name('swap');
Route::view('account_type', 'pages.account_type')->name('account_type');
Route::view('meta4', 'pages.meta4')->name('meta4');
Route::view('meta5', 'pages.meta5')->name('meta5');
Route::view('capital', 'pages.capital')->name('capital');
Route::view('fxblue', 'pages.fxblue')->name('fxblue');

Route::view('about', 'pages.about')->name('about');
Route::view('plans', 'pages.plans')->name('plans');


Auth::routes(['verify'=> true]);
//include 'admin.php';
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth'], 'prefix' => 'user', 'as' => 'user.'],
    function(){

    Route::get('dashboard', 'UserController@dashboard')->name('dashboard');
    Route::get('profile', 'UserController@profile')->name('profile');
    Route::get('edit/profile/{id}', 'UserController@editProfile')->name('editProfile');
    Route::patch('update/profile/{id}', 'UserController@updateProfile')->name('updateProfile');
    Route::get('/fund-account', "UserController@fundAcct")->name('fundAcct');

    Route::get('withdraw', "WithdrawController@withdraw")->name('withdraw');
    Route::post('store/withdraw', "WithdrawController@storeWithdraw")->name('storeWithdraw');

    Route::get('upload/document', "DocumentController@document")->name('document');
    Route::post('upload/document', "DocumentController@storeDocument")->name('storeDocument');
});
