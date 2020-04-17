<?php
include '../koneksi.php';
include '../aset/header.php';
$id=$_GET['id_anggota'];
$sql= mysqli_query($kon,"SELECT * FROM anggota WHERE id_anggota=$id");
// $query = mysqli_query($kon, "SELECT * FROM kategori");

if (isset($_POST['simpan'])){
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
$telp = $_POST['telp'];
$username = $_POST['username'];
$password = $_POST['password'];


$persib = "UPDATE  anggota SET nama='$nama', kelas='$kelas', telp='$telp', username='$username',
password='$password' WHERE id_anggota='$id'";

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
     <title>EDIT DATA ANGGOTA</title>
   </head>
   <body>
     <div class="container">
       <div class="row mt-4">
         <div class="col-md">
           <center>
             <div class="card" style="width: 100%;">
               <div class="card-header" style="width: 100%;">
                 <h2 class="card-title"><i class="fas fas fa-book"></i>EDIT DATA Anggota</h2>
               </div>
               <div class="card-body">
                 <form  action="" method="post">
                   <table class="table">
                     <?php
while ($anggota = mysqli_fetch_assoc($sql)):
                      ?>
                     <tr>
                       <td>nama</td>
                       <td><input type="text" name="nama" value="<?php echo $anggota['nama']; ?>"></td>
                     </tr>
                     <tr>
                       <td>kelas</td>
                       <td><input type="text" name="kelas" value="<?php echo $anggota['kelas']; ?>"></td>
                     </tr>
                     <tr>
                       <td>telp</td>
                       <td><input type="text" name="telp" value="<?php echo $anggota['telp']; ?>"></td>
                     </tr>
                     <tr>
                       <td>username</td>
                       <td><input name="username" value="<?php echo $anggota['username']; ?>"></td>
                     </tr>
                     <tr>
                       <td>password</td>
                       <td><input type="password" name="password" value="<?php echo $anggota['password']; ?>"></td>
                     </tr>
                     <tr>

                     <!-- <?php
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
              </tr> -->
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
