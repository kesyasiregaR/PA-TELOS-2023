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
            <a href=<?= base_url('user/Schedule/tambah'); ?> class="btn btn-info">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Projek</th>
                            <!-- <th>Nama Aktivitas</th> -->
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Berakhir</th>
                            <th>Status</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($schedule as $us) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $us['name']; ?></td>
                                <!-- <td><?= $us['name_of_activity']; ?></td> -->
                                <td><?= $us['start_date']; ?></td>
                                <td><?= $us['end_date']; ?></td>
                                <td>
                                    <?php
                                    $end_date = new DateTime($us['end_date']); // Mengubah string menjadi objek DateTime
                                    $current_date = new DateTime(); // Mendapatkan tanggal saat ini
                                    $six_months_ago = $current_date->modify('+6 months'); // Mendapatkan tanggal 6 bulan

                                    if ($end_date > $six_months_ago) {
                                        echo "<p style='color: green;'><b>Layak</p>";
                                    } else {
                                        echo "<p style='color: red;'><b>Tidak Layak</p>";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('User/schedule/hapus/') . $us['id_schedule']; ?>" class="btn btn-xs btn-danger btn-delete"> <i class="fa fa-trash"></i></a>
                                    <a href="<?= base_url('User/schedule/edit/') . $us['id_schedule']; ?>" class="btn btn-xs btn-info btn-ed-periode" data-task="edit"><i class="fa fa-edit"></i></a>
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