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
Route::view('/', 'pages.index')->name('index');
Route::view('/contact-us', 'pages.contact')->name('contact');
Route::view('/our-mission', 'pages.mission')->name('mission');
Route::view('/company-history', 'pages.history')->name('history');
Route::view('/commercial', 'pages.commercial')->name('commercial');
Route::view('/industrial', 'pages.industrial')->name('industrial');
Route::view('/residential', 'pages.residential')->name('residential');

