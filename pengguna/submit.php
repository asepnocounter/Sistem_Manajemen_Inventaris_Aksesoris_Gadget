<?php
    include('koneksi.php');

    $nama   =$_POST['nama_tg'];
    $jumlah =$_POST['jumlah'];
    $harga =$_POST['harga'];
    $jenis =$_POST['jenis_tg'];
    $hp    = $_POST['hp_tg'];
   
    
    $submit= mysqli_query($koneksi, "INSERT INTO tampered_glass (nama_tg, jumlah, harga, jenis_tg, hp_tg) 
    VALUES ('$nama','$jumlah','$harga','$jenis','$hp')");

    if($submit == TRUE){
        echo "<script>alert('Data Tersimpan')</script>";
        header("Location: data_tempered_glass.php");
    } else {
        echo "gagal tersimpan";
    }


?>