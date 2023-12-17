<div class="container-fluid">
  <h3><i class="fas fa-edit"></i>Edit Data Kasir</h3>
  <?php foreach ($kasir as $ksr) : ?>

    <form action="<?php echo base_url() . 'admin/data_kasir/update' ?>" method="post">

      <div class="for-group mb-2">
        <label>ID Kasir</label>
        <input type="int" name="id" class="form-control" value="<?php echo $ksr->id ?>">
      </div>

      <div class="for-group mb-2">
        <label>Nama Kasir</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $ksr->nama ?>">
      </div>

      <div class="for-group mb-2">
        <label>Username</label>
        <input type="text" name="username" class="form-control" value="<?php echo $ksr->username ?>">
      </div>

      <div class="for-group mb-2">
        <label>Password</label>
        <input type="text" name="password" class="form-control" value="<?php echo $ksr->password ?>">
      </div>

      <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

    </form>
  <?php endforeach; ?>
</div>