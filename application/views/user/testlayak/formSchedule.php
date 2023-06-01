<!-- Begin Page Content -->
<div class="container-fluid">
   
    <!-- <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1> -->
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <h3>Form Pertanyaan Kelayakan Schedule</h3>
                    <br>Simbol (<span class="text-danger">*</span>) Menandakan Wajib Diisi.</br>

                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="category">Menggunakan manajemen waktu yang logis dan sesuai dalam perencanaan dan pengembangan? </label>
                            <select class="form-control" id="exampleFormControlSelect1" name="category">
                                <option value="">-</option>
                                <option value="Memenuhi">Memenuhi</option>
                                <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                            </select>
                            <?= form_error('category', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="category">Kesesuaian kesepakatan penjadwalan?</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="category">
                                <option value="">-</option>
                                <option value="Memenuhi">Memenuhi</option>
                                <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                            </select>
                            <?= form_error('category', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="category">Apakah Anda dapat mengirimkan proyek saat dibutuhkan? </label>
                            <select class="form-control" id="exampleFormControlSelect1" name="category">
                                <option value="">-</option>
                                <option value="Memenuhi">Memenuhi</option>
                                <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                            </select>
                            <?= form_error('category', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="category">Konflik penjadwalan apa (termasuk konflik dengan proyek lain atau konflik dengan kebutuhan departemen lain) yang mungkin muncul, dan bagaimana Anda akan mengatasinya? </label>
                            <select class="form-control" id="exampleFormControlSelect1" name="category">
                            <option value="">-</option>
                            <option value="Memenuhi">Memenuhi</option>
                                <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                            </select>
                            <?= form_error('category', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="category">Di mana tenggat waktu utama akan jatuh, dan bagaimana Anda memastikan bahwa Anda memenuhinya?</label>
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
</div>