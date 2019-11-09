<?php 
session_start();
if(!empty($_SESSION['username']) and $_SESSION['level']=="admin"){ ?>
  
  <?php 
require 'prologin.php';
$sql = 'SELECT * FROM barang';
$statement = $con->prepare($sql);
$statement->execute();
$user = $statement->fetchAll(PDO::FETCH_OBJ);
 
?>

<?php require 'header.php'; ?>
 <div class="container">
   <div class="card mt-5">
       <div class="card-header bg bg-info">
       <a class="btn btn-warning" href="create.php">TAMBAH</a>
         <h2>Data Barang</h2>
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
                <th>Action</th>
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
                <td>
                  <a href="edit.php?kode_barang=<?= $us->kode_barang ?>" class="btn btn-info">Edit</a>
                  <a onclick="return confirm('Apakah Kamu mau menghapusnya')"href="delete.php?kode_barang=<?= $us->kode_barang ?>" class="btn btn-warning">Delete</a>
                </td>
             </tr>
             <?php endforeach; ?>
          </table>
       </div>
   </div>
 </div>
    
<?php require 'footer.php'; ?>

    
  <?php 
}

?>

