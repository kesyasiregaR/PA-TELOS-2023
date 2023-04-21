<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/technological'); ?>">Data Technological</a>
        </li>
        <li class="breadcrumb-item active">
            Tambah Data Technological
    </ol>
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Technological
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <input category="category" type="text" value="<?= set_value('category'); ?>" class="form-control"
                                id="category" placeholder="category ">
                            <?= form_error('category', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="item">Item</label>
                            <input name="item" type="text" value="<?= set_value('item'); ?>"
                                class="form-control" id="item" placeholder="descriptions ">
                            <?= form_error('item', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="specification">specification</label>
                            <input name="specification" type="text" value="<?= set_value('specification'); ?>"
                                class="form-control" id="specification" placeholder="specification ">
                            <?= form_error('specification', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input name="price" type="text" value="<?= set_value('price'); ?>"
                                class="form-control" id="price" placeholder="price ">
                            <?= form_error('price', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="source">Source</label>
                            <input name="source" type="text" value="<?= set_value('source'); ?>"
                                class="form-control" id="source" placeholder="source ">
                            <?= form_error('source', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                       
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data Technological</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>