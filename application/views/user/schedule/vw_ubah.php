<!-- Begin Page Content -->
<div class="container-fluid">
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="<?= site_url('user/home'); ?>">Dashboard</a>
		</li>
		<li class="breadcrumb-item">
			<a href="<?= site_url('user/schedule'); ?>">Data Schedule</a>
		</li>
		<li class="breadcrumb-item active">
			Ubah Data Schedule
		</li>
	</ol>
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-12 ">
			<div class="card">
				<div class="card-header">
					Form Ubah Schedule
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id_schedule" value="<?= $schedule['id_schedule']; ?>">
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
							<label for="name_of_activity">Name of Activity</label>
							<input name="name_of_activity" value="<?= $schedule['name_of_activity']; ?>" type="text" class="form-control" id="name_of_activity" >
							<?= form_error('name_of_activity', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="start_date">Start Date</label>
							<input name="start_date" value="<?= $schedule['start_date']; ?>" type="date" class="form-control" id="start_date" placeholder="">
							<?= form_error('start_date', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="end_date">End Date</label>
							<input name="end_date" value="<?= $schedule['end_date']; ?>" type="date" class="form-control" id="end_date" placeholder="">
							<?= form_error('end_date', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<a href="<?= base_url('user/schedule') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Simpan</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>