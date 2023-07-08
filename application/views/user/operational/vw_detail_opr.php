 <!-- Page Content -->
 <h2 class="h3 mb-2 text-gray-800">
     <?= $judul; ?>
 </h2>
 <hr>
 <!-- DataTables Example -->
 <div class="card mb-3">

     <div class="card-body">
         <div class="row">
             <div class="col-md-8">
                 <div class="table-responsive">
                     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                         <tbody>
                             <?php $i = 1; ?>
                             <?php foreach ($operational as $us) : ?>
                                 <!-- <tr>
                                     <td>Nama Projek</td>
                                     <td><?= $us['name']; ?></td>
                                 </tr> -->
                                 <tr>
                                     <td colspan="3"><b>Perfomance</b></td>
                                 </tr>
                                 <tr>
                                     <td>Deskripsi Sebelum</td>
                                     <td><?= $us['description_before_perfomance']; ?></td>
                                 </tr>
                                 <tr>
                                     <td>Deskripsi Sesudah</td>
                                     <td><?= $us['description_after_perfomance']; ?></td>
                                 </tr>
                                 <tr>
                                     <td colspan="3"><b>Information</b></td>
                                 </tr>
                                 <tr>
                                     <td>Deskripsi Sebelum</td>
                                     <td><?= $us['description_before_information']; ?></td>
                                 </tr>
                                 <tr>
                                     <td>Deskripsi Sesudah</td>
                                     <td><?= $us['description_after_information']; ?></td>
                                 </tr>
                                 <td colspan="3"><b>Economic</b></td>
                                 </tr>
                                 <tr>
                                     <td>Deskripsi Sebelum</td>
                                     <td><?= $us['description_before_economic']; ?></td>
                                 </tr>
                                 <tr>
                                     <td>Deskripsi Sesudah</td>
                                     <td><?= $us['description_after_economic']; ?></td>
                                 </tr>
                                 <td colspan="3"><b>Control</b></td>
                                 </tr>
                                 <tr>
                                     <td>Deskripsi Sebelum</td>
                                     <td><?= $us['description_before_control']; ?></td>
                                 </tr>
                                 <tr>
                                     <td>Deskripsi Sesudah</td>
                                     <td><?= $us['description_after_control']; ?></td>
                                 </tr>
                                 <td colspan="3"><b>Efficiency</b></td>
                                 </tr>
                                 <tr>
                                     <td>Deskripsi Sebelum</td>
                                     <td><?= $us['description_before_efficiency']; ?></td>
                                 </tr>
                                 <tr>
                                     <td>Deskripsi Sesudah</td>
                                     <td><?= $us['description_after_efficiency']; ?></td>
                                 </tr>
                                 <td colspan="3"><b>Services</b></td>
                                 </tr>
                                 <tr>
                                     <td>Deskripsi Sebelum</td>
                                     <td><?= $us['description_before_services']; ?></td>
                                 </tr>
                                 <tr>
                                     <td>Deskripsi Sesudah</td>
                                     <td><?= $us['description_after_services']; ?></td>
                                 </tr>
                                 
                                 <?php $i++; ?>
                             <?php endforeach; ?>
                         </tbody>
                     </table>
                 </div>
             </div>

         </div>