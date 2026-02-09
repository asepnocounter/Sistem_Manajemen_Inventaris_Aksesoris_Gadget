<?php

include('koneksi.php');

$no = $_POST['no'];
$nama = $_POST['nama_tg'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$jenis_tg = $_POST['jenis_tg'];
$hp_tg = $_POST['hp_tg'];

$update = mysqli_query($koneksi, "UPDATE tampered_glass SET 
nama_tg='$nama', jumlah='$jumlah', harga='$harga', jenis_tg='$jenis_tg',hp_tg='$hp_tg' WHERE id='$no'");

if($update == TRUE){
        echo "<script>alert('Data Terupdate')</script>";
        header("Location: tempered_glass.php");
}else{
    echo "gagal";
}


?>