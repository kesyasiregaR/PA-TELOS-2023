<!-- Begin Page Content -->
<div class="container-fluid">
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="<?= site_url('user/home'); ?>">Dashboard</a>
		</li>
		<li class="breadcrumb-item">
			<a href="<?= site_url('user/technological'); ?>">Technological</a>
		</li>
		<li class="breadcrumb-item active">
			Ubah Data Technologi
		</li>
	</ol>
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-12 ">
			<div class="card">
				<div class="card-header">
					Form Ubah Data Technologi
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id_technological" value="<?= $technological['id_technological']; ?>">
						<div class="form-group">
                            <label for="name">name</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="name">
                                <?php foreach ($dataproject as $us) : ?>
                                    <option value="<?= $us['name']; ?>"><?= $us['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
						<div class="form-group">
							<label for="category">Category</label>
							<select class="form-control" id="exampleFormControlSelect1" name="category">
                                <option value="Hardware">Hardware</option>
                                <option value="Software">Software</option>
                                <option value="Network">Network</option>
                                <option value="Management">Management</option>
                                <option value="Support">Support</option>
                                <option value="Implementation">Implementation</option>
                            </select>
                            
						</div>
						<div class="form-group">
							<label for="item">Item</label>
							<input name="item" value="<?= $technological['item']; ?>" type="text" class="form-control" id="item" placeholder="">
							<?= form_error('item', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="specification">Specification</label>
							<input name="specification" value="<?= $technological['specification']; ?>" type="text" class="form-control" id="specification" placeholder="">
							<?= form_error('specification', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="source">Price</label>
							<input name="price" value="<?= $technological['price']; ?>" type="text" class="form-control" id="price" placeholder="">
							<?= form_error('price', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="source">Source</label>
							<input name="source" value="<?= $technological['source']; ?>" type="text" class="form-control" id="source" placeholder="">
							<?= form_error('source', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<a href="<?= base_url('user/technological') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Simpan</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>