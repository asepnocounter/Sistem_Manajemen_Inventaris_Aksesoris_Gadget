<?php
include('koneksi.php');

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan_Stok_Casing_Handphone.xls");

$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Export Excel</title>
</head>
<body>

<p align="center" style="font-weight:bold;font-size:16pt">
    LAPORAN STOK CASING HANDPHONE
</p>

<table border="1" align="center">
    <thead>
        <tr>
            <th>NOMER</th>
            <th>Merek Casing</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Jenis Casing</th>
            <th>Jenis Handphone</th>
        </tr>
    </thead>
    <tbody>
    <?php

    if($keyword != ''){
        $data = mysqli_query($koneksi,"
            SELECT id,merek_ch,jumlah,harga,jenis_ch,hp_ch
            FROM casing_handphone
            WHERE merek_ch LIKE '%$keyword%'
        ");
    }else{
        $data = mysqli_query($koneksi,"
            SELECT id,merek_ch,jumlah,harga,jenis_ch,hp_ch
            FROM casing_handphone
        ");
    }

    $no = 1;
    while($baris = mysqli_fetch_array($data)){
    ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $baris['merek_ch']; ?></td>
            <td><?= $baris['jumlah']; ?></td>
            <td><?= $baris['harga']; ?></td>
            <td><?= $baris['jenis_ch']; ?></td>
            <td><?= $baris['hp_ch']; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

</body>
</html>
