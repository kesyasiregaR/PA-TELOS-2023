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
        <div class="card-header py-3">
            <a href=<?=base_url('user/economic/tambah');?> class="btn btn-info">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Projek </th>
                            <th>Investasi awal</th>
                            <th>Keuntungan Bersih</th>
                            <th>Komponen Biaya</th>
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
                            <td><?= $us['name']; ?></td>
                            <td><?= $us['id_economic_investasi'];?></td>
                            <td><?= $us['id_keuntungan'];?></td>
                            <td><?= $us['id_economic_komponen_biaya'];?></td>
                            <td><?= $us['total_pajak'];?></td>
                            <td><?= $us['total_nilai_setelah_pajak'];?></td>
                            <td><?= $us['total_arus_kas'];?></td>
                            <td><?= $us['total_arus_kas_kumulatif'];?></td>

                            <td>
                               
                                <a href="<?= base_url('User/economic/hapus/').$us['id_economic'];?>" class="btn btn-xs btn-danger btn-delete"> <i class="fa fa-trash"></i></a>
                                <a href="<?= base_url('User/economic/edit/').$us['id_economic'];?>" class="btn btn-xs btn-info btn-ed-periode" data-task="edit" ><i class="fa fa-edit"></i></a>
                                
                            </td>
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