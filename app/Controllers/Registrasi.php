<?php

namespace App\Controllers;

use App\Models\jabatanModel;
use App\Models\UserModel;
use App\Models\WitelModel;

class Registrasi extends BaseController
{
   protected $UserModel;
   protected $jabatanModel;
   protected $witelModel;

   public function __construct()
   {
      $this->UserModel = new UserModel();
      $this->jabatanModel = new jabatanModel();
      $this->witelModel = new WitelModel();
   }

   public function index()
   {
      $data = [
         'linklogin' => 'active',
         'title' => 'Registrasi',
         'jabatan' => $this->jabatanModel->getJabatan(),
         'witel' => $this->witelModel->getWitel()
      ];
      echo view('registrasi', $data);
   }

   public function registrasi()
   {
      $registrasi = $this->request->getPost('registrasi');
      if (isset($registrasi)) {
         $nik = $this->request->getPost('nik');
         $nama = $this->request->getPost('nama');
         $jabatan = $this->request->getPost('jabatan');
         $witel = $this->request->getPost('witel');
         $password1 = $this->request->getPost('password1');
         $password2 = $this->request->getPost('password2');

         if ($jabatan == '--- Pilih Jabatan ---') {
            $err = "Silahkan pilih jabatan!";
         } else if ($witel == '--- Pilih Witel ---') {
            $err = "Silahkan pilih witel!";
         } else if ($password1 != $password2) {
            $err = "Password anda tidak sesuai!";
         } else {
            $dataUser = $this->UserModel->FilterNik($nik);
            if (empty($dataUser)) {
               $UserModel = new UserModel();
               $UserModel->insert([
                  'nama' => $nama,
                  'nik' => $nik,
                  'id_jabatan' => $jabatan,
                  'id_witel' => $witel,
                  'pass' => md5($password1),
                  'creat_at' => date("Y-m-d h:i:s")
               ]);
            } else {
               $err = "NIK anda sudah terdaftar!";
            }
         }

         if (isset($err)) {
            session()->setFlashdata('error', $err);
            session()->setFlashdata('nama', $nama);
            session()->setFlashdata('nik', $nik);
            session()->setFlashdata('jabatan', $jabatan);
            session()->setFlashdata('witel', $witel);

            return redirect()->to('/Registrasi');
         } else {
            session()->setFlashdata('berhasil', "Anda telah terdaftar di Collabtech");
            return redirect()->to('/Registrasi');
         }
      }
   }

   public function updateuser()
   {
      $updateuser = $this->request->getPost('update');
      if (isset($updateuser)) {
         $id_user = $this->request->getPost('id_user');
         $nik = $this->request->getPost('nik');
         $nama = $this->request->getPost('nama');
         $jabatan = $this->request->getPost('jabatan');
         $witel = $this->request->getPost('witel');
         $password = $this->request->getPost('password');

         if ($password != "") {
            $UserModel = new UserModel();
            $UserModel->update($id_user, [
               'nama' => $nama,
               'nik' => $nik,
               'id_jabatan' => $jabatan,
               'id_witel' => $witel,
               'pass' => md5($password),
               'creat_at' => date("Y-m-d h:i:s")
            ]);
         } else {
            $UserModel = new UserModel();
            $UserModel->update($id_user, [
               'nama' => $nama,
               'nik' => $nik,
               'id_jabatan' => $jabatan,
               'id_witel' => $witel,
               'creat_at' => date("Y-m-d h:i:s")
            ]);
         }
         session()->setFlashdata('berhasil', "Profil anda telah diperbarui");
         return redirect()->to('/Dashboard');
      }
   }
}
