<?php 
require 'prologin.php';
$sql = 'SELECT * FROM pimpinan';
$statement = $con->prepare($sql);
$statement->execute();
$user = $statement->fetchAll(PDO::FETCH_OBJ);
 
?>

<?php require 'header.php'; ?>
 <div class="container">
   <div class="card mt-5"> 
       <div class="card-header bg bg-info">
       <a class="btn btn-warning" href="create_pimpinan.php">TAMBAH</a>
         <h2>Data pimpinan</h2>
       </div>
       <div class="card-body">
          <table class="table table-bordered">
             <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Action</th>
             </tr>
             <?php foreach($user as $sas): ?>
             <tr>
                <td><?= $sas->id; ?></td>
                <td><?= $sas->nama; ?></td>
                <td><?= $sas->jabatan; ?></td>
                <td><?= $sas->alamat; ?></td>
                <td><?= $sas->jenis_kelamin; ?></td>
                <td><?= $sas->agama; ?></td>
     </div>
                <td>
                  <a href="edit_pimpinan.php?id=<?= $sas->id ?>" class="btn btn-info">Edit</a>
                  <a onclick="return confirm('Apakah Kamu mau menghapusnya')"href="delete_pimpinan.php?id=<?= $id ?>" class="btn btn-warning">Delete</a>
                </td>
             </tr>
             <?php endforeach; ?>
          </table>
       </div>
   </div>
 </div>
    
<?php require 'footer.php'; ?>

    
