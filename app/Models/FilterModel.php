<?php

namespace App\Models;

use CodeIgniter\Model;

class FilterModel extends Model
{
   function getGangguan($teknisi, $tgl)
   {
      $query = $this->db->query("SELECT * FROM tbl_gangguan WHERE id_absensi='$teknisi' and tgl='$tgl'");
      return $query->getResultArray();
   }
}
