<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>style-pdf.css">
    <title>
        <?= $judul; ?>
    </title>
</head>

<body>

    <div style="text-align: center;">
        <u>
            <h3>BUKTI Dokumen Kelayakan</h3>
        </u>
    </div>
    <p>Berdasarkan hasil peninjaun dan penilaian kami, maka kami menyatakan bahwa data siswa dibawah ini</p><br />
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tbody>


            <?php $i = 1; ?>
            <?php foreach ($technological as $us): ?>
                <tr>
                    <td>Nama Projek</td>
                    <td>:</td>
                    <td>
                        <?= $us['name']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td>:</td>
                    <td>
                        <?= $us['category']; ?>
                    </td>
                </tr>
                <!-- <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <?= $us['status']; ?>
                    </td>
                </tr> -->
                <?php $i++; ?>
            <?php endforeach; ?>


        </tbody>
    </table>
   
    
</body>