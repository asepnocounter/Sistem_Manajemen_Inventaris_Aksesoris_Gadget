<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "db_gadget";

$koneksi = mysqli_connect($server, $user, $password, $database);

if($koneksi == TRUE){
    echo "";
} 

?>