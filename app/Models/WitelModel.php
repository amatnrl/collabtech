<?php

namespace App\Models;

use CodeIgniter\Model;

class WitelModel extends Model
{
   protected $table                = 'tbl_witel';
   protected $primaryKey           = 'id_witel';

   function getWitel()
   {
      $builder = $this->db->table('tbl_witel');
      $query   = $builder->get();
      return $query->getResultArray();
   }
}
