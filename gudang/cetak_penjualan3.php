<?php 
require 'prologin.php';
$sql = 'SELECT * FROM penjualan';
$statement = $con->prepare($sql);
$statement->execute();
$user = $statement->fetchAll(PDO::FETCH_OBJ);
 
?>

<?php require 'user.php'; ?>
 <div class="container">
   <div class="card mt-5 ">
       <div class="card-header bg bg-info">
         <h2>Data Penjualan</h2>
       </div>
       <div class="card-body">
          <table class="table table-bordered">
             <tr>
                <th>Id</th>
                <th>Tanggal Jual</th>
                <th>Pelanggan</th>
                <th>Kasir</th>
                <th>Sub Total</th>
                <th>Diskon Persen</th>
                <th>Diskon Total</th>
                <th>Total Harga</th>
                <th>Action</th>
             </tr>
             <?php foreach($user as $as): ?>
             <tr>
                <td><?= $as->no_nota; ?></td>
                <td><?= $as->tgl_jual; ?></td>
                <td><?= $as->pelanggan; ?></td>
                <td><?= $as->kasir; ?></td>
                <td><?= $as->sub_total; ?></td>
                <td><?= $as->diskon_persen; ?></td>
                <td><?= $as->diskon_total; ?></td>
                <td><?= $as->total_harga; ?></td>
     </div>
             </tr>
             <?php endforeach; ?>
          </table>
          <a href="cetak_penjualan4.php" class="btn btn-info">Cetak</a>
       </div>
   </div>
 </div>

 

   
<?php require 'footer.php'; ?>

    
