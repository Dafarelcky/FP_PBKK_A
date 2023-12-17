<div class="container-fluid">
  <table class="table table-bordered">
    <tr>
      <th>No.</th>
      <th>Nama Barang</th>
      <th>Harga</th>
      <th>Stok</th>
      <th colspan="3">Aksi</th>
    </tr>

    <?php 
    $no = 1;
    foreach ($barang as $brg) : ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $brg->nama_brg ?></td>
        <td>Rp<?php echo number_format($brg->harga_jual, 0, ',', '.')?></td>
        <td><?php echo $brg->stok ?></td>
        <td>
        <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
        </td>
      </tr> 
        <!-- <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top" alt="..."> -->
      

    <?php endforeach; ?>
  </div>
</div>