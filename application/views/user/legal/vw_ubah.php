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
						<!-- <div class="form-group">
                            <label for="name">Nama Projek</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="name">
                                <?php foreach ($dataproject as $us) : ?>
                                    <option value="<?= $us['name']; ?>"><?= $us['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div> -->
						<div class="form-group">
                            <label for="jenis">Kategori</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="jenis">
                                <option value="Hardware">Hardware</option>
                                <option value="Software">Software</option>
                            </select>
                            <?= form_error('category', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
						<div class="form-group">
                            <label for="nama_jenis_produk">Jenis Kategori</label>
                            <input name="nama_jenis_produk" value="<?= $legal['nama_jenis_produk']; ?>" type="text" class="form-control" id="nama_jenis_produk" placeholder="">
                            <?= form_error('nama_jenis_produk', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
						<div class="form-group">
							<label for="description">Deskripsi</label>
							<input name="description" value="<?= $legal['description']; ?>" type="text" class="form-control" id="description" placeholder="">
							<?= form_error('description', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
						<label for="status">Status</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="status">
                                <option value="Aktif">Aktif</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                            </select>
                            <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
						
						<a href="<?= base_url('user/legal') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Simpan</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
