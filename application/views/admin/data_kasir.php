<div class="container-fluid">
  <table class="table table-bordered">
    <tr>
      <th>No.</th>
      <th>Nama Kasir</th>
      <th>Username</th>
      <th>Password</th>
      <th colspan="2">Aksi</th>
    </tr>

    <?php
    $no = 1;
    foreach ($kasir as $ksr) : ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $ksr->nama ?></td>
        <td><?php echo $ksr->username ?></td>
        <td><?php echo $ksr->password ?></td>
        <td>
          <?php echo anchor('admin/data_kasir/edit/' . $ksr->id, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?>
        </td>
        <td>
          <?php echo anchor('admin/data_kasir/hapus/' . $ksr->id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>
