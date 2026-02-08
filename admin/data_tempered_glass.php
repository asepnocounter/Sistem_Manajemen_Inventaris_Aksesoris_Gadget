<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISTEM MANAJEMEN INVENTARIS AKSESORIS GADGET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  
  </head>
  <body>
    <h2 align="center">Data form Tampered Glass</h2>
    
    <a href="form_submit.php">
             <button type="button" class="btn btn-success">Tambah</button>
          </a>
          <table align="right">
            <tr>
              <td>
                  <form method="get" class="d-flex mb-3">
                      <input type="text" name="keyword" class="form-control me-2"
                            placeholder="Cari merk / jenis / HP.."
                            value="<?= isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>">
                      <button type="submit" class="btn btn-primary">Cari</button>
                  </form>
              </td>
            </tr>
          </table>

          <div class="mx-auto">
            <Table class="table table-dark table-striped">
              <thead>
                <tr>
                  <th>NOMER</th>
                  <th>Merek Tempered Glass</th>
                  <th>Jumlah Tampered Glass</th>
                  <th>Harga Tempered Glass</th>
                  <th>Jenis Tempered Glass</th>
                  <th>Jenis Handphone</th>
                  <th>OPSI</th>
                  <th>CETAK</th>
                </tr>
              </thead>           
              <tbody>
                <?php 
                  include('koneksi.php');
                  $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

                        if($keyword != ''){
                            $data = mysqli_query($koneksi, "
                                SELECT * FROM tampered_glass
                                WHERE 
                                    nama_tg LIKE '%$keyword%' OR
                                    hp_tg   LIKE '%$keyword%' OR
                                    jenis_tg LIKE '%$keyword%'
                            ");
                        }else{
                            $data = mysqli_query($koneksi, "
                                SELECT * FROM tampered_glass
                            ");
                        }
                      $no = 0;
                      while($baris = mysqli_fetch_array($data)){
                      $no++
                    ?>
                  <tr><td><?php echo $no?></td>
                  <td><?php echo $baris['nama_tg'];?></td>
                  <td><?php echo $baris['jumlah'];?></td>
                  <td><?php echo $baris['harga'];?></td>
                  <td><?php echo $baris['jenis_tg'];?></td>
                  <td><?php echo $baris['hp_tg'];?></td>
                  <td>
                    <a href="form_update.php?no=<?php echo $baris['id'] ?>">
                      <Button type="button" class="btn btn-primary"> edit</Button>
                    </a>
                    <a href="hapus.php?no=<?php echo $baris['id'] ?>">
                      <button type="button" class="btn btn-danger"onclick="return confirm('Konfirmasi jika ingin menghapus?')">hapus</button></a>
                    </td>
                    <td>
                      <input type="button" class="btn btn-success" value="Export Excel" onclick="window.open('script_excel.php')">
                    </td>
                    <?php } ?>
          
        </tr>    
      </tbody>
      
    </Table>
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
  </html>