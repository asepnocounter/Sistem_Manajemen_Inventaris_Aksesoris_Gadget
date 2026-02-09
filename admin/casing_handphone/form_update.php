        
        
        <!doctype html>
        <?php 
        include('koneksi.php');
        $no = $_GET['no'];
        $data = mysqli_query($koneksi, "SELECT * FROM casing_handphone WHERE id='$no'");
        $baris = mysqli_fetch_array($data);
        ?>
        <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>SISTEM MANAJEMEN INVENTARIS AKSESORIS GADGET</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
                <style>
                    .mx-auto{width:500px}
                </style>
            </head>
            <body>
                <figure class="text-center">
                    <blockquote class="blockquote">
                        <p>
                            Silahkan Mengedit Form Casing Handphone
                        </p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        isikan data dibawah dengan benar
                    </figcaption>
                </figure>
                <form method="POST" action="update.php">
                    <div class="mx-auto">

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Merk Tampered Glass</label>
                            <input type="text" class="form-control form-control-sm" value="<?php echo $baris['merek_ch']; ?>" aria-label=".form-control-sm example" name="nama_ch" required >
                            <input name="no" value="<?php echo $no; ?>" hidden>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Jumlah</label>
                            <input type="text" class="form-control form-control-sm" value="<?php echo $baris['jumlah']; ?>" aria-label=".form-control-sm example" name="jumlah" required >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Harga</label>
                            <input type="text" class="form-control form-control-sm" value="<?php echo $baris['harga']; ?>" aria-label=".form-control-sm example" name="harga" required >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Jenis Casing Handphone</label>
                        </div>
                        <select class="form-select" aria-label="Default select example" name="jenis_ch">
                            <option value="Rugged Case" > Rugged Case</option>
                            <option value="Wallet" > Wallet</option>
                            <option value="Soft Case" > Soft Case </option>
                            <option value="Hard Case" > Hard Case </option>
                        </select>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Merk Hp</label>
                            <input type="text" class="form-control form-control-sm" value="<?php echo $baris['hp_ch']; ?>" aria-label=".form-control-sm example" name="hp_ch" required >
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="casing_handphone.php">
                            <button type="button" class="btn btn-danger">Kembali</button>
                        </a>
                        
                    </form>
                </div>
                    
                    
                    
                    
                    
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
                </body>
            </html>