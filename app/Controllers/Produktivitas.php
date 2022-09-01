<?php

namespace App\Controllers;

use App\Models\AbsensiModel;
use App\Models\jabatanModel;
use App\Models\UserModel;
use App\Models\WitelModel;

class Produktivitas extends BaseController
{
   protected $witelModel;
   protected $jabatanModel;
   protected $userModel;
   protected $absensiModel;

   public function __construct()
   {
      $this->witelModel = new WitelModel();
      $this->jabatanModel = new jabatanModel();
      $this->userModel = new UserModel();
      $this->absensiModel = new AbsensiModel();
   }


   public function index()
   {
      $id_user = session()->get('id_user');
      $datauser = $this->userModel->FilterIdUser($id_user);
      $id_witel = $datauser[0]['id_witel'];

      $data = [
         'linkproduktivitas' => 'active',
         'title' => 'Produktivitas',
         'jabatan' => $this->jabatanModel->getJabatan(),
         'witel' => $this->witelModel->getWitel(),
         'datauser' => $this->userModel->FilterIdUser($id_user),
         'absensi' => $this->absensiModel->getTeknisi($id_witel)

      ];
      echo view('produktivitas', $data);
   }
}
