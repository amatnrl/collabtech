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
                           <option class="bg-light">Teknisi 1</option>
                           <option class="bg-light">Teknisi 2</option>
                           <option class="bg-light">Teknisi 3</option>
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
            <section id="employer-post-new-job">
               <div class="row">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-10 col-xs-offset-1" id="container">
                           <div class="res-steps-container">
                              <div class="res-steps res-step-1 active" data-class=".res-form-1">
                                 <div class="res-step-bar">08:00</div>
                                 <div class="res-progress-bar"></div>
                                 <div class="res-progress-title">On Proccess</div>
                              </div>
                              <div class="res-steps res-step-2" data-class=".res-form-2">
                                 <div class="res-step-bar">09:00</div>
                                 <div class="res-progress-bar"></div>
                                 <div class="res-progress-title">On Proccess</div>
                              </div>
                              <div class="res-steps res-step-3" data-class=".res-form-3">
                                 <div class="res-step-bar">10:00</div>
                                 <div class="res-progress-bar"></div>
                                 <div class="res-progress-title">On Proccess</div>
                              </div>
                              <div class="res-steps res-step-4" data-class=".res-form-4">
                                 <div class="res-step-bar">11:00</div>
                                 <div class="res-progress-bar"></div>
                                 <div class="res-progress-title">On Proccess</div>
                              </div>
                              <div class="res-steps res-step-5" data-class=".res-form-5">
                                 <div class="res-step-bar">12:00</div>
                                 <div class="res-progress-bar"></div>
                                 <div class="res-progress-title">On Proccess</div>
                              </div>
                              <div class="res-steps res-step-6" data-class=".res-form-6">
                                 <div class="res-step-bar">13:00</div>
                                 <div class="res-progress-bar"></div>
                                 <div class="res-progress-title">On Proccess</div>
                              </div>
                              <div class="res-steps res-step-7" data-class=".res-form-7">
                                 <div class="res-step-bar">14:00</div>
                                 <div class="res-progress-bar"></div>
                                 <div class="res-progress-title">On Proccess</div>
                              </div>
                              <div class="res-steps res-step-8" data-class=".res-form-8">
                                 <div class="res-step-bar">15:00</div>
                                 <div class="res-progress-bar"></div>
                                 <div class="res-progress-title">On Proccess</div>
                              </div>
                              <div class="res-steps res-step-9" data-class=".res-form-9">
                                 <div class="res-step-bar">16:00</div>
                                 <div class="res-progress-bar"></div>
                                 <div class="res-progress-title">On Proccess</div>
                              </div>
                              <div class="res-steps res-step-10" data-class=".res-form-10">
                                 <div class="res-step-bar">17:00</div>
                                 <div class="res-progress-bar"></div>
                                 <div class="res-progress-title">On Proccess</div>
                              </div>
                              <div class="res-steps res-step-11" data-class=".res-form-11">
                                 <div class="res-step-bar">18:00</div>
                                 <div class="res-progress-bar"></div>
                                 <div class="res-progress-title">On Proccess</div>
                              </div>
                           </div>
                           <div class="clearfix">&nbsp;</div>
                           <div class="clearfix">&nbsp;</div>

                           <div class="res-step-form col-md-8 res-form-1">
                              <div class="container">
                                 <h2>GGN-22082022-01</h2>
                                 <div class="row mb-2">
                                    <div class="col-md-3">Status</div>
                                    <div class="col-md-9">: <span class="text-warning fw-bold">On Proccess</span></div>
                                 </div>
                                 <div class="row mb-2">
                                    <div class="col-md-3">No Tiket</div>
                                    <div class="col-md-9">: IN02181723762</div>
                                 </div>
                                 <div class="row mb-2">
                                    <div class="col-md-3">Jenis Gangguan</div>
                                    <div class="col-md-9">: Kerusakaan Pada ODP</div>
                                 </div>
                              </div>
                           </div>

                           <div class="res-step-form col-md-8 res-form-2">
                              <div class="container">
                                 <h2>GGN-22082022-01</h2>
                                 <div class="row mb-2">
                                    <div class="col-md-3">Status</div>
                                    <div class="col-md-9">: <span class="text-warning fw-bold">On Proccess</span></div>
                                 </div>
                                 <div class="row mb-2">
                                    <div class="col-md-3">No Tiket</div>
                                    <div class="col-md-9">: IN02181723762</div>
                                 </div>
                                 <div class="row mb-2">
                                    <div class="col-md-3">Jenis Gangguan</div>
                                    <div class="col-md-9">: Kerusakaan Pada ODP</div>
                                 </div>
                              </div>
                           </div>

                           <div class="res-step-form col-md-8 res-form-3">
                              <div class="container">
                                 <h2>GGN-22082022-01</h2>
                                 <div class="row mb-2">
                                    <div class="col-md-3">Status</div>
                                    <div class="col-md-9">: <span class="text-warning fw-bold">On Proccess</span></div>
                                 </div>
                                 <div class="row mb-2">
                                    <div class="col-md-3">No Tiket</div>
                                    <div class="col-md-9">: IN02181723762</div>
                                 </div>
                                 <div class="row mb-2">
                                    <div class="col-md-3">Jenis Gangguan</div>
                                    <div class="col-md-9">: Kerusakaan Pada ODP</div>
                                 </div>
                              </div>
                           </div>

                           <div class="res-step-form col-md-8 res-form-4">
                              <div class="container">
                                 <h2>GGN-22082022-01</h2>
                                 <div class="row mb-2">
                                    <div class="col-md-3">Status</div>
                                    <div class="col-md-9">: <span class="text-warning fw-bold">On Proccess</span></div>
                                 </div>
                                 <div class="row mb-2">
                                    <div class="col-md-3">No Tiket</div>
                                    <div class="col-md-9">: IN02181723762</div>
                                 </div>
                                 <div class="row mb-2">
                                    <div class="col-md-3">Jenis Gangguan</div>
                                    <div class="col-md-9">: Kerusakaan Pada ODP</div>
                                 </div>
                              </div>
                           </div>

                           <div class="res-step-form col-md-8 res-form-11">
                              <div class="container">
                                 <h2>GGN-22082022-01</h2>
                                 <table border="0" class="w-100 table-progres">
                                    <tr>
                                       <th width="25%">Status</th>
                                       <th width="75%">: <span class="text-warning fw-bold">On Proccess</span></th>
                                    </tr>
                                    <tr>
                                       <th>No Tiket</th>
                                       <th>: IN02181723762</th>
                                    </tr>
                                    <tr>
                                       <th>Jenis Gangguan</th>
                                       <th>: Kerusakaan Pada ODP</th>
                                    </tr>
                                 </table>
                              </div>
                           </div>

                           <div class="row d-flex flex-row-reverse">
                              <div class="col-md-4 search-tiket">
                                 <div class="profil-teknisi text-center">
                                    <img src="images/user1.png" alt="user" class="rounded-circle m-2 avatar" width="150" />
                                 </div>
                                 <div class="text-center">
                                    <h3>Nama Teknisi</h3>
                                    <p>Witel</p>
                                 </div>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
         </div>
         </section>
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
         </div>
         <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-sm btn-reset" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-sm btn-submit">Submit</button>
         </div>
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
               <div class="col-md-4 form-input-text">Kontak Pelanggan</div>
               <div class="col-md-8"><input type="number" name="kontak_pelanggan" class="form-control form-control-sm form-input" placeholder="Masukan Kontak Pelanggan" required></div>
            </div>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Alamat Perambasan</div>
               <div class="col-md-8"><textarea class="form-control form-control-sm form-input" name="alamat_perambasan" placeholder="Masukan Alamat Perambasan" rows="3" required></textarea></div>
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
               <div class="col-md-4 form-input-text">Url Maps</div>
               <div class="col-md-8"><input type="url" name="url_maps" class="form-control form-control-sm form-input" placeholder="Masukan Url Lokasi" required></div>
            </div>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Alamat Peregelon</div>
               <div class="col-md-8"><textarea class="form-control form-control-sm form-input" name="alamat_peregelon" placeholder="Masukan Alamat Peregelon" rows="3" required></textarea></div>
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
               <div class="col-md-4 form-input-text">Url Maps</div>
               <div class="col-md-8"><input type="url" name="url_maps" class="form-control form-control-sm form-input" placeholder="Masukan Url Lokasi" required></div>
            </div>
            <div class="row mb-2 mt-3">
               <div class="col-md-4 form-input-text">Alamat Peregelon</div>
               <div class="col-md-8"><textarea class="form-control form-control-sm form-input" name="alamat_peregelon" placeholder="Masukan Alamat Peregelon" rows="3" required></textarea></div>
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