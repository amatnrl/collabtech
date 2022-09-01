<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="page-wrapper">
   <div class="container-fluid">

      <div class="row">
         <div class="card card-filter m-1 text-center">
            <div class="row">
               <div class="col-md-9">
                  <div class="row">
                     <div class="col-md-3">
                        <select class="form-select text-center form-select-sm input-filter" aria-label=".form-select-sm example">
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
                     <div class="col-md-3">
                        <input type="date" class="form-control form-control-sm text-center input-filter" value="<?= date('Y-m-d'); ?>">
                     </div>
                     <div class="col-md-3">
                        <select class="form-select text-center form-select-sm input-filter" aria-label=".form-select-sm example">
                           <option class="bg-light" selected>Jam</option>
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
                        </select>
                     </div>
                     <div class="col-md-3">
                        <div class="dropdown">
                           <button class="btn btn-sm btn-submit  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="mdi mdi-plus"></i>Assign Pekerjaan
                           </button>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#ByTiket">By Tiket</button></li>
                              <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#ByPekerjaan">By Pekerjaan</button></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-md-3">
                  <div class="row d-flex flex-row-reverse">
                     <div class="col-md-12 search-tiket">
                        <span><i class="mdi mdi-magnify me-1"></i></span>
                        <input type="search" class="form-control form-control-sm input-search" placeholder="Cari Tiket">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="row mt-3">
         <div class="card card-progres">
            <table>
               <tr>
                  <td class="text-center" height="50px" width="4.4%">NO</td>
                  <td class="text-center" height="50px" width="7.3%">08:00</td>
                  <td class="text-center" height="50px" width="7.3%">09:00</td>
                  <td class="text-center" height="50px" width="7.3%">10:00</td>
                  <td class="text-center" height="50px" width="7.3%">11:00</td>
                  <td class="text-center" height="50px" width="7.3%">12:00</td>
                  <td class="text-center" height="50px" width="7.3%">13:00</td>
                  <td class="text-center" height="50px" width="7.3%">14:00</td>
                  <td class="text-center" height="50px" width="7.3%">15:00</td>
                  <td class="text-center" height="50px" width="7.3%">16:00</td>
                  <td class="text-center" height="50px" width="7.3%">17:00</td>
                  <td class="text-center" height="50px" width="7.3%">18:00</td>
                  <td class="text-center" height="50px" width="7.3%">19:00</td>
                  <td class="text-center" height="50px" width="7.3%">20:00</td>
               </tr>
               <span id="dataprogres"></span>
               <tr>
                  <td height="40px" class="text-center">
                     <p class="no_progres">1</p>
                  </td>
                  <td colspan="13">
                     <div class="pekerjaan infracare jam_8 range_2" data-bs-toggle="modal" data-bs-target="#Infracare">
                        <span class="title_progres">GGN-240822-01</span>
                     </div>
                     <div class="lewat jam_10 range_30"></div>
                  </td>
               </tr>
               <tr>
                  <td height="40px" class="text-center">
                     <p class="no_progres">2</p>
                  </td>
                  <td colspan="13">
                     <div class="pekerjaan gamas jam_10_30 range_2" data-bs-toggle="modal" data-bs-target="#Gamas">
                        <span class="title_progres">GGN-240822-02</span>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td height="40px" class="text-center">
                     <p class="no_progres">3</p>
                  </td>
                  <td colspan="13">
                     <div class="pekerjaan valins jam_12_30 range_1_30" data-bs-toggle="modal" data-bs-target="#Valins">
                        <span class="title_progres">GGN-240822-003</span>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td height="40px" class="text-center">
                     <p class="no_progres">4</p>
                  </td>
                  <td colspan="13">
                     <div class="pekerjaan tiket_gangguan jam_14 range_2" data-bs-toggle="modal" data-bs-target="#TiketGangguan">
                        <span class="title_progres">GGN-240822-04</span>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td height="40px" class="text-center">
                     <p class="no_progres">5</p>
                  </td>
                  <td colspan="13">
                     <div class="pekerjaan underspec jam_16 range_2" data-bs-toggle="modal" data-bs-target="#Underspec">
                        <span class="title_progres">GGN-240822-05</span>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td height="40px" class="text-center">
                     <p class="no_progres">6</p>
                  </td>
                  <td colspan="13">
                     <div class="pekerjaan sqm jam_18 range_2" data-bs-toggle="modal" data-bs-target="#SQM">
                        <span class="title_progres">GGN-240822-06</span>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td height="40px" class="text-center">
                     <p class="no_progres">7</p>
                  </td>
                  <td colspan="13">
                     <div class="pekerjaan perambasan jam_8 range_3" data-bs-toggle="modal" data-bs-target="#Perambasan">
                        <span class="title_progres">Perambasan</span>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td height="40px" class="text-center">
                     <p class="no_progres">8</p>
                  </td>
                  <td colspan="13">
                     <div class="pekerjaan peregelan jam_11 range_3" data-bs-toggle="modal" data-bs-target="#Peregelan">
                        <span class="title_progres">Peregelan</span>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td height="40px" class="text-center">
                     <p class="no_progres">9</p>
                  </td>
                  <td colspan="13">
                     <div class="pekerjaan pengawasan jam_14 range_3" data-bs-toggle="modal" data-bs-target="#Pengawasan">
                        <span class="title_progres">Pengawasan</span>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td height="40px" class="text-center">
                     <p class="no_progres">10</p>
                  </td>
                  <td colspan="13">
                     <div class="pekerjaan perapihan_dropcore jam_17 range_3" data-bs-toggle="modal" data-bs-target="#PerapihanDropcore">
                        <span class="title_progres">Perapihan Dropcore</span>
                     </div>
                  </td>
               </tr>
            </table>
            <hr>

            <div class="container">
               <div class="row mb-2">
                  Keterangan :
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div class="row mb-2" style="font-size: 12px;">
                        <div class="tiket_gangguan" style="height: 17px; width: 0px !important; border-radius: 2px; margin-right: 10px;"></div>
                        Tiket Gangguan
                     </div>
                     <div class="row mb-2" style="font-size: 12px;">
                        <div class="underspec" style="height: 17px; width: 0px !important; border-radius: 2px; margin-right: 10px;"></div>
                        Underspac
                     </div>
                     <div class="row mb-2" style="font-size: 12px;">
                        <div class="infracare" style="height: 17px; width: 0px !important; border-radius: 2px; margin-right: 10px;"></div>
                        Infracare
                     </div>
                     <div class="row mb-2" style="font-size: 12px;">
                        <div class="gamas" style="height: 17px; width: 0px !important; border-radius: 2px; margin-right: 10px;"></div>
                        Gamas
                     </div>
                     <div class="row mb-2" style="font-size: 12px;">
                        <div class="valins" style="height: 17px; width: 0px !important; border-radius: 2px; margin-right: 10px;"></div>
                        Valins
                     </div>
                     <div class="row mb-2" style="font-size: 12px;">
                        <div class="sqm" style="height: 17px; width: 0px !important; border-radius: 2px; margin-right: 10px;"></div>
                        SQM
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="row mb-2" style="font-size: 12px;">
                        <div class="perambasan" style="height: 17px; width: 0px !important; border-radius: 2px; margin-right: 10px;"></div>
                        Perambasan
                     </div>
                     <div class="row mb-2" style="font-size: 12px;">
                        <div class="peregelan" style="height: 17px; width: 0px !important; border-radius: 2px; margin-right: 10px;"></div>
                        Peregelan
                     </div>
                     <div class="row mb-2" style="font-size: 12px;">
                        <div class="pengawasan" style="height: 17px; width: 0px !important; border-radius: 2px; margin-right: 10px;"></div>
                        Pengawasan
                     </div>
                     <div class="row mb-2" style="font-size: 12px;">
                        <div class="perapihan_dropcore" style="height: 17px; width: 0px !important; border-radius: 2px; margin-right: 10px;"></div>
                        Perapihan Dropcore
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>

