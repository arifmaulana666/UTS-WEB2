<?php 
require 'prologin.php';
$sql = 'SELECT * FROM penjualan';
$statement = $con->prepare($sql);
$statement->execute();
$user = $statement->fetchAll(PDO::FETCH_OBJ);
 
?>

<?php require 'header.php'; ?>
 <div class="container">
   <div class="card mt-5">
       <div class="card-header bg bg-info">
       <a class="btn btn-warning" href="create_penjualan.php">TAMBAH</a>
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
                <td>
                  <a href="edit_penjualan.php?no_nota=<?= $as->no_nota ?>" class="btn btn-info">Edit</a>
                  <a onclick="return confirm('Apakah Kamu mau menghapusnya')"href="delete_penjualan.php?no_nota=<?= $as->no_nota ?>" class="btn btn-warning">Delete</a>
                </td>
             </tr>
             <?php endforeach; ?>
          </table>
       </div>
   </div>
 </div>

 

   
<?php require 'footer.php'; ?>

    
