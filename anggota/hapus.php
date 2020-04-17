<?php
session_start();

$kon = mysqli_connect("localhost", "root", "", "siperpus");


$id = $_GET['id_anggota'];

$query = mysqli_query($kon, "DELETE FROM anggota where id_anggota=$id");
// var_dump($query);

if ($query>0) {
  echo "
  <script>
  alert('DATA BERHASIL DIHAPUS');
  document.location.href = 'index.php';
  </script>";
}
 ?>
