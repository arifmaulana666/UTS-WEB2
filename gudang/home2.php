<?php 
require 'prologin.php';
$sql = 'SELECT * FROM pimpinan';
$statement = $con->prepare($sql);
$statement->execute();
$user = $statement->fetchAll(PDO::FETCH_OBJ);
 
?>



<?php require 'user.php'; ?>
<br>
<h3 align="center">Selamat Datang, Pemimpin</h3>


<div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Pimpinan
        </h1>

        <!-- Blog Post -->
        <div class="card mb-4">
            <h2 class="card-title">Biodata Pimpinan</h2>
          <img class="card-img-top" src="edo.jpg" width="100px" height="400px" alt="Card image cap">
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
          <h5 class="card-header bg bg-info">Biodata Pimpinan</h5>
          <div class="card-body">
          <?php foreach($user as $sas): ?>
          <tr>
          <th>Nama           : </th><?= $sas->nama; ?></td><br>
          <th>Jabatan        : </th><?= $sas->jabatan; ?></td><br>
          <th>Alamat         : </th><?= $sas->alamat; ?></td><br>
          <th>Jenis Kelamin  : </th><?= $sas->jenis_kelamin; ?></td><br>
          <th>Agama          : </th><?=  $sas->agama; ?></td><br>
          </tr>
          <?php endforeach; ?>

          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

 