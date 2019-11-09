<?php 
require 'prologin.php';
$sql = 'SELECT * FROM petugas';
$statement = $con->prepare($sql);
$statement->execute();
$user = $statement->fetchAll(PDO::FETCH_OBJ);
 
?>

<?php require 'header.php'; ?>
 <div class="container">
   <div class="card mt-5"> 
       <div class="card-header bg bg-info">
       <a class="btn btn-warning" href="create_petugas.php">TAMBAH</a>
         <h2>Data Petugas</h2>
       </div>
       <div class="card-body">
          <table class="table table-bordered">
             <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No Telephon</th>
                <th>Keterangan</th>
                <th>Bagian</th>
                <th>Action</th>
             </tr>
             <?php foreach($user as $sa): ?>
             <tr>
                <td><?= $sa->kode_user; ?></td>
                <td><?= $sa->username; ?></td>
                <td><?= $sa->pass; ?></td>
                <td><?= $sa->nama_lengkap; ?></td>
                <td><?= $sa->jenis_kelamin; ?></td>
                <td><?= $sa->alamat; ?></td>
                <td><?= $sa->no_telepon; ?></td>
                <td><?= $sa->keterangan; ?></td>
                <td><?= $sa->bagian; ?></td>
     </div>
                <td>
                  <a href="edit_petugas.php?kode_user=<?= $sa->kode_user ?>" class="btn btn-info">Edit</a>
                  <a onclick="return confirm('Apakah Kamu mau menghapusnya')"href="delete_petugas.php?kode_user=<?= $sa->kode_user ?>" class="btn btn-warning">Delete</a>
                </td>
             </tr>
             <?php endforeach; ?>
          </table>
       </div>
   </div>
 </div>
    
<?php require 'footer.php'; ?>

    
