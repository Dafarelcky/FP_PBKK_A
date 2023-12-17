<?php

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    if ($this->session->userdata('role_id') != '1' && $this->session->userdata('role_id') != '3') {
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
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/dashboard', $data);
    $this->load->view('templates_admin/footer');
  }
}