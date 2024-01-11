<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
         .max-font-size {
         font-size: 24px; /* Set a default font size */
         max-size: 36px; /* Set the maximum font size */
         }
         .max-font-size2 {
         font-size: 30px; /* Set a default font size */
         max-size: 36px; /* Set the maximum font size */
         }
         .custom-card {
         height: 240px;
         max-height: 1000px; /* Set your desired maximum width */
         margin-right: auto;
         margin-left: auto;
         }
         .custom-card2 {
         height: 140px;
         max-height: 400px; /* Set your desired maximum width */
         margin-right: auto;
         margin-left: auto;
         }
         .centered-img {
            max-width: 80%; /* Ensure the image doesn't exceed the container width */
            max-height: 80%; /* Ensure the image doesn't exceed the container height */
            vertical-align: bottom;
          }
      </style>
   </head>
   <body>
      <div class="content-wrapper">
        <section id="beranda" class="wrapper">
          <header class="wrapper bg-gray" >
             <nav class="navbar navbar-expand-lg navbar-light navbar-bg-light">
                <div class="container">
                   <div class="navbar-collapse-wrapper bg-white d-flex flex-row flex-nowrap w-100 justify-content-between align-items-center">
                      <div class="navbar-brand w-100">
                         <a class="scroll" href="#beranda">
                         <img src="<?php echo base_url('template') ?>/assets/img/LOGO GENOMIC SHRIMP UTAMA.png" srcset="<?php echo base_url('template') ?>/assets/img/logo-dark@2x.png 2x" alt="" />
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
                                <a class="nav-link scroll active" href="#beranda">Beranda</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link scroll" href="#product">Produk</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link scroll" href="#testimoni">Testimoni</a>
                               </li>
                               <li class="nav-item">
                                 <a class="nav-link scroll" href="#tentangkami">Tentang Kami</a>
                               </li>
                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="offcanvas-footer d-lg-none">
                               <div>
                                  <nav class="nav social social-white mt-4">
                                    <a class="btn btn-danger bg-red-gsi" href="https://wa.me/628111965699" target="_blank">Kirim Sample</a>
                                  </nav>
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
                               <a class="btn btn-danger bg-red-gsi" href="https://wa.me/628111965699" target="_blank">Kirim Sample</a>
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
        </section>
         <section class="wrapper" id="beranda">
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
                        <span><a href="https://wa.me/628111965699" target="_blank" class="btn btn-lg btn-danger bg-red-gsi ">Kirim Sample</a></span>
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
         </section>
         <!-- /section -->
         <section class="wrapper bg-light" id="">
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
         <section class="wrapper bg-light" id="">
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
                              nilai produksi</b> udang bisa <b>meningkat > 50x lipat lebih besar</b> dari biaya pemeriksaannya.
                           </p>
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
         <!-- kini hadir  -->
         <section class="wrapper">
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
                     <h1 class="display-1 mb-5 text-white custom-font">Kini Hadir GSI <br>untuk Mendeteksi Penyakit<br>Udang Anda!</h1>
                     <p class="lead fs-23 lh-sm mb-7 px-md-10 px-lg-0 custom-font text-white">Berbasis teknologi genomika-molekuler yang dilakukan di dalam negeri, GSI memberikan layanan 24/7 dengan hasil yang cepat dan biaya terjangkau.</p>
                  </div>
                  <div class="col-sm-1">
                     <h1></h1>
                  </div>
                  <!--/column -->
               </div>
               <!-- /.row -->
            </div>
         </section>
         <!-- /.kini hadir  -->
         <!-- produk layanan kami -->
         <section class="wrapper bg-light justify-content-center" id="product">
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
                           <div class="card-body custom-card">
                              <h3 class="display-4 custom-font">Prime 5</h3>
                              <p class="custom-font">Pemeriksaan premium yang dapat sekaligus mendeteksi IHHNV, virus terkecil yang berpotensi sebagai penyebab gagal panen akhir-akhir ini.</p>
                           </div>
                           <div class="card-body custom-card2">
                              <h3 class="max-font-size2 mb3 custom-font-red">Rp 1.250.000</h3>
                           </div>
                        </div>
                        <!--/.card-body -->
                        <div class="wrapper-border">
                           <div class="card-body p-12 pt-5 pb-0">
                              <h5 class="mb-3 custom-font">
                              Mendeteksi:</h3>
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
                              <a type="button" href="https://wa.me/628111965699" target="_blank" class="btn btn-danger w-100 bg-red-gsi">Kirim Sample</a>
                           </div>
                        </div>
                     </div>
                     <!--/.card -->
                  </div>
                  <!-- /column -->
                  <div class="col-lg-4 justify-content-center">
                     <div class="card">
                        <div class="wrapper-border">
                           <div class="card-body custom-card">
                              <h3 class="display-4 custom-font">Prime 4</h3>
                              <p class="custom-font">Pemeriksaan untuk mendeteksi 4 virus dan bakteri yang paling sering menginfeksi udang. Menjadi pilihan favorit penambak Indonesia.</p>
                           </div>
                           <div class="card-body custom-card2">
                              <h4>
                              <span class="text-decoration-line-through custom-font max-font-size mb-3">Rp 1.000.000</span>
                              <span class="max-font-size2 mb-3 custom-font-red">Rp 795.000</span>
                              </h3>
                           </div>
                        </div>
                        <!--/.card-body -->
                        <div class="wrapper-border">
                           <div class="card-body p-12 pt-5 pb-0">
                              <h5 class=" mb-3 custom-font">
                              Mendeteksi:</h3>
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
                              <a type="button" href="https://wa.me/628111965699" target="_blank" class="btn btn-danger w-100 bg-red-gsi">Kirim Sample</a>
                           </div>
                        </div>
                     </div>
                     <!--/.card -->
                  </div>
                  <div class="col-lg-4">
                     <div class="card">
                        <div class="wrapper-border">
                           <div class="card-body custom-card">
                              <h3 class="display-4 mb-3 custom-font">Prime 3</h3>
                              <p class="custom-font">Pemeriksaan untuk mendeteksi 3 virus utama pada aquaculture di Indonesia.</p>
                           </div>
                           <div class="card-body custom-card2">
                              <h3 class="max-font-size2 mb3 custom-font-red">Rp 750.000</h3>
                           </div>
                        </div>
                        <!--/.card-body -->
                        <div class="wrapper-border">
                           <div class="card-body p-12 pt-5 pb-0">
                              <h5 class=" mb-3 custom-font">
                              Mendeteksi:</h3>
                           </div>
                           <div class=" p-6 pt-0 pl-0 pb-13">
                              <ul>
                                 <li class="custom-font li-gsi">IMNV</li>
                                 <li class="custom-font li-gsi">WSSV</li>
                                 <li class="custom-font li-gsi">EHP</li>
                              </ul>
                           </div>
                           <div class="card-body col-md-12 p-12 pt-0 pb-8">
                              <a type="button" href="https://wa.me/628111965699" target="_blank" class="btn btn-danger w-100 bg-red-gsi">Kirim Sample</a>
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
         <!-- /.produk layanan kami -->
         <!-- pantogen penyakit udang -->
         <section class="wrapper bg-light justify-content-center">
            <div class="container-fluid custom-container py-14 py-md-2 col-lg-10">
               <div class="row gx-lg-8 gx-xl-12 mb-10 text-center justify-content-center">
                  <!--/column -->
                  <!-- <div class="row col-lg-6"> -->
                  <h2 class="display-4 mb-3">
                     <span class="custom-font">Patogen</span>
                     <span class="custom-font-red">Penyakit Udang</span>
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
         <!-- / . pantogen penyakit udang -->
         <!-- Carousel -->
         <section id="testimoni" class="wrapper pt-16">
            <div class="card">
              <div class="card-body">
                <div class="text-center">
                  <h2 class="display-5">
                    <span class="custom-font-red">Apa Kesan Mereka Yang Telah Melakukan</span><br>
                    <span class="custom-font">Tes Penyakit Udang Di GSI ?</span>
                  </h2>
                </div>
                <div class="swiper-container dots-closer blog grid-view mb-6" data-margin="0" data-nav="true" data-dots="true" data-items-md="2" data-items-xs="1">
                  <div class="swiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="item-inner">
                          <article>
                            <div class="card p-4 pb-10">
                              <div class="card-body">
                                <div class="row text-center">
                                  <!-- <img src="<?php echo base_url('template') ?>/assets/img/gsi/testimoni.png" class="w-10 h-10" /> -->
                                  <div class="col-md-2 text-center">
                                    <img src="<?php echo base_url('template') ?>/assets/img/icons/lineal/user.svg" class="svg w-8 h-8" alt="" />
                                  </div>
                                  <div class="col-md-4">
                                    <h5 class="display-9 custom-font">Amy A.J</h5>
                                    <p class="custom-font">Indonesia</p>
                                  </div>
                                </div>
                                <p>"Sangat membantu, pelayanannya ramah, harga sesuai tarif dan hasilnya sangat cepat dan akurat. Terimakasih GSI"</p>
                              </div>
                              <!--/.card-body -->
                            </div>
                            <!-- /.card -->
                          </article>
                          <!-- /article -->
                        </div>
                        <!-- /.item-inner -->
                      </div>
                      <!--/.swiper-slide -->
                      <div class="swiper-slide">
                        <div class="item-inner">
                          <article>
                          <div class="card p-4 pb-10">
                              <div class="card-body">
                                <div class="row text-center">
                                  <!-- <img src="<?php echo base_url('template') ?>/assets/img/gsi/testimoni.png" class="w-10 h-10" /> -->
                                  <div class="col-md-2 text-center">
                                    <img src="<?php echo base_url('template') ?>/assets/img/icons/lineal/user.svg" class="svg w-8 h-8" alt="" />
                                  </div>
                                  <div class="col-md-4">
                                    <h5 class="display-9 custom-font">Amy A.J</h5>
                                    <p class="custom-font">Indonesia</p>
                                  </div>
                                </div>
                                <p>"Sangat membantu, pelayanannya ramah, harga sesuai tarif dan hasilnya sangat cepat dan akurat. Terimakasih GSI"</p>
                              </div>
                              <!--/.card-body -->
                            </div>
                            <!-- /.card -->
                          </article>
                          <!-- /article -->
                        </div>
                        <!-- /.item-inner -->
                      </div>
                      <!--/.swiper-slide -->
                      <div class="swiper-slide">
                        <div class="item-inner">
                          <article>
                          <div class="card p-4 pb-10">
                              <div class="card-body">
                                <div class="row text-center">
                                  <!-- <img src="<?php echo base_url('template') ?>/assets/img/gsi/testimoni.png" class="w-10 h-10" /> -->
                                  <div class="col-md-2 text-center">
                                    <img src="<?php echo base_url('template') ?>/assets/img/icons/lineal/user.svg" class="svg w-8 h-8" alt="" />
                                  </div>
                                  <div class="col-md-4">
                                    <h5 class="display-9 custom-font">Amy A.J</h5>
                                    <p class="custom-font">Indonesia</p>
                                  </div>
                                </div>
                                <p>"Sangat membantu, pelayanannya ramah, harga sesuai tarif dan hasilnya sangat cepat dan akurat. Terimakasih GSI"</p>
                              </div>
                              <!--/.card-body -->
                            </div>
                            <!-- /.card -->
                          </article>
                          <!-- /article -->
                        </div>
                        <!-- /.item-inner -->
                      </div>
                      <!--/.swiper-slide -->
                      <div class="swiper-slide">
                        <div class="item-inner">
                          <article>
                            <div class="card">
                            <div class="card p-4 pb-10">
                              <div class="card-body">
                                <div class="row text-center">
                                  <!-- <img src="<?php echo base_url('template') ?>/assets/img/gsi/testimoni.png" class="w-10 h-10" /> -->
                                  <div class="col-md-2 text-center">
                                    <img src="<?php echo base_url('template') ?>/assets/img/icons/lineal/user.svg" class="svg w-8 h-8" alt="" />
                                  </div>
                                  <div class="col-md-4">
                                    <h5 class="display-9 custom-font">Amy A.J</h5>
                                    <p class="custom-font">Indonesia</p>
                                  </div>
                                </div>
                                <p>"Sangat membantu, pelayanannya ramah, harga sesuai tarif dan hasilnya sangat cepat dan akurat. Terimakasih GSI"</p>
                              </div>
                              <!--/.card-body -->
                            </div>
                              <!--/.card-body -->
                            </div>
                            <!-- /.card -->
                          </article>
                          <!-- /article -->
                        </div>
                        <!-- /.item-inner -->
                      </div>
                      <!--/.swiper-slide -->
                    </div>
                    <!--/.swiper-wrapper -->
                  </div>
                  <!-- /.swiper -->
                </div>
                <!-- /.swiper-container -->
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </section>
          <!-- / . Carousel -->
          <!-- /section -->
          <section class="wrapper pt-16" id="tentangkami">
              <div class="container-fluid custom-container py-14 py-md-8 col-lg-10">
                <!--/.row -->
                <div class="card bg-white mb-15 col-md-7 col-lg-12">
                    <div class="card-body p-0 pb-0">
                      <div class="row">
                          <div class="col-lg-6 pb-12 align-self-center">
                            <h2 class="display-4 h1 post-title mb-3 custom-font-red">Tentang Kami</h2>
                            <h2 class="display-4 h1 post-title mb-3 custom-font">Apa Itu GSI?</h2>
                            <p class="lead fs-20 mb-5 custom-font">GSI (Genomics Shrimp Indonesia) adalah laboratorium diagnostik berbasis DNA genomika-molekuler dan berkapasitas tinggi (high-throughput lab). GSI memiliki standar internasional ISO untuk kualitas, biosafety, dan ramah lingkungan (green lab). Pemeriksaan penyakit udang di GSI sesuai dengan standard OIE/WOAH - World Organisation for Animal Health.
                            </p>
                            <p class="lead fs-20 mb-5 custom-font">
                              Kami juga menyediakan layanan genomika-molekuler lain seperti Genotyping performance L. vannamei & P. monodon, Whole genome sequencing, 16s metagenomics, dan DNA & SNP marker panel.
                            </p>
                          </div>
                          <!-- /column -->
                          <div class="col-lg-5 pb-0 offset-md-1 align-self-center">
                            <figure><img class="img-mask" src="<?php echo base_url('template') ?>/assets/img/gsi/about.png" srcset="<?php echo base_url('template') ?>/assets/img/gsi/about.png 2x" alt="" /></figure>
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
          <section class="wrapper bg-light" id="">
            <div class="container-fluid custom-container py-14 py-14 py-md-18 col-lg-10 ">
               <div class="row gx-lg-8 gx-xl-12  mb-10 text-center justify-content-center">
                  <!--/column -->
                  <h2 class="display-4 mb-3">
                     <span class="custom-font">Apa Keunggulan </span>
                     <span class="custom-font-red">GSI?</span>
                  </h2>
                  <div class="col-lg-8">
                    <p class="lead fs-20 mb-5 custom-font">GSI berstandar internasional (ISO) dan OIE/WOAH - World Organisation for Animal Health.</p>
                  </div>
                  <!--/column -->
               </div>
               <!--/.row -->
              <div class="card-body ">
                <div class="gy-6 pb-5">
                  <div class="card col-md-6 col-lg-12">
                    <figure class="overlay overlay-2 hover-scale color"><a href="#"> <img src="<?php echo base_url('template') ?>/assets/img/gsi/img hover.png" srcset="<?php echo base_url('template') ?>/assets/img/img hover.png 2x" alt="" /></a>
                      <figcaption>
                        <h4 class="display-4 from-top mb-1 custom-font">Gratis konsultasi budidaya dan kesehatan udang</h4>
                        <p class="from-bottom custom-font">GSI memberikan akses konsultasi kesehatan dan budidaya untuk penambak udang, secara online dan GRATIS! Langsung dengan ahli profesional.</p>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <div class="row gy-6 justify-content-center">
                  <div class="item col-md-6 col-lg-6">
                    <figure class="overlay overlay-2 hover-scale color"><a href="#"> <img src="<?php echo base_url('template') ?>/assets/img/gsi/img hover 3.png" srcset="<?php echo base_url('template') ?>/assets/img/gsi/img hover 3.png 2x" alt="" /></a>
                      <figcaption>
                        <h4 class="display-4 from-top mb-1 custom-font">Hasil cepat dan harga terjangkau</h4>
                        <p class="from-bottom custom-font">GSI memberikan layanan 24/7 dengan hasil yang cepat (96 jam setelah sampel diterima di Lab) dan biaya terjangkau. Hubungi kami untuk gratis ongkir sampel, S&K berlaku.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <!--/column -->
                  <div class="item col-md-6 col-lg-6">
                    <figure class="overlay overlay-2 hover-scale color"><a href="#"> <img src="<?php echo base_url('template') ?>/assets/img/gsi/img hover 2.png" srcset="<?php echo base_url('template') ?>/assets/img/gsi/img hover 2.png 2x" alt="" /></a>
                      <figcaption>
                        <h4 class="display-4 from-top mb-1 custom-font">GSI adalah Green Lab</h4>
                        <p class="from-bottom custom-font">Dengan mengirim sampel ke GSI, Anda mendukung pelestarian lingkungan karena GSI adalah Green Lab pertama di Indonesia. Maju Ekonomi Biru, Maju Ekonomi Hijau!</p>
                      </figcaption>
                    </figure>
                  </div>
                  <!--/column -->
                </div>
                <!--/column -->
                <!--/.row -->
              </div>
               <!--/.row -->
            </div>
            <!-- /.container -->
         </section>
         
         <section class="wrapper" id="">
            <div class="container-fluid custom-container py-8 py-md-12 pt-0 col-lg-10 ">
               <div class="row gx-lg-8 gx-xl-12  mb-10 text-center">
                  <h2 class="display-5 mb-3 custom-font">Kami Bagian Dari</h2>
               </div>
               <!--/.row -->
               <div class="row gx-lg-8 gx-xl-12 pb-5 gy-6 justify-content-center">
                  <div class="col-md-2 col-lg-3">
                    <img src="<?php echo base_url('template') ?>/assets/img/gsi/logo-sertifikasi 01.png" class="img-fluid" alt="" />
                  </div>
                  <div class="col-md-6 col-lg-2">
                    <img src="<?php echo base_url('template') ?>/assets/img/gsi/logo-sertifikasi 02.png" class="img-fluid" alt="" />
                  </div>
                  <!--/column -->
               </div>
               <!--/.row -->
               <div class="row gx-lg-8 gx-xl-12 pt-10 mb-10 text-center">
                  <h2 class="display-5 mb-3 custom-font">Tersertifikasi Oleh</h2>
               </div>
               <!--/.row -->
               <div class="row gx-lg-4 gx-xl-3 pb-5 gy-6 justify-content-center">
                  <div class="col-md-2 col-lg-2">
                    <img src="<?php echo base_url('template') ?>/assets/img/gsi/logo-sertifikasi 03.png" class="centered-img" alt="" />
                  </div>
                  <div class="col-md-2 col-lg-3">
                    <img src="<?php echo base_url('template') ?>/assets/img/gsi/logo-sertifikasi 04.png" class="centered-img" alt="" />
                  </div>
                  <div class="col-md-2 col-lg-1">
                    <img src="<?php echo base_url('template') ?>/assets/img/gsi/logo-sertifikasi 05.png" class="centered-img" alt="" />
                  </div>
                  <!--/column -->
               </div>
               <!--/.row -->
            </div>
            <!-- /.container -->
         </section>

         <section class="wrapper section-whitebg">
            <div class="card shadow-md section-whitebg">
               <div class="row gy-10 gy-md-13 gy-lg-0 align-items-center">
                  <div class="col-md-8 col-lg-5 d-flex position-relative mx-auto" data-cues="slideInDown" data-group="header">
                     <div class="img-mask"><img src="<?php echo base_url('template') ?>/assets/img/gsi/doctor-pkg.png" srcset="<?php echo base_url('template') ?>/assets/img/gsi/doctor-pkg.png 2x" alt="" /></div>
                     <div class="card shadow-lg position-absolute" style="bottom: 10%; right: 2%;">
                        <!--/.card-body -->
                     </div>
                     <!--/.card -->
                  </div>
                  <!--/column -->
                  <div class="col-lg-6 offset-md-right-2 col-xl-6 text-center text-lg-end" data-cues="slideInDown" data-group="page-title" data-delay="600">
                    <h1 class="display-1 mb-5">
                      <span class="custom-font-red">Siap Untuk Memajukan</span><br>
                      <span class="custom-font">Budidaya Tambak Udang Anda?</span>
                    </h1>
                    <p class="lead fs-23 lh-sm mb-7 px-md-10 px-lg-0 ">Maksimalkan hasil budidaya udang Anda dengan langkah cerdas! Jamin kesehatan udang melalui pemeriksaan akurat di GSI Lab. Bersiaplah untuk hasil terbaik dalam tambak udang Anda!</p>
                    <a type="button" href="https://wa.me/628111965699" target="_blank" class="btn btn-danger w-20 bg-red-gsi">HUBUNGI KAMI</a>
                  </div>
                  <div class="col-sm-1">
                     <h1></h1>
                  </div>
                  <!--/column -->
               </div>
               <!-- /.row -->
            </div>
         </section>
         
      </div>
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