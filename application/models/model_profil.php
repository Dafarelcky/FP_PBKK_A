<?php

class Model_profil extends CI_Model
{
  public function tampil_data()
  {
    return $this->db->get('tb_profil');
  }

  public function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

}