</div>

<!-- Modal Assign Pekerjaan By Tiket -->
<div class="modal fade" id="ByTiket" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Assign Pekerjaan By Tiket</h5>
            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="row mb-3">
               <div class="col-md-12 mb-2">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#TiketGangguan" class="btn btn-sm btn-assign w-100">Tiket Gangguan</button>
               </div>
               <div class="col-md-12 mb-2">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#Underspec" class="btn btn-sm btn-assign w-100">Underspec</button>
               </div>
               <div class="col-md-12 mb-2">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#Infracare" class="btn btn-sm btn-assign w-100">Infracare</button>
               </div>
               <div class="col-md-12 mb-2">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#Gamas" class="btn btn-sm btn-assign w-100">Gamas</button>
               </div>
               <div class="col-md-12 mb-2">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#Valins" class="btn btn-sm btn-assign w-100">Valins</button>
               </div>
               <div class="col-md-12 mb-2">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#SQM" class="btn btn-sm btn-assign w-100">SQM</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Modal TiketGangguan -->
<div class="modal fade" id="TiketGangguan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Tiket Gangguan</h5>
            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <form action="/PembagianTiket/InsertTiketGangguan" method="POST">
            <?= csrf_field(); ?>
            <div class="modal-body">
               <div class="row mb-2 mt-3">
                  <div class="col-md-4 form-input-text">No Tiket</div>
                  <div class="col-md-8"><input type="text" name="no_tiket" class="form-control form-control-sm form-input" placeholder="Masukan No Tiket" required></div>
               </div>
               <div class="row mb-2 mt-3">
                  <div class="col-md-4 form-input-text">Nama Pelanggan</div>
                  <div class="col-md-8"><input type="text" name="nama_pelanggan" class="form-control form-control-sm form-input" placeholder="Masukan Nama Pelanggan" required></div>
               </div>
               <div class="row mb-2 mt-3">
                  <div class="col-md-4 form-input-text">Kontak Pelanggan</div>
                  <div class="col-md-8"><input type="number" name="kontak_pelanggan" class="form-control form-control-sm form-input" placeholder="Masukan Kontak Pelanggan" required></div>
               </div>
               <div class="row mb-2 mt-3">
                  <div class="col-md-4 form-input-text">Headline Tiket</div>
                  <div class="col-md-8"><input type="text" name="headline_tiket" class="form-control form-control-sm form-input" placeholder="Masukan Headline Tiket" required></div>
               </div>
               <div class="row mb-2 mt-3">
                  <div class="col-md-4 form-input-text">No Internet</div>
                  <div class="col-md-8"><input type="number" name="no_internet" class="form-control form-control-sm form-input" placeholder="Masukan No Internet" required></div>
               </div>
               <div class="row mb-2 mt-3">
                  <div class="col-md-4 form-input-text">Symtomp Ggn</div>
                  <div class="col-md-8"><input type="text" name="symtomp_ggn" class="form-control form-control-sm form-input" placeholder="Masukan Symtomp Ggn" required></div>
               </div>
               <div class="row mb-2 mt-3">
                  <div class="col-md-4 form-input-text">Alamat</div>
                  <div class="col-md-8"><textarea class="form-control form-control-sm form-input" name="alamat" placeholder="Masukan Alamat" rows="3" required></textarea></div>
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
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer justify-content-center">
               <button type="button" class="btn btn-sm btn-reset" data-bs-dismiss="modal">Close</button>
               <button type="submit" name="tambah-tiket-gangguan" class="btn btn-sm btn-submit">Submit</button>
            </div>
         </form>
      </div>
   </div>
