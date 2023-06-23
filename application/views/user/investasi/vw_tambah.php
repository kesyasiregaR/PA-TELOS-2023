<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/economic'); ?>">Economic</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/investasi'); ?>">Investasi</a>
        </li>
        <li class="breadcrumb-item active" >
            Tambah Data Investasi
        </li>
    </ol>
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Investasi
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="rincian_investasi">Rincian Investasi</label>
                            <input name="rincian_investasi" type="text" value="<?= set_value('rincian_investasi'); ?>"
                                class="form-control" id="rincian_investasi" placeholder="">
                            <?= form_error('rincian_investasi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="harga_tahun1">Tahun 1</label>
                            <input name="harga_tahun1" type="text" value="<?= set_value('harga_tahun1'); ?>"
                                class="form-control" id="harga_tahun1" placeholder="">
                            <?= form_error('harga_tahun1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <!-- <div class="form-group">
                            <label for="total">Total</label>
                            <input name="total" type="text" value="<?= set_value('total'); ?>"
                                class="form-control" id="total" placeholder="">
                            <?= form_error('total', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div> -->

                       
                        <button type="submit" name="tambah" class="btn btn-info float-right">Simpan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>