<?php

namespace App\Controllers;

use App\Models\AbsensiModel;
use App\Models\JabatanModel;
use App\Models\UserModel;
use App\Models\WitelModel;

class DatabaseTerkini extends BaseController
{
   protected $witelModel;
   protected $JabatanModel;
   protected $userModel;
   protected $absensiModel;

   public function __construct()
   {
      $this->witelModel = new WitelModel();
      $this->JabatanModel = new JabatanModel();
      $this->userModel = new UserModel();
      $this->absensiModel = new AbsensiModel();
   }

   public function index()
   {
      $id_user = session()->get('id_user');
      $datauser = $this->userModel->FilterIdUser($id_user);
      $id_witel = $datauser[0]['id_witel'];

      $data = [
         'linkdatabaseterkini' => 'active',
         'title' => 'Database Terkini',
         'jabatan' => $this->JabatanModel->getJabatan(),
         'witel' => $this->witelModel->getWitel(),
         'datauser' => $this->userModel->FilterIdUser($id_user),
         'absensi' => $this->absensiModel->getTeknisi($id_witel)
      ];
      echo view('database_terkini', $data);
   }
}
