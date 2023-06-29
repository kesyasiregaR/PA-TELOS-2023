<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            Master Data
        </li>
    </ol>
    <h2 class="h3 mb-2 text-gray-800"><?=$judul;?></h2>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?= $this->session->flashdata('message');?>
        <!-- <div class="card-header py-3">
            <a href=<?=base_url('user/economic/tambah');?> class="btn btn-info">Tambah Data</a>
        </div> -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="1">
                <div class="form-group">
                            <label for="name">Nama Projek</label>
                            <select class="form-control" id="" name="name">
                                <?php foreach ($dataproject as $us) : ?>
                                    <option value="<?= $us['name']; ?>"><?= $us['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                <thead>
                <tr>
                <th>No</th>
                <!-- <th>Nama Projek</th> -->
                <th>Akumulasi Biaya</th>
                <th>Tahun 1</th>
                <th>Tahun 2</th>
                <th>Tahun 3</th>
                <th>Tahun 4</th>
                <th>Tahun 5</th>
            </tr>
        </thead>
        <tbody> 
            <tr>
                <td>
                    1
                </td>
                <td>
                    Investasi Awal
                </td>
                <td>  <?php $totalInvestasi_tahun1 = 0 ;?>
                 <?php foreach ($economic_investasi as $us) {
                    $totalInvestasi_tahun1 +=$us['harga_tahun1'];
                }?> 
                Rp<?php  echo ($totalInvestasi_tahun1)?></td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td>2</td>
                <!-- <td>
                
                </td> -->
                <td><span>Keuntungan Bersih (Biaya)</span></td>
                <!-- tahun 1 -->
                <td>
                <?php  $total_tahun1=0 ;?>
                <?php foreach ($economic_keuntungan as $us) {
                    $total_tahun1 +=$us['keuntungan_tahun1']; 
                }?>
                <?php  $biaya_tahun1=0 ;?>
                <?php foreach ($economic_komponen_biaya as $us) {
                    $biaya_tahun1 +=$us['biaya_tahun1'];
                }?>
                <?php $keuntungan_bersih1 =($total_tahun1) - ($biaya_tahun1) ;?>
                Rp<?php echo ($keuntungan_bersih1)?> </td>

                <!-- tahun 2 -->
                <td><span><?php  $total_tahun2=0 ;?>
                <?php foreach ($economic_keuntungan as $us) {
                    $total_tahun2 +=$us['keuntungan_tahun2']; 
                }?>
                <?php $i = 2; $biaya_tahun2=0 ;?>
                <?php foreach ($economic_komponen_biaya as $us) {
                    $biaya_tahun2 +=$us['biaya_tahun2'];
                }?>
                <?php $keuntungan_bersih2 =($total_tahun2) - ($biaya_tahun2) ;?>
                Rp<?php echo ($keuntungan_bersih2)?> </td>
                
                <!-- tahun 3 -->
                <td><span><?php  $total_tahun3=0 ;?>
                <?php foreach ($economic_keuntungan as $us) {
                    $total_tahun3 +=$us['keuntungan_tahun3']; 
                }?>
                <?php $i = 3; $biaya_tahun3=0 ;?>
                <?php foreach ($economic_komponen_biaya as $us) {
                    $biaya_tahun3 +=$us['biaya_tahun3'];
                }?>
                <?php $keuntungan_bersih3 =($total_tahun3) - ($biaya_tahun3) ;?>
                Rp<?php echo ($keuntungan_bersih3)?> </span></td>

                <!-- tahun 4 -->
                <td><span> <?php  $total_tahun4=0 ;?>
                <?php foreach ($economic_keuntungan as $us) {
                    $total_tahun4 +=$us['keuntungan_tahun4']; 
                }?>
                <?php $i = 4; $biaya_tahun4=0 ;?>
                <?php foreach ($economic_komponen_biaya as $us) {
                    $biaya_tahun4 +=$us['biaya_tahun4'];
                }?>
                <?php $keuntungan_bersih4 =($total_tahun4) - ($biaya_tahun4) ;?>
                Rp<?php echo ($keuntungan_bersih4)?> </span></td>

                <!-- tahun 5 -->
                <td><span><?php  $total_tahun5=0 ;?>
                <?php foreach ($economic_keuntungan as $us) {
                    $total_tahun5 +=$us['keuntungan_tahun5']; 
                }?>
                <?php $i = 5; $biaya_tahun5=0 ;?>
                <?php foreach ($economic_komponen_biaya as $us) {
                    $biaya_tahun5 +=$us['biaya_tahun5'];
                }?>
                <?php $keuntungan_bersih5 =($total_tahun5) - ($biaya_tahun5) ;?>
                Rp<?php echo ($keuntungan_bersih5)?></span></td>
            </tr>
            <tr>
                <td> 3</td>
                <!-- <td> </td> -->
                <td> Pajak </td>
                
                <!-- tahun 1 -->
                <td><?php  $tarif_pajak ;?>
                <?php foreach ($economic_data_perusahaan as $us) {
                    $tarif_pajak = $us['tarif_pajak'];
                }?>
                <?php $keuntungan_bersih ;?>
                <?php foreach ($economic as $us) {
                    $keuntungan_bersih1 =($total_tahun1) - ($biaya_tahun1);
                }?>
                <?php $pajak1 =($keuntungan_bersih1) * ($tarif_pajak) / 100;?>
                Rp<?php echo ($pajak1)?>  </td>

                <!-- tahun 2 -->
                <td> <?php  $tarif_pajak ;?>
                <?php foreach ($economic_data_perusahaan as $us) {
                    $tarif_pajak = $us['tarif_pajak'];
                }?>
                <?php $keuntungan_bersih ;?>
                <?php foreach ($economic as $us) {
                    $keuntungan_bersih2 =($total_tahun2) - ($biaya_tahun2);
                }?>
                <?php $pajak2 =($keuntungan_bersih2) * ($tarif_pajak) / 100;?>
                Rp<?php echo ($pajak2)?>  </td>

                <!-- tahun 3 -->
                <td> <?php  $tarif_pajak ;?>
                <?php foreach ($economic_data_perusahaan as $us) {
                    $tarif_pajak = $us['tarif_pajak'];
                }?>
                <?php $keuntungan_bersih ;?>
                <?php foreach ($economic as $us) {
                    $keuntungan_bersih3 =($total_tahun3) - ($biaya_tahun3);
                }?>
                <?php $pajak3 =($keuntungan_bersih3) * ($tarif_pajak) / 100;?>
                Rp<?php echo ($pajak3)?>  </td>

                <!-- tahun 4 -->
                <td> <?php  $tarif_pajak ;?>
                <?php foreach ($economic_data_perusahaan as $us) {
                    $tarif_pajak = $us['tarif_pajak'];
                }?>
                <?php $keuntungan_bersih ;?>
                <?php foreach ($economic as $us) {
                    $keuntungan_bersih4 =($total_tahun4) - ($biaya_tahun4);
                }?>
                <?php $pajak4 =($keuntungan_bersih4) * ($tarif_pajak) / 100;?>
                Rp<?php echo ($pajak4)?> </td>

                <!-- tahun 5 -->
                <td> <?php  $tarif_pajak ;?>
                <?php foreach ($economic_data_perusahaan as $us) {
                    $tarif_pajak = $us['tarif_pajak'];
                }?>
                <?php $keuntungan_bersih ;?>
                <?php foreach ($economic as $us) {
                    $keuntungan_bersih5 =($total_tahun5) - ($biaya_tahun5);
                }?>
                <?php $pajak5 =($keuntungan_bersih5) * ($tarif_pajak) / 100;?>
                Rp<?php echo ($pajak5)?> </td>
             </tr>
             <tr> 
                <td> 4 </td>
                <!-- <td> </td> -->
                <td> Nilai Setelah Pajak
            </td>

            <!-- tahun 1 -->
            <td> <?php $setelahpajak1 ;?>
                 <?php $setelahpajak1 = ($keuntungan_bersih1) - ($pajak1)?>
                 Rp<?php echo ($setelahpajak1)?> 
        </td>

            <!-- tahun 2 -->
            <td> <?php $setelahpajak2 ;?>
                 <?php $setelahpajak2 = ($keuntungan_bersih2) - ($pajak2)?>
                 Rp<?php echo ($setelahpajak2)?> </td>

            <!-- tahun 3 -->
            <td> <?php $setelahpajak3 ;?>
                 <?php $setelahpajak3 = ($keuntungan_bersih3) - ($pajak3)?>
                 Rp<?php echo ($setelahpajak3)?></td>

            <!-- tahun 4 -->
            <td><?php $setelahpajak4 ;?>
                 <?php $setelahpajak4 = ($keuntungan_bersih4) - ($pajak4)?>
                 Rp<?php echo ($setelahpajak4)?> </td>

            <!-- tahun 5 -->
            <td> <?php $setelahpajak5 ;?>
                 <?php $setelahpajak5 = ($keuntungan_bersih5) - ($pajak5)?>
                 Rp<?php echo ($setelahpajak5)?></td>
             </tr>
             <tr>
                <td> 5 </td>
                <!-- <td>  </td> -->
                <td> Arus Kas </td>

                <!-- tahun 1 -->
                <td> <?php $aruskas1; ?>
                    <?php $aruskas1 = ($setelahpajak1) ?>
                    Rp <?php  echo ($aruskas1) ?>   </td>

                <!-- tahun 2 -->
                <td> <?php $aruskas2; ?>
                    <?php $aruskas2 = ($setelahpajak2) ?>
                    Rp <?php  echo ($aruskas2) ?> </td>

                <!-- tahun 3 -->
                <td> <?php $aruskas3; ?>
                    <?php $aruskas3 = ($setelahpajak3) ?>
                    Rp <?php  echo ($aruskas3) ?></td>

                <!-- tahun 4 -->
                <td> <?php $aruskas4; ?>
                    <?php $aruskas4 = ($setelahpajak4) ?>
                    Rp <?php  echo ($aruskas4) ?> </td>

                <!-- tahun 5 -->
                <td><?php $aruskas5; ?>
                    <?php $aruskas5 = ($setelahpajak5) ?>
                    Rp <?php  echo ($aruskas5) ?> </td>
            </tr>

            <tr>
                <td> 6 </td>
                <!-- <td>  </td> -->
                <td> Arus Kas  Kumulatif</td>

                <!-- tahun 1 -->
                 <td> <?php $totalInvestasi_tahun1 = 0 ;?>
                 <?php foreach ($economic_investasi as $us) {
                    $totalInvestasi_tahun1 +=$us['harga_tahun1'];
                }?>
                 <?php $kumulatif1 =(-($totalInvestasi_tahun1)) + ($aruskas1) ?>
                 Rp <?php echo ($kumulatif1) ?>
                </td>

                <!-- tahun 2 -->
                <td> <?php  $kumulatif2 ;?>
                <?php $kumulatif2 = ($kumulatif1) + ($aruskas2)?>
                Rp<?php echo $kumulatif2 ?>
            </td>

                <!-- tahun 3 -->
                <td> <?php  $kumulatif3 ;?>
                <?php $kumulatif3 = ($kumulatif2) + ($aruskas3)?>
                Rp<?php echo $kumulatif3 ?> </td>

                <!-- tahun 4 -->
                <td> <?php  $kumulatif4 ;?>
                <?php $kumulatif4 = ($kumulatif3) + ($aruskas4)?>
                Rp<?php echo $kumulatif4 ?> </td>

                <!-- tahun 5 -->
                <td> <?php  $kumulatif5 ;?>
                <?php $kumulatif5 = ($kumulatif4) + ($aruskas5)?>
                Rp<?php echo $kumulatif5 ?> </td>
            </tr>
            <tfoot>

               <!-- bep -->
               <tr>
            <th> 7 </th>
            <th>Break Event Point (BEP)</th>
            <th> <?php $npv ; ?>
             <?php $npv = (-($totalInvestasi_tahun1)) + (($aruskas1) + ($aruskas2)  + ($aruskas3) * 10 / 100)  ?> 
            Rp<?php echo $npv  ?></th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            </tr>

                <!-- npv -->
            <tr>
            <th> 8 </th>
            <th>Net Present Value( NPV)</th>
            <th> <?php $npv ; ?>
             <?php $npv = (-($totalInvestasi_tahun1)) + (($aruskas1) + ($aruskas2)  + ($aruskas3) * 10 / 100)  ?> 
            Rp<?php echo $npv  ?></th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            </tr>

            <tr>
            <!-- payback period (pp) -->
            <th> 8 </th>
            <th>Payback Period (PP)</th>
            <th>Rp<?php echo $total_tahun1; ?> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            </tr>

            <!-- irr -->
            <th>9 </th>
            <th> Internal Rate of Return (IRR)</th>
            <th>Rp<?php echo $total_tahun1; ?> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            </tr>

            <!-- roi -->
            <th>10 </th>
            <th> Return on Investment (ROI)</th>
            <th>Rp<?php echo $total_tahun1; ?> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->