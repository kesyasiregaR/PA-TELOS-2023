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
                        <div class="form-group">
                            <label for="description_before_perfomance">Deskripsi Sebelum</label>
                            <input name="description_before_perfomance" type="text" value="<?= set_value('description_before_perfomance'); ?>" class="form-control" id="description_before_perfomance" placeholder="">
                            <?= form_error('description_before_perfomance', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                        <label for="description_after_perfomance">Deskripsi Sesudah</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="description_after_perfomance">
                            <option value="Bagus">Bagus</option>
                                <option value="Tidak Bagus">Tidak Bagus</option>
                                </select>
                            <?= form_error('description_after_perfomance', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div> 
                        <tr>
                                <td colspan="3"><b>Information</b></td>
                         </tr>
                        <div class="form-group">
                            <label for="description_before_information">Deskripsi Sebelum</label>
                            <input name="description_before_information" type="text" value="<?= set_value('description_before_information'); ?>" class="form-control" id="description_before_information" placeholder="">
                            <?= form_error('description_before_information', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="description_after_information">Deskripsi Sesudah</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="description_after_information">
                            <option value="Akurat">Akurat</option>
                                <option value="Tidak Akurat">Tidak Akurat</option>
                            </select>
                            <?= form_error('description_after_information', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <tr>
                                <td colspan="3"><b>Economic</b></td>
                         </tr>
                        <div class="form-group">
                            <label for="description_before_economic">Deskripsi Sebelum</label>
                            <input name="description_before_economic" type="text" value="<?= set_value('description_before_economic'); ?>" class="form-control" id="description_before_economic" placeholder="">
                            <?= form_error('description_before_economic', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="description_after_economic">Deskripsi Sesudah</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="description_after_economic">
                            <option value="Efisien">Efisien</option>
                            <option value="Tidak Efisien">Tidak Efisien</option>
                            </select>
                            <?= form_error('description_after_economic', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <tr>
                                <td colspan="3"><b>Control</b></td>
                         </tr>
                        <div class="form-group">
                            <label for="description_before_control">Deskripsi Sebelum</label>
                            <input name="description_before_control" type="text" value="<?= set_value('description_before_control'); ?>" class="form-control" id="description_before_control" placeholder="">
                            <?= form_error('description_before_control', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="description_after_control">Deskripsi Sesudah</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="description_after_control">
                            <option value="Efektif">Efektif</option>
                            <option value="Tidak Efektif">Tidak Efektif</option>
                        </select>
                             <?= form_error('description_after_control', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <tr>
                                <td colspan="3"><b>Efficiency</b></td>
                         </tr>
                         <div class="form-group">
                            <label for="description_before_efficiency">Deskripsi Sebelum</label>
                            <input name="description_before_efficiency" type="text" value="<?= set_value('description_before_efficiency'); ?>" class="form-control" id="description_before_efficiency" placeholder="">
                            <?= form_error('description_before', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="description_after_efficiency">Deskripsi Sesudah</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="description_after_efficiency">
                            <option value=" Optimal">Optimal</option>
                            <option value="Tidak Optimal">Tidak Optimal</option>
                                </select>
                            <!-- <input name="description_after_efficiency" type="text" value="<?= set_value('description_after_efficiency'); ?>" class="form-control" id="description_after_efficiency" placeholder=""> -->
                            <?= form_error('description_after', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <tr>
                                <td colspan="3"><b>Services</b></td>
                         </tr>
                        <div class="form-group">
                            <label for="description_before_services">Deskripsi Sebelum</label>
                            <input name="description_before_services" type="text" value="<?= set_value('description_before_services'); ?>" class="form-control" id="description_before_services" placeholder="">
                            <?= form_error('description_before', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="description_after_services">Deskripsi Sesudah</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="description_after_services">
                            <option value="Memuaskan">Memuaskan</option>
                            <option value="Tidak Memuaskan">Tidak Memuaskan</option>
                                </select>
                            <!-- <input name="description_after_services" type="text" value="<?= set_value('description_after_services'); ?>" class="form-control" id="description_after_services" placeholder=""> -->
                            <?= form_error('description_after', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-info float-right">Simpan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>