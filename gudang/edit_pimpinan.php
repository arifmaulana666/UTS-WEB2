<?php
require 'prologin.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM pimpinan WHERE id=:id';
$statement = $con->prepare($sql);
$statement->execute([':id' => $id]);
$user = $statement->fetch(PDO::FETCH_OBJ); 
if (isset($_POST['nama']) && isset($_POST['jabatan']) && isset($_POST['alamat']) && isset($_POST['jenis_kelamin']) && isset($_POST['agama']) && isset($_POST['st'])) {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $st = $_POST['st'];

    $sql = 'UPDATE pimpinan SET nama=:nama,jabatan=:jabatan,alamat=:alamat,jenis_kelamin=:jenis_kelamin,agama=:agama,st=:st WHERE id=:id';
    $statement = $con->prepare($sql);
    if ($statement->execute([':nama' => $nama, ':jabatan' => $jabatan, ':alamat' =>$alamat, ':jenis_kelamin' => $jenis_kelamin, ':agama' => $agama, ':st' => $st,  ':id' =>$id])){
        $message = 'data telah di tambahkan';
    }

}

?>

<?php require 'header.php'; ?>
 <div class="container">
 <div class="card mt-5">
 <div class="card-header">
 <h2>Tambah</h2>
 </div>
 <div class="card-body">
 <?php if(!empty($message)):?>
    <div class="alert alert-success">
      <?php echo $message; ?>
    </div>
<?php endif; ?>
   <form method="post" enctype="multipart/form-data">
     <div class="form-group">
     <label for="nama">Nama</label>
     <input value="<?= $user->nama; ?>" name="nama" id="nama" class="form-control">
     </div>
     <div class="form-group">
     <label for="jabatan">Jabatan</label>
     <input value="<?= $user->jabatan; ?>" name="jabatan" id="jabatan" class="form-control">
     </div>
     <div class="form-group">
     <label for="alamat">Alamat</label>
     <input value="<?= $user->alamat; ?>" name="alamat" id="alamat" class="form-control">
     </div>
     <div class="form-group">
     <label for="jenis_kelamin">Jenis Kelamin</label>
     <select value="<?= $user->jenis_kelamin; ?>" name="jenis_kelamin" id="jenis_kelamin" class="form-control">
     <option>Laki Laki</option>
     <option>Perempuan</option>
     </select>
     </div>
     <div class="form-group">
     <label for="agama">Agama</label>
     <select value="<?= $user->agama; ?>"  name="agama" id="agama" class="form-control">
     <option>Islam</option>
     <option>Katholik</option>
     <option>Protestan</option>
     <option>Hindu</option>
     <option>Budha</option>
     <option>Konghucu</option>
     </select>
     </div>
     <div class="form-group">
     <label for="st">Status</label>
     <select value="<?= $user->st; ?>" name="st" id="st" class="form-control">
     <option>Aktif</option>
     <option>Tidak Aktif</option>
     </select>
     </div>
     <div class="form-group">
       <button type="submit" class="btn btn-info">Tambah</button>
     </div>
   </form>
 </div>
 </div>
 </div>
<?php require 'footer.php'; ?>