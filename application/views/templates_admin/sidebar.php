<style>
  .navbar {
    background-color: #5C8374; 
  }


  .nav-link .fas {
    margin-right: 8px;
  }
</style>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Topbar -->
      <nav class="navbar navbar-expand topbar mb-4 static-top shadow">

      <?php 
          $role  = '';
          $role_id = $this->session->userdata("role_id");
                if ($role_id == 1) {
                    // Code to execute for role_id 1 (admin)
                    $role = "ADMIN";
                } elseif ($role_id == 3) {
                    // Code to execute for role_id 2
                    $role = "KASIR";
                } 
       ?>
        <a class="navbar-brand text-light font-weight-bold" href="<?php echo base_url('admin/dashboard'); ?>">
          <span class="nama-web"><?php echo $role ?> IKWAN</span>
        </a>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
          <!-- Nav Item-->

          <li class="nav-item">
            <a class="nav-link text-light" href="<?php echo base_url('admin/data_barang') ?>">
              <i class="fas fa fa-dropbox text-light"></i>
              <span>Data Barang</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="<?php echo base_url('admin/data_kasir') ?>">
              <i class="fas fa fa-address-card text-light"></i>
              <span>Data Kasir</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-light" href="<?php echo base_url('admin/invoice') ?>">
              <i class="fas fa-w fa-file-invoice text-light"></i>
              <span>Transaksi Penjualan</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-light" href="<?php echo base_url('admin/pengguna') ?>">
              <i class="fas fa-w fa-user text-light"></i>
              <span>Manajemen Pengguna</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-light" href="<?php echo base_url('admin/profil') ?>">
              <i class="fas fa-w fa-building text-light"></i>
              <span>Profil Toko</span>
            </a>
          </li>

          <div class="topbar-divider d-none d-sm-block"></div>

          <ul class="na navbar-nav navbar text-light">
            <?php if ($this->session->userdata('username')) { ?>
              <li>
                <div>Selamat Datang, <?php echo $this->session->userdata('username') ?>!</div>
              </li>
              <li class="ml-2"><?php echo anchor('auth/logout', 'Logout') ?></li>
            <?php } else { ?>
              <li><?php echo anchor('auth/login', 'Login'); ?></li>
            <?php } ?>
          </ul>
          </div>
        </ul>

      </nav>