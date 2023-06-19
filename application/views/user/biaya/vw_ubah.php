<!-- Begin Page Content -->
<div class="container-fluid">
	 <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/economic'); ?>">Economic</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/biaya'); ?>">Data Komponen Biaya</a>
        </li>
        <li class="breadcrumb-item active">
            Ubah Data Komponen Biaya
        </li>
    </ol>
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-12 ">
			<div class="card">
				<div class="card-header">
					Form Ubah Data Komponen Biaya
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id_economic_komponen_biaya" value="<?= $economic_komponen_biaya['id_economic_komponen_biaya']; ?>">
						<div class="form-group">
							<label for="komponen_biaya">Komponen Biaya iaya</label>
							<input name="komponen_biaya" value="<?= $economic_komponen_biaya['komponen_biaya']; ?>" type="text" class="form-control" id="komponen_biaya" placeholder="">
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
							<input name="biaya_tahun1" value="<?= $economic_komponen_biaya['biaya_tahun1']; ?>" type="text" class="form-control" id="biaya_tahun1" placeholder="">
							<?= form_error('biaya_tahun1', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="biaya_tahun2">Tahun 2</label>
							<input name="biaya_tahun2" value="<?= $economic_komponen_biaya['biaya_tahun2']; ?>" type="text" class="form-control" id="biaya_tahun2" placeholder="">
							<?= form_error('biaya_tahun2', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="biaya_tahun3">Tahun 3</label>
							<input name="biaya_tahun3" value="<?= $economic_komponen_biaya['biaya_tahun3']; ?>" type="text" class="form-control" id="biaya_tahun3" placeholder="">
							<?= form_error('biaya_tahun3', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="biaya_tahun4">Tahun 4</label>
							<input name="biaya_tahun4" value="<?= $economic_komponen_biaya['biaya_tahun4']; ?>" type="text" class="form-control" id="biaya_tahun4" placeholder="">
							<?= form_error('biaya_tahun4', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="biaya_tahun5">Tahun 5</label>
							<input name="biaya_tahun5" value="<?= $economic_komponen_biaya['biaya_tahun5']; ?>" type="text" class="form-control" id="biaya_tahun5" placeholder="">
							<?= form_error('biaya_tahun5', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						
						<a href="<?= base_url('user/biaya') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Simpan</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
