<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            Legalitas
        </li>
    </ol>
    <h2 class="h3 mb-2 text-gray-800"><?= $judul; ?></h2>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?= $this->session->flashdata('message'); ?>
        <div class="card-header py-3">
            <a href=<?= base_url('user/Legal/tambah'); ?> class="btn btn-info">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <!-- <th>Nama Projek</th> -->
                            <th>Kategori</th>
                            <th>Jenis Item</th>
                            <th>Deskripsi</th>
                            <th>Status Legal</th>
                            <th>Status</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($legal as $us) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <!-- <td><?= $us['name']; ?></td> -->
                                <td><?= $us['jenis']; ?></td>
                                <td><?= $us['nama_jenis_produk']; ?></td>
                                <td><?= $us['description']; ?></td>
                                <td><?= $us['status']; ?></td>
                                <td>
                                    <?php $status = $us['status']; ?>
                                    <?php if ($status == 'Aktif') : ?>
                                        <!-- <p><?php echo ($status); ?></p> -->
                                        <p> <span style="color:  green;"> <b> Layak </b> </span> </p>
                                    <?php else : ?>
                                        <!-- <p> <?php echo ($status); ?></p> -->
                                        <p> <span style="color:  red;"> <b> Tidak Layak </b> </span> </p>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('User/legal/hapus/') . $us['id_legal']; ?>" class="btn btn-xs btn-danger btn-delete"> <i class="fa fa-trash"></i></a>
                                    <a href="<?= base_url('User/legal/edit/') . $us['id_legal']; ?>" class="btn btn-xs btn-info btn-ed-periode" data-task="edit"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                        <tfoot>
                        <tr>
                            <th> </th>
                            <th>Hasil Akhir Kelayakan</th>
                
                        <th> </th>
                        <th>  </th>
                        <th> </th>
                        <th> </th>
                       <th>  </th>
                        </tr>
                    </tbody>
                    </tfoot>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->