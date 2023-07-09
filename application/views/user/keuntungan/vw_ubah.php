<!-- Begin Page Content -->
<div class="container-fluid">
	 <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/economic'); ?>">Economic</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/keuntungan'); ?>">Data Keuntungan</a>
        </li>
        <li class="breadcrumb-item active">
            Ubah Data 
        </li>
    </ol>
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-12 ">
			<div class="card">
				<div class="card-header">
					Form Ubah Data 
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id_economic_keuntungan" value="<?= $economic_keuntungan['id_economic_keuntungan']; ?>">
						<div class="form-group">
							<label for="sumber_keuntungan">Sumber Keuntungan</label>
							<input name="sumber_keuntungan" value="<?= $economic_keuntungan['sumber_keuntungan']; ?>" type="text" class="form-control" id="sumber_keuntungan" placeholder="">
							<?= form_error('sumber_keuntungan', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="keuntungan_tahun1">Tahun 1</label>
							<input name="keuntungan_tahun1" value="<?= $economic_keuntungan['keuntungan_tahun1']; ?>" type="text" class="form-control" id="keuntungan_tahun1" placeholder="">
							<?= form_error('keuntungan_tahun1', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
                        <div class="form-group">
							<label for="keuntungan_tahun1">Tahun 2</label>
							<input name="keuntungan_tahun2" value="<?= $economic_keuntungan['keuntungan_tahun2']; ?>" type="text" class="form-control" id="keuntungan_tahun2" placeholder="">
							<?= form_error('keuntungan_tahun2', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
                        <div class="form-group">
							<label for="keuntungan_tahun3">Tahun 3</label>
							<input name="keuntungan_tahun3" value="<?= $economic_keuntungan['keuntungan_tahun3']; ?>" type="text" class="form-control" id="keuntungan_tahun3" placeholder="">
							<?= form_error('keuntungan_tahun3', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
                        <div class="form-group">Tahun 4</label>
							<input name="keuntungan_tahun4" value="<?= $economic_keuntungan['keuntungan_tahun4']; ?>" type="text" class="form-control" id="keuntungan_tahun4" placeholder="">
							<?= form_error('keuntungan_tahun4', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
                        <div class="form-group">
							<label for="keuntungan_tahun5">Tahun 5</label>
							<input name="keuntungan_tahun5" value="<?= $economic_keuntungan['keuntungan_tahun5']; ?>" type="text" class="form-control" id="keuntungan_tahun5" placeholder="">
							<?= form_error('keuntungan_tahun5', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						
						
						<a href="<?= base_url('user/keuntungan') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Simpan</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
