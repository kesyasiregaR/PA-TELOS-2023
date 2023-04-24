<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            Schedule
        </li>
    </ol>
    <h2 class="h3 mb-2 text-gray-800"><?= $judul; ?></h2>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?= $this->session->flashdata('message'); ?>
        <div class="card-header py-3">
            <a href=<?= base_url('user/Schedule/tambah'); ?> class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name of Activity</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($schedule as $us) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $us['name_of_activity']; ?></td>
                                <td><?= $us['start_date']; ?></td>
                                <td><?= $us['end_date']; ?></td>

                                <td>
                                    <a href="<?= base_url('User/Schedule/hapus/') . $us['id_schedule']; ?>" class="badge badge-danger">Hapus</a>
                                    <a href="<?= base_url('User/Schedule/edit/') . $us['id_schedule']; ?>" class="badge badge-warning">Edit</a>
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