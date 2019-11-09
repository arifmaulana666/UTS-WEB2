<?php
require 'prologin.php';
$kode_barang = $_GET['kode_barang'];
$sql = 'SELECT * FROM barang WHERE kode_barang=:kode_barang';
$statement = $con->prepare($sql);
$statement->execute([':kode_barang' => $kode_barang]);
$user = $statement->fetch(PDO::FETCH_OBJ); 
if (isset($_POST['nama_barang']) && isset($_POST['satuan']) && isset($_POST['harga_jual']) && isset($_POST['stok_awal']) && isset($_POST['stok_terjual']) && isset($_POST['stok_sisa']) && isset($_POST['tanggal'])) {
  $nama_barang = $_POST['nama_barang'];
  $satuan = $_POST['satuan'];
  $harga_jual = $_POST['harga_jual'];
  $stok_awal = $_POST['stok_awal'];
  $stok_terjual = $_POST['stok_terjual'];
  $stok_sisa = $_POST['stok_sisa'];
  $tanggal = $_POST['tanggal'];

  $sql = 'UPDATE barang SET nama_barang=:nama_barang,satuan=:satuan,harga_jual=:harga_jual,stok_awal=:stok_awal,stok_terjual=:stok_terjual,stok_sisa=:stok_sisa,tanggal=:tanggal WHERE kode_barang=:kode_barang';
  $statement = $con->prepare($sql);
  if ($statement->execute([':nama_barang' => $nama_barang, ':satuan' => $satuan, ':harga_jual' => $harga_jual, ':stok_awal' => $stok_awal, ':stok_terjual' => $stok_terjual, ':stok_sisa' => $stok_sisa, ':tanggal' => $tanggal, ':kode_barang' => $kode_barang])){
      $message = 'data telah di ganti';
  }

}

?>

<?php require 'header.php'; ?>
 <div class="container">
 <div class="card mt-5">
 <div class="card-header">
 <h2>Update</h2>
 </div>
 <div class="card-body">
 <?php if(!empty($message)):?>
    <div class="alert alert-success">
      <?php echo $message; ?>
    </div>
<?php endif; ?>
<form method="post" enctype="multipart/form-data">
     <div class="form-group">
     <label for="nama_barang">Nama Barang</label>
     <input value="<?= $user->nama_barang; ?>" name="nama_barang" id="nama_barang" class="form-control">
     </div>
     <div class="form-group">
     <label for="satuan">Satuan</label>
     <input value="<?= $user->satuan; ?>" name="satuan" id="satuan" class="form-control">
     </div>
     <div class="form-group">
     <label for="harga_jual">Harga Jual</label>
     <input value="<?= $user->harga_jual; ?>" name="harga_jual" id="harga_jual" class="form-control">
     </div>
     <div class="form-group">
     <label for="stok_awal">Stok Awal</label>
     <input value="<?= $user->stok_awal; ?>" name="stok_awal" id="stok_awal" class="form-control">
     </div>
     <div class="form-group">
     <label for="stok_terjual">Stok Terjual</label>
     <input value="<?= $user->stok_terjual; ?>" name="stok_terjual" id="stok_terjual" class="form-control">
     </div>
     <div class="form-group">
     <label for="stok_sisa">Stok Sisa</label>
     <input value="<?= $user->stok_sisa; ?>" name="stok_sisa" id="stok_sisa" class="form-control">
     </div>
     <div class="form-group">
     <label for="tanggal">Tanggal</label>
     <input value="<?= $user->tanggal; ?>" name="tanggal"  id="tanggal" class="form-control">
     </div>
     <div class="form-group">
       <button type="submit" class="btn btn-info">Tambah</button>
     </div>
   </form>

 </div>
 </div>
 </div>
<?php require 'footer.php'; ?>