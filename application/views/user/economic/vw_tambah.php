<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/economic'); ?>">Data Economic</a>
        </li>
        <li class="breadcrumb-item active">
            Tambah Data Economic
        </li>
    </ol>
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Economic
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
                            <label for="cost_benefit_type">	Cost Benefit Type</label>
                            <input name="cost_benefit_type" type="text" value="<?= set_value('cost_benefit_type'); ?>" class="form-control"
                                id="cost_benefit_type" placeholder=" ">
                            <?= form_error('cost_benefit_type', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="cost_type">	Cost Type</label>
                            <input name="cost_type" type="text" value="<?= set_value('cost_type'); ?>"
                                class="form-control" id="cost_type" placeholder="">
                            <?= form_error('cost_type', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="cost_component">Cost Component</label>
                            <input name="cost_component" type="text" value="<?= set_value('cost_component'); ?>"
                                class="form-control" id="cost_component" placeholder=" ">
                            <?= form_error('cost_component', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="item_type">Item Type</label>
                            <input name="item_type" type="text" value="<?= set_value('item_type'); ?>"
                                class="form-control" id="item_type" placeholder="">
                            <?= form_error('item_type', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Qty">Qty</label>
                            <input name="Qty" type="text" value="<?= set_value('Qty'); ?>"
                                class="form-control" id="Qty" placeholder=" ">
                            <?= form_error('Qty', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input name="price" type="text" value="<?= set_value('price'); ?>"
                                class="form-control" id="price" placeholder="">
                            <?= form_error('price', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tco">TCO</label>
                            <input name="tco" type="text" value="<?= set_value('tco'); ?>"
                                class="form-control" id="tco" placeholder=" ">
                            <?= form_error('tco', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>


                       
                        <button type="submit" name="tambah" class="btn btn-info float-right">Simpan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>