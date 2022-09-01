<?php

namespace App\Models;

use CodeIgniter\Model;

class jabatanModel extends Model
{
   protected $table                = 'tbl_jabatan';
   protected $primaryKey           = 'id_jabatan';

   function getJabatan()
   {
      $builder = $this->db->table('tbl_jabatan');
      $query   = $builder->get();
      return $query->getResultArray();
   }

   function FilterJabatan($id_jabatan)
   {
      $query = $this->db->query("SELECT * FROM tbl_jabatan WHERE id_jabatan='$id_jabatan'");
      return $query->getResultArray();
   }
}
