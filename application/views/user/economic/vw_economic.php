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
        <div class="card-header py-3">
            <a href=<?=base_url('user/economic/tambah');?> class="btn btn-info">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Projek</th>
                            <th>Akumulasi Biaya</th>
                            <th>Tahun 1</th>
                            <th>Tahun 2</th>
                            <th>Tahun 3</th>
                            <th>Tahun 4</th>
                            <th>Tahun 5</th>
                            <th>NPV</th>
                            <th>IRR</th>
                            <th>Payback Period</th>
                            <th>ROI</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($economic as $us) : ?>
                        <tr>
                            <td><?=$i;?></td>
                            <td><?= $us['name'];?></td>
                            <td><?= $us['akumulasi_biaya'];?></td>
                            <td><?= $us['tahun1'];?></td>
                            <td><?= $us['tahun2'];?></td>
                            <td><?= $us['tahun3'];?></td>
                            <td><?= $us['tahun4'];?></td>
                            <td><?= $us['tahun5'];?></td>
                            <td><?= $us['npv'];?></td>
                            <td><?= $us['irr'];?></td>
                            <td><?= $us['pp'];?></td>
                            <td><?= $us['roi'];?></td>
                            <td>
                            <a href="<?= base_url('User/economic/hapus/').$us['id_economic'];?>" class="btn btn-xs btn-danger btn-delete"> <i class="fa fa-trash"></i></a>
                            <a href="<?= base_url('User/economic/edit/').$us['id_economic'];?>" class="btn btn-xs btn-info btn-ed-periode" data-task="edit" ><i class="fa fa-edit"></i></a>
                                
                            </td>
<!--                             
                            <td>

                            <a href="<?= base_url('User/economic/hapus/').$us['id_economic'];?>" class="btn btn-xs btn-danger btn-delete"> <i class="fa fa-trash"></i></a>
                            <a href="<?= base_url('User/economic/edit/').$us['id_economic'];?>" class="btn btn-xs btn-info btn-ed-periode" data-task="edit" ><i class="fa fa-edit"></i></a>
                                
                            </td> -->
                        </tr>
                        <?php $i++;?>
                        <?php endforeach; ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->