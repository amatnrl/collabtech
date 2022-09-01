<?php

namespace App\Models;

use CodeIgniter\Model;

class TiketGangguanModel extends Model
{
   protected $table                = 'tbl_gangguan';
   protected $primaryKey           = 'id_gangguan';
   protected $useAutoIncrement     = true;
   protected $allowedFields        = ['order_id', 'no_tiket', 'nama_pelanggan', 'kontak_pelanggan', 'headline_tiket', 'no_internet', 'symtomp_ggn', 'alamat', 'id_absensi', 'jam_mulai', 'jam_target', 'jam_selesai', 'class_jam_mulai', 'class_range', 'class_jam_lewat', 'class_jam_mulai_baru', 'tgl', 'ket'];

   function getTiketGangguan()
   {
      $query = $this->db->query("SELECT * from tbl_gangguan ORDER BY id_gangguan DESC");
      return $query->getResultArray();
   }

   function CekSttsGangguan($id_gangguan)
   {
      $query = $this->db->query("SELECT * from tbl_gangguan WHERE id_gangguan='$id_gangguan' and ket='NO ACCEPT'");
      return $query->getResultArray();
   }
}
