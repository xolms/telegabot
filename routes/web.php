<?php

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
$bot = env('TELEGRAM_BOT_TOKEN');
Route::get('/', function () {
    return view('welcome');
});
Route::get('update', 'Bot\RegistrationController@reg');
Route::get('bot/'.$bot, 'Bot\MainController@index')->name('bot.run');