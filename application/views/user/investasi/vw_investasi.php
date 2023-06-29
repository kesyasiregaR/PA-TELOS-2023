<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/economic'); ?>">Economic</a>
        </li>
        <li class="breadcrumb-item active">
            Investasi Awal
        </li>
    </ol>
    <h2 class="h3 mb-2 text-gray-800"><?=$judul;?></h2>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?= $this->session->flashdata('message');?>
        <div class="card-header py-3">
            <a href=<?=base_url('user/investasi/tambah');?> class="btn btn-info">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Rincian Investasi</th>
                            <th>Tahun 1</th>
                            <!-- <th>Total</th> -->
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; $totalInvestasi_tahun1=0 ; ?>
                        <?php foreach ($economic_investasi as $us) : ?>
                            <?php $totalInvestasi_tahun1 +=$us['harga_tahun1']; ?>
                        <tr>
                            <td><?=$i; ?></td>
                            <td><?= $us['rincian_investasi'];?></td>
                            <td><?= $us['harga_tahun1'];?></td>
                            <!-- <td><?= $us['total'];?></td> -->

                            <td>
                            <a href="<?= base_url('User/investasi/hapus/').$us['id_economic_investasi'];?>" class="btn btn-xs btn-danger btn-delete"> <i class="fa fa-trash"></i></a>
                                <a href="<?= base_url('User/investasi/edit/').$us['id_economic_investasi'];?>" class="btn btn-xs btn-info btn-ed-periode" data-task="edit" ><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                        <?php $i++;?>
                        <?php endforeach; ?>
                        <tfoot>
                        <tr>
                            <th> </th>
                            <th>Total</th>
                
                        <th>Rp<?php echo $totalInvestasi_tahun1; ?> </th>
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