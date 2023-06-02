<!-- Begin Page Content -->
<div class="container-fluid">
<?php if(count($form_operational) == 0): ?>
    <!-- <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1> -->
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <h3>Form Pertanyaan Kelayakan Operational</h3>
                    <br>Simbol (<span class="text-danger">*</span>) Menandakan Wajib Diisi.</br>

                </div>
                <div class="card-body">
                <form action="<?= base_url('User/TestKelayakan/Form_Operational/tambah'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="d1">Prosedur baru apa yang perlu Anda terapkan untuk menyukseskan proyek? </label>
                            <select class="form-control" id="exampleFormControlSelect1" name="d1">
                                <option value="">-</option>
                                <option value="Memenuhi">Memenuhi</option>
                                <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                            </select>
                            <?= form_error('d1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="d2">Pelatihan apa (selain pelatihan berorientasi teknologi) yang dibutuhkan orang?</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="d2">
                                <option value="">-</option>
                                <option value="Memenuhi">Memenuhi</option>
                                <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                            </select>
                            <?= form_error('d2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="d3">Perubahan apa lagi yang mungkin perlu Anda lakukan untuk mendukung proyek dalam jangka panjang? Misalnya, apakah Anda perlu menerima anggota tim baru?</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="d3">
                                <option value="">-</option>
                                <option value="Memenuhi">Memenuhi</option>
                                <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                            </select>
                            <?= form_error('d3', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="d4">Apa dampaknya terhadap proyek lain atau departemen lain? </label>
                            <select class="form-control" id="exampleFormControlSelect1" name="d4">
                            <option value="">-</option>
                            <option value="Memenuhi">Memenuhi</option>
                                <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                            </select>
                            <?= form_error('d4', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="d5">Apakah fasilitas operasional sudah terpenuhi?</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="d5">
                            <option value="">-</option>
                            <option value="Memenuhi">Memenuhi</option>
                                <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                            </select>
                            <?= form_error('d5', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                       
                        <button type="submit" name="tambah" class="btn btn-info float-right">Simpan</button>
                    </form>
                </div>
            </div>

            </div>
    </div>
    <?php else: ?>
    <section class="col-sm-12 mb-5">
      <h1 class="h3 mb-2 text-gray-800">
    <?php echo $judul1; ?>
  </h1>
      <p>Kembali ke <a href="<?= base_url('user/operational'); ?>">Operational</a></p>
      </section>
    <?php endif; ?>
</div>