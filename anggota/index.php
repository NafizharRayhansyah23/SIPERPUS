<?php
include '../koneksi.php';

$sql = ("SELECT * FROM anggota ORDER BY id_anggota");

$res = mysqli_query($kon, $sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)) {
    $anggota[] = $data;
}

include '../aset/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        </div>
    </div>
</div>
<div class="card">
  <div class="card-header">
    <h2 class="card-title"> <i class="fas fa-user"></i> </i> Data Anggota</h2>
  </div>
  <div class="card-body">
    <table class="table table-hover">


    <thead class="thead-dark">
       <tr>
       <th scope="col">NO</th>
       <th scope="col">NAMA</th>
       <th scope="col">KELAS</th>
       <th scope="col">TELP</th>
       <th scope="col">USERNAME</th>
      <th scope="col">AKSI</th>
       </tr>
       <?php


        ?>
    </thead>
<tbody>
  <?php
    $no = 1;
    foreach ($anggota as $p ) { ?>

    <tr>
        <th scope="row"><?= $no ?></th>
        <td><?= $p['nama'] ?></th>
        <td><?= $p['kelas'] ?></th>
        <td><?= $p['telp'] ?></th>
          <td><?= $p['username'] ?></th>

        <td>
          <a href="detail.php?id_anggota=<?php echo $p['id_anggota']; ?>" class="badge badge-success">Detail</a>
          <a href="edit.php?id_anggota=<?php echo $p['id_anggota']; ?>" class="badge badge-warning">Edit</a>
          <a href="hapus.php?id_anggota=<?php echo $p['id_anggota']; ?>" class="badge badge-danger">Hapus</a>
        </td>
      </tr>

<?php
    $no++;
}
?>
<center>
<a href="tambah.php" class="badge badge-primary">Tambah Anggota</a>
</center>
</tbody>
</table>
  </div>
</div>

<?php
include '../aset/footer.php';
?>
