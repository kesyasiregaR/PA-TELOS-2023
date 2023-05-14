<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/summary'); ?>">Master Data</a>
        </li>
        <li class="breadcrumb-item active" >
            Tambah Data Summary
        </li>
    </ol>
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Projek
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="project">Nama Project</label>
                            <input name="project" type="text" value="<?= set_value('project'); ?>" class="form-control"
                                id="project">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div><div class="form-group">
                            <label for="technological">Technological</label>
                            <input name="technological" type="text" value="<?= set_value('technological'); ?>" class="form-control"
                                id="technological">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="economic">Economic</label>
                            <input name="economic" type="text" value="<?= set_value('economic'); ?>"
                                class="form-control" id="economic">
                            <?= form_error('economic', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="legal">Legal</label>
                            <input name="legal" type="text" value="<?= set_value('legal'); ?>"
                                class="form-control" id="legal">
                            <?= form_error('legal', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="operational">Operational</label>
                            <input name="operational" type="text" value="<?= set_value('operational'); ?>"
                                class="form-control" id="operational">
                            <?= form_error('operational', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="schedule">Schedule</label>
                            <input name="schedule" type="text" value="<?= set_value('schedule'); ?>"
                                class="form-control" id="schedule">
                            <?= form_error('schedule', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="hasil_akhir">Hasil Akhir</label>
                            <input name="hasil_akhir" type="text" value="<?= set_value('hasil_akhir'); ?>"
                                class="form-control" id="hasil_akhir">
                            <?= form_error('hasil_akhir', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                       
                        <button type="submit" name="tambah" class="btn btn-info float-right">Simpan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>