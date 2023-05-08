<!-- Begin Page Content -->
<div class="container-fluid">
	 <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/summary'); ?>">Data Summary</a>
        </li>
        <li class="breadcrumb-item active">
            Ubah Data Summary
        </li>
    </ol>
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-12 ">
			<div class="card">
				<div class="card-header">
					Form Ubah Data Summary
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id_summary" value="<?= $summary['id_summary']; ?>">
						<div class="form-group">
							<label for="project">Project</label>
							<input name="project" value="<?= $summary['project']; ?>" type="text" class="form-control" id="project">
							<?= form_error('project', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="technological">Technological</label>
							<input name="technological" value="<?= $summary['technological']; ?>" type="text" class="form-control" id="technological">
							<?= form_error('technological', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="economic">Economic</label>
							<input name="economic" value="<?= $summary['economic']; ?>" type="text" class="form-control" id="economic" >
							<?= form_error('economic', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="legal">Legal</label>
							<input name="legal" value="<?= $summary['legal']; ?>" type="text" class="form-control" id="legal" >
							<?= form_error('legal', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="operational">Operational</label>
							<input name="operational" value="<?= $summary['operational']; ?>" type="text" class="form-control" id="operational" >
							<?= form_error('operational', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="schedule">Schedule</label>
							<input name="schedule" value="<?= $summary['schedule']; ?>" type="text" class="form-control" id="schedule" >
							<?= form_error('schedule', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="hasil_akhir">Hasil Akhir</label>
							<input name="hasil_akhir" value="<?= $summary['hasil_akhir']; ?>" type="text" class="form-control" id="hasil_akhir" >
							<?= form_error('hasil_akhir', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						
						<a href="<?= base_url('user/summary') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Simpan</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
