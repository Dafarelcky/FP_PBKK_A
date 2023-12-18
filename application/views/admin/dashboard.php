<div class="container-fluid">
  <!-- Content Row -->
  <div class="row">
  <?php if ($this->session->flashdata('alert_message')): ?>
   <script>alert("Hanya Admin Yang Boleh Akses!")</script>
  <?php endif; ?>
    <!-- Earnings (Monthly) Card Example -->
    <!-- <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Earnings (Monthly)</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example 
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                Earnings (Annual)</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example 
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
              </div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                Pending Requests</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <?php foreach ($profil as $prf) : ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="card border-left-white shadow h-100 py-2 mx-auto">
        <div class="card-body">
        <div class="mx-auto">
        <h5 class="card-title">Profil Toko</h5>
        </div>
          <div class="form-group mb-2">
            <label>Nama Toko</label>
            <input type="text" name="nama_toko" class="form-control" value="<?php echo $prf->nama_toko ?>" readonly>
          </div>

          <div class="form-group mb-2">
            <label>Nama Pemilik</label>
            <input type="text" name="nama_pemilik" class="form-control" value="<?php echo $prf->nama_pemilik ?>" readonly>
          </div>

          <div class="form-group mb-2">
            <label>No Telepon</label>
            <input type="text" name="no_telepon" class="form-control" value="<?php echo $prf->no_telepon ?>" readonly>
          </div>

          <div class="form-group mb-2">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?php echo $prf->alamat ?>" readonly>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
    <div class="card border-left-white shadow h-100 py-2 mx-auto">
        <div class="card-body">
        <div class="mx-auto">
        <h5 class="card-title">User Sedang Login</h5>
        </div>
        
          <div class="form-group mb-2">
            <label>Nama :</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $this->session->userdata("nama") ?>" readonly>
          </div>

          <div class="form-group mb-2">
            <label>Username :</label>
            <input type="text" name="username" class="form-control" value="<?php echo $this->session->userdata("username") ?>" readonly>
          </div>

          <?php 
          $role  = '';
          $role_id = $this->session->userdata("role_id");
                if ($role_id == 1) {
                    // Code to execute for role_id 1 (admin)
                    $role = "Admin";
                } elseif ($role_id == 3) {
                    // Code to execute for role_id 2
                    $role = "Kasir";
                } 
          ?>
          
          <div class="form-group mb-2">
            <label>Role :</label>
            <input type="text" name="role_id" class="form-control" value="<?php echo $role ?>" readonly>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php endforeach; ?>

  <!-- Content Row -->
</div>