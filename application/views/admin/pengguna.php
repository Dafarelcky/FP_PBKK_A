<div class="container-fluid">
  <table class="table table-bordered">
    <tr>
      <th>No.</th>
      <th>Nama Pengguna</th>
      <th>Username</th>
      <th>Password</th>
      <th colspan="3">Aksi</th>
    </tr>

    <?php
    $no = 1;
    foreach ($pengguna as $pgn) : ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $pgn->nama ?></td>
        <td><?php echo $pgn->username ?></td>
        <td><?php echo $pgn->password ?></td>
        <td>
          <?php echo anchor('admin/pengguna/edit/' . $pgn->id, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?>
        </td>
        <td>
          <?php echo anchor('admin/pengguna/hapus/' . $pgn->id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>