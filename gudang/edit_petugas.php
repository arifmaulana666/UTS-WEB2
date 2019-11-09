<?php
require 'prologin.php';
$kode_user = $_GET['kode_user'];
$sql = 'SELECT * FROM petugas WHERE kode_user=:kode_user';
$statement = $con->prepare($sql);
$statement->execute([':kode_user' => $kode_user]);
$user = $statement->fetch(PDO::FETCH_OBJ); 
if (isset($_POST['username']) && isset($_POST['pass']) && isset($_POST['nama_lengkap']) && isset($_POST['jenis_kelamin']) && isset($_POST['alamat']) && isset($_POST['no_telepon'])  && isset($_POST['keterangan'])  && isset($_POST['bagian'])) {
  $username = $_POST['username'];
  $pass = $_POST['pass'];
  $nama_lengkap = $_POST['nama_lengkap'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $alamat = $_POST['alamat'];
  $no_telepon = $_POST['no_telepon'];
  $keterangan = $_POST['keterangan'];
  $bagian = $_POST['bagian'];

  $sql = 'UPDATE petugas SET username=:username,pass=:pass, nama_lengkap=:nama_lengkap,jenis_kelamin=:jenis_kelamin,alamat=:alamat,no_telepon=:no_telepon,keterangan=:keterangan,bagian=:bagian WHERE kode_user=:kode_user';
  $statement = $con->prepare($sql);
  if ($statement->execute([':username' => $username, ':pass' => $pass, ':nama_lengkap' =>$nama_lengkap, ':jenis_kelamin' => $jenis_kelamin, ':alamat' => $alamat, ':no_telepon' => $no_telepon, ':keterangan' => $keterangan, ':bagian' => $bagian, ':kode_user' => $kode_user])){
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
   <label for="username">Username</label>
   <input value="<?= $user->username; ?>" name="username" id="username" class="form-control">
   </div>
   <div class="form-group">
   <label for="pass">Password</label>
   <input value="<?= $user->pass; ?>" name="pass" id="pass" class="form-control">
   </div>
   <div class="form-group">
   <label for="nama_lengkap">Nama Lengkap</label>
   <input value="<?= $user->nama_lengkap; ?>" name="nama_lengkap" id="nama_lengkap" class="form-control">
   </div>
   <div class="form-group">
   <label for="jenis_kelamin">Jenis Kelamin</label>
   <select value="<?= $user->jenis_kelamin; ?>" name="jenis_kelamin" id="jenis_kelamin" class="form-control">
   <option>laki-laki</option>
   <option>perempuan</option>
   </select>
   </div>
   <div class="form-group">
   <label for="alamat">Alamat</label>
   <input value="<?= $user->alamat; ?>" name="alamat" id="alamat" class="form-control">
   </div>
   <div class="form-group">
   <label for="no_telepon">No Telepon</label>
   <input value="<?= $user->no_telepon; ?>" name="no_telepon" id="no_telepon" class="form-control">
   </div>
   <div class="form-group">
   <label for="keterangan">keterangan</label>
   <input value="<?= $user->keterangan; ?>" name="keterangan"  id="keterangan" class="form-control">
   </div>
   <div class="form-group">
   <label for="bagian">Bagian</label>
   <input value="<?= $user->bagian; ?>" name="bagian"  id="bagian" class="form-control">
   </div>
   <div class="form-group">
     <button type="submit" class="btn btn-info">Tambah</button>
   </div>
 </form>
</div>
</div>
</div>
<?php require 'footer.php'; ?>