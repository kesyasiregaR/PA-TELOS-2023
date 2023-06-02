<!-- Begin Page Content -->
<div class="container-fluid">
    <?php if (count($form_legal) == 0) : ?>
        <!-- <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1> -->
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header">
                        <h3>Form Pertanyaan Kelayakan Legalitas</h3>
                        <br>Simbol (<span class="text-danger">*</span>) Menandakan Wajib Diisi.</br>

                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('User/TestKelayakan/Form_Legal/tambah'); ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="c1">Apakah Legalitas perangkat lunak terpenuhi?</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="c1">
                                    <option value="">-</option>
                                    <option value="Memenuhi">Memenuhi</option>
                                    <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                                </select>
                                <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="c2">Apakah Proyek dapat dipertanggung jawabkan? </label>
                                <select class="form-control" id="exampleFormControlSelect1" name="c2">
                                    <option value="">-</option>
                                    <option value="Memenuhi">Memenuhi</option>
                                    <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                                </select>
                                <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="c3">Apakah Teknologi sudah stabil? </label>
                                <select class="form-control" id="exampleFormControlSelect1" name="c3">
                                    <option value="">-</option>
                                    <option value="Memenuhi">Memenuhi</option>
                                    <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                                </select>
                                <?= form_error('c3', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="c4">Apakah tidak mengandung unsur penipuan? </label>
                                <select class="form-control" id="exampleFormControlSelect1" name="c4">
                                    <option value="">-</option>
                                    <option value="Memenuhi">Memenuhi</option>
                                    <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                                </select>
                                <?= form_error('c4', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="c5">Apakah undang-undang yang tertunda akan memengaruhi keberhasilan proyek ini?</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="c5">
                                    <option value="">-</option>
                                    <option value="Memenuhi">Memenuhi</option>
                                    <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                                </select>
                                <?= form_error('c5', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>


                            <button type="submit" name="tambah" class="btn btn-info float-right">Simpan</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    <?php else : ?>
        <section class="col-sm-12 mb-5">
            <h1 class="h3 mb-2 text-gray-800">
                <?php echo $judul1; ?>
            </h1>
            <p>Kembali ke <a href="<?= base_url('user/legal'); ?>">Legal</a></p>
        </section>
    <?php endif; ?>
</div>