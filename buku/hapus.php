<?php
session_start();

$kon = mysqli_connect("localhost", "root", "", "siperpus");


$id_buku = $_GET['id_buku'];

$query = mysqli_query($kon, "DELETE FROM buku where id_buku=$id_buku");
// var_dump($query);

if ($query>0) {
  echo "
  <script>
  alert('DATA BERHASIL DIHAPUS');
  document.location.href = 'index.php';
  </script>";
}
 ?>
