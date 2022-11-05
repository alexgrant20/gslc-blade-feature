<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
   public function index()
   {
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
         [
            'nama' => 'El Jenderless',
            'umur' => 31,
            'gender' => ''
         ],

      ];

      return view('welcome', compact('data'));
   }
}