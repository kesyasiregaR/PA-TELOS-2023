<!-- Begin Page Content -->
<div class="container-fluid">
<?php if (count($form_schedule) == 0) : ?>
        <!-- <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1> -->
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header">
                        <h3>Form Pertanyaan Kelayakan Schedule</h3>
                        <br>Simbol (<span class="text-danger">*</span>) Menandakan Wajib Diisi.</br>

                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('User/TestKelayakan/Form_Schedule/tambah'); ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="e1">Menggunakan manajemen waktu yang logis dan sesuai dalam perencanaan dan pengembangan? </label>
                                <select class="form-control" id="exampleFormControlSelect1" name="e1">
                                    <option value="">-</option>
                                    <option value="Memenuhi">Memenuhi</option>
                                    <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                                </select>
                                <?= form_error('e1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="e2">Kesesuaian kesepakatan penjadwalan?</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="e2">
                                    <option value="">-</option>
                                    <option value="Memenuhi">Memenuhi</option>
                                    <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                                </select>
                                <?= form_error('e2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="e3">Apakah Anda dapat mengirimkan proyek saat dibutuhkan? </label>
                                <select class="form-control" id="exampleFormControlSelect1" name="e3">
                                    <option value="">-</option>
                                    <option value="Memenuhi">Memenuhi</option>
                                    <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                                </select>
                                <?= form_error('e3', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="e4">Konflik penjadwalan apa (termasuk konflik dengan proyek lain atau konflik dengan kebutuhan departemen lain) yang mungkin muncul, dan bagaimana Anda akan mengatasinya? </label>
                                <select class="form-control" id="exampleFormControlSelect1" name="e4">
                                    <option value="">-</option>
                                    <option value="Memenuhi">Memenuhi</option>
                                    <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                                </select>
                                <?= form_error('e4', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="e5">Di mana tenggat waktu utama akan jatuh, dan bagaimana Anda memastikan bahwa Anda memenuhinya?</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="e5">
                                    <option value="">-</option>
                                    <option value="Memenuhi">Memenuhi</option>
                                    <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                                </select>
                                <?= form_error('e5', '<small class="text-danger pl-3">', '</small>'); ?>
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
            <p>Kembali ke <a href="<?= base_url('user/schedule'); ?>">Schedule</a></p>
        </section>
    <?php endif; ?>
</div>