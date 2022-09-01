<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="page-wrapper">
   <div class="container-fluid">
      <div class="row mb-3">
         <div class="card card-filter m-1 text-center">
            <div class="row">
               <div class="col-md-9">
                  <div class="row">
                     <div class="col-md-3">
                        <select class="form-select text-center form-select-sm input-filter" aria-label=".form-select-sm example" onchange="if (this.selectedIndex==0){ document.getElementById('p_witel').style.display = 'inline'; document.getElementById('sektor').style.display = 'none'; document.getElementById('teknisi').style.display = 'none'} else if (this.selectedIndex==1){ document.getElementById('p_witel').style.display = 'none'; document.getElementById('sektor').style.display = 'inline'; document.getElementById('teknisi').style.display = 'none' }else if (this.selectedIndex==2){ document.getElementById('p_witel').style.display = 'none'; document.getElementById('sektor').style.display = 'none'; document.getElementById('teknisi').style.display = 'inline' };">
                           <option class="bg-light">Witel</option>
                           <option class="bg-light">Sektor/Non Sektor</option>
                           <option class="bg-light">Teknisi</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div id="p_witel" style="display: inline;">
         <div class="row">
            <div class="card card-tabel pt-3">
               <h4 class="mb-3">Daftar Produktivitas Witel</h4>
               <div class="overflow-auto produktivitas">
                  <table id="" class="table table-bordered table-striped" style="width:100%">
                     <thead>
                        <tr>
                           <th style="vertical-align: middle; text-align: center;" rowspan="2">Witel</th>
                           <th style="vertical-align: middle; text-align: center;" rowspan="2">Jumlah Teknisi</th>
                           <th style="vertical-align: middle; text-align: center;" colspan="6">By Tiket</th>
                           <th style="vertical-align: middle; text-align: center;" colspan="4">By Pekerjaan</th>
                           <th style="vertical-align: middle; text-align: center;" rowspan="2">Total Tiket Dispatch</th>
                           <th style="vertical-align: middle; text-align: center;" rowspan="2">Produktivitas</th>
                        </tr>
                        <tr>
                           <th style="vertical-align: middle; text-align: center;">Tiket Gangguan</th>
                           <th style="vertical-align: middle; text-align: center;">Underspac</th>
                           <th style="vertical-align: middle; text-align: center;">Infracare</th>
                           <th style="vertical-align: middle; text-align: center;">Gamas</th>
                           <th style="vertical-align: middle; text-align: center;">Valins</th>
                           <th style="vertical-align: middle; text-align: center;">SQM</th>
                           <th style="vertical-align: middle; text-align: center;">Perambasan</th>
                           <th style="vertical-align: middle; text-align: center;">Peregelan</th>
                           <th style="vertical-align: middle; text-align: center;">Pengawasan</th>
                           <th style="vertical-align: middle; text-align: center;">Perapihan Dropcore</th>
                        </tr>
                     </thead>
                     <tbody>

                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>

      <div id="sektor" style="display: none;">
         <div class="row">
            <div class="card card-tabel pt-3">
               <h4 class="mb-3">Daftar Produktivitas Sektor / Non Sektor</h4>
               <div class="overflow-auto produktivitas">
                  <table id="" class="table table-bordered table-striped" style="width:100%">
                     <thead>
                        <tr>
                           <th style="vertical-align: middle; text-align: center;" rowspan="2">Witel</th>
                           <th style="vertical-align: middle; text-align: center;" rowspan="2">Sektor</th>
                           <th style="vertical-align: middle; text-align: center;" colspan="6">By Tiket</th>
                           <th style="vertical-align: middle; text-align: center;" colspan="4">By Pekerjaan</th>
                           <th style="vertical-align: middle; text-align: center;" rowspan="2">Total Tiket Dispatch</th>
                           <th style="vertical-align: middle; text-align: center;" rowspan="2">Produktivitas</th>
                        </tr>
                        <tr>
                           <th style="vertical-align: middle; text-align: center;">Tiket Gangguan</th>
                           <th style="vertical-align: middle; text-align: center;">Underspac</th>
                           <th style="vertical-align: middle; text-align: center;">Infracare</th>
                           <th style="vertical-align: middle; text-align: center;">Gamas</th>
                           <th style="vertical-align: middle; text-align: center;">Valins</th>
                           <th style="vertical-align: middle; text-align: center;">SQM</th>
                           <th style="vertical-align: middle; text-align: center;">Perambasan</th>
                           <th style="vertical-align: middle; text-align: center;">Peregelan</th>
                           <th style="vertical-align: middle; text-align: center;">Pengawasan</th>
                           <th style="vertical-align: middle; text-align: center;">Perapihan Dropcore</th>
                        </tr>
                     </thead>
                     <tbody>

                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>

      <div id="teknisi" style="display: none;">
         <div class="row">
            <div class="card card-tabel pt-3">
               <h4 class="mb-3">Daftar Produktivitas Teknisi</h4>
               <div class="overflow-auto produktivitas">
                  <table id="" class="table table-bordered table-striped" style="width:100%">
                     <thead>
                        <tr>
                           <th style="vertical-align: middle; text-align: center;" rowspan="2">Nama Teknisi</th>
                           <th style="vertical-align: middle; text-align: center;" rowspan="2">Jenis Teknisi</th>
                           <th style="vertical-align: middle; text-align: center;" colspan="6">By Tiket</th>
                           <th style="vertical-align: middle; text-align: center;" colspan="4">By Pekerjaan</th>
                           <th style="vertical-align: middle; text-align: center;" rowspan="2">Total Tiket Dispatch</th>
                           <th style="vertical-align: middle; text-align: center;" rowspan="2">Produktivitas</th>
                        </tr>
                        <tr>
                           <th style="vertical-align: middle; text-align: center;">Tiket Gangguan</th>
                           <th style="vertical-align: middle; text-align: center;">Underspac</th>
                           <th style="vertical-align: middle; text-align: center;">Infracare</th>
                           <th style="vertical-align: middle; text-align: center;">Gamas</th>
                           <th style="vertical-align: middle; text-align: center;">Valins</th>
                           <th style="vertical-align: middle; text-align: center;">SQM</th>
                           <th style="vertical-align: middle; text-align: center;">Perambasan</th>
                           <th style="vertical-align: middle; text-align: center;">Peregelan</th>
                           <th style="vertical-align: middle; text-align: center;">Pengawasan</th>
                           <th style="vertical-align: middle; text-align: center;">Perapihan Dropcore</th>
                        </tr>
                     </thead>
                     <tbody>

                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>

   </div>

</div>

<?= $this->endSection('content'); ?>