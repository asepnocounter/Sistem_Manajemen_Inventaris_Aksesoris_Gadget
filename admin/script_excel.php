<!doctype html>
    <?php
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=laporan-excel.xls"); 
      ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISTEM MANAJEMEN INVENTARIS AKSESORIS GADGET</title>
    
  </head>
  <body>
    <p align="center" style="font-weight:bold;font-size:16pt">LAPORAN STOK TEMPERED GLASS PENJUALAN</p>

   
     <Table border="1" align="center" class="table table-dark table-striped">
       <thead>
         <tr align="center">
           <th width="100">NOMER</th>
           <th width="200">Merek Tempered Glass</th>
           <th width="200">Jumlah Tampered Glass</th>
           <th width="200">Harga Tempered Glass</th>
           <th width="200">Jenis Tempered Glass</th>
           <th width="200">Jenis Handphone</th>
          </tr>
        </thead>
        <tbody>
              <?php 
            include('koneksi.php');
            $data = mysqli_query($koneksi, "SELECT * FROM tampered_glass");
            $no = 0;
            while($baris = mysqli_fetch_array($data)){
              $no++
              ?>
          <tr align="center">
            <td width="100"><?php echo $no; ?></td>
            <td width="200"><?php echo $baris['nama_tg']; ?></td>
            <td width="200"><?php echo $baris['jumlah']; ?></td>
            <td width="200"><?php echo $baris['harga']; ?></td>
            <td width="200"><?php echo $baris['jenis_tg']; ?></td>
            <td width="200"><?php echo $baris['hp_tg']; ?></td>          
          </tr>    
        <?php } ?>
      </tbody>
    </Table>
  
  
</body>
</html>