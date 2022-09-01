<?php

namespace App\Controllers;

use App\Models\AbsensiModel;
use App\Models\JabatanModel;
use App\Models\UserModel;
use App\Models\WitelModel;

class Dashboard extends BaseController
{
   protected $witelModel;
   protected $userModel;
   protected $JabatanModel;
   protected $absensiModel;

   public function __construct()
   {
      $this->JabatanModel = new JabatanModel();
      $this->witelModel = new WitelModel();
      $this->userModel = new UserModel();
      $this->absensiModel = new AbsensiModel();
   }

   public function index()
   {
      $id_user = session()->get('id_user');
      $datauser = $this->userModel->FilterIdUser($id_user);
      $id_witel = $datauser[0]['id_witel'];

      $data = [
         'linkdashboard' => 'active',
         'title' => 'Dashboard',
         'jabatan' => $this->JabatanModel->getJabatan(),
         'witel' => $this->witelModel->getWitel(),
         'datauser' => $this->userModel->FilterIdUser($id_user),
         'absensi' => $this->absensiModel->getTeknisi($id_witel)
      ];

      echo view('dashboard', $data);
   }
}
