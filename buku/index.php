<?php
include '../koneksi.php';

$sql = ("SELECT * FROM buku ORDER BY judul");

$res = mysqli_query($kon, $sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)) {
    $buku[] = $data;
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
    <h2 class="card-title"> <i class="fas fa-book"></i> </i> Data Buku</h2>
  </div>
  <div class="card-body">
    <table class="table table-hover">


    <thead class="thead-dark">
       <tr>
       <th scope="col">NO</th>
       <th scope="col">JUDUL</th>
       <th scope="col">PENERBIT</th>
       <th scope="col">PENGARANG</th>
       <th scope="col">RINGKASAN</th>
       <th scope="col">COVER</th>
       <th scope="col">STOK</th>
       <th scope="col">KATEGORI</th>
       <th scope="col">Aksi</th>
       </tr>
       <?php


        ?>
    </thead>
<tbody>
  <?php
    $no = 1;
    foreach ($buku as $p ) { ?>

    <tr>
        <th scope="row"><?= $no ?></th>
        <td><?= $p['judul'] ?></th>
          <td><?= $p['penerbit'] ?></th>
        <td><?= $p['pengarang'] ?></th>
          <td><?= $p['ringkasan'] ?></th>
            <td><?= $p['cover'] ?></th>
        <td><?= $p['stok'] ?></th>
          <td><?= $p['id_kategori'] ?></th>

        <td>
          <a href="detail.php?id_buku=<?= $p['id_buku']; ?>" class="badge badge-success">Detail</a>
          <a href="edit.php?id_buku=<?= $p['id_buku']; ?>" class="badge badge-warning">Edit</a>
          <a href="hapus.php?id_buku=<?php echo $p['id_buku']; ?>" class="badge badge-danger">Hapus</a>

        </td>
    </tr>
    <center>
<a href="tambah.php" class="badge badge-primary">Tambah Buku</a>
</center>
<?php
    $no++;
}
?>

</tbody>
</table>
  </div>
</div>

<?php
include '../aset/footer.php';
?>
