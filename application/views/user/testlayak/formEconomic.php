<!-- Begin Page Content -->
<div class="container-fluid">
   
    <!-- <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1> -->
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <h3>Form Pertanyaan Kelayakan Economic</h3>
                    <br>Simbol (<span class="text-danger">*</span>) Menandakan Wajib Diisi.</br>

                </div>
                <div class="card-body">
                    <form action="<?= base_url('User/TestKelayakan/Form_Economic/tambah'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
<<<<<<< HEAD
                            <label for="b1">Bagaimana proyek Anda akan didanai? <span class="text-danger">*</span> </label>
                            <select class="form-control" id="exampleFormControlSelect1" name="b1">
=======
                            <label for="category">Bagaimana proyek Anda akan didanai?  </label>
                            <select class="form-control" id="exampleFormControlSelect1" name="category">
>>>>>>> 89f78a453aa2b38e68e620d0e50dbda75a616297
                                <option value="">-</option>
                                <option value="Memenuhi">Memenuhi</option>
                                <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                            </select>
                            <?= form_error('b1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
<<<<<<< HEAD
                            <label for="b2">Apakah pembuat keputusan cenderung mendukung proyek secara finansial? <span class="text-danger">*</span></label>
                            <select class="form-control" id="exampleFormControlSelect1" name="b2">
=======
                            <label for="category">Apakah pembuat keputusan cenderung mendukung proyek secara finansial? </label>
                            <select class="form-control" id="exampleFormControlSelect1" name="category">
>>>>>>> 89f78a453aa2b38e68e620d0e50dbda75a616297
                                <option value="">-</option>
                                <option value="Memenuhi">Memenuhi</option>
                                <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                            </select>
                            <?= form_error('b2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
<<<<<<< HEAD
                            <label for="b3">Seberapa menarik secara finansial proyek tersebut, khususnya jika dibandingkan dengan proyek lain yang ingin dijalankan oleh organisasi?<span class="text-danger">*</span></label>
                            <select class="form-control" id="exampleFormControlSelect1" name="b3">
=======
                            <label for="category">Seberapa menarik secara finansial proyek tersebut, khususnya jika dibandingkan dengan proyek lain yang ingin dijalankan oleh organisasi?</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="category">
>>>>>>> 89f78a453aa2b38e68e620d0e50dbda75a616297
                                <option value="">-</option>
                                <option value="Memenuhi">Memenuhi</option>
                                <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                            </select>
                            <?= form_error('b3', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
<<<<<<< HEAD
                            <label for="b4">Kendala keuangan apa yang dapat mempengaruhi proyek Anda? Misalnya, apakah perlu menunjukkan pengembalian investasi dalam jangka waktu tertentu untuk dianggap sukses?<span class="text-danger">*</span></label>
                            <select class="form-control" id="exampleFormControlSelect1" name="b4">
=======
                            <label for="category">Kendala keuangan apa yang dapat mempengaruhi proyek Anda? Misalnya, apakah perlu menunjukkan pengembalian investasi dalam jangka waktu tertentu untuk dianggap sukses?</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="category">
>>>>>>> 89f78a453aa2b38e68e620d0e50dbda75a616297
                            <option value="">-</option>
                            <option value="Memenuhi">Memenuhi</option>
                                <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                            </select>
                            <?= form_error('b4', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
<<<<<<< HEAD
                            <label for="b5">Apakah sumber dana sudah terpenuhi?<span class="text-danger">*</span></label>
                            <select class="form-control" id="exampleFormControlSelect1" name="b5">
=======
                            <label for="category">Apakah sumber dana sudah terpenuhi??</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="category">
>>>>>>> 89f78a453aa2b38e68e620d0e50dbda75a616297
                            <option value="">-</option>
                            <option value="Memenuhi">Memenuhi</option>
                                <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                            </select>
                            <?= form_error('b5', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                       
                        <button type="submit" name="tambah" class="btn btn-info float-right">Simpan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>