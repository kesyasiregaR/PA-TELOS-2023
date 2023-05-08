<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/operational'); ?>">Data Operational</a>
        </li>
        <li class="breadcrumb-item active">
            Tambah Data Operational
        </li>
    </ol>
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Operational
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <input name="category" type="text" value="<?= set_value('category'); ?>" class="form-control" id="category" placeholder="">
                            <?= form_error('category', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="description_before">Descriptions_Before</label>
                            <input name="description_before" type="text" value="<?= set_value('description_before'); ?>" class="form-control" id="description_before" placeholder="">
                            <?= form_error('description_before', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="description_after">Descriptions_After</label>
                            <input name="description_after" type="text" value="<?= set_value('description_after'); ?>" class="form-control" id="description_after" placeholder="">
                            <?= form_error('description_after', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="improvement">Improvement</label>
                            <input name="improvement" type="text" value="<?= set_value('improvement'); ?>" class="form-control" id="improvement" placeholder="">
                            <?= form_error('improvement', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>


                        <button type="submit" name="tambah" class="btn btn-info float-right">Simpan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>