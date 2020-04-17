<?php
include '../aset/header.php';

include '../koneksi.php';
$id = $_GET['id_anggota'];

$sql = "SELECT * FROM anggota WHERE  id_anggota = $id";
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
                        <td><strong>nama</strong></td>
                        <td><?= $detail['nama'] ?></td>
                  </tr>
                  <tr>
                        <td><strong>kelas</strong></td>
                        <td><?= $detail['kelas'] ?></td>
                  </tr>
                  <tr>
                        <td><strong>telp</strong></td>
                        <td><?= $detail['telp'] ?></td>
                  </tr>
                  <tr>
                        <td><strong>username</strong></td>
                        <td><?= $detail['username'] ?></td>
                  </tr>
                


                </table>
        </div>
    </div>
</div>




<?php
include '../aset/footer.php';
?>