</div>

<!-- Modal Underspec -->
<div class="modal fade" id="Underspec" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Underspec</h5>
            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">No Tiket</div>
               <div class="col-md-8"><input type="text" name="no_tiket" class="form-control form-control-sm form-input" placeholder="Masukan No Tiket" required></div>
            </div>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Nama Pelanggan</div>
               <div class="col-md-8"><input type="text" name="nama_pelanggan" class="form-control form-control-sm form-input" placeholder="Masukan Nama Pelanggan" required></div>
            </div>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">No Internet</div>
               <div class="col-md-8"><input type="number" name="no_internet" class="form-control form-control-sm form-input" placeholder="Masukan No Internet" required></div>
            </div>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">ODP</div>
               <div class="col-md-8"><input type="text" name="odp" class="form-control form-control-sm form-input" placeholder="Masukan ODP" required></div>
            </div>
            <hr>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Teknisi</div>
               <div class="col-md-8">
                  <select class="form-select text-center form-select-sm form-input" name="teknisi" aria-label=".form-select-sm example">
                     <option class="bg-light" selected>Teknisi</option>
                     <option class="bg-light">Teknisi 1</option>
                     <option class="bg-light">Teknisi 2</option>
                     <option class="bg-light">Teknisi 3</option>
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
                        </select>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-sm btn-reset" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-sm btn-submit">Submit</button>
         </div>
      </div>
   </div>
</div>

<!-- Modal Infracare -->
<div class="modal fade" id="Infracare" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Infracare</h5>
            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">No Tiket</div>
               <div class="col-md-8"><input type="text" name="no_tiket" class="form-control form-control-sm form-input" placeholder="Masukan No Tiket" required></div>
            </div>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Jenis Gangguan</div>
               <div class="col-md-8"><input type="text" name="jns_gangguan" class="form-control form-control-sm form-input" placeholder="Masukan Jenis Gangguan" required></div>
            </div>
            <hr>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Teknisi</div>
               <div class="col-md-8">
                  <select class="form-select text-center form-select-sm form-input" name="teknisi" aria-label=".form-select-sm example">
                     <option class="bg-light" selected>Teknisi</option>
                     <option class="bg-light">Teknisi 1</option>
                     <option class="bg-light">Teknisi 2</option>
                     <option class="bg-light">Teknisi 3</option>
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
                        </select>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-sm btn-reset" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-sm btn-submit">Submit</button>
         </div>
      </div>
   </div>
