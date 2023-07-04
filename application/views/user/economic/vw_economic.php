<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            Economic
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
                <a href="<?= site_url('user/investasi'); ?>"> <span style="color: grey"> Investasi Awal </span>
                </td>
                <td>   <?php function rupiah($angka){
	            $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	            return $hasil_rupiah;
                    }?>
                    <?php $totalInvestasi_tahun1 = 0 ;?>
                 <?php foreach ($economic_investasi as $us) {
                    $totalInvestasi_tahun1 +=$us['harga_tahun1'];
                }?> 
                <?php  echo rupiah($totalInvestasi_tahun1)?></td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td>2</td>
                <!-- <td>
                
                </td> -->
                <td><a href="<?= site_url('user/keuntungan'); ?>"> <span style="color: grey"> Keuntungan Bersih (Biaya) </a> </span></td>
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
                <?php echo rupiah($keuntungan_bersih1)?> </td>

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
                <?php echo rupiah($keuntungan_bersih2)?> </td>
                
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
                <?php echo rupiah($keuntungan_bersih3)?> </span></td>

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
                <?php echo rupiah($keuntungan_bersih4)?> </span></td>

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
                <?php echo rupiah($keuntungan_bersih5)?></span></td>
            </tr>
            <tr>
                <td> 3</td>
                <!-- <td> </td> -->
                <td> <a href="<?= site_url('user/dataperusahaan'); ?>"> <span style="color: grey"> Pajak  </span> </td>
                
                <!-- tahun 1 -->
                <td><?php  $tarif_pajak=0 ;?>
                <?php foreach ($economic_data_perusahaan as $us) {
                    $tarif_pajak = $us['tarif_pajak'];
                }?>
                <?php $keuntungan_bersih ;?>
                <?php foreach ($economic as $us) {
                    $keuntungan_bersih1 =($total_tahun1) - ($biaya_tahun1);
                }?>
                <?php $pajak1 =($keuntungan_bersih1) * ($tarif_pajak) / 100;?>
                <?php echo rupiah($pajak1)?>  </td>

                <!-- tahun 2 -->
                <td> <?php  $tarif_pajak=0 ;?>
                <?php foreach ($economic_data_perusahaan as $us) {
                    $tarif_pajak = $us['tarif_pajak'];
                }?>
                <?php $keuntungan_bersih ;?>
                <?php foreach ($economic as $us) {
                    $keuntungan_bersih2 =($total_tahun2) - ($biaya_tahun2);
                }?>
                <?php $pajak2 =($keuntungan_bersih2) * ($tarif_pajak) / 100;?>
                <?php echo rupiah($pajak2)?>  </td>

                <!-- tahun 3 -->
                <td> <?php  $tarif_pajak =0;?>
                <?php foreach ($economic_data_perusahaan as $us) {
                    $tarif_pajak = $us['tarif_pajak'];
                }?>
                <?php $keuntungan_bersih ;?>
                <?php foreach ($economic as $us) {
                    $keuntungan_bersih3 =($total_tahun3) - ($biaya_tahun3);
                }?>
                <?php $pajak3 =($keuntungan_bersih3) * ($tarif_pajak) / 100;?>
                <?php echo rupiah($pajak3)?>  </td>

                <!-- tahun 4 -->
                <td> <?php  $tarif_pajak=0 ;?>
                <?php foreach ($economic_data_perusahaan as $us) {
                    $tarif_pajak = $us['tarif_pajak'];
                }?>
                <?php $keuntungan_bersih ;?>
                <?php foreach ($economic as $us) {
                    $keuntungan_bersih4 =($total_tahun4) - ($biaya_tahun4);
                }?>
                <?php $pajak4 =($keuntungan_bersih4) * ($tarif_pajak) / 100;?>
                <?php echo rupiah($pajak4)?> </td>

                <!-- tahun 5 -->
                <td> <?php  $tarif_pajak=0 ;?>
                <?php foreach ($economic_data_perusahaan as $us) {
                    $tarif_pajak = $us['tarif_pajak'];
                }?>
                <?php $keuntungan_bersih ;?>
                <?php foreach ($economic as $us) {
                    $keuntungan_bersih5 =($total_tahun5) - ($biaya_tahun5);
                }?>
                <?php $pajak5 =($keuntungan_bersih5) * ($tarif_pajak) / 100;?>
                <?php echo rupiah($pajak5)?> </td>
             </tr>
             <tr> 
                <td> 4 </td>
                <!-- <td> </td> -->
                <td><span style="color: grey"> Nilai Setelah Pajak </span>
            </td>

            <!-- tahun 1 -->
            <td> <?php $setelahpajak1 ;?>
                 <?php $setelahpajak1 = ($keuntungan_bersih1) - ($pajak1)?>
                 <?php echo rupiah($setelahpajak1)?> 
        </td>

            <!-- tahun 2 -->
            <td> <?php $setelahpajak2 ;?>
                 <?php $setelahpajak2 = ($keuntungan_bersih2) - ($pajak2)?>
                 <?php echo rupiah($setelahpajak2)?> </td>

            <!-- tahun 3 -->
            <td> <?php $setelahpajak3 ;?>
                 <?php $setelahpajak3 = ($keuntungan_bersih3) - ($pajak3)?>
                 <?php echo rupiah($setelahpajak3)?></td>

            <!-- tahun 4 -->
            <td><?php $setelahpajak4 ;?>
                 <?php $setelahpajak4 = ($keuntungan_bersih4) - ($pajak4)?>
                 <?php echo rupiah($setelahpajak4)?> </td>

            <!-- tahun 5 -->
            <td> <?php $setelahpajak5 ;?>
                 <?php $setelahpajak5 = ($keuntungan_bersih5) - ($pajak5)?>
                 <?php echo rupiah($setelahpajak5)?></td>
             </tr>
             <tr>
                <td> 5 </td>
                <!-- <td>  </td> -->
                <td> <span style="color: grey"> Arus Kas </span></td>

                <!-- tahun 1 -->
                <td> <?php $aruskas1; ?>
                    <?php $aruskas1 = ($setelahpajak1) ?>
                    <?php  echo rupiah($aruskas1) ?>   </td>

                <!-- tahun 2 -->
                <td> <?php $aruskas2; ?>
                    <?php $aruskas2 = ($setelahpajak2) ?>
                     <?php  echo rupiah($aruskas2) ?> </td>

                <!-- tahun 3 -->
                <td> <?php $aruskas3; ?>
                    <?php $aruskas3 = ($setelahpajak3) ?>
                   <?php  echo rupiah($aruskas3) ?></td>

                <!-- tahun 4 -->
                <td> <?php $aruskas4; ?>
                    <?php $aruskas4 = ($setelahpajak4) ?>
                    <?php  echo rupiah($aruskas4) ?> </td>

                <!-- tahun 5 -->
                <td><?php $aruskas5; ?>
                    <?php $aruskas5 = ($setelahpajak5) ?>
                    <?php  echo rupiah($aruskas5) ?> </td>
            </tr>

            <tr>
                <td> 6 </td>
                <!-- <td>  </td> -->
                <td><span style="color: grey"> Arus Kas  Kumulatif </span></td>

                <!-- tahun 1 -->
                 <td> <?php $totalInvestasi_tahun1 = 0 ;?>
                 <?php foreach ($economic_investasi as $us) {
                    $totalInvestasi_tahun1 +=$us['harga_tahun1'];
                }?>
                 <?php $kumulatif1 =(-($totalInvestasi_tahun1)) + ($aruskas1) ?>
                <?php echo rupiah($kumulatif1) ?>
                </td>

                <!-- tahun 2 -->
                <td> <?php  $kumulatif2 ;?>
                <?php $kumulatif2 = ($kumulatif1) + ($aruskas2)?>
                <?php echo rupiah($kumulatif2) ?>
            </td>

                <!-- tahun 3 -->
                <td> <?php  $kumulatif3 ;?>
                <?php $kumulatif3 = ($kumulatif2) + ($aruskas3)?>
                <?php echo rupiah($kumulatif3) ?> </td>

                <!-- tahun 4 -->
                <td> <?php  $kumulatif4 ;?>
                <?php $kumulatif4 = ($kumulatif3) + ($aruskas4)?>
                <?php echo rupiah ($kumulatif4) ?> </td>

                <!-- tahun 5 -->
                <td> <?php  $kumulatif5 ;?>
                <?php $kumulatif5 = ($kumulatif4) + ($aruskas5)?>
                <?php echo rupiah($kumulatif5) ?> </td>
            </tr>
            <tfoot>

               <!-- npv-->
               <tr>
            <th> 7 </th>
            <th> <span style="color: green;">Net Present Value( NPV) </span></th> 
            <th> <?php $tingkat_pengembalian = 0; ?>
                <?php foreach ($economic_data_perusahaan as $us) {
                    $tingkat_pengembalian = $us['tingkat_pengembalian'];
                }?>
            <?php $cashFlows = ($aruskas1)+($aruskas2)+($aruskas3)+($aruskas4)+($aruskas5)?>
            <?php $discountRate = ($tingkat_pengembalian)/100; ?>
            <?php $period = 5 ;?>
            <?php $npv = 0;?>

            <!-- perhitungan npv -->
            <?php $npv += ($cashFlows / pow(1 + $discountRate, $period)) - ($totalInvestasi_tahun1);?>
            <span style="color: green;"> <?php echo rupiah($npv,2)  ?></th> </span>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            </tr>


            <tr>
            <!-- payback period (pp) -->
            <th> 8 </th>
            <th> <span style="color: blue;"> Payback Period (PP) </span></th>
        

            <!-- rumus pp = [ total investasi / total arus kas] tahun -->
            <?php
            $totalCash = ($aruskas1) + ($aruskas2) + ($aruskas3) + ($aruskas4) + ($aruskas5);
            $pp = 0; // Inisialisasi $pp dengan nilai default

            if ($totalCash !== 0) {
            $pp = ($totalInvestasi_tahun1) / (($totalCash) / 5);
            }

            echo '<th>';
            if ($totalCash !== 0) {
            echo '<span style="color: blue;">' . round($pp, 2) . ' Tahun</span>';
            } else {
            echo '<span style="color: blue;">- Tahun</span>';
            }
            echo '</th>';
            ?>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            </tr>

            <!-- roi -->
            <!-- roi = ((Pendapatan - Biaya) / Biaya) x 100% -->
            <th>9 </th>
            <th> <span style="color: purple;"> Return on Investment (ROI) </span></th>
            <?php
            $totalKeuntungan = ($keuntungan_bersih1)+($keuntungan_bersih2)+($keuntungan_bersih3)+($keuntungan_bersih4)+($keuntungan_bersih5);
            $totalBiaya = ($biaya_tahun1)+($biaya_tahun2)+($biaya_tahun3)+($biaya_tahun4)+($biaya_tahun5) ;
            $roi = 0; // Inisialisasi $pp dengan nilai default

            if ($totalBiaya !== 0) {
                $roi = ((($totalKeuntungan)-($totalBiaya)) / ($totalBiaya));
            }

            echo '<th>';
            if ($totalBiaya !== 0) {
            echo '<span style="color: purple;">' . round($roi, 2) . ' %</span>';
            } else {
            echo '<span style="color: purple;">- %</span>';
            }
            echo '</th>';
            ?>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            </tr>

             <!-- irr -->
             <th> </th>
            <th> <span style="color: black;"> Status </span></th>
            <th>
            <?php
                if ($npv > 0) {
                    // Tindakan jika npv lebih dari atau sama dengan 0 (Layak)
                    echo '<span style="color: green;"><b>Layak</b></span>';
                } elseif ($pp <= 5 || $roi >0 ) {
                    // Tindakan jika pp atau roi kurang dari atau sama dengan 5 (Tidak Layak)
                    echo '<span style="color: red;"><b>Tidak Layak</b></span>';
                } else {
                    // Tindakan jika tidak memenuhi kondisi di atas (Tidak Layak)
                    echo '<span style="color: green;"><b>Layak</b></span>';
                    echo '<span style="color: red;"><b>Tidak Layak</b></span>';
                }
                ?> 
                </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            </tr>

                <!-- bep -->
            <!-- <tr>
            <th> 11 </th>
            <th>Break Event Point (BEP)</th>
            <th> <?php $npv ; ?>
            <?php $npv = (-($totalInvestasi_tahun1)) + (($aruskas1) + ($aruskas2)  + ($aruskas3) * 10 / 100)  ?> 
            Rp<?php echo $npv  ?></th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            </tr> -->


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->