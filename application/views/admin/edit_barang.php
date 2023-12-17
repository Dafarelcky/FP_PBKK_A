<div class="container-fluid">
  <h3><i class="fas fa-edit"></i>Edit Data Barang</h3>
  <?php foreach ($barang as $brg) : ?>

    <form action="<?php echo base_url() . 'admin/data_barang/update/' . $brg->id_brg ?>" method="post">

      <div class="for-group mb-2">
        <label>Nama Barang</label>
        <input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
      </div>

      <div class="for-group mb-2">
        <label>Harga Beli</label>
        <input type="int" name="harga_beli" class="form-control" value="<?php echo $brg->harga_beli ?>">
      </div>

      <div class="for-group mb-2">
        <label>Harga Jual</label>
        <input type="int" name="harga_jual" class="form-control" value="<?php echo $brg->harga_jual ?>">
      </div>

      <div class="for-group mb-2">
        <label>Stok</label>
        <input type="int" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
      </div>

      <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

    </form>
  <?php endforeach; ?>
</div>