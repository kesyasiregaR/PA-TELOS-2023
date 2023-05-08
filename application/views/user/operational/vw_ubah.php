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
			Ubah Data Operational
		</li>
	</ol>
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-12 ">
			<div class="card">
				<div class="card-header">
					Form Ubah Data Operational
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id_operational" value="<?= $operational['id_operational']; ?>">
						<div class="form-group">
							<label for="category">Category</label>
							<input name="category" value="<?= $operational['category']; ?>" type="text" class="form-control" id="category" placeholder="category ">
							<?= form_error('category', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="description_before">Description_Before</label>
							<input name="description_before" value="<?= $operational['description_before']; ?>" type="text" class="form-control" id="description_before" placeholder="description_before operational">
							<?= form_error('description_before', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="description_after">Description_After</label>
							<input name="description_after" value="<?= $operational['description_after']; ?>" type="text" class="form-control" id="description_after" placeholder="description_after operational">
							<?= form_error('description_after', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="improvement">Improvement</label>
							<input name="improvement" value="<?= $operational['improvement']; ?>" type="text" class="form-control" id="improvement" placeholder="improvement operational">
							<?= form_error('improvement', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<a href="<?= base_url('user/operational') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Simpan</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>