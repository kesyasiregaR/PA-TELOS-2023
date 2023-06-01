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
                    <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="category">Apakah secara teknis memungkinkan untuk menyampaikan apa yang Anda inginkan?  </label>
                            <select class="form-control" id="exampleFormControlSelect1" name="category">
                                <option value="">-</option>
                                <option value="Memenuhi">Memenuhi</option>
                                <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                            </select>
                            <?= form_error('category', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="category">Apakah tim Anda memiliki akses ke teknologi yang Anda perlukan untuk menyukseskan proyek? </label>
                            <select class="form-control" id="exampleFormControlSelect1" name="category">
                                <option value="">-</option>
                                <option value="Memenuhi">Memenuhi</option>
                                <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                            </select>
                            <?= form_error('category', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="category">Apakah Teknologi sudah stabil? </label>
                            <select class="form-control" id="exampleFormControlSelect1" name="category">
                                <option value="">-</option>
                                <option value="Memenuhi">Memenuhi</option>
                                <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                            </select>
                            <?= form_error('category', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="category">Apakah Teknologi relatif mudah dikembangkan? </label>
                            <select class="form-control" id="exampleFormControlSelect1" name="category">
                            <option value="">-</option>
                            <option value="Memenuhi">Memenuhi</option>
                                <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                            </select>
                            <?= form_error('category', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="category">Apakah Teknologi yang dipakai sudah terbaru?</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="category">
                            <option value="">-</option>
                            <option value="Memenuhi">Memenuhi</option>
                                <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                            </select>
                            <?= form_error('category', '<small class="text-danger pl-3">', '</small>'); ?>
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