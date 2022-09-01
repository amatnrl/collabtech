<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsensiModel extends Model
{
   function getTeknisi($id_witel)
   {
      $query = $this->db->query("SELECT * FROM tbl_absensi WHERE id_witel='$id_witel' and ket='success'");
      return $query->getResultArray();
   }
}
