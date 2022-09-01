<?php

namespace App\Controllers;

use App\Models\AbsensiModel;
use App\Models\jabatanModel;
use App\Models\TiketGangguanModel;
use App\Models\UserModel;
use App\Models\WitelModel;

class PembagianTiket extends BaseController
{
   protected $TiketGangguanModel;
   protected $witelModel;
   protected $userModel;
   protected $jabatanModel;
   protected $absensiModel;

   public function __construct()
   {
      $this->TiketGangguanModel = new TiketGangguanModel();
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
         'linkpembagiantiket' => 'active',
         'title' => 'Pembagian Tiket',
         'jabatan' => $this->jabatanModel->getJabatan(),
         'witel' => $this->witelModel->getWitel(),
         'datauser' => $datauser,
         'absensi' => $this->absensiModel->getTeknisi($id_witel)
      ];
      echo view('pembagian_tiket', $data);
   }

   public function inserttiketgangguan()
   {
      $TambahTiketGangguan = $this->request->getPost('tambah-tiket-gangguan');
      if (isset($TambahTiketGangguan)) {
         $getTiketGangguan = $this->TiketGangguanModel->getTiketGangguan();
         if (!$getTiketGangguan) {
            $n = "1";
         } else {
            $order_id_n = explode("-", $getTiketGangguan[0]['order_id']);
            $ke_n = $order_id_n[2];
            $n = $ke_n + 1;
         }

         $jam_mulai = $this->request->getPost('jam_mulai');
         $jam_target = $this->request->getPost('jam_target');

         if ($jam_mulai == "08:00") {
            $class_jam_mulai = "jam_8";
            if ($jam_target == "09:00") {
               $class_range = "range_1";
            } else if ($jam_target == "10:00") {
               $class_range = "range_2";
            } else if ($jam_target == "11:00") {
               $class_range = "range_3";
            } else if ($jam_target == "12:00") {
               $class_range = "range_4";
            } else if ($jam_target == "13:00") {
               $class_range = "range_5";
            } else if ($jam_target == "14:00") {
               $class_range = "range_6";
            } else if ($jam_target == "15:00") {
               $class_range = "range_7";
            } else if ($jam_target == "16:00") {
               $class_range = "range_8";
            } else if ($jam_target == "17:00") {
               $class_range = "range_9";
            } else if ($jam_target == "18:00") {
               $class_range = "range_10";
            } else if ($jam_target == "19:00") {
               $class_range = "range_11";
            } else if ($jam_target == "20:00") {
               $class_range = "range_12";
            }
         } else if ($jam_mulai == "09:00") {
            $class_jam_mulai = "jam_9";
            if ($jam_target == "10:00") {
               $class_range = "range_1";
            } else if ($jam_target == "11:00") {
               $class_range = "range_2";
            } else if ($jam_target == "12:00") {
               $class_range = "range_3";
            } else if ($jam_target == "13:00") {
               $class_range = "range_4";
            } else if ($jam_target == "14:00") {
               $class_range = "range_5";
            } else if ($jam_target == "15:00") {
               $class_range = "range_6";
            } else if ($jam_target == "16:00") {
               $class_range = "range_7";
            } else if ($jam_target == "17:00") {
               $class_range = "range_8";
            } else if ($jam_target == "18:00") {
               $class_range = "range_9";
            } else if ($jam_target == "19:00") {
               $class_range = "range_10";
            } else if ($jam_target == "20:00") {
               $class_range = "range_11";
            }
         } else if ($jam_mulai == "10:00") {
            $class_jam_mulai = "jam_10";
            if ($jam_target == "11:00") {
               $class_range = "range_1";
            } else if ($jam_target == "12:00") {
               $class_range = "range_2";
            } else if ($jam_target == "13:00") {
               $class_range = "range_3";
            } else if ($jam_target == "14:00") {
               $class_range = "range_4";
            } else if ($jam_target == "15:00") {
               $class_range = "range_5";
            } else if ($jam_target == "16:00") {
               $class_range = "range_6";
            } else if ($jam_target == "17:00") {
               $class_range = "range_7";
            } else if ($jam_target == "18:00") {
               $class_range = "range_8";
            } else if ($jam_target == "19:00") {
               $class_range = "range_9";
            } else if ($jam_target == "20:00") {
               $class_range = "range_10";
            }
         } else if ($jam_mulai == "11:00") {
            $class_jam_mulai = "jam_11";
            if ($jam_target == "12:00") {
               $class_range = "range_1";
            } else if ($jam_target == "13:00") {
               $class_range = "range_2";
            } else if ($jam_target == "14:00") {
               $class_range = "range_3";
            } else if ($jam_target == "15:00") {
               $class_range = "range_4";
            } else if ($jam_target == "16:00") {
               $class_range = "range_5";
            } else if ($jam_target == "17:00") {
               $class_range = "range_6";
            } else if ($jam_target == "18:00") {
               $class_range = "range_7";
            } else if ($jam_target == "19:00") {
               $class_range = "range_8";
            } else if ($jam_target == "20:00") {
               $class_range = "range_9";
            }
         } else if ($jam_mulai == "12:00") {
            $class_jam_mulai = "jam_12";
            if ($jam_target == "13:00") {
               $class_range = "range_1";
            } else if ($jam_target == "14:00") {
               $class_range = "range_2";
            } else if ($jam_target == "15:00") {
               $class_range = "range_3";
            } else if ($jam_target == "16:00") {
               $class_range = "range_4";
            } else if ($jam_target == "17:00") {
               $class_range = "range_5";
            } else if ($jam_target == "18:00") {
               $class_range = "range_6";
            } else if ($jam_target == "19:00") {
               $class_range = "range_7";
            } else if ($jam_target == "20:00") {
               $class_range = "range_8";
            }
         } else if ($jam_mulai == "13:00") {
            $class_jam_mulai = "jam_13";
            if ($jam_target == "14:00") {
               $class_range = "range_1";
            } else if ($jam_target == "15:00") {
               $class_range = "range_2";
            } else if ($jam_target == "16:00") {
               $class_range = "range_3";
            } else if ($jam_target == "17:00") {
               $class_range = "range_4";
            } else if ($jam_target == "18:00") {
               $class_range = "range_5";
            } else if ($jam_target == "19:00") {
               $class_range = "range_6";
            } else if ($jam_target == "20:00") {
               $class_range = "range_7";
            }
         } else if ($jam_mulai == "14:00") {
            $class_jam_mulai = "jam_14";
            if ($jam_target == "15:00") {
               $class_range = "range_1";
            } else if ($jam_target == "16:00") {
               $class_range = "range_2";
            } else if ($jam_target == "17:00") {
               $class_range = "range_3";
            } else if ($jam_target == "18:00") {
               $class_range = "range_4";
            } else if ($jam_target == "19:00") {
               $class_range = "range_5";
            } else if ($jam_target == "20:00") {
               $class_range = "range_6";
            }
         } else if ($jam_mulai == "15:00") {
            $class_jam_mulai = "jam_15";
            if ($jam_target == "16:00") {
               $class_range = "range_1";
            } else if ($jam_target == "17:00") {
               $class_range = "range_2";
            } else if ($jam_target == "18:00") {
               $class_range = "range_3";
            } else if ($jam_target == "19:00") {
               $class_range = "range_4";
            } else if ($jam_target == "20:00") {
               $class_range = "range_5";
            }
         } else if ($jam_mulai == "16:00") {
            $class_jam_mulai = "jam_16";
            if ($jam_target == "17:00") {
               $class_range = "range_1";
            } else if ($jam_target == "18:00") {
               $class_range = "range_2";
            } else if ($jam_target == "19:00") {
               $class_range = "range_3";
            } else if ($jam_target == "20:00") {
               $class_range = "range_4";
            }
         } else if ($jam_mulai == "17:00") {
            $class_jam_mulai = "jam_17";
            if ($jam_target == "18:00") {
               $class_range = "range_1";
            } else if ($jam_target == "19:00") {
               $class_range = "range_2";
            } else if ($jam_target == "20:00") {
               $class_range = "range_3";
            }
         } else if ($jam_mulai == "18:00") {
            $class_jam_mulai = "jam_18";
            if ($jam_target == "19:00") {
               $class_range = "range_1";
            } else if ($jam_target == "20:00") {
               $class_range = "range_2";
            }
         } else if ($jam_mulai == "19:00") {
            $class_jam_mulai = "jam_19";
            if ($jam_target == "20:00") {
               $class_range = "range_1";
            }
         }

         $tgl = date("dmy");

         $TiketGangguanModel = new TiketGangguanModel();
         $TiketGangguanModel->insert([
            'order_id' => "GGN-" . $tgl . "-" . $n,
            'no_tiket' => $this->request->getPost('no_tiket'),
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'kontak_pelanggan' => $this->request->getPost('kontak_pelanggan'),
            'headline_tiket' => $this->request->getPost('headline_tiket'),
            'no_internet' => $this->request->getPost('no_internet'),
            'symtomp_ggn' => $this->request->getPost('symtomp_ggn'),
            'alamat' => $this->request->getPost('alamat'),
            'id_absensi' => $this->request->getPost('teknisi'),
            'jam_mulai' => $jam_mulai,
            'jam_target' => $jam_target,
            'jam_selesai' => "-",
            'class_jam_mulai' => $class_jam_mulai,
            'class_range' => $class_range,
            'class_jam_lewat' => "-",
            'class_jam_mulai_baru' => "-",
            'tgl' => date("Y-m-d"),
            'ket' => "NO ACCEPT"
         ]);

         session()->setFlashdata('berhasil', 'Berhasil Menambah Tiket Gangguan');
         return redirect()->to('/PembagianTiket');
      }
   }

   public function UpdateTiketGangguan()
   {
      $UpdateTiketGangguan = $this->request->getPost('edit-tiket-gangguan');
      if (isset($UpdateTiketGangguan)) {

         $id_gangguan = $this->request->getPost('id_gangguan');
         $jam_mulai = $this->request->getPost('jam_mulai');
         $jam_target = $this->request->getPost('jam_target');

         if ($jam_mulai == "08:00") {
            $class_jam_mulai = "jam_8";
            if ($jam_target == "09:00") {
               $class_range = "range_1";
            } else if ($jam_target == "10:00") {
               $class_range = "range_2";
            } else if ($jam_target == "11:00") {
               $class_range = "range_3";
            } else if ($jam_target == "12:00") {
               $class_range = "range_4";
            } else if ($jam_target == "13:00") {
               $class_range = "range_5";
            } else if ($jam_target == "14:00") {
               $class_range = "range_6";
            } else if ($jam_target == "15:00") {
               $class_range = "range_7";
            } else if ($jam_target == "16:00") {
               $class_range = "range_8";
            } else if ($jam_target == "17:00") {
               $class_range = "range_9";
            } else if ($jam_target == "18:00") {
               $class_range = "range_10";
            } else if ($jam_target == "19:00") {
               $class_range = "range_11";
            } else if ($jam_target == "20:00") {
               $class_range = "range_12";
            }
         } else if ($jam_mulai == "09:00") {
            $class_jam_mulai = "jam_9";
            if ($jam_target == "10:00") {
               $class_range = "range_1";
            } else if ($jam_target == "11:00") {
               $class_range = "range_2";
            } else if ($jam_target == "12:00") {
               $class_range = "range_3";
            } else if ($jam_target == "13:00") {
               $class_range = "range_4";
            } else if ($jam_target == "14:00") {
               $class_range = "range_5";
            } else if ($jam_target == "15:00") {
               $class_range = "range_6";
            } else if ($jam_target == "16:00") {
               $class_range = "range_7";
            } else if ($jam_target == "17:00") {
               $class_range = "range_8";
            } else if ($jam_target == "18:00") {
               $class_range = "range_9";
            } else if ($jam_target == "19:00") {
               $class_range = "range_10";
            } else if ($jam_target == "20:00") {
               $class_range = "range_11";
            }
         } else if ($jam_mulai == "10:00") {
            $class_jam_mulai = "jam_10";
            if ($jam_target == "11:00") {
               $class_range = "range_1";
            } else if ($jam_target == "12:00") {
               $class_range = "range_2";
            } else if ($jam_target == "13:00") {
               $class_range = "range_3";
            } else if ($jam_target == "14:00") {
               $class_range = "range_4";
            } else if ($jam_target == "15:00") {
               $class_range = "range_5";
            } else if ($jam_target == "16:00") {
               $class_range = "range_6";
            } else if ($jam_target == "17:00") {
               $class_range = "range_7";
            } else if ($jam_target == "18:00") {
               $class_range = "range_8";
            } else if ($jam_target == "19:00") {
               $class_range = "range_9";
            } else if ($jam_target == "20:00") {
               $class_range = "range_10";
            }
         } else if ($jam_mulai == "11:00") {
            $class_jam_mulai = "jam_11";
            if ($jam_target == "12:00") {
               $class_range = "range_1";
            } else if ($jam_target == "13:00") {
               $class_range = "range_2";
            } else if ($jam_target == "14:00") {
               $class_range = "range_3";
            } else if ($jam_target == "15:00") {
               $class_range = "range_4";
            } else if ($jam_target == "16:00") {
               $class_range = "range_5";
            } else if ($jam_target == "17:00") {
               $class_range = "range_6";
            } else if ($jam_target == "18:00") {
               $class_range = "range_7";
            } else if ($jam_target == "19:00") {
               $class_range = "range_8";
            } else if ($jam_target == "20:00") {
               $class_range = "range_9";
            }
         } else if ($jam_mulai == "12:00") {
            $class_jam_mulai = "jam_12";
            if ($jam_target == "13:00") {
               $class_range = "range_1";
            } else if ($jam_target == "14:00") {
               $class_range = "range_2";
            } else if ($jam_target == "15:00") {
               $class_range = "range_3";
            } else if ($jam_target == "16:00") {
               $class_range = "range_4";
            } else if ($jam_target == "17:00") {
               $class_range = "range_5";
            } else if ($jam_target == "18:00") {
               $class_range = "range_6";
            } else if ($jam_target == "19:00") {
               $class_range = "range_7";
            } else if ($jam_target == "20:00") {
               $class_range = "range_8";
            }
         } else if ($jam_mulai == "13:00") {
            $class_jam_mulai = "jam_13";
            if ($jam_target == "14:00") {
               $class_range = "range_1";
            } else if ($jam_target == "15:00") {
               $class_range = "range_2";
            } else if ($jam_target == "16:00") {
               $class_range = "range_3";
            } else if ($jam_target == "17:00") {
               $class_range = "range_4";
            } else if ($jam_target == "18:00") {
               $class_range = "range_5";
            } else if ($jam_target == "19:00") {
               $class_range = "range_6";
            } else if ($jam_target == "20:00") {
               $class_range = "range_7";
            }
         } else if ($jam_mulai == "14:00") {
            $class_jam_mulai = "jam_14";
            if ($jam_target == "15:00") {
               $class_range = "range_1";
            } else if ($jam_target == "16:00") {
               $class_range = "range_2";
            } else if ($jam_target == "17:00") {
               $class_range = "range_3";
            } else if ($jam_target == "18:00") {
               $class_range = "range_4";
            } else if ($jam_target == "19:00") {
               $class_range = "range_5";
            } else if ($jam_target == "20:00") {
               $class_range = "range_6";
            }
         } else if ($jam_mulai == "15:00") {
            $class_jam_mulai = "jam_15";
            if ($jam_target == "16:00") {
               $class_range = "range_1";
            } else if ($jam_target == "17:00") {
               $class_range = "range_2";
            } else if ($jam_target == "18:00") {
               $class_range = "range_3";
            } else if ($jam_target == "19:00") {
               $class_range = "range_4";
            } else if ($jam_target == "20:00") {
               $class_range = "range_5";
            }
         } else if ($jam_mulai == "16:00") {
            $class_jam_mulai = "jam_16";
            if ($jam_target == "17:00") {
               $class_range = "range_1";
            } else if ($jam_target == "18:00") {
               $class_range = "range_2";
            } else if ($jam_target == "19:00") {
               $class_range = "range_3";
            } else if ($jam_target == "20:00") {
               $class_range = "range_4";
            }
         } else if ($jam_mulai == "17:00") {
            $class_jam_mulai = "jam_17";
            if ($jam_target == "18:00") {
               $class_range = "range_1";
            } else if ($jam_target == "19:00") {
               $class_range = "range_2";
            } else if ($jam_target == "20:00") {
               $class_range = "range_3";
            }
         } else if ($jam_mulai == "18:00") {
            $class_jam_mulai = "jam_18";
            if ($jam_target == "19:00") {
               $class_range = "range_1";
            } else if ($jam_target == "20:00") {
               $class_range = "range_2";
            }
         } else if ($jam_mulai == "19:00") {
            $class_jam_mulai = "jam_19";
            if ($jam_target == "20:00") {
               $class_range = "range_1";
            }
         }
         $cek = $this->TiketGangguanModel->CekSttsGangguan($id_gangguan);
         if (!empty($cek)) {
            $TiketGangguanModel = new TiketGangguanModel();
            $TiketGangguanModel->update($id_gangguan, [
               'no_tiket' => $this->request->getPost('no_tiket'),
               'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
               'kontak_pelanggan' => $this->request->getPost('kontak_pelanggan'),
               'headline_tiket' => $this->request->getPost('headline_tiket'),
               'no_internet' => $this->request->getPost('no_internet'),
               'symtomp_ggn' => $this->request->getPost('symtomp_ggn'),
               'alamat' => $this->request->getPost('alamat'),
               'id_absensi' => $this->request->getPost('teknisi'),
               'jam_mulai' => $jam_mulai,
               'jam_target' => $jam_target,
               'jam_selesai' => "-",
               'class_jam_mulai' => $class_jam_mulai,
               'class_range' => $class_range,
               'tgl' => date("Y-m-d"),
            ]);

            session()->setFlashdata('berhasil', 'Berhasil Mengedit Tiket Gangguan');
            return redirect()->to('/PembagianTiket');
         } else {
            session()->setFlashdata('error', 'Tiket Gangguan Dalam Kondisi On Progres');
            return redirect()->to('/PembagianTiket');
         }
      }
   }

   public function delete($i)
   {
      $cek = $this->TiketGangguanModel->CekSttsGangguan($i);
      if (!empty($cek)) {
         $TiketGangguanModel = new TiketGangguanModel();
         $TiketGangguanModel->delete($i);

         session()->setFlashdata('berhasil', 'Berhasil menghapus Tiket Gangguan');
         return redirect()->to('/PembagianTiket');
      } else {
         session()->setFlashdata('error', 'Tiket Gangguan Dalam Kondisi On Progres');
         return redirect()->to('/PembagianTiket');
      }
   }
}
