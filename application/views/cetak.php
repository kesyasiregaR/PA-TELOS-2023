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
    <p>Berdasarkan hasil penilaian sistem, berikut ini merupakan hasil akhir dari nilai kelayakan dengan detail berikut ini: </p><br />
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tbody>
            
            <?php $i = 1; ?>
            <?php foreach ($economic_data_perusahaan as $us): ?>
                <tr> 
                    <td><span style = "color: green"><b> [Laporan Keuangan] </span></td> </td>
                    <td> Data Perusahaan </td>
                </tr>
                <tr>
                    <td>Tingkat Pengembalian</td>
                    <td>:</td>
                    <td>
                        <?= $us['tingkat_pengembalian']; ?> %
                    </td>
                </tr>
                <tr>
                    <td>Tarif Pajak </td>
                    <td>:</td>
                    <td>
                        <?= $us['tarif_pajak']; ?> %
                    </td>
                </tr>

                <?php $i++; ?>
            <?php endforeach; ?>

        </tbody>
    </table>
   
    
</body>


