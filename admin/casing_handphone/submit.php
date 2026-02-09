<?php
    include('koneksi.php');

    // deklarasi nama inputan
    $nama   =$_POST['nama_ch'];
    $jumlah =$_POST['jumlah'];
    $harga =$_POST['harga'];
    $jenis =$_POST['jenis_ch'];
    $hp    = $_POST['hp_ch'];
   
    // buat query untuk menambahkan table 
    $submit= mysqli_query($koneksi, "INSERT INTO casing_handphone (merek_ch, jumlah, harga, jenis_ch, hp_ch) 
    VALUES ('$nama','$jumlah','$harga','$jenis','$hp')");

    //buat kondisi jika query berhasil dan tidak error
    if($submit == TRUE){
        echo "<script>alert('Data Tersimpan')</script>";
        header("Location: casing_handphone.php");
    } else {
        echo "gagal tersimpan";
    }


?>