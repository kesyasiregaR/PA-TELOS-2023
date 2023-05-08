<!-- Begin Page Content -->
<div class="container-fluid">
	 <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/dataprojek'); ?>">Data Projek</a>
        </li>
        <li class="breadcrumb-item active">
            Ubah Data Projek
        </li>
    </ol>
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-12 ">
			<div class="card">
				<div class="card-header">
					Form Ubah Data Projek
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id_dataproject" value="<?= $dataproject['id_dataproject']; ?>">
						<div class="form-group">
							<label for="name">Name</label>
							<input name="name" value="<?= $dataproject['name']; ?>" type="text" class="form-control" id="name" placeholder="Name ">
							<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="description">Description</label>
							<input name="description" value="<?= $dataproject['description']; ?>" type="text" class="form-control" id="description" placeholder="description dataproject">
							<?= form_error('description', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="team_name">Deskription</label>
							<input name="team_name" value="<?= $dataproject['team_name']; ?>" type="text" class="form-control" id="team_name" placeholder="team_name dataproject">
							<?= form_error('team_name', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						
						<a href="<?= base_url('user/dataprojek') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Simpan</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
