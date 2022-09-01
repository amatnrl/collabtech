<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
   protected $table                = 'tbl_user';
   protected $primaryKey           = 'id_user';
   protected $useAutoIncrement     = true;
   protected $allowedFields        = ['nama', 'nik', 'id_jabatan', 'id_witel', 'pass', 'creat_at'];

   function FilterNik($nik)
   {
      $query = $this->db->query("SELECT * FROM tbl_user WHERE nik='$nik'");
      return $query->getResultArray();
   }

   function FilterIdUser($id_user)
   {
      $query = $this->db->query("SELECT tbl_user.id_user, tbl_user.nama, tbl_user.nik, tbl_user.pass, tbl_jabatan.jabatan, tbl_witel.id_witel, tbl_witel.witel FROM tbl_user INNER JOIN tbl_jabatan ON tbl_jabatan.id_jabatan=tbl_user.id_jabatan INNER JOIN tbl_witel ON tbl_witel.id_witel=tbl_user.id_witel WHERE tbl_user.id_user='$id_user'");
      return $query->getResultArray();
   }

   function FilterJabatan($nik, $jabatan)
   {
      $query = $this->db->query("SELECT * FROM tbl_user WHERE nik='$nik' AND id_jabatan='$jabatan'");
      return $query->getResultArray();
   }

   function FilterPassword($nik, $password)
   {
      $query = $this->db->query("SELECT * FROM tbl_user WHERE nik='$nik' AND pass='$password'");
      return $query->getResultArray();
   }
}
