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
            <h3>Bukti Dokumen Kelayakan</h3>
        </u>
    </div>
    <p>Berdasarkan hasil penilaian sistem kelayakan, maka berikut ini adalah dokumen kelayakan dengan rincian di bawah ini, </p><br />
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tbody>


            <?php $i = 1; ?>
            <?php foreach ($dataproject as $us): ?>
                <tr>
                    <td>Nama Projek</td>
                    <td>:</td>
                    <td>
                        <?= $us['name']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td>
                        <?= $us['description']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Team</td>
                    <td>:</td>
                    <td>
                        <?= $us['team_name']; ?>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

            <?php $i = 1; ?>
            <?php foreach ($technological as $us): ?>
                <tr> Technological </tr>
                <tr>
                    <td>Kategori</td>
                    <td>:</td>
                    <td>
                        <?= $us['category']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Nama Item</td>
                    <td>:</td>
                    <td>
                        <?= $us['item']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Spesifikasi</td>
                    <td>:</td>
                    <td>
                        <?= $us['specification']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td>
                        <?= $us['price']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Mulai Pemakaian</td>
                    <td>:</td>
                    <td>
                        <?= $us['Date']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Status Kelayakan</td>
                    <td>:</td>
                    <td>
                        <?= $status; ?>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>


        </tbody>

    </table>
   
    
</body>