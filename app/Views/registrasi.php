<?php
$error = "";
$success = "";
$nama = "";
$nik = "";
$jabatann = "";
$witell = "";
if (session()->getFlashdata('error')) {
   $error = session()->getFlashdata('error');
   $nama = session()->getFlashdata('nama');
   $nik = session()->getFlashdata('nik');
   $jabatann = session()->getFlashdata('jabatan');
   $witell = session()->getFlashdata('witel');
} else if (session()->getFlashdata('berhasil')) {
   $success = session()->getFlashdata('berhasil');
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
   <style>
      #message {
         display: none;
         color: #000;
         position: relative;
         padding-left: 20px;
         margin-top: -5px;
      }

      .message {
         margin-top: -15px;
      }

      #message p {
         font-size: 10px;
      }

      /* Add a green text color and a checkmark when the requirements are right */
      .valid {
         color: green;
      }

      .valid:before {
         position: relative;
         left: -15px;
         content: "✔";
      }

      /* Add a red text color and an "x" when the requirements are wrong */
      .invalid {
         color: red;
      }

      .invalid:before {
         position: relative;
         left: -15px;
         content: "✖";
      }
   </style>
</head>

<body class="app app-signup p-0">
   <div class="row g-0 app-auth-wrapper">
      <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
         <div class="d-flex flex-column align-content-end">
            <div class="app-auth-body mx-auto">
               <div class="app-auth-branding mb-3"><a class="app-logo"><img class="logo-icon me-2" src="images/collabtech.svg" alt="logo"></a></div>
               <h2 class="auth-heading text-center mb-4">Registrasi Collabtech</h2>
               <!-- <p class="mb-0">Silahkan registrasi dengan mengisi form dibawah untuk bisa menggunakan layanan ini</p> -->
               <div class="auth-form-container text-start">
                  <form action="/Registrasi/registrasi" method="POST" class="auth-form login-form">
                     <div class="mb-3">
                        <input name="nama" type="text" class="form-control form-control-sm text-center" value="<?= $nama; ?>" placeholder="Masukan Nama" required>
                     </div>
                     <div class="mb-3">
                        <input name="nik" type="number" class="form-control form-control-sm text-center" value="<?= $nik; ?>" placeholder="Masukan NIK" required>
                     </div>
                     <div class="mb-3">
                        <select class="form-select form-select-sm text-center" name="jabatan" aria-label=".form-select-sm example">
                           <option class="bg-light" selected>--- Pilih Jabatan ---</option>
                           <?php foreach ($jabatan as $key => $value) {
                              if ($jabatann == $value['jabatan']) { ?>
                                 <option value="<?= $value['id_jabatan']; ?><" selected><?= $value['jabatan']; ?></option>
                              <?php } else { ?>
                                 <option value="<?= $value['id_jabatan']; ?><"><?= $value['jabatan']; ?></option>
                           <?php }
                           } ?>
                        </select>
                     </div>
                     <div class="mb-3">
                        <select class="form-select form-select-sm text-center" name="witel" aria-label=".form-select-sm example">
                           <option class="bg-light" selected>--- Pilih Witel ---</option>
                           <?php foreach ($witel as $key => $value) {
                              if ($witell == $value['witel']) { ?>
                                 <option value="<?= $value['id_witel']; ?><" selected><?= $value['witel']; ?></option>
                              <?php } else { ?>
                                 <option value="<?= $value['id_witel']; ?><"><?= $value['witel']; ?></option>
                           <?php }
                           } ?>
                        </select>
                     </div>
                     <div class="mb-3 row">
                        <div class="col-md-6 icon-pass">
                           <span id="icon-view" onclick="btnView()"><i class="fas fa-eye"></i></span>
                           <span id="icon-hidden" onclick="btnHidden()" style="display: none;"><i class="fas fa-eye-slash"></i></span>
                           <input name="password1" type="password" onkeyup="PassVAlidation()" id="password1" class="form-control form-control-sm text-center" placeholder="Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Passwor harus terdiri dari 8 karakter dengan camputan huruf kecil, huruf kapital dan angka">
                        </div>
                        <div class="col-md-6 icon-pass">
                           <span id="icon-true" style="display: none;"><i class="fas fa-check-square"></i></span>
                           <span id="icon-false" style="display: none;"><i class="fas fa-window-close"></i></span>
                           <input name="password2" type="password" onkeyup="PassVAlidation()" id="password2" class="form-control form-control-sm text-center" placeholder="Konfirm Password" required>
                        </div>
                     </div>

                     <div id="message">
                        <div class="row">
                           <div class="col-md-6">
                              <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                           </div>
                           <div class="col-md-6">
                              <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                           </div>
                        </div>
                        <div class="row message">
                           <div class="col-md-6">
                              <p id="number" class="invalid">A <b>number</b></p>
                           </div>
                           <div class="col-md-6">
                              <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                           </div>
                        </div>
                     </div>

                     <!--//form-group-->
                     <div class="text-center">
                        <button type="submit" name="registrasi" class="btn btn-login btn-sm w-100 theme-btn mx-auto"><i class="fas fa-user-plus"></i> Registrasi</button>
                     </div>
                  </form>

                  <div class="auth-option text-center pt-2">Sudah memiliki akun? <a class="text-link" href="/Login">Login</a> atau <a class="text-link" href="/">Kembali ke beranda</a>.</div>
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
   <script src="vendor/jquery/dist/jquery.min.js"></script>
   <!-- Bootstrap tether Core JavaScript -->
   <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <!-- SweetAlert2 -->
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <script>
      function btnView() {
         document.getElementById('password1').type = 'text';
         document.getElementById("icon-view").style.display = 'none';
         document.getElementById("icon-hidden").style.display = 'block';
         document.getElementById("icon-hidden").style.marginTop = '3px';
      }

      function btnHidden() {
         document.getElementById('password1').type = 'password';
         document.getElementById("icon-view").style.display = 'block';
         document.getElementById("icon-view").style.marginTop = '3px';
         document.getElementById("icon-hidden").style.display = 'none';
      }

      function PassVAlidation() {
         // Validasi Ulangi Password
         var password1 = document.getElementById("password1").value;
         var password2 = document.getElementById("password2").value;
         document.getElementById("message").style.display = "block";

         if (password2 != "") {
            if (password1 == password2) {
               document.getElementById("icon-true").style.display = 'block';
               document.getElementById("icon-true").style.color = '#3EC70B';
               document.getElementById("icon-true").style.marginTop = '3px';
               document.getElementById("icon-false").style.display = 'none';
            } else {
               document.getElementById("icon-true").style.display = 'none';
               document.getElementById("icon-false").style.color = '#FF1700';
               document.getElementById("icon-false").style.borderColor = '#FF1700';
               document.getElementById("icon-false").style.display = 'block';
               document.getElementById("icon-false").style.marginTop = '3px';
            }
         }

         // Validasi aturan password
         var myInput = document.getElementById("password1");
         var letter = document.getElementById("letter");
         var capital = document.getElementById("capital");
         var number = document.getElementById("number");
         var length = document.getElementById("length");
         // Validate lowercase letters
         var lowerCaseLetters = /[a-z]/g;
         if (myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
         } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
         }

         // Validate capital letters
         var upperCaseLetters = /[A-Z]/g;
         if (myInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
         } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
         }

         // Validate numbers
         var numbers = /[0-9]/g;
         if (myInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
         } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
         }

         // Validate length
         if (myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
         } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
         }
      }
   </script>
   <script>
      var success = '<?= $success; ?>';
      if (success != "") {
         Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Berhasil',
            text: success,
            showConfirmButton: false,
            timer: 3000,
            width: 400,
         })
      }

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