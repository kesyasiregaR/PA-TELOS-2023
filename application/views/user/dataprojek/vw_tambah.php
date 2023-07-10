<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/dataprojek'); ?>">Data Projek</a>
        </li>
        <li class="breadcrumb-item active" >
            Tambah Data 
        </li>
    </ol>
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                       
                            <div class="form-group">
                    
                            <input name="id_public" type="text" value="<?php $var = $this->session->userdata;
                            echo $var['id_public'];
                            ?>" class="form-control"
                                id="id_public" placeholder="" hidden>
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                      
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text" value="<?= set_value('name'); ?>" class="form-control"
                                id="name" placeholder="">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="description">Descriptions</label>
                            <input name="description" type="text" value="<?= set_value('description'); ?>"
                                class="form-control" id="description" placeholder="">
                            <?= form_error('description', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="team_name">Team Name</label>
                            <input name="team_name" type="text" value="<?= set_value('team_name'); ?>"
                                class="form-control" id="team_name" placeholder="">
                            <?= form_error('team_name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                       
                        <button type="submit" name="tambah" class="btn btn-info float-right">Simpan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>