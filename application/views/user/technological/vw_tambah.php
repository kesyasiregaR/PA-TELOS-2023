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
        </li>
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
                            <label for="name">name</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="name">
                                <?php foreach ($dataproject as $us) : ?>
                                    <option value="<?= $us['name']; ?>"><?= $us['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="category">
                            <option value="Hardware">Hardware</option>
                                <option value="Software">Software</option>
                                <option value="Network">Network</option>
                                <option value="Management">Management</option>
                                <option value="Support">Support</option>
                                <option value="Implementation">Implementation</option>
                            </select>
                            
                            <?= form_error('category', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="item">Item</label>
                            <input name="item" type="text" value="<?= set_value('item'); ?>" class="form-control" id="item" placeholder="">
                            <?= form_error('item', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="specification">Specification</label>
                            <input name="specification" type="text" value="<?= set_value('specification'); ?>" class="form-control" id="specification" placeholder="">
                            <?= form_error('specification', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input name="price" type="text" value="<?= set_value('price'); ?>" class="form-control" id="price" placeholder="">
                            <?= form_error('price', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Date">Awal Tahun Pemakaian </label>
                            <input name="Date" type="text" value="<?= set_value('Date'); ?>" class="form-control" id="Date" placeholder="Tahun-Bulan-Tanggal">
                            <?= form_error('Date', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="source">Source</label>
                            <input name="source" type="text" value="<?= set_value('source'); ?>" class="form-control" id="source" placeholder="">
                            <?= form_error('source', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>




                        <button type="submit" name="tambah" class="btn btn-info float-right">Simpan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>