</div>

<!-- Modal Gamas -->
<div class="modal fade" id="Gamas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Gamas</h5>
            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">No Tiket</div>
               <div class="col-md-8"><input type="text" name="no_tiket" class="form-control form-control-sm form-input" placeholder="Masukan No Tiket" required></div>
            </div>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Headline Gamas</div>
               <div class="col-md-8"><input type="text" name="headline_gamas" class="form-control form-control-sm form-input" placeholder="Masukan Headline Gamas" required></div>
            </div>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Alpro</div>
               <div class="col-md-8"><input type="text" name="alpro" class="form-control form-control-sm form-input" placeholder="Masukan Nama Alpro" required></div>
            </div>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Letak Gamas</div>
               <div class="col-md-8"><input type="text" name="letak_gamas" class="form-control form-control-sm form-input" placeholder="Masukan Letak Gamas" required></div>
            </div>
            <hr>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Teknisi</div>
               <div class="col-md-8">
                  <select class="form-select text-center form-select-sm form-input" name="teknisi" aria-label=".form-select-sm example">
                     <option class="bg-light" selected>Teknisi</option>
                     <option class="bg-light">Teknisi 1</option>
                     <option class="bg-light">Teknisi 2</option>
                     <option class="bg-light">Teknisi 3</option>
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
                        </select>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-sm btn-reset" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-sm btn-submit">Submit</button>
         </div>
      </div>
   </div>
</div>

<!-- Modal Valins -->
<div class="modal fade" id="Valins" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Valins</h5>
            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">ODP</div>
               <div class="col-md-8"><input type="text" name="odp" class="form-control form-control-sm form-input" placeholder="Masukan ODP" required></div>
            </div>
            <hr>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Teknisi</div>
               <div class="col-md-8">
                  <select class="form-select text-center form-select-sm form-input" name="teknisi" aria-label=".form-select-sm example">
                     <option class="bg-light" selected>Teknisi</option>
                     <option class="bg-light">Teknisi 1</option>
                     <option class="bg-light">Teknisi 2</option>
                     <option class="bg-light">Teknisi 3</option>
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
                        </select>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-sm btn-reset" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-sm btn-submit">Submit</button>
         </div>
      </div>
   </div>
</div>

<!-- Modal SQM -->
<div class="modal fade" id="SQM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form SQM</h5>
            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">No Tiket</div>
               <div class="col-md-8"><input type="text" name="no_tiket" class="form-control form-control-sm form-input" placeholder="Masukan No Tiket" required></div>
            </div>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Nama Pelanggan</div>
               <div class="col-md-8"><input type="text" name="nama_pelanggan" class="form-control form-control-sm form-input" placeholder="Masukan Nama Pelanggan" required></div>
            </div>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Kontak Pelanggan</div>
               <div class="col-md-8"><input type="number" name="kontak_pelanggan" class="form-control form-control-sm form-input" placeholder="Masukan Kontak Pelanggan" required></div>
            </div>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Headline Tiket</div>
               <div class="col-md-8"><input type="text" name="headline_tiket" class="form-control form-control-sm form-input" placeholder="Masukan Headline Tiket" required></div>
            </div>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Alamat</div>
               <div class="col-md-8"><textarea class="form-control form-control-sm form-input" name="alamat" placeholder="Masukan Alamat" rows="3" required></textarea></div>
            </div>
            <hr>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Teknisi</div>
               <div class="col-md-8">
                  <select class="form-select text-center form-select-sm form-input" name="teknisi" aria-label=".form-select-sm example">
                     <option class="bg-light" selected>Teknisi</option>
                     <option class="bg-light">Teknisi 1</option>
                     <option class="bg-light">Teknisi 2</option>
                     <option class="bg-light">Teknisi 3</option>
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
                        </select>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-sm btn-reset" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-sm btn-submit">Submit</button>
         </div>
      </div>
   </div>
</div>

