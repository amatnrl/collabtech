<?php

namespace App\Controllers;

use App\Models\JabatanModel;
use App\Models\UserModel;

class Login extends BaseController
{
   protected $JabatanModel;
   protected $userModel;

   public function __construct()
   {
      $this->JabatanModel = new JabatanModel();
      $this->UserModel = new UserModel();
   }


   public function index()
   {
      $data = [
         'linklogin' => 'active',
         'title' => 'Login',
         'jabatan' => $this->JabatanModel->getJabatan()
      ];
      echo view('login', $data);
   }

   public function login()
   {
      $login = $this->request->getPost('login');
      if (isset($login)) {
         $nik = $this->request->getPost('nik');
         $jabatan = $this->request->getPost('jabatan');
         $password = md5($this->request->getPost('password'));

         if ($jabatan == '--- Pilih Akses ---') {
            $err = "Silahkan pilih akses terlebih dahulu!";
         } else {
            $dataUserNik = $this->UserModel->FilterNik($nik);
            $dataUserPassword = $this->UserModel->FilterPassword($nik, $password);
            $dataUserJabatan = $this->UserModel->FilterJabatan($nik, $jabatan);

            if (empty($dataUserNik)) {
               $err = "NIK anda tidak terdaftar!";
            } else if (empty($dataUserPassword)) {
               $err = "Password anda salah!";
            } else if (empty($dataUserJabatan)) {
               $tampilkanjabatan = $this->JabatanModel->FilterJabatan($jabatan);
               $err = "Anda tidak memiliki akses sebagai " . $tampilkanjabatan[0]['jabatan'] . "!";
            }
         }
         if (isset($err)) {
            session()->setFlashdata('error', $err);
            session()->setFlashdata('nik', $nik);
            session()->setFlashdata('jabatan', $jabatan);
            session()->setFlashdata('password', $password);

            return redirect()->to('/Login');
         } else {
            $data = [
               'linkdashboard' => 'active',
               'title' => 'Dashboard',
               'id_user' => $dataUserNik[0]['id_user']
            ];
            session()->set($data);
            return redirect()->to('/Dashboard');
         }
      }
   }

   public function logout()
   {
      session()->destroy();
      return redirect()->to('/Login');
   }
}
