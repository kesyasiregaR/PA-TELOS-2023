<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/legal'); ?>">Legal</a>
        </li>
        <li class="breadcrumb-item active">
            Tambah Data Legalitas
        </li>
    </ol>
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Legalitas
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text" value="<?= set_value('name'); ?>" class="form-control"
                                id="name" placeholder="Name Project ">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="description">Descriptions</label>
                            <input name="description" type="text" value="<?= set_value('description'); ?>"
                                class="form-control" id="description" placeholder="descriptions ">
                            <?= form_error('description', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input name="status" type="text" value="<?= set_value('status'); ?>"
                                class="form-control" id="status" placeholder="status ">
                            <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data Legalitas</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>