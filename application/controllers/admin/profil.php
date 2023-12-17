<?php

class profil extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    if ($this->session->userdata('role_id') == '2' ) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Anda belum login!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </div>');
      redirect('auth/login');
    }
  }
  public function index()
  {
    $data["profil"] = $this->model_profil->tampil_data()->result();
    $this->load->view("templates_admin/header");
    $this->load->view("templates_admin/sidebar");
    $this->load->view("admin/profil", $data);
    $this->load->view("templates_admin/footer");
  }

  public function update()
  {
    $nama_toko = $this->input->post("nama_toko");
    $nama_pemilik = $this->input->post("nama_pemilik");
    $no_telepon = $this->input->post("no_telepon");
    $alamat = $this->input->post("alamat");

    $data = array(
      'nama_toko' => $nama_toko,
      'nama_pemilik' => $nama_pemilik,
      'no_telepon' => $no_telepon,
      'alamat' => $alamat
    );

    $where = array(
        'no_telepon' => $no_telepon
    );

    $this->model_profil->update_data($where, $data, 'tb_profil');
    redirect('admin/profil/index');
  }
}
