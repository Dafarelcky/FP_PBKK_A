<style>
  .navbar {
    background-color: #5C8374; 
  }

  .fas {
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
          <a class="navbar-brand text-light font-weight-bold" href="<?php echo base_url(); ?>">
            <span class="nama-web">IKWAN</span>
          </a>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="navbar text-light">
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <?php
                    $keranjang = '<i class="fas fa-shopping-cart" style="color: white;"></i> <span style="color: white;">' . $this->cart->total_items() . ' items</span>';
                    ?>
                  <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>
                </li>
              </ul>
              <div class="topbar-divider d-none d-sm-block"></div>
              <ul class="na navbar-nav navbar-right">
                <?php if ($this->session->userdata('username')) { ?>
                  <li>
                    <i class="fas fa-w fa-user text-light"></i>
                    <span><?php echo $this->session->userdata('username') ?></span>
                  </li>
                  <li class="ml-2"><?php echo anchor('auth/logout', '<span style="color: white;">Logout</span>') ?></li>
                <?php } else { ?>
                  <li><?php echo anchor('auth/login', 'Login'); ?></li>
                <?php } ?>
              </ul>
            </div>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</body>