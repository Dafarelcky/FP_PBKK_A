<div class="container-fluid">
  <h3><i class="fas fa-edit"></i>Profil Toko</h3>
  <?php foreach ($profil as $prf) : ?>

    <form action="<?php echo base_url() . 'admin/profil/update' ?>" method="post">

      <div class="for-group mb-2">
        <label>Nama Toko</label>
        <input type="text" name="nama_toko" class="form-control" value="<?php echo $prf->nama_toko ?>">
      </div>

      <div class="for-group mb-2">
        <label>Nama Pemilik</label>
        <input type="text" name="nama_pemilik" class="form-control" value="<?php echo $prf->nama_pemilik ?>">
      </div>

      <div class="for-group mb-2">
        <label>No Telepon</label>
        <input type="int" name="no_telepon" class="form-control" value="<?php echo $prf->no_telepon ?>">
      </div>

      <div class="for-group mb-2">
        <label>Alamat</label>
        <input type="int" name="alamat" class="form-control" value="<?php echo $prf->alamat ?>">
      </div>


      <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

    </form>
  <?php endforeach; ?>
</div>