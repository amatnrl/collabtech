<?php

namespace App\Controllers;

class Beranda extends BaseController
{
   public function index()
   {
      $data = [
         'linkberanda' => 'active',
         'title' => 'Beranda'
      ];
      echo view('beranda', $data);
   }
}
