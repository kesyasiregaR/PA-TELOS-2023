<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            Summary
        </li>
    </ol>
    <h2 class="h3 mb-2 text-gray-800"><?=$judul;?></h2>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?= $this->session->flashdata('message');?>
        <div class="card-header py-3">
            
            <a href="<?= site_url('cetak');?>" class="btn btn-info">Downloads</a>

            
           
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <!-- <th>Nama Project</th> -->
                            <th>Technological</th>
                            <th>Economic</th>
                            <th>Legal</th>
                            <th>Operational</th>
                            <th>Schedule</th>
                            <th>Hasil Akhir</th>
                            <th>Status</th>
                        

                        </tr>
                    </thead>
                    <tbody>
                        <!-- teknologi -->
                        <tr>
                            <td>1</td>
                            <td>  
                                    <?php $status = ''; ?>
                                    <?php foreach ($technological as $us) {
                                        $status = $us['Date'];
                                    }?>
                                    <?php if ( $status >= '2017'): ?>
                                    <p> <span style = "color:  green;"> <b> Layak </b> </span> </p>

                                <?php else: ?>
                                    <p> <span style = "color:  red;"> <b> Tidak Layak </b> </span> </p>
                                    <p> Kurun waktu kelayakan = 5 tahun terakhir <p>
                                <?php endif; ?>
                            </td>
                            <!-- ekonomi -->
                        <td>
                    <?php
                            $pp = 0;
                            $npv = 0;
                            $roi = 0;

                            foreach ($economic as $us) {
                                // Perform your calculations here
                                // Update the values of $pp, $npv, and $roi as needed
                            }

                            if ($npv > 0) {
                                // Tindakan jika npv lebih dari atau sama dengan 0 (Layak)
                                echo '<span style="color: green;"><b>Layak</b></span>';
                            } elseif ($pp <= 5 || $roi > 0) {
                                // Tindakan jika pp atau roi kurang dari atau sama dengan 5 (Tidak Layak)
                                echo '<span style="color: red;"><b>Tidak Layak</b></span>';
                            } else {
                                // Tindakan jika tidak memenuhi kondisi di atas (Tidak Layak)
                                echo '<span style="color: green;"><b>Layak</b></span>';
                                echo '<span style="color: red;"><b>Tidak Layak</b></span>';
                            }
                            ?>
                            </td>
                        <!-- legal -->
                        <td>
                            
                             </td>
                        <!-- operational -->
                        <td>  </td>
                        <!-- skejul -->
                        <td> </td>
                        <!-- hasil akhir -->
                        <td> </td> 
                        <!-- status -->
                        <td> </td> 
                        </tr>



                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->