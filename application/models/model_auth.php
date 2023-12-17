<?php

class Model_auth extends CI_Model
{
  public function cek_login()
  {
    $username = set_value('username');
    $password = set_value('password');

    $result = $this->db->where('username', $username)
      ->where('password', $password)
      ->limit(1)
      ->get('tb_user');

    if ($result->num_rows() > 0) {
      return $result->row();
    } else {
      return array();
    }
  }

  public function edit_kasir($where, $table)
  {
    return $this->db->get_where($table, $where);
  }

  public function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  public function kasir(){
    return $this->db->where('role_id', 3)
    ->get('tb_user');
  }
  public function pengguna(){
    return $this->db->where('role_id', 2)
    ->get('tb_user');
  }
}
