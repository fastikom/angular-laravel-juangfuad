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

Route::get("/API/", "MhsController@index");
Route::get("/API/{id}", "MhsController@tampil");
Route::post("/API/buat/", "MhsController@buat");
Route::put("/API/edit/{id}", "MhsController@edit");
Route::delete("/API/hapus/{id}", "MhsController@hapus");