<!-- Modal Assign Pekerjaan By Pekerjaan -->
<div class="modal fade" id="ByPekerjaan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Assign Pekerjaan By Pekerjaan</h5>
            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="row mb-3">
               <div class="col-md-12 mb-2">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#Perambasan" class="btn btn-sm btn-assign w-100">Perambasan</button>
               </div>
               <div class="col-md-12 mb-2">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#Peregelan" class="btn btn-sm btn-assign w-100">Peregelan</button>
               </div>
               <div class="col-md-12 mb-2">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#Pengawasan" class="btn btn-sm btn-assign w-100">Pengawasan</button>
               </div>
               <div class="col-md-12 mb-2">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#PerapihanDropcore" class="btn btn-sm btn-assign w-100">Perapihan Dropcore</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Modal Perambasan -->
<div class="modal fade" id="Perambasan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Perambasan</h5>
            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Alpro terdekat</div>
               <div class="col-md-8"><input type="text" name="alpro_terdekat" class="form-control form-control-sm form-input" placeholder="Masukan Alpro terdekat" required></div>
            </div>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Alamat Perambasan</div>
               <div class="col-md-8"><textarea class="form-control form-control-sm form-input" name="alamat_perambasan" placeholder="Masukan Alamat Perambasan" rows="3" required></textarea></div>
            </div>
            <hr>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Teknisi</div>
               <div class="col-md-8">
                  <select class="form-select text-center form-select-sm form-input" name="teknisi" aria-label=".form-select-sm example">
                     <option class="bg-light" selected>Teknisi</option>
                     <option class="bg-light">Teknisi 1</option>
                     <option class="bg-light">Teknisi 2</option>
                     <option class="bg-light">Teknisi 3</option>
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
                        </select>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-sm btn-reset" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-sm btn-submit">Submit</button>
         </div>
      </div>
   </div>
</div>

<!-- Modal Peregelan -->
<div class="modal fade" id="Peregelan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Peregelan</h5>
            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Alpro terdekat</div>
               <div class="col-md-8"><input type="text" name="alpro_terdekat" class="form-control form-control-sm form-input" placeholder="Masukan Alpro terdekat" required></div>
            </div>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Alamat Peregelon</div>
               <div class="col-md-8"><textarea class="form-control form-control-sm form-input" name="alamat_peregelon" placeholder="Masukan Alamat Peregelon" rows="3" required></textarea></div>
            </div>
            <hr>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Teknisi</div>
               <div class="col-md-8">
                  <select class="form-select text-center form-select-sm form-input" name="teknisi" aria-label=".form-select-sm example">
                     <option class="bg-light" selected>Teknisi</option>
                     <option class="bg-light">Teknisi 1</option>
                     <option class="bg-light">Teknisi 2</option>
                     <option class="bg-light">Teknisi 3</option>
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
                        </select>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-sm btn-reset" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-sm btn-submit">Submit</button>
         </div>
      </div>
   </div>
</div>

<!-- Modal Pengawasan -->
<div class="modal fade" id="Pengawasan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Pengawasan</h5>
            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Alpro terdekat</div>
               <div class="col-md-8"><input type="text" name="alpro_terdekat" class="form-control form-control-sm form-input" placeholder="Masukan Alpro terdekat" required></div>
            </div>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Alamat Peregelon</div>
               <div class="col-md-8"><textarea class="form-control form-control-sm form-input" name="alamat_peregelon" placeholder="Masukan Alamat Peregelon" rows="3" required></textarea></div>
            </div>
            <hr>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Teknisi</div>
               <div class="col-md-8">
                  <select class="form-select text-center form-select-sm form-input" name="teknisi" aria-label=".form-select-sm example">
                     <option class="bg-light" selected>Teknisi</option>
                     <option class="bg-light">Teknisi 1</option>
                     <option class="bg-light">Teknisi 2</option>
                     <option class="bg-light">Teknisi 3</option>
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
                        </select>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-sm btn-reset" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-sm btn-submit">Submit</button>
         </div>
      </div>
   </div>
</div>

<!-- Modal Perapihan Dropcore -->
<div class="modal fade" id="PerapihanDropcore" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Perapihan Dropcore</h5>
            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Alpro terdekat</div>
               <div class="col-md-8"><input type="text" name="alpro_terdekat" class="form-control form-control-sm form-input" placeholder="Masukan Alpro terdekat" required></div>
            </div>
            <hr>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Teknisi</div>
               <div class="col-md-8">
                  <select class="form-select text-center form-select-sm form-input" name="teknisi" aria-label=".form-select-sm example">
                     <option class="bg-light" selected>Teknisi</option>
                     <option class="bg-light">Teknisi 1</option>
                     <option class="bg-light">Teknisi 2</option>
                     <option class="bg-light">Teknisi 3</option>
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
                        </select>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-sm btn-reset" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-sm btn-submit">Submit</button>
         </div>
      </div>
   </div>
</div>

<?= $this->endSection('content'); ?>