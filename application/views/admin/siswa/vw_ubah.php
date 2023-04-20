<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/siswa'); ?>">Siswa</a>
        </li>
        <li class="breadcrumb-item active">
            Verifikasi
        </li>
    </ol>
    
<h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <form action="" method="POST" class="form-horizontal form-label-left">

                    <div class="form-group">
                        <label for="status">Status Kelulusan <span class="text-danger">*</span></label>
                        <select class="form-control" id="exampleFormControlSelect1" name="status"value="<?= $pendaftaran['status']; ?>">
                            <option>Belum Diverifikasi</option>
                            <option>Lulus</option>
                            <option>Tidak Lulus</option>
                        </select>
                        <small class="form-text text-muted"></small>
                        <?= form_error('status', '<small class="form-text text-danger">', '</small>'); ?>
                    </div>
                    <a href="<?= base_url('admin/kelulusan/') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>