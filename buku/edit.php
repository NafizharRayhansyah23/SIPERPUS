<?php
include '../koneksi.php';
include '../aset/header.php';
$id=$_GET['id_buku'];
$sql= mysqli_query($kon,"SELECT * FROM buku WHERE id_buku=$id");
$query = mysqli_query($kon, "SELECT * FROM kategori");

if (isset($_POST['simpan'])){
  $judul = $_POST['judul'];
  $penerbit = $_POST['penerbit'];
$pengarang = $_POST['pengarang'];
$ringkasan = $_POST['ringkasan'];
$cover = $_POST['cover'];
$stok = $_POST['stok'];
$id_kategori = $_POST['id_kategori'];

$persib = "UPDATE  buku SET judul='$judul', penerbit='$penerbit', pengarang='$pengarang', ringkasan='$ringkasan',
cover='$cover', stok='$stok', id_kategori='$id_kategori' WHERE id_buku='$id'";

// $kategori = mysqli_fetch_assoc($query);
$res = mysqli_query($kon, $persib);
$count = mysqli_affected_rows($kon);


if($count>0) {
  echo "
<script>
alert('Data Berhasil Diedit');
document.location.href='index.php';
</script>
  ";
}
	}

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>TAMBAH DATA BUKU</title>
   </head>
   <body>
     <div class="container">
       <div class="row mt-4">
         <div class="col-md">
           <center>
             <div class="card" style="width: 100%;">
               <div class="card-header" style="width: 100%;">
                 <h2 class="card-title"><i class="fas fas fa-book"></i>Tambah Data buku</h2>
               </div>
               <div class="card-body">
                 <form  action="" method="post">
                   <table class="table">
                     <?php
while ($buku = mysqli_fetch_assoc($sql)):
                      ?>
                     <tr>
                       <td>judul</td>
                       <td><input type="text" name="judul" value="<?php echo $buku['judul']; ?>"></td>
                     </tr>
                     <tr>
                       <td>penerbit</td>
                       <td><input type="text" name="penerbit" value="<?php echo $buku['penerbit']; ?>"></td>
                     </tr>
                     <tr>
                       <td>pengarang</td>
                       <td><input type="text" name="pengarang" value="<?php echo $buku['pengarang']; ?>"></td>
                     </tr>
                     <tr>
                       <td>ringkasan</td>
                       <td><textarea name="ringkasan" value="<?php echo $buku['ringkasan']; ?>"></textarea></td>
                     </tr>
                     <tr>
                       <td>cover</td>
                       <td><input type="file" name="cover" value="<?php echo $buku['cover']; ?>"></td>
                     </tr>
                     <tr>
                       <td>stok</td>
                       <td><input type="number" name="stok" value="<?php echo $buku['stok']; ?>"></td>
                     </tr>
                     <?php
endwhile;
                      ?>
                     <tr>
                <td>Kategori</td>
                <td>
                  <select style="width: 200px" name="id_kategori">
                    <option value="">-- Pilih Kategori --</option>
                    <?php
                      while ($kategori = mysqli_fetch_assoc($query)):
                    ?>
                    <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['kategori']; ?></option>
                    <?php
                      endwhile;
                    ?>
                  </select>
                </td>
              </tr>
                     <tr>
                       <th></th>
                       <th><input type="submit" class="btn btn-primary" name="simpan" value="simpan"></th>
                     </tr>

                   </table>
                 </form>

               </div>
             </div>

         </div>

       </div>

     </div>

   </body>
 </html>
 <?php
include '../aset/footer.php';
  ?>
