<?php
$error = "";
$nik = "";
$jabatann = "";
if (session()->getFlashdata('error')) {
   $error = session()->getFlashdata('error');
   $nik = session()->getFlashdata('nik');
   $jabatann = session()->getFlashdata('jabatan');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Meta -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
   <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
   <link rel="icon" href="images/collabtech.svg">
   <title>COLLABTECT | <?= $title; ?></title>
   <base href="<?= base_url('assets'); ?>/">
   <!-- Fontawesome -->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
   <!-- Bootstrap -->
   <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <!-- App CSS -->
   <link id="theme-style" rel="stylesheet" href="css/style-login-regis.css">

</head>

<body class="app app-login p-0">
   <div class="row g-0 app-auth-wrapper">
      <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
         <div class="d-flex flex-column align-content-end">
            <div class="app-auth-body mx-auto">
               <div class="app-auth-branding mb-4"><a class="app-logo"><img class="logo-icon me-2" src="images/collabtech.svg" alt="logo"></a></div>
               <h2 class="auth-heading text-center">Login Collabtech</h2>
               <p class="mb-5">Silahkan login menggunakan NIK, password dan akses Portal untuk bisa menggunakan layanan ini</p>
               <div class="auth-form-container text-start">
                  <form action="/Login/login" method="POST" class="auth-form login-form">
                     <div class="mb-4">
                        <input name="nik" type="number" value="<?= $nik; ?>" class="form-control form-control-sm text-center" placeholder="Masukan NIK" required>
                     </div>

                     <div class="mb-4">
                        <input name="password" type="password" class="form-control form-control-sm text-center" placeholder="Masukan Password" required>
                     </div>

                     <div class="mb-4">
                        <select class="form-select form-select-sm text-center" name="jabatan" aria-label=".form-select-sm example">
                           <option class="bg-light" selected>--- Pilih Akses ---</option>
                           <option class="bg-light">Admin</option>
                           <?php foreach ($jabatan as $key => $value) {
                              if ($jabatann == $value['jabatan']) { ?>
                                 <option value="<?= $value['id_jabatan']; ?>" selected><?= $value['jabatan']; ?></option>
                              <?php } else { ?>
                                 <option value="<?= $value['id_jabatan']; ?>"><?= $value['jabatan']; ?></option>
                           <?php }
                           } ?>
                        </select>
                     </div>
                     <!--//form-group-->
                     <div class="text-center">
                        <button type="submit" name="login" class="btn btn-login btn-sm w-100 theme-btn mx-auto"><i class="fas fa-sign-in-alt"></i> Login</button>
                     </div>
                  </form>

                  <div class="auth-option text-center pt-2">Tidak ada akun? <a class="text-link" href="/Registrasi">Registrasi</a> atau <a class="text-link" href="/">Kembali ke beranda</a>.</div>
               </div>
               <!--//auth-form-container-->

            </div>
            <!--//auth-body-->

            <footer class="app-auth-footer">
               <div class="container text-center py-3">
                  <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
                  <small class="copyright">Designed by <a class="app-link" href="https://www.instagram.com/amat_nrl/" target="_blank">Amat Nrl</a> for developers</small>

               </div>
            </footer>
            <!--//app-auth-footer-->
         </div>
         <!--//flex-column-->
      </div>
      <!--//auth-main-col-->
      <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
         <div class="auth-background-holder">
         </div>
         <div class="auth-background-mask"></div>

      </div>
      <!--//auth-background-col-->

   </div>
   <!--//row-->

   <!-- Bootstrap tether Core JavaScript -->
   <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <!-- SweetAlert2 -->
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script>
      var error = '<?= $error; ?>';
      if (error != "") {
         Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'Gagal',
            text: error,
            showConfirmButton: false,
            timer: 3000,
            width: 400,
         })
      }
   </script>
</body>

</html>