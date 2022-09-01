<?php

namespace App\Controllers;

use App\Models\FilterModel;

class Filter extends BaseController
{
   protected $filterModel;

   public function __construct()
   {
      $this->filterModel = new FilterModel();
   }

   public function teknisi()
   {
      $teknisi = $this->request->getVar('teknisi');
      $tgl = $this->request->getVar('tgl');

      if ($teknisi != "Teknisi") {
         $getGangguan = $this->filterModel->getGangguan($teknisi, $tgl);
      } else {
         $getGangguan = "";
      }

      $data = [
         'tiket_gangguan' => $getGangguan
      ];

      echo json_encode($data);
   }
}
