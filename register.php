<?php
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
      <title>LAYANAN PENGADUAN MASYARAKAT</title>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg p-3 mb-5 bg-body rounded">
         <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <a class="navbar-brand fw-bold text-dark f-" href="index.php" >LAYANAN PENGADUAN MASYARAKAT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
                  <li class="nav-item">
                     <a class="nav-link" aria-current="page" href="#">Tutorial</a>
                  <li class="nav-item">
                     <a class="nav-link" aria-current="page" href="#">Tentang Kami</a>
               </ul>
            </div>
         </div>
      </nav>
      <div class="container-fluid">
         <div class="container text-center">
            <h1>LAYANAN PENGADUAN MASYARAKAT</h1>
            <p>Ikuti cara-cara pendaftaran dengan baik dan benar.</p>
         </div>
      </div>
      <div class="container-fluid">
         <div class="container">
            <div class="row">
               <div class="col-18">
                  <h1></h1>
               </div>
               <div class="row">
                  <div class="col-lg-5 py-5">
                     <h1>1. Buat Akun</h1>
                     <div class="col-12">
                        <label for="inputEmail4" class="form-label">Buat Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Buat Username Baru">
                     </div>
                     <div class="col-12">
                        <label for="inputPassword4" class="form-label">Buat Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Buat password baru">
                     </div>
                  </div>
                  <div class="col-lg-6 py-5 p-lg-5">
                     <h1>2. Lengkapi Identitas Anda</h1>
                     <div class="col-12">
                        <label for="inputEmail4" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namaLengkap" placeholder="Masukkan Nama Lengkap">
                     </div>
                     <div class="col-12">
                        <label for="inputPassword4" class="form-label">NIK</label>
                        <input type="text" class="form-control" id="inputNIK" placeholder="Masukkan NIK">
                     </div>
                     <label for="inputEmail4" class="form-label">E-Mail</label>
                     <input type="email" class="form-control" id="inputEmail4" placeholder="Masukkan Email">
                     <div class="col-12">
                        <label for="inputEmail4" class="form-label">No. Telp</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Masukkan Nomer Telefon Aktif">
                     </div>
                     <div class="col-12">
                        <label for="alamatLengkap" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamatLengkap" rows="3" placeholder="Masukkan Alamat Lengkap"></textarea>
                     </div>
                  </div>
                  <div class="col-lg-5 py-5">
                     <h1>3. Buat Laporan</h1>
                     <div class="col-12">
                        <label for="judulLaporan" class="form-label">Judul Laporan</label>
                        <input type="text" class="form-control" id="laporan" placeholder="Masukkan Judul Laporan">
                     </div>
                     <div class="col-12">
                        <label for="laporanLengkap" class="form-label">Tulis Laporan Lengkap</label>
                        <textarea class="form-control" id="laporanLengkap" rows="3" placeholder="Tulis Laporan Secara Lengkap"></textarea>
                     </div>
                     <div class="col-12">
                        <label for="tempatKejadian" class="form-label">Tempat Kejadian</label>
                        <input type="text" class="form-control" id="tempatKejadian" placeholder="Masukkan Tempat Kejadian Berada">
                     </div>
                     <div class="col-12">
                        <label for="instansi" class="form-label">Instansi Tujuan</label>
                        <input type="text" class="form-control" id="tempatKejadian" placeholder="Masukkan Instansi Tujuan">
                     </div>
                  </div>
                  <div class="d-grid gap-2 mb-2 pb-5">
                     <button class="btn btn-danger" type="button">LAPOR !</button>
                  </div>
               </div>
            </div>
         </form>
         <?php
            if(isset($_POST['save'])) {
               $username = mysqli_real_escape_string($koneksi, $_POST['username']);
               $email = mysqli_real_escape_string($koneksi, $_POST['email']);
               $password = mysqli_real_escape_string($koneksi, $_POST['password']);
               try {
                  $password = md5($password);
                  $koneksi->query("INSERT INTO tb_user VALUES (NULL, '$username', '$email', '$password', NULL, NOW(), NOW())");
                  echo "<script>alert('Data Berhasil ditambahkan')</script>";
               } catch (\Throwable $th) {
                  echo "<script>alert('Data gagal ditambahkan')</script>";
               }
            }
         
         ?>
      </div>
          <!--FOOTER -->
    <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; Kelompok 20 JWD ITS KOMINFO 2022</small>
    </div>
  </footer>
   </body>
</html>
