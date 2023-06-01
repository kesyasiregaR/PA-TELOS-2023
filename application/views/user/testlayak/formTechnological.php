<!-- Begin Page Content -->
<div class="container-fluid">
<?php if(count($form_technological) == 0): ?>
    <!-- <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1> -->
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <h3>Form Pertanyaan Kelayakan Technological</h3>
                    <br>Simbol (<span class="text-danger">*</span>) Menandakan Wajib Diisi.</br>

                </div>
                <div class="card-body">
                    <form action="<?= base_url('User/TestKelayakan/Form_Technological/tambah'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="a1">Apakah secara teknis memungkinkan untuk menyampaikan apa yang Anda inginkan?  <span class="text-danger">*</span></label>
                            <select class="form-control" id="exampleFormControlSelect1" name="a1">
                                <option value="">-</option>
                                <option value="Memenuhi">Memenuhi</option>
                                <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                            </select>
                            <?= form_error('a1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="a2">Apakah tim Anda memiliki akses ke teknologi yang Anda perlukan untuk menyukseskan proyek? <span class="text-danger">*</span></label>
                            <select class="form-control" id="exampleFormControlSelect1" name="a2">
                                <option value="">-</option>
                                <option value="Memenuhi">Memenuhi</option>
                                <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                            </select>
                            <?= form_error('a2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="a3">Apakah Teknologi sudah stabil? <span class="text-danger">*</span></label>
                            <select class="form-control" id="exampleFormControlSelect1" name="a3">
                                <option value="">-</option>
                                <option value="Memenuhi">Memenuhi</option>
                                <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                            </select>
                            <?= form_error('a3', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="a4">Apakah Teknologi relatif mudah dikembangkan? <span class="text-danger">*</span></label>
                            <select class="form-control" id="exampleFormControlSelect1" name="a4">
                            <option value="">-</option>
                            <option value="Memenuhi">Memenuhi</option>
                                <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                            </select>
                            <?= form_error('a4', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="a5">Apakah Teknologi yang dipakai sudah terbaru? <span class="text-danger">*</span></label>
                            <select class="form-control" id="exampleFormControlSelect1" name="a5">
                            <option value="">-</option>
                            <option value="Memenuhi">Memenuhi</option>
                                <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                            </select>
                            <?= form_error('a5', '<small class="text-danger pl-3">', '</small>'); ?>
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
      <p>Kembali ke <a href="<?= base_url('user/technological'); ?>">Technological</a></p>
      </section>
    <?php endif; ?>
</div>