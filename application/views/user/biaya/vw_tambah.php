<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/economic'); ?>">Economic</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/biaya'); ?>">Komponen Biaya</a>
        </li>
        <li class="breadcrumb-item active" >
            Tambah Data 
        </li>
    </ol>
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data 
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="komponen_biaya">Komponen Biaya</label>
                            <input name="komponen_biaya" type="text" value="<?= set_value('komponen_biaya'); ?>"
                                class="form-control" id="komponen_biaya" placeholder="">
                            <?= form_error('komponen_biaya', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jenis_cost">Jenis Biaya</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="jenis_cost">
                            <option value="Direct Cost">Direct Cost</option>
                                <option value="Indirect Cost">Indirect Cost</option>
                                <option value="Tangible Cost">Tangible Cost</option>
                                <option value="Intangible Cost">Intangible Cost</option>
                            </select>
                            <?= form_error('jenis_cost', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="biaya_tahun1">Tahun 1</label>
                            <input name="biaya_tahun1" type="text" value="<?= set_value('biaya_tahun1'); ?>"
                                class="form-control" id="biaya_tahun1" placeholder="">
                            <?= form_error('biaya_tahun1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="biaya_tahun2">Tahun 2</label>
                            <input name="biaya_tahun2" type="text" value="<?= set_value('biaya_tahun2'); ?>"
                                class="form-control" id="biaya_tahun2" placeholder="">
                            <?= form_error('biaya_tahun2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="biaya_tahun3">Tahun 3</label>
                            <input name="biaya_tahun3" type="text" value="<?= set_value('biaya_tahun3'); ?>"
                                class="form-control" id="biaya_tahun3" placeholder="">
                            <?= form_error('biaya_tahun3', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="biaya_tahun4">Tahun 4</label>
                            <input name="biaya_tahun4" type="text" value="<?= set_value('biaya_tahun4'); ?>"
                                class="form-control" id="biaya_tahun4" placeholder="">
                            <?= form_error('biaya_tahun4', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="biaya_tahun5">Tahun 5</label>
                            <input name="biaya_tahun5" type="text" value="<?= set_value('biaya_tahun5'); ?>"
                                class="form-control" id="biaya_tahun5" placeholder="">
                            <?= form_error('biaya_tahun5', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                       
                        <button type="submit" name="tambah" class="btn btn-info float-right">Simpan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>