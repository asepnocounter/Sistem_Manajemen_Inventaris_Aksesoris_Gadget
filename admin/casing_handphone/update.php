<?php

include('koneksi.php');

$no = $_POST['no'];
$nama_ch = $_POST['nama_ch'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$jenis_ch = $_POST['jenis_ch'];
$hp_ch = $_POST['hp_ch'];

$update = mysqli_query($koneksi, "UPDATE casing_handphone SET 
merek_ch='$nama_ch', jumlah='$jumlah', harga='$harga', jenis_ch='$jenis_ch',hp_ch='$hp_ch' WHERE id='$no'");

if($update == TRUE){
        echo "<script>alert('Data Terupdate')</script>";
        header("Location: casing_handphone.php");
}else{
    echo "gagal";
}


?>