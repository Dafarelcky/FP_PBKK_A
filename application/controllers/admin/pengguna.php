<?php

class pengguna extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    if ($this->session->userdata('role_id') != '1') {
        $this->session->set_flashdata('alert_message', "Hanya Admin Yang Boleh Akses!");
      redirect('admin/dashboard');
    }
  }
  public function index()
  {
    $data["pengguna"] = $this->model_auth->pengguna()->result();
    $this->load->view("templates_admin/header");
    $this->load->view("templates_admin/sidebar");
    $this->load->view("admin/pengguna", $data);
    $this->load->view("templates_admin/footer");
  }

  public function tambah_aksi()
  {
    $nama_brg = $this->input->post("nama_brg");
    $keterangan = $this->input->post("keterangan");
    $kategori = $this->input->post("kategori");
    $harga = $this->input->post("harga");
    $stok = $this->input->post("stok");
    $gambar = $_FILES["gambar"]["name"];
    if ($gambar = '') {
    } else {
      $config['upload_path'] = './uploads';
      $config['allowed_types'] = 'jpg|jpeg|png|gif';

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('gambar')) {
        echo "Gambar gagal diupload!";
      } else {
        $gambar = $this->upload->data('file_name');
      }
    }
    $data = array(
      'nama_brg' => $nama_brg,
      'keterangan' => $keterangan,
      'kategori' => $kategori,
      'harga' => $harga,
      'stok' => $stok,
      'gambar' => $gambar
    );

    $this->model_barang->tambah_barang($data, 'tb_barang');
    redirect('admin/data_barang/index');
  }

  public function edit($id)
  {
    $where = array('id' => $id);
    $data['pengguna'] = $this->model_auth->edit_kasir($where, 'tb_user')->result();
    $this->load->view("templates_admin/header");
    $this->load->view("templates_admin/sidebar");
    $this->load->view("admin/edit_pengguna", $data);
    $this->load->view("templates_admin/footer");
  }

  public function update()
  {
    $id = $this->input->post("id");
    $nama = $this->input->post("nama");
    $username = $this->input->post("username");
    $password = $this->input->post("password");

    $data = array(
      'id' => $id,
      'nama' => $nama,
      'username' => $username,
      'password' => $password
    );

    $where = array(
      'id' => $id
    );

    $this->model_auth->update_data($where, $data, 'tb_user');
    redirect('admin/pengguna/index');
  }

  public function hapus($id)
  {
    $where = array('id_brg' => $id);
    $this->model_barang->hapus_data($where, 'tb_barang');
    redirect('admin/data_barang/index');
  }

  public function detail($id_brg)
  {
    $data['barang'] = $this->model_barang->detail_brg($id_brg);
    $this->load->view("templates_admin/header");
    $this->load->view("templates_admin/sidebar");
    $this->load->view("admin/detail_barang", $data);
    $this->load->view("templates_admin/footer");
  }
}
