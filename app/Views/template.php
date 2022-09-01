<?php
$tgl = date("Y-m-d");
$ambiltgl = explode("-", $tgl);
$kalender = CAL_GREGORIAN;
$tahun = $ambiltgl[0];
$bulan = $ambiltgl[1];
$hari = cal_days_in_month($kalender, $bulan, $tahun);

$error = "";
$success = "";
if (session()->getFlashdata('berhasil')) {
   $success = session()->getFlashdata('berhasil');
} else if (session()->getFlashdata('error')) {
   $error = session()->getFlashdata('error');
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Flexy lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Flexy admin lite design, Flexy admin lite dashboard bootstrap 5 dashboard template" />
   <meta name="description" content="Flexy Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
   <meta name="robots" content="noindex,nofollow" />
   <!-- Favicon icon -->
   <link rel="icon" href="images/collabtech.svg">
   <title>COLLABTECT | <?= $title; ?></title>
   <base href="<?= base_url('assets'); ?>/">
   <!-- Fontawesome -->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
   <!-- Bootstrap -->
   <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <!-- Data Table -->
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
   <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet" />
   <link href="css/style-custom.css" rel="stylesheet" />
</head>

<body>
   <div class="preloader">
      <div class="lds-ripple">
         <div class="lds-pos"></div>
         <div class="lds-pos"></div>
      </div>
   </div>

   <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

      <header class="topbar" data-navbarbg="skin6">
         <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <div class="navbar-header" data-logobg="skin6">

               <a class="navbar-brand" href="/Dashboard">
                  <b class="logo-icon">
                     <img src="images/logo.svg" alt="homepage" class="dark-logo" width="200" />
                  </b>
               </a>
            </div>

            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
               <ul class="navbar-nav float-start me-auto">
                  <li class="nav-item search-box">
                     <a class="nav-link waves-effect waves-dark" data-bs-toggle="modal" data-bs-target="#Filter" href="javascript:void(0)"><i class="mdi mdi-filter me-1"></i>
                        <span class="font-16">Filter</span></a>
                  </li>
               </ul>
            </div>
         </nav>
      </header>

      <!-- MODAL FILTER -->
      <div class="modal fade" id="Filter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-sm">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><i class="mdi mdi-filter me-1"></i> Filter</h5>
                  <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="row mb-3">
                     <div class="col-md-12 mb-3">
                        <select class="form-select text-center form-select-sm input-filter" aria-label=".form-select-sm example">
                           <option class="bg-light" selected>Witel</option>
                           <?php foreach ($witel as $key => $value) { ?>
                              <option class="bg-light"><?= $value['witel']; ?></option>
                           <?php } ?>
                        </select>
                     </div>
                     <div class="col-md-12 mb-3">
                        <select class="form-select text-center form-select-sm input-filter" aria-label=".form-select-sm example" onchange="if (this.selectedIndex==1){ document.getElementById('teknisi_sektor').style.display = 'inline' }else { document.getElementById('teknisi_sektor').style.display = 'none' };">
                           <option class="bg-light" selected>Teknisi</option>
                           <option class="bg-light">Sektor</option>
                           <option class="bg-light">Non Sektor</option>
                        </select>
                     </div>
                     <span id="teknisi_sektor" style="display:none;">
                        <div class="col-md-12 mb-3">
                           <select class="form-select text-center form-select-sm input-filter" aria-label=".form-select-sm example">
                              <option class="bg-light" selected>Sektor</option>
                              <option class="bg-light">Sektor A</option>
                              <option class="bg-light">Sektor B</option>
                              <option class="bg-light">Sektor C</option>
                           </select>
                        </div>
                     </span>
                     <div class="col-md-12">
                        <div class="row">
                           <div class="col-md-6">
                              <input type="date" class="form-control form-control-sm text-center input-filter" value="<?= date('Y-m-01'); ?>" id="exampleInputPassword1">
                           </div>
                           <div class="col-md-6">
                              <input type="date" class="form-control form-control-sm text-center input-filter" value="<?= date('Y-m-' . $hari); ?>" id="exampleInputPassword1">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer justify-content-center">
                  <button type="button" class="btn btn-sm btn-reset" data-bs-dismiss="modal">Reset</button>
                  <button type="button" class="btn btn-sm btn-submit">Submit</button>
               </div>
            </div>
         </div>
      </div>

      <aside class="left-sidebar" data-sidebarbg="skin6">
         <!-- Sidebar scroll-->
         <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
               <ul id="sidebarnav">
                  <li class="sidebar-item bg-profil">
                     <span class="sidebar-link waves-effect waves-dark" data-bs-toggle="modal" data-bs-target="#Profil" aria-expanded="false"><img src="images/user.png" alt="user" class="rounded-circle m-2" width="31" /><span class="hide-menu">Muhammad Nur</span></span>
                  </li>
                  <hr>
                  <li class="sidebar-item <?= isset($linkdashboard) ? 'active' : '' ?>">
                     <a class="sidebar-link waves-effect waves-dark" href="/Dashboard" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
                  </li>
                  <li class="sidebar-item <?= isset($linkpembagiantiket) ? 'active' : '' ?>">
                     <a class="sidebar-link waves-effect waves-dark" href="/PembagianTiket" aria-expanded="false"><i class="mdi mdi-ticket-confirmation"></i><span class="hide-menu">Pembagian Tiket</span></a>
                  </li>
                  <li class="sidebar-item <?= isset($linkdatabaseterkini) ? 'active' : '' ?>">
                     <a class="sidebar-link waves-effect waves-dark" href="/DatabaseTerkini" aria-expanded="false"><i class="mdi mdi-table-large"></i><span class="hide-menu">Database Terkini</span></a>
                  </li>
                  <li class="sidebar-item <?= isset($linkproduktivitas) ? 'active' : '' ?>">
                     <a class="sidebar-link waves-effect waves-dark" href="/Produktivitas" aria-expanded="false"><i class="mdi mdi-table-column-width"></i><span class="hide-menu">Produktivitas</span></a>
                  </li>
               </ul>
            </nav>
            <!-- End Sidebar navigation -->
         </div>
         <!-- End Sidebar scroll-->
      </aside>

      <!-- Modal Profil -->
      <div class="modal fade" id="Profil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <form action="/Registrasi/updateuser" method="POST">
                  <input type="hidden" name="id_user" value="<?= $datauser[0]['id_user']; ?>">
                  <div class="modal-body p-0">
                     <div id="tampil-aksi-update">
                        <a type="button" id="btn-update" onclick="btnUpdate()" class="btn btn-sm btn-update-profil"><i class="mdi mdi-account-edit me-1"></i></a>
                     </div>
                     <div id="tampil-aksi-cancel" style="display: none;">
                        <a type="button" id="btn-cancel" onclick="btnCancel()" class="btn btn-sm btn-update-profil"><i class="mdi mdi-close me-1"></i></a>
                     </div>
                     <img src="images/coverr.jpg" class="bg-card-profil" alt="">
                     <div class="profil text-center">
                        <img src="images/user.png" alt="user" class="rounded-circle m-2 avatar" width="150" />
                     </div>
                     <div class="text-center">
                        <h3>Muhammad Nur</h3>
                        <span>Admin</span>
                     </div>
                     <div class="row px-5 mb-2 mt-3">
                        <div class="col-md-3 text-form">Nama</div>
                        <div class="col-md-9"><input type="text" name="nama" id="nama" value="<?= $datauser[0]['nama']; ?>" disabled required class="form-control form-control-sm input-filter"></div>
                     </div>
                     <div class="row px-5 mb-2">
                        <div class="col-md-3 text-form">NIK</div>
                        <div class="col-md-9"><input type="number" name="nik" id="nik" value="<?= $datauser[0]['nik']; ?>" disabled required class="form-control form-control-sm input-filter"></div>
                     </div>
                     <div class="row px-5 mb-2">
                        <div class="col-md-3 text-form">Jabatan</div>
                        <div class="col-md-9" id="tampiljabatan">
                           <?php if ($datauser[0]['jabatan'] != "Admin") { ?>
                              <select class="form-select form-select-sm input-filter" id="jabatan" name="jabatan" aria-label=".form-select-sm example" disabled required>
                                 <?php foreach ($jabatan as $key => $value) {
                                    if ($datauser[0]['jabatan'] == $value['jabatan']) { ?>
                                       <option value="<?= $value['id_jabatan']; ?>" class="bg-light" selected><?= $value['jabatan']; ?></option>
                                    <?php } else { ?>
                                       <option value="<?= $value['id_jabatan']; ?>" class="bg-light"><?= $value['jabatan']; ?></option>
                                 <?php }
                                 } ?>
                              </select>
                           <?php } else { ?>
                              <select class="form-select form-select-sm input-filter" id="jabatan" name="jabatan" aria-label=".form-select-sm example" disabled required>
                                 <option value="<?= $value['id_jabatan']; ?>" class="bg-light" selected><?= $datauser[0]['jabatan']; ?></option>
                                 <?php foreach ($jabatan as $key => $value) { ?>
                                    <option value="<?= $value['id_jabatan']; ?>" class="bg-light"><?= $value['jabatan']; ?></option>
                                 <?php } ?>
                              </select>
                           <?php } ?>
                        </div>
                     </div>
                     <div class="row px-5 mb-2">
                        <div class="col-md-3 text-form">Witel</div>
                        <div class="col-md-9" id="tampilwitel">
                           <select class="form-select form-select-sm input-filter" id="witel" name="witel" aria-label=".form-select-sm example" disabled required>
                              <?php foreach ($witel as $key => $value) {
                                 if ($datauser[0]['witel'] == $value['witel']) { ?>
                                    <option value="<?= $value['id_witel']; ?>" class="bg-light" selected><?= $value['witel']; ?></option>
                                 <?php } else { ?>
                                    <option value="<?= $value['id_witel']; ?>" class="bg-light"><?= $value['witel']; ?></option>
                              <?php }
                              } ?>
                           </select>
                        </div>
                     </div>
                     <div class="row px-5 mb-2">
                        <div class="col-md-3 text-form">Password</div>
                        <div class="col-md-9">
                           <input type="password" onkeyup="PassVAlidation()" name="password" id="password" value="<?= $datauser[0]['pass']; ?>" disabled class="form-control form-control-sm input-filter" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Passwor harus terdiri dari 8 karakter dengan camputan huruf kecil, huruf kapital dan angka">
                           <div style="font-size: 10px; display: none;" id="ket_pass" class="form-text text-center">Kosongkan password jika tidak ingin mengganti!</div>
                        </div>
                     </div>
                     <div class="row px-5">
                        <div class="col-md-3 text-form"></div>
                        <div class="col-md-9">
                           <div id="message" class="mt-1">
                              <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                              <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                              <p id="number" class="invalid">A <b>number</b></p>
                              <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer justify-content-center">
                     <div id="tampil-logout">
                        <a type="button" name="logout" id="logout" onclick="logout()" class="btn btn-sm btn-logout"><i class="mdi mdi-logout me-1"></i> Logout</a>
                     </div>
                     <div id="tampil-update" style="display: none;">
                        <button type="submit" name="update" id="update" class="btn btn-sm btn-submit"><i class="mdi mdi-account-edit me-1"></i> Submit</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>

      <!-- main -->
      <?= $this->renderSection('content'); ?>
      <!-- end main -->

   </div>

   <script src="vendor/jquery/dist/jquery.min.js"></script>
   <!-- Bootstrap tether Core JavaScript -->
   <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <!-- data table -->
   <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
   <!-- SweetAlert -->
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <!--Wave Effects -->
   <script src="js/waves.js"></script>
   <!--Menu sidebar -->
   <script src="js/sidebarmenu.js"></script>
   <!--Custom JavaScript -->
   <script src="js/custom.js"></script>

   <script>
      $(document).ready(function() {
         $('#example').DataTable({
            lengthMenu: [20, 100, 200]
         });
      });
   </script>

   <script>
      function logout() {
         Swal.fire({
            title: 'Anda akan keluar dari halaman ini?',
            showCancelButton: true,
            confirmButtonText: 'Ya!',
         }).then((result) => {
            if (result.isConfirmed) {
               window.location.href = "/Login/logout"
            }
         })
      }

      function btnUpdate() {
         $("#nama").prop('disabled', false);
         $("#nik").prop('disabled', false);
         $("#jabatan").prop('disabled', false);
         $("#witel").prop('disabled', false);
         $("#password").prop('disabled', false);
         document.getElementById("password").value = '';
         document.getElementById("tampil-logout").style.display = 'none';
         document.getElementById("tampil-update").style.display = 'block';
         document.getElementById("tampil-aksi-update").style.display = 'none';
         document.getElementById("tampil-aksi-cancel").style.display = 'block';
         document.getElementById("ket_pass").style.display = "block";
      }

      function btnCancel() {
         $("#nama").prop('disabled', true);
         $("#nik").prop('disabled', true);
         $("#jabatan").prop('disabled', true);
         $("#witel").prop('disabled', true);
         $("#password").prop('disabled', true);
         document.getElementById("nama").value = '<?= $datauser[0]['nama']; ?>';
         document.getElementById("nik").value = '<?= $datauser[0]['nik']; ?>';
         document.getElementById("password").value = '<?= $datauser[0]['pass']; ?>';
         document.getElementById("message").style.display = "none";
         document.getElementById("ket_pass").style.display = "none";

         var tampiljabatan = `
         <?php if ($datauser[0]['jabatan'] != "Admin") { ?>
            <select class="form-select form-select-sm input-filter" id="jabatan" name="jabatan" aria-label=".form-select-sm example" disabled required>
               <?php foreach ($jabatan as $key => $value) {
                  if ($datauser[0]['jabatan'] == $value['jabatan']) { ?>
                     <option class="bg-light" selected><?= $value['jabatan']; ?></option>
                  <?php } else { ?>
                     <option class="bg-light"><?= $value['jabatan']; ?></option>
               <?php }
               } ?>
            </select>
         <?php } else { ?>
            <select class="form-select form-select-sm input-filter" id="jabatan" name="jabatan" aria-label=".form-select-sm example" disabled required>
               <option class="bg-light" selected><?= $datauser[0]['jabatan']; ?></option>
               <?php foreach ($jabatan as $key => $value) { ?>
                  <option class="bg-light"><?= $value['jabatan']; ?></option>
               <?php } ?>
            </select>
         <?php } ?>
         `
         $("#tampiljabatan").html(tampiljabatan);

         var tampilwitel = `
         <select class="form-select form-select-sm input-filter" id="witel" name="witel" aria-label=".form-select-sm example" disabled required>
            <?php foreach ($witel as $key => $value) {
               if ($datauser[0]['witel'] == $value['witel']) { ?>
                  <option class="bg-light" selected><?= $value['witel']; ?></option>
               <?php } else { ?>
                  <option class="bg-light"><?= $value['witel']; ?></option>
            <?php }
            } ?>
         </select>
         `
         $("#tampilwitel").html(tampilwitel);

         document.getElementById("tampil-logout").style.display = 'block';
         document.getElementById("tampil-update").style.display = 'none';
         document.getElementById("tampil-aksi-update").style.display = 'block';
         document.getElementById("tampil-aksi-cancel").style.display = 'none';
      }

      function PassVAlidation() {
         document.getElementById("message").style.display = "block";

         // Validasi aturan password
         var myInput = document.getElementById("password");
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
      $(document).ready(function() {
         $("#f_teknisi").change(function() {
            var getTeknisi = $("#f_teknisi").val();
            var getTgl = $("#f_tgl").val();
            $.ajax({
               type: 'POST',
               dataType: "JSON",
               url: "<?= base_url('Filter/teknisi'); ?>",
               data: {
                  teknisi: getTeknisi,
                  tgl: getTgl
               },
               success: function(data) {
                  console.log(data)
                  var dataprogres = '';
                  var datamodalprogres = '';
                  var no = 1;
                  // TIKET GANGGUAN
                  if (data['tiket_gangguan'] != '') {
                     for (i = 0; i < data['tiket_gangguan'].length; i++) {
                        if (data['tiket_gangguan'][i]['class_jam_lewat'] != "-") {
                           var lewat = "lewat";
                        } else {
                           var lewat = "";
                        }

                        dataprogres += `
                        <tr>
                           <td height="40px" class="text-center">
                              <p class="no_progres">` + no + `</p>
                           </td>
                           <td colspan="13">
                              <div class="pekerjaan tiket_gangguan ` + data['tiket_gangguan'][i]['class_jam_mulai'] + ` ` + data['tiket_gangguan'][i]['class_range'] + `" data-bs-toggle="modal" data-bs-target="#TiketGangguan` + i + `">
                                 <span class="title_progres">` + data['tiket_gangguan'][i]['order_id'] + `</span>
                              </div>
                              <div class="` + lewat + ` ` + data['tiket_gangguan'][i]['class_jam_mulai_baru'] + ` ` + data['tiket_gangguan'][i]['class_jam_lewat'] + `"></div>
                           </td>
                        </tr>`;

                        datamodalprogres += `
                        <div class="modal fade" id="TiketGangguan` + i + `" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Form Tiket Gangguan ` + data['tiket_gangguan'][i]['order_id'] + ` <span class="text-secondary" style="font-size: 10px;"> (` + data['tiket_gangguan'][i]['ket'] + `)</span></h5>
                                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <form action="/PembagianTiket/UpdateTiketGangguan" method="POST">
                                 <input type="hidden" name="id_gangguan" value="` + data['tiket_gangguan'][i]['id_gangguan'] + `">
                                    <?= csrf_field(); ?>
                                    <div class="modal-body">
                                       <div class="row mb-2 mt-3">
                                          <div class="col-md-4 form-input-text">No Tiket</div>
                                          <div class="col-md-8"><input type="text" name="no_tiket" value="` + data['tiket_gangguan'][i]['no_tiket'] + `" class="form-control form-control-sm form-input" placeholder="Masukan No Tiket" required></div>
                                       </div>
                                       <div class="row mb-2 mt-3">
                                          <div class="col-md-4 form-input-text">Nama Pelanggan</div>
                                          <div class="col-md-8"><input type="text" name="nama_pelanggan" value="` + data['tiket_gangguan'][i]['nama_pelanggan'] + `" class="form-control form-control-sm form-input" placeholder="Masukan Nama Pelanggan" required></div>
                                       </div>
                                       <div class="row mb-2 mt-3">
                                          <div class="col-md-4 form-input-text">Kontak Pelanggan</div>
                                          <div class="col-md-8"><input type="number" name="kontak_pelanggan" value="` + data['tiket_gangguan'][i]['kontak_pelanggan'] + `" class="form-control form-control-sm form-input" placeholder="Masukan Kontak Pelanggan" required></div>
                                       </div>
                                       <div class="row mb-2 mt-3">
                                          <div class="col-md-4 form-input-text">Headline Tiket</div>
                                          <div class="col-md-8"><input type="text" name="headline_tiket" value="` + data['tiket_gangguan'][i]['headline_tiket'] + `" class="form-control form-control-sm form-input" placeholder="Masukan Headline Tiket" required></div>
                                       </div>
                                       <div class="row mb-2 mt-3">
                                          <div class="col-md-4 form-input-text">No Internet</div>
                                          <div class="col-md-8"><input type="number" name="no_internet" value="` + data['tiket_gangguan'][i]['no_internet'] + `" class="form-control form-control-sm form-input" placeholder="Masukan No Internet" required></div>
                                       </div>
                                       <div class="row mb-2 mt-3">
                                          <div class="col-md-4 form-input-text">Symtomp Ggn</div>
                                          <div class="col-md-8"><input type="text" name="symtomp_ggn" value="` + data['tiket_gangguan'][i]['symtomp_ggn'] + `" class="form-control form-control-sm form-input" placeholder="Masukan Symtomp Ggn" required></div>
                                       </div>
                                       <div class="row mb-2 mt-3">
                                          <div class="col-md-4 form-input-text">Alamat</div>
                                          <div class="col-md-8"><textarea class="form-control form-control-sm form-input" name="alamat" placeholder="Masukan Alamat" rows="3" required>` + data['tiket_gangguan'][i]['alamat'] + `</textarea></div>
                                       </div>
                                       <hr>
                                       <div class="row mb-2 mt-3">
                                          <div class="col-md-4 form-input-text">Teknisi</div>
                                          <div class="col-md-8">
                                             <select class="form-select text-center form-select-sm form-input" name="teknisi" aria-label=".form-select-sm example">
                                                <option class="bg-light" selected>Teknisi</option>
                                                <?php foreach ($absensi as $key => $value) {
                                                   if ($value['teknisi2'] == "-") { ?>
                                                      <option value="<?= $value['id_absensi']; ?>" class="bg-light"><?= $value['teknisi1']; ?></option>
                                                   <?php } else { ?>
                                                      <option value="<?= $value['id_absensi']; ?>" class="bg-light"><?= $value['teknisi1']; ?> - <?= $value['teknisi2']; ?></option>
                                                <?php }
                                                } ?>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="row mb-2 mt-3">
                                          <div class="col-md-4 form-input-text">Range Pekerjaan</div>
                                          <div class="col-md-8">
                                             <div class="row">
                                                <div class="col-md-5">
                                                   <select class="form-select text-center form-select-sm form-input" name="jam_mulai" aria-label=".form-select-sm example">
                                                      <option class="bg-light">08:00</option>
                                                      <option class="bg-light">09:00</option>
                                                      <option class="bg-light">10:00</option>
                                                      <option class="bg-light">11:00</option>
                                                      <option class="bg-light">12:00</option>
                                                      <option class="bg-light">13:00</option>
                                                      <option class="bg-light">14:00</option>
                                                      <option class="bg-light">15:00</option>
                                                      <option class="bg-light">16:00</option>
                                                      <option class="bg-light">17:00</option>
                                                      <option class="bg-light">18:00</option>
                                                      <option class="bg-light">19:00</option>
                                                      <option class="bg-light">20:00</option>
                                                   </select>
                                                </div>
                                                <div class="col-md-2">S/D</div>
                                                <div class="col-md-5">
                                                   <select class="form-select text-center form-select-sm form-input" name="jam_target" aria-label=".form-select-sm example">
                                                      <option class="bg-light">08:00</option>
                                                      <option class="bg-light">09:00</option>
                                                      <option class="bg-light">10:00</option>
                                                      <option class="bg-light">11:00</option>
                                                      <option class="bg-light">12:00</option>
                                                      <option class="bg-light">13:00</option>
                                                      <option class="bg-light">14:00</option>
                                                      <option class="bg-light">15:00</option>
                                                      <option class="bg-light">16:00</option>
                                                      <option class="bg-light">17:00</option>
                                                      <option class="bg-light">18:00</option>
                                                      <option class="bg-light">19:00</option>
                                                      <option class="bg-light">20:00</option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                       <a href="/PembagianTiket/delete/` + data['tiket_gangguan'][i]['id_gangguan'] + `" type="button" class="btn btn-sm btn-logout">Delete</a>
                                       <button type="submit" name="edit-tiket-gangguan" class="btn btn-sm btn-submit">Update</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>`;
                        no++;
                     }
                  }
                  $("#dataprogres").html(dataprogres);
                  $("#datamodalprogres").html(datamodalprogres);
               }
            });
         });
      });
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