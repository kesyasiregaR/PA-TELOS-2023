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
            <a href=<?= base_url('user/operational/tambah'); ?> class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Category</th>
                            <th>Description_Before</th>
                            <th>Description_After</th>
                            <th>Improvement</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($operational as $us) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $us['category']; ?></td>
                                <td><?= $us['description_before']; ?></td>
                                <td><?= $us['description_after']; ?></td>
                                <td><?= $us['improvement']; ?></td>

                                <td>
                                    <a href="<?= base_url('User/operational/hapus/') . $us['id_operational']; ?>" class="badge badge-danger">Hapus</a>
                                    <a href="<?= base_url('User/operational/edit/') . $us['id_operational']; ?>" class="badge badge-warning">Edit</a>
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