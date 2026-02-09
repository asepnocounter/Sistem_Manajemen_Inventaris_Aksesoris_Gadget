<?php

include('koneksi.php');
$no = $_GET['no'];

$hapus = mysqli_query($koneksi, "DELETE FROM casing_handphone WHERE id='$no'");
if($hapus == TRUE){
    echo "Berhasil Terhapus Dari Database";
    header("Location: casing_handphone.php");
} else {
    echo "Gagal Terhapus";
}

?>