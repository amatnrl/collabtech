<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="page-wrapper">
   <div class="container-fluid">

      <div class="row">
         <div class="card m-1 card-dashboard text-center">
            <h5>Total Tiket</h5>
            <span>0</span>
         </div>

         <div class="card m-1 card-dashboard text-center">
            <h5>Tiket Closed</h5>
            <span>0</span>
         </div>aaa

         <div class="card m-1 card-dashboard text-center">
            <h5>Tiket Open</h5>
            <span>0</span>
         </div>

         <div class="card m-1 card-dashboard text-center">
            <h5>Tiket Comply</h5>
            <span>0</span>
         </div>

         <div class="card m-1 card-dashboard text-center">
            <h5>Tiket Not Comply</h5>
            <span>0</span>
         </div>
      </div>

      <div class="row mt-3">
         <div class="card card-tabel pt-3">
            <h4 class="mb-3">Progres Tiket</h4>
            <table id="example" class="display" style="width:100%">
               <thead>
                  <tr>
                     <th>No. Tiket</th>
                     <th>Jenis Tiket</th>
                     <th>Teknisi</th>
                     <th>Progress</th>
                     <th>Witel</th>
                     <th>Status Tiket</th>
                     <th>Detail</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>Tiger Nixon</td>
                     <td>System Architect</td>
                     <td>Edinburgh</td>
                     <td>61</td>
                     <td>2011-04-25</td>
                     <td>$320,800</td>
                     <td>$320,800</td>
                  </tr>
                  <tr>
                     <td>Tiger Nixon</td>
                     <td>System Architect</td>
                     <td>Edinburgh</td>
                     <td>61</td>
                     <td>2011-04-25</td>
                     <td>$320,800</td>
                     <td>$320,800</td>
                  </tr>
                  <tr>
                     <td>Tiger Nixon</td>
                     <td>System Architect</td>
                     <td>Edinburgh</td>
                     <td>61</td>
                     <td>2011-04-25</td>
                     <td>$320,800</td>
                     <td>$320,800</td>
                  </tr>
                  <tr>
                     <td>Tiger Nixon</td>
                     <td>System Architect</td>
                     <td>Edinburgh</td>
                     <td>61</td>
                     <td>2011-04-25</td>
                     <td>$320,800</td>
                     <td>$320,800</td>
                  </tr>
                  <tr>
                     <td>Tiger Nixon</td>
                     <td>System Architect</td>
                     <td>Edinburgh</td>
                     <td>61</td>
                     <td>2011-04-25</td>
                     <td>$320,800</td>
                     <td>$320,800</td>
                  </tr>

               </tbody>
            </table>
         </div>
      </div>
   </div>

</div>

<?= $this->endSection('content'); ?>