<?php
session_start();
include "./config/connection.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="navbar-hide.css">
   <title>LAYANAN PENGADUAN MASYARAKAT</title>
</head>

<body>
   
<nav class="navbar navbar-expand-lg navbar-fixed-top navbar-light bg-light shadow-lg p-3 mb-5 bg-body rounded ">
         <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <a class="navbar-brand fw-bold text-dark " href="index.php" >LAYANAN PENGADUAN MASYARAKAT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a class="nav-link" aria-current="page" href="#"></a>
                  <li class="nav-item">
                     <a class="nav-link" aria-current="page" href="#"></a>
                  <li class="nav-item">
                     <a class="nav-link" aria-current="page" href="#"></a>
               </ul>
            </div>
         </div>
      </nav> 


   <div class="container col-lg-5 mt-5">
   <img src="asset/logo-home-round.png" alt="" class="imglogo position-relative top-0 start-50 translate-middle w-25 mt-5">
   <h1 class="text-center mb-5">Masuk Akun Anda</h1>
      <form action="" method="POST">
         <div class="mb-3 ">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="fusername" placeholder="Masukkan Username Anda">
         </div>
         <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="fpassword" placeholder="Masukkan Password Anda">
         </div>
         <div>
            <button class="btn btn-success" type="submit" name="fmasuk">Masuk</button>
            <span>Belum Memiliki Akun? </span> <a style="text-decoration: none" href="form_register.php">Daftar</a>
         </div>
      </form>
      <?php
      if (isset($_POST['fmasuk'])) {

         $username = $_POST['fusername'];
         $password = $_POST['fpassword'];
         try {
            $query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$username' and password = md5('$password') ");
            $cek = mysqli_num_rows($query);
            if ($cek == 1) {
               $_SESSION['userweb'] = $username;
               header("location:form_lapor.php");
               exit;
            } else {
               echo '<div class="mt-2 alert alert-danger  alert-dismissible fade show" role="alert">
               <strong>User Name dan Password Salah</strong> Teliti kembali!
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>';
            }
         } catch (\Throwable $th) {
            echo $th;
         }
      }
      ?>
   </div>
</body>

</html>
