<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('user/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            Data Economic
        </li>
    </ol>
    <h2 class="h3 mb-2 text-gray-800"><?=$judul;?></h2>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?= $this->session->flashdata('message');?>
        <div class="card-header py-3">
            <a href=<?=base_url('user/Economic/tambah');?> class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Cost Benefit Type</th>
                            <th>Cost Type</th>
                            <th>Item Type</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th></th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($economic as $us) : ?>
                        <tr>
                            <td><?=$i;?></td>
                            <td><?= $us['cost_benefit_type'];?></td>
                            <td><?= $us['cost_type'];?></td>
                            <td><?= $us['cost_component'];?></td>
                            <td><?= $us['item_type'];?></td>
                            <td><?= $us['Qty'];?></td>
                            <td><?= $us['price'];?></td>
                            <td><?= $us['tco'];?></td>

                            <td>
                                <a href="<?= base_url('User/economic/hapus/').$us['id_economic'];?>"
                                    class="badge badge-danger">Hapus</a>
                                <a href="<?= base_url('User/economic/edit/').$us['id_economic'];?>"
                                    class="badge badge-warning">Edit</a>
                            </td>
                        </tr>
                        <?php $i++;?>
                        <?php endforeach; ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->