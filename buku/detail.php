<?php
include '../aset/header.php';

include '../koneksi.php';
$id_buku = $_GET['id_buku'];

$sql = "SELECT * FROM buku WHERE  id_buku = $id_buku";
$res = mysqli_query($kon, $sql);
$detail = mysqli_fetch_assoc($res);

?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-7">
            <h2>Detail Buku</h2>
            <hr class="bg-light">
                <table class="table table-bordered">

                  <tr>
                        <td><strong>judul</strong></td>
                        <td><?= $detail['judul'] ?></td>
                  </tr>
                  <tr>
                        <td><strong>penerbit</strong></td>
                        <td><?= $detail['penerbit'] ?></td>
                  </tr>
                  <tr>
                        <td><strong>pengarang</strong></td>
                        <td><?= $detail['pengarang'] ?></td>
                  </tr>
                  <tr>
                        <td><strong>ringkasan</strong></td>
                        <td><?= $detail['ringkasan'] ?></td>
                  </tr>
                  <tr>
                        <td><strong>cover</strong></td>
                        <td><?= $detail['cover'] ?></td>
                  </tr>
                  <tr>
                        <td><strong>stok</strong></td>
                        <td><?= $detail['stok'] ?></td>
                  </tr>
                  <tr>
                        <td><strong>kategori</strong></td>
                        <td><?= $detail['id_kategori'] ?></td>
                  </tr>



                </table>
        </div>
    </div>
</div>




<?php
include '../aset/footer.php';
?>
