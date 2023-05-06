<!-- Begin Page Content -->
<div class="container-fluid">
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="<?= site_url('user/home'); ?>">Dashboard</a>
		</li>
		<li class="breadcrumb-item">
			<a href="<?= site_url('user/economic'); ?>">Economic</a>
		</li>
		<li class="breadcrumb-item active">
			Ubah Data Economic
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
						<input type="hidden" name="id_economic" value="<?= $economic['id_economic']; ?>">
						<div class="form-group">
							<label for="cost_benefit_type">Cost Benefit Type</label>
							<input name="cost_benefit_type" value="<?= $economic['cost_benefit_type']; ?>" type="text" class="form-control" id="cost_benefit_type" placeholder="cost_benefit_type ">
							<?= form_error('cost_benefit_type', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="cost_type">Cost Type</label>
							<input name="cost_type" value="<?= $economic['cost_type']; ?>" type="text" class="form-control" id="cost_type" placeholder="cost_type economic">
							<?= form_error('cost_type', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="cost_component">Cost Component</label>
							<input name="cost_component" value="<?= $economic['cost_component']; ?>" type="text" class="form-control" id="cost_component" placeholder="cost_component economic">
							<?= form_error('cost_component', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="item_type">Item Type</label>
							<input name="item_type" value="<?= $economic['item_type']; ?>" type="text" class="form-control" id="item_type" placeholder="item_type economic">
							<?= form_error('item_type', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="Qty">Qty</label>
							<input name="Qty" value="<?= $economic['Qty']; ?>" type="text" class="form-control" id="Qty" placeholder="Qty economic">
							<?= form_error('Qty', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="price">Price</label>
							<input name="price" value="<?= $economic['price']; ?>" type="text" class="form-control" id="price" placeholder="price economic">
							<?= form_error('price', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="tco">TCO</label>
							<input name="tco" value="<?= $economic['tco']; ?>" type="text" class="form-control" id="tco" placeholder="tco economic">
							<?= form_error('tco', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
					
						
						<a href="<?= base_url('user/economic') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Simpan</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
