<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/schedule'); ?>">Schedule</a>
        </li>
        <li class="breadcrumb-item active">
            Tambah Data Schedule
        </li>
    </ol>
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Schedule
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <!-- <label for="Nama Projek">Nama Projek</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="name">
                                <?php foreach ($dataproject as $us) : ?>
                                    <option value="<?= $us['name']; ?>"><?= $us['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div> -->
                        
                        <div class="form-group">
                            <label for="name_of_activity">Nama Aktivitas</label>
                            <input name="name_of_activity" type="text" value="<?= set_value('name_of_activity'); ?>" class="form-control"
                                id="name_of_activity" >
                            <?= form_error('name_of_activity', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="start_date">Tanggal Mulai</label>
                            <input name="start_date" type="date" value="<?= set_value('start_date'); ?>"
                                class="form-control" id="start_date" >
                            <?= form_error('start_date', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="end_date">Tanggal Berakhir</label>
                            <input name="end_date" type="date" value="<?= set_value('end_date'); ?>"
                                class="form-control" id="end_date" >
                            <?= form_error('end_date', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        
                       
                        <button type="submit" name="tambah" class="btn btn-info float-right">Simpan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>