<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            Operational
        </li>
    </ol>
    <h2 class="h3 mb-2 text-gray-800"><?= $judul; ?></h2>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?= $this->session->flashdata('message'); ?>
        <div class="card-header py-3">
            <a href=<?= base_url('user/operational/tambah'); ?> class="btn btn-info">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Projek</th>
                            <th>Kategori</th>
                            <th>Deskripsi Sebelum</th>
                            <th>Deskripsi Sesudah</th>
                            <th>Persetujuan</th>
                            <th>Status</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($operational as $us) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $us['name']; ?></td>
                                <td><?= $us['category']; ?></td>
                                <td><?= $us['description_before']; ?></td>
                                <td><?= $us['description_after']; ?></td>
                                <td><?= $us['improvement']; ?></td>
                                <td> 
                                    <!-- untuk kolom Status -->
                                </td>
                                <td>
                                <a href="<?= base_url('User/operational/hapus/').$us['id_operational'];?>" class="btn btn-xs btn-danger btn-delete"> <i class="fa fa-trash"></i></a>
                                <a href="<?= base_url('User/operational/edit/').$us['id_operational'];?>" class="btn btn-xs btn-info btn-ed-periode" data-task="edit" ><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->