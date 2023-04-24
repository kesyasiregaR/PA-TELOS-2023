<!-- Begin Page Content -->
<div class="container-fluid">
	 <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/legal'); ?>">Legalitas</a>
        </li>
        <li class="breadcrumb-item active">
            Ubah Data Legalitas
        </li>
    </ol>
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-12 ">
			<div class="card">
				<div class="card-header">
					Form Ubah Data Legalitas
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id_legal" value="<?= $legal['id_legal']; ?>">
						<div class="form-group">
							<label for="name">Name</label>
							<input name="name" value="<?= $legal['name']; ?>" type="text" class="form-control" id="name" placeholder="Name ">
							<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="description">Description</label>
							<input name="description" value="<?= $legal['description']; ?>" type="text" class="form-control" id="description" placeholder="description legal">
							<?= form_error('description', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="status">Status</label>
							<input name="status" value="<?= $legal['status']; ?>" type="text" class="form-control" id="status" placeholder="status legal">
							<?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						
						<a href="<?= base_url('user/legal') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data Legalitas</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>