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
            <a href=<?=base_url('user/Summary/tambah');?> class="btn btn-info">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Project</th>
                            <th>Technological</th>
                            <th>Economic</th>
                            <th>Legal</th>
                            <th>Operational</th>
                            <th>Schedule</th>
                            <th>Hasil Akhir</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($summary as $us) : ?>
                        <tr>
                            <td><?=$i;?></td>
                            <td><?= $us['project'];?></td>
                            <td><?= $us['technological'];?></td>
                            <td><?= $us['economic'];?></td>
                            <td><?= $us['legal'];?></td>
                            <td><?= $us['operational'];?></td>
                            <td><?= $us['schedule'];?></td>
                            <td><?= $us['hasil_akhir'];?></td>

                            <td>
                            <a href="<?= base_url('User/summary/hapus/').$us['id_summary'];?>" class="btn btn-xs btn-danger btn-delete"> <i class="fa fa-trash"></i></a>
                                <a href="<?= base_url('User/summary/edit/').$us['id_summary'];?>" class="btn btn-xs btn-info btn-ed-periode" data-task="edit" ><i class="fa fa-edit"></i></a>
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