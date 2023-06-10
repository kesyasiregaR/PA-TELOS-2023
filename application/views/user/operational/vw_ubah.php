<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/operational'); ?>">Data Operational</a>
        </li>
        <li class="breadcrumb-item active">
            Ubah Data Operational
        </li>
    </ol>
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Operational
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_operational" value="<?= $operational['id_operational']; ?>">
                        <div class="form-group">
                            <label for="name">Nama Projek</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="name">
                                <?php foreach ($dataproject as $us) : ?>
                                    <option value="<?= $us['name']; ?>"><?= $us['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                        <div class="form-group">
                            <label for="category">Kategori</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="category">
                                <option value="Performance">Performance</option>
                                <option value="Information">Information</option>
                                <option value="Economic">Economic</option>
                                <option value="Control">Control</option>
                                <option value="Efficiency">Efficiency</option>
                                <option value="Services">Services</option>
                            </select>
                            <?= form_error('category', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="description_before">Deskripsi Sebelum</label>
                            <input name="description_before" value="<?= $operational['description_before']; ?>" type="text" class="form-control" id="description_before" placeholder="">
                            <?= form_error('description_before', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="description_after">Deskripsi Sesudah</label>
                            <input name="description_after" value="<?= $operational['description_after']; ?>" type="text" class="form-control" id="description_after" placeholder="">
                            <?= form_error('description_after', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                       <!-- <div class="form-group">
                            <label for="improvement">Persetujuan</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="improvement">
                                <option value="Setuju">Setuju</option>
                                <option value="Tidak Setuju">Tidak Setuju</option>
                            </select>
                            
                        </div> -->

                        <a href="<?= base_url('user/operational') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Simpan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>