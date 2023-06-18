<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/economic'); ?>">Economic</a>
        </li>
        <li class="breadcrumb-item active">
            Data Usaha
        </li>
    </ol>
    <h2 class="h3 mb-2 text-gray-800"><?=$judul;?></h2>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?= $this->session->flashdata('message');?>
        <div class="card-header py-3">
            <a href=<?=base_url('user/DataPerusahaan/tambah');?> class="btn btn-info">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tingkat Pengembalian</th>
                            <th>Tarif Pajak</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($economic_data_perusahaan as $us) : ?>
                        <tr>
                            <td><?=$i;?></td>
                            <td><?= $us['tingkat_pengembalian'];?></td>
                            <td><?= $us['tarif_pajak'];?></td>

                            <td>
                            <a href="<?= base_url('User/dataperusahaan/hapus/').$us['id_economic_data_perusahaan'];?>" class="btn btn-xs btn-danger btn-delete"> <i class="fa fa-trash"></i></a>
                                <a href="<?= base_url('User/dataperusahaan/edit/').$us['id_economic_data_perusahaan'];?>" class="btn btn-xs btn-info btn-ed-periode" data-task="edit" ><i class="fa fa-edit"></i></a>
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