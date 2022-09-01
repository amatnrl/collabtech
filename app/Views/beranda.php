<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <base href="<?= base_url('assets'); ?>/">
   <link rel="icon" href="images/collabtech.svg">
   <title>COLLABTECT | <?= $title; ?></title>
   <meta content="" name="description">
   <meta content="" name="keywords">

   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
   <!-- Vendor CSS Files -->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
   <!-- Bootstrap -->
   <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <!-- Template Main CSS File -->
   <link href="css/style-beranda.css" rel="stylesheet">

</head>

<body>
   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top">
      <div class="container text-center">
         <a href="/"><img src="images/logo.svg" width="200" alt=""></a>
         <!-- <h1 class="logo pc me-auto"><a href="/"><img src="images/logo.svg" alt=""></a></h1>
         <h1 class="logo hp me-auto"><a href="/"><img src="images/collabtech.svg" alt=""></a></h1> -->
         <!-- Uncomment below if you prefer to use an image logo -->
         <!-- <a href="index.html" class="logo me-auto"><img src="user/img/logo.png" alt="" class="img-fluid"></a>-->

         <!-- <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
               <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
               <li><a class="nav-link scrollto" href="#why-us">Cara Kerja</a></li>
               <li><a class="nav-link scrollto" href="#team">Tim Kami</a></li>
               <li><a class="nav-link scrollto" href="#contact">Hubungi Kami</a></li>
            </ul>
            <i class="fas fa-bars mobile-nav-toggle"></i>
         </nav>

         <a href="/Login" class="pass-btn scrollto">Masuk</a>
         <a href="/Registrasi" class="aktif-btn scrollto">Daftar</a> -->

      </div>
   </header><!-- End Header -->

   <!-- ======= Hero Section ======= -->
   <section id="hero" class="d-flex align-items-center">
      <div class="container">
         <div class="row">
            <div class="col-md-7">
               <h1>COLLABTECH</h1>
               <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed pretium eget tristique amet. Etiam molestie adipiscing enim a, aenean. Suspendisse eleifend purus id massa. Mattis metus sed quis nulla pharetra, blandit.</h2>
               <a href="/Login" class="btn-get-masuk scrollto shadow"><i class="fas fa-sign-in-alt"></i> Masuk</a>
               <a href="/Registrasi" class="btn-get-daftar scrollto shadow"><i class="fas fa-user-plus"></i> Ayo Daftar</a>

            </div>
         </div>
      </div>
   </section><!-- End Hero -->

   <main id="main">

      <!-- ======= Why Us Section ======= -->
      <section id="why-us" class="why-us">
         <div class="container">

            <div class="row deskripsi">
               <div class="col-lg-12 d-flex align-items-stretch">
                  <div class="icon-boxes d-flex flex-column justify-content-center">
                     <div class="row">
                        <div class="col-xl-3 d-flex align-items-stretch">
                           <div class="icon-box mt-4 mt-xl-0">
                              <i class="far fa-clipboard"></i>
                              <h5>Evaluasi Pekerjaan Teknisi</h5>
                              <p>Scoreboard Pekerjaan dari para teknisi untuk evaluasi kinerja oleh management</p>
                           </div>
                        </div>
                        <div class="col-xl-3 d-flex align-items-stretch">
                           <div class="icon-box mt-4 mt-xl-0">
                              <i class="fas fa-tasks"></i>
                              <h5>Resource Management</h5>
                              <p>Pengaturan jadwal para Teknisi yang optimum berdasarkan kinerja dan jumlah SDM yang ada</p>
                           </div>
                        </div>
                        <div class="col-xl-3 d-flex align-items-stretch">
                           <div class="icon-box mt-4 mt-xl-0">
                              <i class="fas fa-chalkboard-teacher"></i>
                              <h5>Pengawasan</h5>
                              <p>Monitoring setiap pekerjaan teknisi oleh Manager Akses untuk memaksimalkan produktifitas teknis</p>
                           </div>
                        </div>
                        <div class="col-xl-3 d-flex align-items-stretch">
                           <div class="icon-box mt-4 mt-xl-0">
                              <i class="fas fa-people-carry"></i>
                              <h5>Kolaborasi</h5>
                              <p>Daftar pekerjaan yang tersedia sehingga para teknisi dari stream yang berbeda dapat membantu untuk menyelesaikan tiket yang ada</p>
                           </div>
                        </div>
                     </div>
                  </div><!-- End .content-->
               </div>
            </div>

         </div>
      </section>
      <!-- End Why Us Section -->

      <!-- ======= Team Section ======= -->
      <!-- <section id="team" class="team bg-section">

         <div class="container" data-aos="fade-up">

            <div class="section-title">
               <h2>Tim Kami</h2>
            </div>

            <div class="row">

               <div class="col-lg-4 col-md-4 col-12 d-flex justify-content-center align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <div class="member">
                     <div class="member-img">
                        <img src="images/photo-1.png" class="img-fluid" alt="">
                        <div class="social">
                           <a href="/"><i class="fab fa-twitter"></i></a>
                           <a href="/"><i class="fab fa-facebook-square"></i></a>
                           <a href="/"><i class="fab fa-instagram-square"></i></a>
                           <a href="/"><i class="fab fa-linkedin"></i></a>
                        </div>
                     </div>
                     <div class="member-info">
                        <h4>Asriadi</h4>
                        <span>Chief Marketing Officer</span>
                        <p>Berpengalaman selama 10 tahun di industri desain produk. Mempunyai impian ingin membuat dunia menjadi lebih mudah dengan desain produk yang humanis.</p>
                     </div>
                  </div>
               </div>

               <div class="col-lg-4 col-md-4 col-12 d-flex justify-content-center align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                  <div class="member">
                     <div class="member-img">
                        <img src="images/photo-2.png" class="img-fluid" alt="">
                        <div class="social">
                           <a href="/"><i class="fab fa-twitter"></i></a>
                           <a href="/"><i class="fab fa-facebook-square"></i></a>
                           <a href="/"><i class="fab fa-instagram-square"></i></a>
                           <a href="/"><i class="fab fa-linkedin"></i></a>
                        </div>
                     </div>
                     <div class="member-info">
                        <h4>Narulita Fubian</h4>
                        <span>Chief Executive Officer</span>
                        <p>Seorang ekspert dan professional dalam bisnis dan management di industri telekomunikasi Indonesia. Pantang menyerah adalah nama tengahku.</p>
                     </div>
                  </div>
               </div>

               <div class="col-lg-4 col-md-4 col-12 d-flex justify-content-center align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                  <div class="member">
                     <div class="member-img">
                        <img src="images/photo-3.png" class="img-fluid" alt="">
                        <div class="social">
                           <a href="/"><i class="fab fa-twitter"></i></a>
                           <a href="/"><i class="fab fa-facebook-square"></i></a>
                           <a href="/"><i class="fab fa-instagram-square"></i></a>
                           <a href="/"><i class="fab fa-linkedin"></i></a>
                        </div>
                     </div>
                     <div class="member-info">
                        <h4>Raditya Narendra</h4>
                        <span>Chief Technology Officer</span>
                        <p>Programmer dan Network Engineer berpengalaman di Industri Telekomunikasi Indonesia. Telah banyak terlibat dalam berbagai project strategis di berbagai industri.</p>
                     </div>
                  </div>
               </div>

            </div>

         </div>

      </section> -->
      <!-- End Team Section -->

      <!-- ======= Contact Section ======= -->
      <!-- <section id="contact" class="contact">
         <div class="container">

            <div class="section-title">
               <h2>Hubungi Kami</h2>
               <p>Jika ada pertanyaan atau saran perbaikan, silahkan hubungi kami. Kami akan segera menghubungi anda kembali.</p>
            </div>

            <div class="row">
               <div class="col-md-6">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7287.589790950562!2d119.4311507346442!3d-5.170016154079793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x80a232f311f1c074!2sTelkomsel%20Makassar%20my%20indihome!5e0!3m2!1sid!2sid!4v1661520996320!5m2!1sid!2sid" style="border:0; width: 100%; height: 350px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
               <div class="col-md-6">
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                     <div class="row">
                        <div class="col-md-6 form-group">
                           <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                           <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                     </div>
                     <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                     </div>
                     <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                     </div>
                     <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                     </div>
                     <div class="text-center"><button type="submit">Send Message</button></div>
                  </form>
               </div>
            </div>
         </div>

      </section> -->
      <!-- End Contact Section -->

   </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer">

      <div class="container py-3 text-center">
         &copy; Copyright <strong><span>2022 RAM</span></strong>. All Rights Reserved
         <!-- <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="/" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="/" class="facebook"><i class="fab fa-facebook-square"></i></a>
            <a href="/" class="instagram"><i class="fab fa-instagram-square"></i></a>
            <a href="/" class="google-plus"><i class="fab fa-skype"></i></a>
            <a href="/" class="linkedin"><i class="fab fa-linkedin"></i></a>
         </div> -->
      </div>
   </footer>
   <!-- End Footer -->

   <div id="preloader"></div>
   <!-- <a href="#hero" class="back-to-top scrollto d-flex align-items-center justify-content-center"><i class="fas fa-arrow-alt-circle-up"></i></a> -->

   <!-- Bootstrap -->
   <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <!-- Template Main JS File -->
   <script src="js/js-beranda.js"></script>

</body>

</html>