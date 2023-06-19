<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/economic'); ?>">Data Ekonomi</a>
        </li>
        <li class="breadcrumb-item active">
            Tambah Data Ekonomi
        </li>
    </ol>
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Ekonomi
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="name">Nama</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="name">
                                <?php foreach ($dataproject as $us) : ?>
                                    <option value="<?= $us['name']; ?>"><?= $us['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="akumulasi_biaya"> Akumulasi Biaya</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="akumulasi_biaya">
                            <option value="Keuntungan Bersih">Keuntungan Bersih</option>
                                <option value="Pajak">Pajak</option>
                                <option value="Nilai Setelah Pajak">Nilai Setelah Pajak</option>
                                <option value="Total Arus Kas">Total Arus Kas</option>
                                <option value="Total Arus Kas Kumulatif">Total Arus Kas Kumulatif</option>
                            </select>
                            <?= form_error('akumulasi_biaya', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tahun1">Tahun 1</label>
                            <input name="tahun1" type="text" value="<?= set_value('tahun1'); ?>"
                                class="form-control" id="tahun1" placeholder=" ">
                            <?= form_error('tahun1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tahun2">Tahun 2</label>
                            <input name="tahun2" type="text" value="<?= set_value('tahun2'); ?>"
                                class="form-control" id="tahun2" placeholder=" ">
                            <?= form_error('tahun2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tahun3">Tahun 3</label>
                            <input name="tahun3" type="text" value="<?= set_value('tahun3'); ?>"
                                class="form-control" id="tahun3" placeholder=" ">
                            <?= form_error('tahun3', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tahun4">Tahun 4</label>
                            <input name="tahun4" type="text" value="<?= set_value('tahun4'); ?>"
                                class="form-control" id="tahun4" placeholder=" ">
                            <?= form_error('tahun4', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tahun5">Tahun 5</label>
                            <input name="tahun5" type="text" value="<?= set_value('tahun5'); ?>"
                                class="form-control" id="tahun5" placeholder=" ">
                            <?= form_error('tahun5', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="npv">NPV</label>
                            <input name="npv" type="text" value="<?= set_value('npv'); ?>"
                                class="form-control" id="npv" placeholder="">
                            <?= form_error('npv', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="irr">IRR</label>
                            <input name="irr" type="text" value="<?= set_value('irr'); ?>"
                                class="form-control" id="irr" placeholder=" ">
                            <?= form_error('irr', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="pp">Payback Period</label>
                            <input name="pp" type="text" value="<?= set_value('pp'); ?>"
                                class="form-control" id="pp" placeholder="">
                            <?= form_error('pp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="roi">ROI</label>
                            <input name="roi" type="text" value="<?= set_value('roi'); ?>"
                                class="form-control" id="roi" placeholder=" ">
                            <?= form_error('roi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>


                        
                        <button type="submit" name="tambah" class="btn btn-info float-right">Simpan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>