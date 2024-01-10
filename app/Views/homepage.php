<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title>Aquamarine</title>
  <link rel="shortcut icon" href="<?php echo base_url('template') ?>/assets/img/favicon.png">
  <link rel="stylesheet" href="<?php echo base_url('template') ?>/assets/css/plugins.css">
  <link rel="stylesheet" href="<?php echo base_url('template') ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url('template') ?>/assets/css/colors/pink.css">

  <style>
    .section-whitebg {
      background-color: #fff9fa; /* Set the background color */
      padding: 5px; /* Add some padding for better visibility */
      /* height: 18%; */
    }
    .bg-red-gsi {
      background-color: #ef001d; /* Set the background color */
    }
    .section-red {
      background-color: #ef001d; /* Set the background color */
      padding: 5px; /* Add some padding for better visibility */
      /* height: 18%; */
    }
    .custom-font-red {
      font-family: 'Poppins', sans-serif;
      color: #ef001d;
    }
    .custom-font {
      font-family: 'Poppins', sans-serif;
    }
    .custom-container {
      max-width: 2000px; /* Set your desired maximum width */
      margin-right: auto;
      margin-left: auto;
    }
    .li-gsi {
      list-style: none; /* Remove default list-style-type */
      background: url('<?php echo base_url('template') ?>/assets/img/gsi/checkgsi.png') no-repeat left center; /* Replace 'your-icon.png' with your image */
      padding-left: 30px; /* Adjust padding as needed */
    }

  </style>
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-gray">
      <nav class="navbar navbar-expand-lg navbar-light navbar-bg-light">
        <div class="container">
          <div class="navbar-collapse-wrapper bg-white d-flex flex-row flex-nowrap w-100 justify-content-between align-items-center">
            <div class="navbar-brand w-100">
              <a href=#page-top">
                <img src="<?php echo base_url('template') ?>/assets/img/LOGO GENOMIC SHRIMP UTAMA.png" srcset="./assets/img/logo-dark@2x.png 2x" alt="" />
              </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
              <div class="offcanvas-header d-lg-none">
                <h3 class="text-white fs-30 mb-0">Aquamarine</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="dropdown">Beranda</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="#" data-bs-toggle="dropdown">Produk</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="#" data-bs-toggle="dropdown">Testimoni</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="#" data-bs-toggle="dropdown">Tentang Kami</a>
                  </li>
                </ul>
                <!-- /.navbar-nav -->
                <div class="offcanvas-footer d-lg-none">
                  <div>
                    <!-- <nav class="nav social social-white mt-4">
                        <button class="btn btn-danger" href="#">Login</button>
                    </nav> -->
                    <!-- /.social -->
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                  </div>
                </div>
                <!-- /.offcanvas-footer -->
              </div>
              <!-- /.offcanvas-body -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other w-100 d-flex ms-auto ">
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- <li class="nav-item"> -->
                  <nav class="nav justify-content-end text-end">
                    <button class="btn btn-danger bg-red-gsi" href="#">Login</button>
                  </nav>
                  <!-- /.social -->
                <!-- </li> -->
                <li class="nav-item d-lg-none">
                  <button class="hamburger offcanvas-nav-btn"><span></span></button>
                </li>
              </ul>
              <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
          </div>
          <!-- /.navbar-collapse-wrapper -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
    </header>
    <!-- /header -->
    <!-- <section class="wrapper section-whitebg"> -->
      <!-- <div class="container pt-12 pt-md-14 pb-14 pb-md-16"> -->
      <div class="card shadow-md section-whitebg">
        <div class="row gy-10 gy-md-13 gy-lg-0 align-items-center">
          <div class="col-md-8 col-lg-5 d-flex position-relative mx-auto" data-cues="slideInDown" data-group="header">
            <div class="img-mask"><img src="<?php echo base_url('template') ?>/assets/img/gsi/Group 252.png" srcset="<?php echo base_url('template') ?>/assets/img/gsi/Group 252.png 2x" alt="" /></div>
            <div class="card shadow-lg position-absolute" style="bottom: 10%; right: 2%;">
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
          <div class="col-lg-6 offset-md-right-2 col-xl-6 text-center text-lg-end" data-cues="slideInDown" data-group="page-title" data-delay="600">
            <h1 class="display-1 mb-5 custom-font-red">Deteksi Dini Penyakit Udang</h1>
            <h1 class="display-1 mb-5 custom-font">Tingkatkan Profit Tambak <br>Udang Anda</h1>
            <p class="lead fs-23 lh-sm mb-7 px-md-10 px-lg-0 custom-font">Deteksi dini penyakit udang dibutuhkan untuk mengambil keputusan cepat: meningkatkan produksi budidaya tambak udang, mitigasi risiko penyakit udang dan mencegah kerugian bisnis. Teknologi diagnostik kami dapat mendeteksi penyakit udang secara akurat dan lebih cepat dari timbulnya gejala pada udang.</p>
            <div class="d-flex justify-content-center justify-content-lg-end align-self-flex-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
              <span></span>
              <span><a href="#" class="btn btn-lg btn-danger bg-red-gsi ">Kirim Sample</a></span>
            </div>
          </div>
          <div class="col-sm-1">
            <h1></h1>
          </div>
          <!--/column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    <!-- </section> -->
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container-fluid custom-container py-14 py-14 py-md-18 col-lg-10 ">
        <div class="row gx-lg-8 gx-xl-12  mb-10 text-center">
          
          <!--/column -->
          <!-- <div class="row col-lg-6"> -->
            <h2 class="display-4 mb-3 custom-font-red">Budidaya Tambak Udang</h2>
            <h2 class="display-4 mb-3 custom-font">Di Indonesia</h2>
            <p class="lead fs-20 mb-5 custom-font">Budidaya udang di Indonesia meningkat pesat dekade ini karena panjang garis pantai negara kepulauan, iklim tropis, dan fokus pemerintah di bidang maritim. Namun penyakit udang masih menjadi masalah utama, di samping turunnya harga jual dan naiknya biaya produksi.</p>
          <!-- </div> -->
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-6 text-center">
          <div class="col-md-6 col-lg-4">
            <img src="<?php echo base_url('template') ?>/assets/img/gsi/shrimp 01.png" class="img-fluid mw-100 mh-100" alt="" />
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4">
            <img src="<?php echo base_url('template') ?>/assets/img/gsi/shrimp 02.png" class="img-fluid mw-100 mh-100" alt="" />
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4">
            <img src="<?php echo base_url('template') ?>/assets/img/gsi/shrimp 03.png" class="img-fluid mw-100 mh-100" alt="" />
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container-fluid custom-container py-14 py-md-8 col-lg-10">
        <!--/.row -->
        <div class="card bg-white mb-15 col-md-7 col-lg-12">
          <div class="card-body p-0 pb-0">
            <div class="row">
              <div class="col-lg-6 pb-12 align-self-center ">
                <h2 class="display-4 h1 post-title mb-3 custom-font-red">Mengapa Anda Harus Deteksi Dini</h2>
                <h2 class="display-4 h1 post-title mb-3 custom-font">Penyakit Udang Anda?</h2>
                <p class="lead fs-20 mb-5 custom-font">Penyakit udang masih menjadi penyebab utama kerugian dan gagal panen di Indonesia.
                Maka, dibutuhkan deteksi penyakit untuk pembibitan (hatchery) Spesific Pathogen Free (SPF) dan budidaya tambak udang. Faktanya dengan <b>1x deteksi penyakit, 
                nilai produksi</b> udang bisa <b>meningkat > 50x lipat lebih besar</b> dari biaya pemeriksaannya.</p>
              </div>
              <!-- /column -->
              <div class="col-lg-6 pb-12 offset-md-0 align-self-end">
                <figure><img class="img-mask" src="<?php echo base_url('template') ?>/assets/img/gsi/why dok.png" srcset="./assets/img/gsi/why dok.png 2x" alt="" /></figure>
              </div>
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
          <!--/.card-body -->
        </div>
        
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <div class="card shadow-md section-red">
        <div class="row gy-10 gy-md-13 gy-lg-0 align-items-center">
          <div class="col-md-8 col-lg-5 d-flex position-relative mx-auto" data-cues="slideInDown" data-group="header">
            <div class="img-mask"><img src="<?php echo base_url('template') ?>/assets/img/gsi/covid19.png" srcset="<?php echo base_url('template') ?>/assets/img/gsi/covid19.png 2x" alt="" /></div>
            <div class="card shadow-lg position-absolute" style="bottom: 10%; right: 2%;">
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
          <div class="col-lg-6 offset-md-right-2 col-xl-6 text-center text-lg-end" data-cues="slideInDown" data-group="page-title" data-delay="600">
            <h1 class="display-1 mb-5 text-white">Kini Hadir GSI <br>untuk Mendeteksi Penyakit<br>Udang Anda!</h1>
            <p class="lead fs-23 lh-sm mb-7 px-md-10 px-lg-0 text-white">Berbasis teknologi genomika-molekuler yang dilakukan di dalam negeri, GSI memberikan layanan 24/7 dengan hasil yang cepat dan biaya terjangkau.</p>
          </div>
          <div class="col-sm-1">
            <h1></h1>
          </div>
          <!--/column -->
        </div>
        <!-- /.row -->
      </div>
  </div>
  <section class="wrapper bg-light justify-content-center">
    <div class="container-fluid custom-container py-14 py-md-18 col-lg-11">
      <div class="row gx-lg-8 gx-xl-12  mb-10 text-center justify-content-center">
        <!--/column -->
        <!-- <div class="row col-lg-6"> -->
          <h2 class="display-4 mb-3">
            <span class="custom-font">
              LAYANAN
            </span>
            <span class="custom-font-red">
              KAMI
            </span>
          </h2>
          <div class="col-lg-8">
            <p class="lead fs-20 mb-5 custom-font">Layanan kami berbasis teknologi genomika dan molekuler (RT-PCR) dalam mendeteksi penyakit udang dengan cepat, akurat, dan berkualitas tinggi. Hubungi kami untuk skema B2B.</p>
          </div>
        <!-- </div> -->
        <!--/column -->
      </div>
      <!--/.row -->
      <div class="row gx-md-8 gx-xl-10">
        <div class="col-lg-4 justify-content-center ">
          <div class="card">
            <div class="wrapper-border">
              <div class="card-body p-12 pb-0">
                <h3 class="display-4 mb-3 custom-font">Prime 5</h3>
                <p class="custom-font">Pemeriksaan premium yang dapat sekaligus mendeteksi IHHNV, virus terkecil yang berpotensi sebagai penyebab gagal panen akhir-akhir ini.</p>
              </div>
              <div class="card-body p-12 pt-0 pb-5">
                <h3 class="display-4 mb3 custom-font-red">Rp 1.250.000</h3>
                
              </div>
            </div>
            <!--/.card-body -->
            <div class="wrapper-border">
              <div class="card-body p-12 pt-5 pb-0">
                <h5 class="mb-3 custom-font">Mendeteksi:</h3>
              </div>
              <div class=" p-6 pt-0 pl-0">
                <ul>
                  <li class="custom-font li-gsi">IHHNV <span class="custom-font-red">- New</span></li>
                  <li class="custom-font li-gsi">AHPND</li>
                  <li class="custom-font li-gsi">IMNV</li>
                  <li class="custom-font li-gsi">WSSV</li>
                  <li class="custom-font li-gsi">EHP</li>
                </ul>
              </div>
              <div class="card-body col-md-12 p-12 pt-0 pb-8">
                <button type="button" href="#" class="btn btn-danger w-100 bg-red-gsi">Kirim Sample</button>
              </div>
            </div>
          </div>
          <!--/.card -->
        </div>
        <!-- /column -->
        <div class="col-lg-4 justify-content-center">
          <div class="card">
            <div class="wrapper-border">
              <div class="card-body p-12 pb-0">
                <h3 class="display-4 mb-3 custom-font">Prime 4</h3>
                <p class="custom-font">Pemeriksaan untuk mendeteksi 4 virus dan bakteri yang paling sering menginfeksi udang. Menjadi pilihan favorit penambak Indonesia.</p>
              </div>
              <div class="card-body p-12 pt-0 pb-5">
                <h4 class="">
                  <span class="text-decoration-line-through custom-font display-6 mb-3">Rp 1.000.000</span>
                  <span class="display-4 mb-3 custom-font-red">Rp 795.000</span>
                </h3>
                
              </div>
            </div>
            <!--/.card-body -->
            <div class="wrapper-border">
              <div class="card-body p-12 pt-5 pb-0">
                <h5 class=" mb-3 custom-font">Mendeteksi:</h3>
              </div>
              <div class=" p-6 pt-0 pl-0 pb-11">
                <ul>
                  <li class="custom-font li-gsi">AHPND</li>
                  <li class="custom-font li-gsi">IMNV</li>
                  <li class="custom-font li-gsi">WSSV</li>
                  <li class="custom-font li-gsi">EHP</li>
                </ul>
              </div>
              <div class="card-body col-md-12 p-12 pt-0 pb-8">
                <button type="button" href="#" class="btn btn-danger w-100 bg-red-gsi">Kirim Sample</button>
              </div>
            </div>
          </div>
          <!--/.card -->
        </div>
        <div class="col-lg-4">
          <div class="card">
            <div class="wrapper-border">
              <div class="card-body p-12 pb-6">
                <h3 class="display-4 mb-3 custom-font">Prime 3</h3>
                <p class="custom-font">Pemeriksaan untuk mendeteksi 3 virus utama pada aquaculture di Indonesia.</p>
              </div>
              <div class="card-body p-12 pt-0 pb-5">
                <h3 class="display-4 mb3 custom-font-red">Rp 750.000</h3>
              </div>
            </div>
            <!--/.card-body -->
            <div class="wrapper-border">
              <div class="card-body p-12 pt-5 pb-0">
                <h5 class=" mb-3 custom-font">Mendeteksi:</h3>
              </div>
              <div class=" p-6 pt-0 pl-0 pb-13">
                <ul>
                  <li class="custom-font li-gsi">IMNV</li>
                  <li class="custom-font li-gsi">WSSV</li>
                  <li class="custom-font li-gsi">EHP</li>
                </ul>
              </div>
              <div class="card-body col-md-12 p-12 pt-0 pb-8">
                <button type="button" href="#" class="btn btn-danger w-100 bg-red-gsi">Kirim Sample</button>
              </div>
            </div>
          </div>
          <!--/.card -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  
  <section class="wrapper bg-light justify-content-center">
    <div class="container-fluid custom-container py-14 py-md-2 col-lg-10">
      <div class="row gx-lg-8 gx-xl-12 mb-10 text-center justify-content-center">
        <!--/column -->
        <!-- <div class="row col-lg-6"> -->
          <h2 class="display-4 mb-3">
            <span class="custom-font">
              Patogen
            </span>
            <span class="custom-font-red">
              Penyakit Udang
            </span>
          </h2>
          <div class="col-lg-8">
            <p class="lead fs-20 mb-5 custom-font">Kemajuan teknologi genomik-molekuler dapat mendeteksi berbagai macam patogen penyebab penyakit udang.</p>
          </div>
        <!-- </div> -->
        <!--/column -->
      </div>
      <!--/.row -->
      <div class= gx-md-8 gx-xl-10">
        <!-- <div class="col-lg-4 justify-content-center "> -->
          <div class="">
            <img class="card-img-bottom" src="<?php echo base_url('template') ?>/assets/img/gsi/penyakit udang.png" srcset="<?php echo base_url('template') ?>/assets/img/gsi/penyakit udang.png 2x" alt="" />
          </div>
          <!--/.card -->
        <!-- </div> -->
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>

  <!-- /.content-wrapper -->
  <footer>
    <div class="container pt-14 pt-md-18 pb-7">
      <div class="card bg-soft-primary mb-8">
        <div class="card-body p-12">
          <div class="row gx-md-8 gx-xl-12 gy-10">
            <div class="col-lg-6">
              <img src="<?php echo base_url('template') ?>/assets/img/icons/lineal/email.svg" class="svg-inject icon-svg icon-svg-sm mb-4" alt="" />
              <h2 class="display-4 mb-3 pe-lg-10">If you like what you see, let's work together.</h2>
              <p class="lead pe-lg-12 mb-0">I bring rapid solutions to make the life of my clients easier. Have any questions? Reach out to me from this contact form and I will get back to you shortly.</p>
            </div>
            <!-- /column -->
            <div class="col-lg-6">
              <form class="contact-form needs-validation" method="post" action="./assets/php/contact.php" novalidate>
                <div class="messages"></div>
                <div class="row gx-4">
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input id="form_name" type="text" name="name" class="form-control border-0" placeholder="Jane" required="required" data-error="First Name is required.">
                      <label for="form_name">Name *</label>
                      <div class="valid-feedback"> Looks good! </div>
                      <div class="invalid-feedback"> Please enter your name. </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input id="form_email" type="email" name="email" class="form-control border-0" placeholder="jane.doe@example.com" required="required" data-error="Valid email is required.">
                      <label for="form_email">Email *</label>
                      <div class="valid-feedback"> Looks good! </div>
                      <div class="invalid-feedback"> Please provide a valid email address. </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-12">
                    <div class="form-floating mb-4">
                      <textarea id="form_message" name="message" class="form-control border-0" placeholder="Your message" style="height: 150px" required></textarea>
                      <label for="form_message">Message *</label>
                      <div class="valid-feedback"> Looks good! </div>
                      <div class="invalid-feedback"> Please enter your messsage. </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-12">
                    <input type="submit" class="btn btn-outline-primary rounded-pill btn-send mb-3" value="Send message">
                  </div>
                  <!-- /column -->
                </div>
                <!-- /.row -->
              </form>
              <!-- /form -->
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!--/.card-body -->
      </div>
      <!--/.card -->
      <div class="d-md-flex align-items-center justify-content-between">
        <p class="mb-2 mb-lg-0">© 2023 Sandbox. All rights reserved.</p>
        <nav class="nav social social-muted mb-0 text-md-end">
          <a href="#"><i class="uil uil-twitter"></i></a>
          <a href="#"><i class="uil uil-facebook-f"></i></a>
          <a href="#"><i class="uil uil-dribbble"></i></a>
          <a href="#"><i class="uil uil-instagram"></i></a>
          <a href="#"><i class="uil uil-youtube"></i></a>
        </nav>
        <!-- /.social -->
      </div>
    </div>
    <!-- /.container -->
  </footer>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="<?php echo base_url('template') ?>/assets/js/plugins.js"></script>
  <script src="<?php echo base_url('template') ?>/assets/js/theme.js"></script>
</body>

</html>