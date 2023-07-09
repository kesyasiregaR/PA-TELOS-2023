<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/economic'); ?>">Economic</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/dataperusahaan'); ?>">Data Usaha</a>
        </li>
        <li class="breadcrumb-item active">
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
                            <label for="tingkat_pengembalian">tingkat pengembalian</label>
                            <input name="tingkat_pengembalian" type="text" value="<?= set_value('tingkat_pengembalian'); ?>" class="form-control" id="	tingkat_pengembalian" placeholder="">
                            <?= form_error('tingkat_pengembalian', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tarif_pajak">tarif pajak</label>
                            <input name="tarif_pajak" type="text" value="<?= set_value('tarif_pajak'); ?>" class="form-control" id="tarif_pajak" placeholder="">
                            <?= form_error('tarif_pajak', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>


                        <button type="submit" name="tambah" class="btn btn-info float-right">Simpan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>