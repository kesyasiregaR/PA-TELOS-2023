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
			Ubah Data Usaha
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
						<input type="hidden" name="id_economic_data_perusahaan" value="<?= $economic_data_perusahaan['id_economic_data_perusahaan']; ?>">
						<div class="form-group">
							<label for="tingkat_pengembalian">tingkat pengembalian</label>
							<input name="tingkat_pengembalian" value="<?= $economic_data_perusahaan['tingkat_pengembalian']; ?>" type="text" class="form-control" id="tingkat_pengembalian" placeholder="">
							<?= form_error('tingkat_pengembalian', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="tarif_pajak">tarif pajak</label>
							<input name="tarif_pajak" value="<?= $economic_data_perusahaan['tarif_pajak']; ?>" type="text" class="form-control" id="tarif_pajak" placeholder="">
							<?= form_error('tarif_pajak', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<a href="<?= base_url('user/dataperusahaan') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Simpan</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>