<div class="container-fluid">
  <h3><i class="fas fa-edit"></i>Edit Data Pengguna</h3>
  <?php foreach ($pengguna as $pgn) : ?>

    <form action="<?php echo base_url() . 'admin/pengguna/update' ?>" method="post">

      <div class="for-group mb-2">
        <label>ID Pengguna</label>
        <input type="int" name="id" class="form-control" value="<?php echo $pgn->id ?>">
      </div>

      <div class="for-group mb-2">
        <label>Nama Pengguna</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $pgn->nama ?>">
      </div>

      <div class="for-group mb-2">
        <label>Username</label>
        <input type="text" name="username" class="form-control" value="<?php echo $pgn->username ?>">
      </div>

      <div class="for-group mb-2">
        <label>Password</label>
        <input type="text" name="password" class="form-control" value="<?php echo $pgn->password ?>">
      </div>

      <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

    </form>
  <?php endforeach; ?>
</div>