<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAYANAN PENGADUAN MASYARAKAT</title>
    <link rel="icon" href="asset/logo-home-round.ico" type="image/ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg p-3 bg-body rounded fixed-top">
      <div class="container-fluid">
         <a class="navbar-brand" href="#">
            <a class="navbar-brand fw-bold text-dark fs-5" href="#">LAYANAN PENGADUAN MASYARAKAT</a>
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
    <!-- NAVBAR -->

    <!-- HERO -->
    <div class="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline my-auto">
                    <div class="judulhero">
                    <h1>BERANI, JUJUR, HEBAT</h1>
                    <p>Menampung partisipasi masyarakat baik dalam bentuk keluhan, informasi, maupun saran pada proses pembangunan kota yang dilaksanakan oleh Pemkot Surabaya</p>
                    <a class="btn btn-danger" href="form_lapor.php"> BUAT LAPORAN LANGSUNG</a>
                    <a class="btn btn-warning" href="sign-in.php">MASUK</a>
                    </div>
                </div>
                <img src="asset/logo-home.png" alt="" class="imglogo position-absolute top-50 end-0 translate-middle w-25">
            </div>
        </div>
    </div>
    <!-- HERO -->
    
    <!-- TIMELINE -->
    <div class="timeline">
    <div class="container">                      
    <div class="row text-center justify-content-center mb-5">
        <div class="col-xl-6 col-lg-8">
            <h2 class="font-weight-bold">ALUR SISTEM PELAPORAN</h2>
            <p class="text-muted"></p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2003">
                        <div class="inner-circle"></div>
                        <p class="h6 mt-3 mb-1">1</p>
                        <p class="h6 text-muted mb-0 mb-lg-0">Buat Akun</p>
                    </div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2004">
                        <div class="inner-circle"></div>
                        <p class="h6 mt-3 mb-1">2</p>
                        <p class="h6 text-muted mb-0 mb-lg-0">Masukkan Akun Yang Terdaftar</p>
                    </div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2005">
                        <div class="inner-circle"></div>
                        <p class="h6 mt-3 mb-1">3</p>
                        <p class="h6 text-muted mb-0 mb-lg-0">Buat Laporan</p>
                    </div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2010">
                        <div class="inner-circle"></div>
                        <p class="h6 mt-3 mb-1">4</p>
                        <p class="h6 text-muted mb-0 mb-lg-0">Monitor Laporan Anda</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <!-- TIMELINE -->

    <!-- TOTALAN -->
    <section id="counter" class="sec-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="count"> <span class="fa fa-smile-o"></span>
						<p class="number">XXXX</p>
						<h4>TOTAL PENGADUAN</h4> </div>
				</div>
			</div>
            <div class="row mt-10">
				<div class="col-md-6">
					<div class="count"> <span class="fa fa-smile-o"></span>
						<p class="number">XXXX</p>
						<h4>SUDAH DIATASI</h4> </div>
				</div>
				<div class="col-md-6">
					<div class="count"> <span class="fa fa-smile-o"></span>
						<p class="number">XXX</p>
						<h4>SUDAH TERKONFIRMASI</h4> 
                    </div>
				</div>
			</div>
		</div>
	</section>
    <!-- TOTALAN -->

    <!--FOOTER -->
    <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; Kelompok 20 JWD ITS KOMINFO 2022</small>
    </div>
  </footer>
    
</body>
</html>