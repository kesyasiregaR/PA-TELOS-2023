<!-- Begin Page Content -->
<div class="container-fluid">
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="<?= site_url('user/home'); ?>">Dashboard</a>
		</li>
		<li class="breadcrumb-item">
			<a href="<?= site_url('user/technological'); ?>">Technoloogical</a>
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
						<input type="hidden" name="id_technologic" value="<?= $technological['id_technologic']; ?>">
						<div class="form-group">
							<label for="category">Category</label>
							<input name="category" value="<?= $technological['category']; ?>" type="text" class="form-control" id="category" placeholder="category ">
							<?= form_error('category', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="item">Item</label>
							<input name="item" value="<?= $technological['item']; ?>" type="text" class="form-control" id="item" placeholder="item technological">
							<?= form_error('item', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="specification">Specification</label>
							<input name="specification" value="<?= $technological['specification']; ?>" type="text" class="form-control" id="specification" placeholder="specification technological">
							<?= form_error('specification', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="source">Price</label>
							<input name="price" value="<?= $technological['price']; ?>" type="text" class="form-control" id="price" placeholder="price technological">
							<?= form_error('price', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="source">Source</label>
							<input name="source" value="<?= $technological['source']; ?>" type="text" class="form-control" id="source" placeholder="source technological">
							<?= form_error('source', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						
						<a href="<?= base_url('user/technological') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data Technological</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
