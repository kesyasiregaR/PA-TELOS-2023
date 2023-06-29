<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/economic'); ?>">Economic</a>
        </li>
        <li class="breadcrumb-item active">
            Keuntungan
        </li>
    </ol>
    <h2 class="h3 mb-2 text-gray-800"><?=$judul;?></h2>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?= $this->session->flashdata('message');?>
        <div class="card-header py-3">
            <a href=<?=base_url('user/keuntungan/tambah');?> class="btn btn-info">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Sumber keuntungan</th>
                            <th>Tahun 1</th>
                            <th>Tahun 2</th>
                            <th>Tahun 3</th>
                            <th>Tahun 4</th>
                            <th>Tahun 5</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; $total_tahun1=0 ; $total_tahun2=0; $total_tahun3=0; $total_tahun4=0; $total_tahun5=0; ?>
                        <?php foreach ($economic_keuntungan as $us) : ?>
                            <?php $total_tahun1 +=$us['keuntungan_tahun1']; 
                                  $total_tahun2 +=$us['keuntungan_tahun2'];
                                  $total_tahun3 +=$us['keuntungan_tahun3'];
                                  $total_tahun4 +=$us['keuntungan_tahun4']; 
                                  $total_tahun5 +=$us['keuntungan_tahun5'];?>
                        
                        <tr>
                            <td><?=$i;?></td>
                            <td><?= $us['sumber_keuntungan'];?></td>
                            <td><?= $us['keuntungan_tahun1'];?></td>
                            <td><?= $us['keuntungan_tahun2'];?></td>
                            <td><?= $us['keuntungan_tahun3'];?></td>
                            <td><?= $us['keuntungan_tahun4'];?></td>
                            <td><?= $us['keuntungan_tahun5'];?></td>

                            <td>
                            <a href="<?= base_url('User/keuntungan/hapus/').$us['id_economic_keuntungan'];?>" class="btn btn-xs btn-danger btn-delete"> <i class="fa fa-trash"></i></a>
                                <a href="<?= base_url('User/keuntungan/edit/').$us['id_economic_keuntungan'];?>" class="btn btn-xs btn-info btn-ed-periode" data-task="edit" ><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
        
                        <?php $i++;?>
                        <?php endforeach; ?>
                        <tfoot>
                        <tr>
                            <th> </th>
                            <th>Total</th>
                
                        <th>Rp<?php echo $total_tahun1; ?> </th>
                        <th>Rp<?php echo $total_tahun2; ?> </th>
                        <th>Rp<?php echo $total_tahun3; ?> </th>
                        <th>Rp<?php echo $total_tahun4; ?> </th>
                       <th> Rp<?php echo $total_tahun5; ?> </th>
                       <th> </th>
                        </tr>
                    </tbody>
                    </tfoot>
                </table>
                
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->