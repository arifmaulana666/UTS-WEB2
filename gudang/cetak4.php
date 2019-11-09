<?php 
require 'prologin.php';
$sql = 'SELECT * FROM barang';
$statement = $con->prepare($sql);
$statement->execute();
$user = $statement->fetchAll(PDO::FETCH_OBJ);
 
?>
    
<?php require 'user.php'; ?>
 <div class="container">
 <br>
 <br>

   <div class="card mt-5">
   <div class="card-header bg bg-info">
         <h2>Laporan Stok</h2>
       </div>
       <div class="card-body">
          <table class="table table-bordered">
             <tr>
                <th>Id</th>
                <th>Nama Barang</th>
                <th>Satuan</th>
                <th>Harga Jual</th>
                <th>Stok Awal</th>
                <th>Stok Terjual</th>
                <th>Stok Sisa</th>
                <th>Tanggal</th>
             </tr>
             <?php foreach($user as $us): ?>
             <tr>
                <td><?= $us->kode_barang; ?></td>
                <td><?= $us->nama_barang; ?></td>
                <td><?= $us->satuan; ?></td>
                <td><?= $us->harga_jual; ?></td>
                <td><?= $us->stok_awal; ?></td>
                <td><?= $us->stok_terjual; ?></td>
                <td><?= $us->stok_sisa; ?></td>
                <td><?= $us->tanggal; ?></td>
     </div>
             </tr>
             <?php endforeach; ?>
          </table>
       </div>
   </div>
 </div>

<script>
   window.print();
</script>
 

<?php require 'footer.php'; ?> 