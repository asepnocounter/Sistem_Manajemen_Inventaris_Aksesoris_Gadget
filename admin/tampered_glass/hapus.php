<?php

include('koneksi.php');
$no = $_GET['no'];

$hapus = mysqli_query($koneksi, "DELETE FROM tampered_glass WHERE id='$no'");
if($hapus == TRUE){
    echo "Berhasil Terhapus Dari Database";
    header("Location: tempered_glass.php");
} else {
    echo "Gagal Terhapus";
}

?>