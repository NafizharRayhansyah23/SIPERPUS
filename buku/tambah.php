<?php
include '../koneksi.php';
$query = mysqli_query($kon, "SELECT * FROM kategori");
include '../aset/header.php';

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
                 <form  action="proses-tambah.php" method="post">
                   <table class="table">
                     <tr>
                       <td>judul</td>
                       <td><input type="text" name="judul"></td>
                     </tr>
                     <tr>
                       <td>penerbit</td>
                       <td><input type="text" name="penerbit"></td>
                     </tr>
                     <tr>
                       <td>pengarang</td>
                       <td><input type="text" name="pengarang"></td>
                     </tr>
                     <tr>
                       <td>ringkasan</td>
                       <td><textarea name="ringkasan"></textarea></td>
                     </tr>
                     <tr>
                       <td>cover</td>
                       <td><input type="file" name="cover"></td>
                     </tr>
                     <tr>
                       <td>stok</td>
                       <td><input type="number" name="stok"></td>
                     </tr>
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
