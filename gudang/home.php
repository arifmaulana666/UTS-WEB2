<?php 
require 'prologin.php';
$sql = 'SELECT * FROM petugas';
$statement = $con->prepare($sql);
$statement->execute();
$user = $statement->fetchAll(PDO::FETCH_OBJ);
 
?>

<?php require 'header.php'; ?>
<br>



<?php require 'user.php'; ?>
<br>
<h3 align="center">Selamat Datang, Admin</h3>


<div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Admin
        </h1>

        <!-- Blog Post -->
        <div class="card mb-4">
            <h2 class="card-title">Biodata Admin</h2>
          
          <div class="card-body">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet magni totam nesciunt? Eius pariatur quaerat, autem vel ipsam repellat quo velit minima est hic excepturi dolorem doloribus nam sit quae!</p>
          </div>
          <div class="card-footer text-muted bg bg-info">
          </div>
        </div>

       </div>

       

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header bg bg-info">Biodata Admin</h5>
          <div class="card-body">
          <?php foreach($user as $sa): ?>
          <tr>
                <th>Username         : </th><?= $sa->username; ?><br>
                <th>Nama Lengkap     : </th><?= $sa->nama_lengkap; ?></td><br>
                <th>Jenis Kelamin    : </th><?= $sa->jenis_kelamin; ?></td><br>
                <th>No Telephon      : </th><?= $sa->no_telepon; ?></td><br>
                <th>Keterangan       : </th><?= $sa->keterangan; ?></td><br>
                <th>Bagian           : </th><?= $sa->bagian; ?></td><br>
          </tr><br>
          <?php endforeach; ?>

          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

 
