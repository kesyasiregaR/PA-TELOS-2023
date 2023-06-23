<!-- Begin Page Content -->
<div class="container-fluid">
	 <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/economic'); ?>">Economic</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/investasi'); ?>">Data Investasi</a>
        </li>
        <li class="breadcrumb-item active">
            Ubah Data Investasi
        </li>
    </ol>
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-12 ">
			<div class="card">
				<div class="card-header">
					Form Ubah Data Investasi
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id_economic_investasi" value="<?= $economic_investasi['id_economic_investasi']; ?>">
						<div class="form-group">
							<label for="rincian_investasi">Rincian Investasi</label>
							<input name="rincian_investasi" value="<?= $economic_investasi['rincian_investasi']; ?>" type="text" class="form-control" id="rincian_investasi" placeholder="">
							<?= form_error('rincian_investasi', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="harga_tahun1">Tahun 1</label>
							<input name="harga_tahun1" value="<?= $economic_investasi['harga_tahun1']; ?>" type="text" class="form-control" id="harga_tahun1" placeholder="">
							<?= form_error('harga_tahun1', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<!-- <div class="form-group">
							<label for="total">Total</label>
							<input name="total" value="<?= $economic_investasi['total']; ?>" type="text" class="form-control" id="total" placeholder="">
							<?= form_error('total', '<small class="text-danger pl-3">', '</small>'); ?>
						</div> -->
						
						<a href="<?= base_url('user/investasi') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Simpan</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
