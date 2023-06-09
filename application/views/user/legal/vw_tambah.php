<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/legal'); ?>">Legal</a>
        </li>
        <li class="breadcrumb-item active">
            Tambah Data Legalitas
        </li>
    </ol>
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Legalitas
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <!-- <div class="form-group">
                            <label for="name">Nama Projek</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="name">
                                <?php foreach ($dataproject as $us) : ?>
                                    <option value="<?= $us['name']; ?>"><?= $us['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div> -->
                        <div class="form-group">
                            <label for="jenis">Kategori</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="jenis">
                                <option value="Hardware">Hardware</option>
                                <option value="Software">Software</option>
                            </select>
                            <?= form_error('category', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama_jenis_produk">Jenis Kategori</label>
                            <input name="nama_jenis_produk" type="text" value="<?= set_value('nama_jenis_produk'); ?>" class="form-control" id="nama_jenis_produk" placeholder="">
                            <?= form_error('nama_jenis_produk', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi Produk</label>
                            <input name="description" type="text" value="<?= set_value('description'); ?>" class="form-control" id="description" placeholder="">
                            <?= form_error('description', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="status">Status Legal</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="status">
                                <option value="Aktif">Aktif</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                            </select>
                            <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-info float-right">Simpan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>