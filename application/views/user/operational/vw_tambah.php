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
            Tambah Data Operational
        </li>
    </ol>
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Operational
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">name</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="name">
                                <?php foreach ($dataproject as $us) : ?>
                                    <option value="<?= $us['name']; ?>"><?= $us['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="kategori">
                                <option value="Performance">Performance</option>
                                <option value="Tidak Performance">Tidak Performance</option>
                            </select>
                            <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="description_before">Descriptions_Before</label>
                            <input name="description_before" type="text" value="<?= set_value('description_before'); ?>" class="form-control" id="description_before" placeholder="">
                            <?= form_error('description_before', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="description_after">Descriptions_After</label>
                            <input name="description_after" type="text" value="<?= set_value('description_after'); ?>" class="form-control" id="description_after" placeholder="">
                            <?= form_error('description_after', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="improvement">Improvement</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="improvement">
                                <option value="improvement">Improvement</option>
                                <option value="Tidak improvemen">Tidak Improvemen</option>
                            </select>
                            <?= form_error('improvement', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>


                        <button type="submit" name="tambah" class="btn btn-info float-right">Simpan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>