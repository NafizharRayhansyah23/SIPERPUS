<?php
session_start();

if(!(isset($_SESSION['id_petugas'])))
{
    header("Location: http://localhost/siperpus/login/index.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>SiPERPUS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="http://localhost/siperpus/aset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/siperpus/aset/fontawesome/css/all.min.css">


</head>
<body>




   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <i class="fas fa-book-reader"></i>
     <a class="navbar-brand" href="#"><i class="fas fa-book-reader text-white mr-2"></i>Siperpus</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
     aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
         <div class="navbar-nav">
           <a class="nav-item nav-link"  href="http://localhost/siperpus/index.php">Dashboard</a>
   <a href="buku/index.php "class="nav-item nav-link">Buku</a>
   <a class="nav-item nav-link" href="anggota/index.php">Anggota</a>
   <a class="nav-item nav-link" href="http://localhost/siperpus/tranksaksi/index.php">Peminjaman</a>
   <a class="nav-item nav-link" href="http://localhost/siperpus/login/logout.php">Logout</a>

         </div>
     </div>



   </nav>
   <script src="http://localhost/siperpus/aset/jquery.js"></script>
   <script src="http://localhost/siperpus/aset/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
