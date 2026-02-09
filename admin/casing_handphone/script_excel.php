<!doctype html>
    <?php
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Laporan Stok Casing Handphone Inventaris Gadget.xls"); 
      ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISTEM MANAJEMEN INVENTARIS AKSESORIS GADGET</title>
    
  </head>
  <body>
    <p align="center" style="font-weight:bold;font-size:16pt">LAPORAN STOK CASING HANDPHONE</p>

   
     <Table border="1" align="center" class="table table-dark table-striped">
       <thead>
         <tr align="center">
           <th width="100">NOMER</th>
           <th width="200">Merek Casing Handphone</th>
           <th width="200">Jumlah Casing Handphone</th>
           <th width="200">Harga Casing Handphone</th>
           <th width="200">Jenis Casing Handphone</th>
           <th width="200">Jenis Handphone</th>
          </tr>
        </thead>
        <tbody>
              <?php 
            include('koneksi.php');
            $data = mysqli_query($koneksi, "SELECT * FROM casing_handphone");
            $no = 0;
            while($baris = mysqli_fetch_array($data)){
              $no++
              ?>
          <tr align="center">
            <td width="100"><?php echo $no; ?></td>
            <td width="200"><?php echo $baris['merek_ch']; ?></td>
            <td width="200"><?php echo $baris['jumlah']; ?></td>
            <td width="200"><?php echo $baris['harga']; ?></td>
            <td width="200"><?php echo $baris['jenis_ch']; ?></td>
            <td width="200"><?php echo $baris['hp_ch']; ?></td>          
          </tr>    
        <?php } ?>
      </tbody>
    </Table>
  
  
</body>
</html>