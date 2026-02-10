<?php
include('koneksi.php');

$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link Font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>SISTEM MANAJEMEN INVENTARIS AKSESORIS GADGET</title>
</head>
<body>

<div class="container-fluid p-0 d-flex">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="header">
            <div class="list-item">
                <a href="#">
                    <img src="assets/simbol.svg" alt="" class="icon">
                    <span class="description-header">Inventaris Gadget</span>
                </a>
            </div>
        </div>

        <div class="main">
            <div class="list-item">
                <a href="../dashboard.php">
                    <img src="assets/simbol.svg" alt="" class="icon">
                    <span class="description">Dashboard</span>
                </a>
            </div>
            <div class="list-item">
                <a href="../tampered_glass/tempered_glass.php">
                    <img src="assets/simbol.svg" alt="" class="icon">
                    <span class="description">Tampered Glass</span>
                </a>
            </div>
            <div class="list-item">
                <a href="../casing_handphone/casing_handphone.php">
                    <img src="assets/simbol.svg" alt="" class="icon">
                    <span class="description">Casing Handphone</span>
                </a>
            </div>
        </div>
    </div>
    <!-- END SIDEBAR -->

    <!-- MAIN CONTENT -->
    <div class="main-content p-4 w-100">

        <h2 class="text-center mb-4">Data form Casing Handphone</h2>

        <!-- TOOLBAR -->
        <div class="d-flex justify-content-between align-items-center mb-3">

            <div>
                <a href="form_submit.php" class="btn btn-success">Tambah</a>

                <a href="script_excel.php?keyword=<?= $keyword ?>"
                   class="btn btn-success ms-2">
                   Export Excel
                </a>
            </div>

            <form method="get" class="d-flex">
                <input type="text"
                       name="keyword"
                       class="form-control me-2"
                       placeholder="Cari merek casing..."
                       value="<?= $keyword ?>">
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>

        <!-- TABLE -->
        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>NOMER</th>
                        <th>Merek Casing</th>
                        <th>Jumlah Casing</th>
                        <th>Harga Casing</th>
                        <th>Jenis Casing</th>
                        <th>Jenis Handphone</th>
                        <th>OPSI</th>
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
                        <td>
                            <a href="form_update.php?no=<?= $baris['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="hapus.php?no=<?= $baris['id']; ?>"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Konfirmasi jika ingin menghapus?')">
                               Hapus
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
