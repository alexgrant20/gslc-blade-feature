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

   $data = [
      [
         'nama' => 'Charlie Chaplin',
         'umur' => 20,
         'gender' => 'L'
      ],
      [
         'nama' => 'Moisuer',
         'umur' => 19,
         'gender' => 'P'
      ],
      [
         'nama' => 'El Jenderless',
         'umur' => 31,
         'gender' => ''
      ],

   ];

   return view('welcome', compact('data'));
});