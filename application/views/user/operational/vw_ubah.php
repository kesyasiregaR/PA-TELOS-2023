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
                        <tr>
                            <td colspan="3"><b>Perfomance</b></td>
                        </tr>
                        <!-- <div class="form-group">
                            <label for="perfomance">Perfomance</label>
                            <input name="perfomance" type="text" value="<?= set_value('perfomance'); ?>" class="form-control" id="perfomance">
                            <?= form_error('perfomance', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div> -->
                        <div class="form-group">
                            <label for="description_before_perfomance">Deskripsi Sebelum</label>
                            <input name="description_before_perfomance" value="<?= $operational['description_before_perfomance']; ?>" type="text" class="form-control" id="description_before_perfomance" placeholder="">
                            <?= form_error('description_before_perfomance', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="description_after_perfomance">Deskripsi Sesudah</label>
                            <input name="description_after_perfomance" value="<?= $operational['description_after_perfomance']; ?>" type="text" class="form-control" id="description_after_perfomance" placeholder="">
                            <?= form_error('description_after_perfomance', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <tr>
                            <td colspan="3"><b>Information</b></td>
                        </tr>
                        <!-- <div class="form-group">
                            <label for="information">Information</label>
                            <input name="information" type="text" value="<?= set_value('information'); ?>" class="form-control" id="information">
                            <?= form_error('information', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div> -->

                        <div class="form-group">
                            <label for="description_before_information">Deskripsi Sebelum</label>
                            <input name="description_before_information" type="text" value="<?= $operational['description_before_information']; ?>" class="form-control" id="description_before_information" placeholder="">
                            <?= form_error('description_before_information', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="description_after_information">Deskripsi Sesudah</label>
                            <input name="description_after_information" type="text" value="<?= $operational['description_after_information']; ?>" class="form-control" id="description_after_information" placeholder="">
                            <?= form_error('description_after_information', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <tr>
                            <td colspan="3"><b>Economic</b></td>
                        </tr>
                        <!-- <div class="form-group">
                            <label for="information">Information</label>
                            <input name="information" type="text" value="<?= set_value('information'); ?>" class="form-control" id="information">
                            <?= form_error('information', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div> -->
                        <div class="form-group">
                            <label for="description_before_economic">Deskripsi Sebelum</label>
                            <input name="description_before_economic" type="text" value="<?= $operational['description_before_economic']; ?>" class="form-control" id="description_before_economic" placeholder="">
                            <?= form_error('description_before_economic', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="description_after_economic">Deskripsi Sesudah</label>
                            <input name="description_after_economic" type="text" value="<?= $operational['description_after_economic']; ?>" class="form-control" id="description_after_economic" placeholder="">
                            <?= form_error('description_after_economic', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <tr>
                            <td colspan="3"><b>Control</b></td>
                        </tr>
                        <!-- <div class="form-group">
                            <label for="information">Information</label>
                            <input name="information" type="text" value="<?= set_value('information'); ?>" class="form-control" id="information">
                            <?= form_error('information', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div> -->

                        <div class="form-group">
                            <label for="description_before_control">Deskripsi Sebelum</label>
                            <input name="description_before_control" type="text" value="<?= $operational['description_before_control']; ?>" class="form-control" id="description_before_control" placeholder="">
                            <?= form_error('description_before_control', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="description_after_control">Deskripsi Sesudah</label>
                            <input name="description_after_control" type="text" value="<?= $operational['description_after_control']; ?>" class="form-control" id="description_after_control" placeholder="">
                            <?= form_error('description_after_control', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <tr>
                            <td colspan="3"><b>Effeciency</b></td>
                        </tr>
                        <!-- <div class="form-group">
                            <label for="information">Information</label>
                            <input name="information" type="text" value="<?= set_value('information'); ?>" class="form-control" id="information">
                            <?= form_error('information', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div> -->

                        <div class="form-group">
                            <label for="description_before_efficiency">Deskripsi Sebelum</label>
                            <input name="description_before_efficiency" type="text" value="<?= $operational['description_before_efficiency']; ?>" class="form-control" id="description_before_efficiency" placeholder="">
                            <?= form_error('description_before_efficiency', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="description_after_efficiency">Deskripsi Sesudah</label>
                            <input name="description_after_efficiency" type="text" value="<?= $operational['description_after_efficiency']; ?>" class="form-control" id="description_after_efficiency" placeholder="">
                            <?= form_error('description_after_efficiency', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <tr>
                            <td colspan="3"><b>Services</b></td>
                        </tr>
                        <!-- <div class="form-group">
                            <label for="information">Information</label>
                            <input name="information" type="text" value="<?= set_value('information'); ?>" class="form-control" id="information">
                            <?= form_error('information', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div> -->

                        <div class="form-group">
                            <label for="description_before_services">Deskripsi Sebelum</label>
                            <input name="description_before_services" type="text" value="<?= $operational['description_before_services']; ?>" class="form-control" id="description_before_services" placeholder="">
                            <?= form_error('description_before_services', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="description_after_services">Deskripsi Sesudah</label>
                            <input name="description_after_services" type="text" value="<?= $operational['description_after_services']; ?>" class="form-control" id="description_after_services" placeholder="">
                            <?= form_error('description_after_services', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <a href="<?= base_url('user/operational') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Simpan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>