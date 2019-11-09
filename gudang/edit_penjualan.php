<?php
require 'prologin.php';
$no_nota = $_GET['no_nota'];
$sql = 'SELECT * FROM penjualan WHERE no_nota=:no_nota';
$statement = $con->prepare($sql);
$statement->execute([':no_nota' => $no_nota]);
$user = $statement->fetch(PDO::FETCH_OBJ); 
if (isset($_POST['tgl_jual']) && isset($_POST['pelanggan']) && isset($_POST['kasir']) && isset($_POST['sub_total']) && isset($_POST['diskon_persen']) && isset($_POST['diskon_total']) && isset($_POST['total_harga'])) {
  $tgl_jual = $_POST['tgl_jual'];
  $pelanggan = $_POST['pelanggan'];
  $kasir = $_POST['kasir'];
  $sub_total = $_POST['sub_total'];
  $diskon_persen = $_POST['diskon_persen'];
  $diskon_total = $_POST['diskon_total'];
  $total_harga = $_POST['total_harga'];

  $sql = 'UPDATE  penjualan SET tgl_jual=:tgl_jual,pelanggan=:pelanggan,kasir=:kasir,sub_total=:sub_total,diskon_persen=:diskon_persen,diskon_total=:diskon_total,total_harga=:total_harga WHERE no_nota=:no_nota';
  $statement = $con->prepare($sql);
  if ($statement->execute([':tgl_jual' => $tgl_jual, ':pelanggan' => $pelanggan, ':kasir' =>$kasir, ':sub_total' => $sub_total, ':diskon_persen' => $diskon_persen, ':diskon_total' => $diskon_total, ':total_harga' => $total_harga, ':no_nota' => $no_nota])){
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
     <label for="tgl_jual">Tanggal Jual</label>
     <input value="<?= $user->tgl_jual; ?>"  name="tgl_jual" id="tgl_jual" class="form-control">
     </div>
     <div class="form-group">
     <label for="pelanggan">Pelanggan</label>
     <input value="<?= $user->pelanggan; ?>" name="pelanggan" id="pelanggan" class="form-control">
     </div>
     <div class="form-group">
     <label for="kasir">Kasir</label>
     <input value="<?= $user->kasir; ?>" name="kasir" id="kasir" class="form-control">
     </div>
     <div class="form-group">
     <label for="sub_total">Sub Total</label>
     <input value="<?= $user->sub_total; ?>" name="sub_total" id="sub_total" class="form-control">
     </div>
     <div class="form-group">
     <label for="diskon_persen">Diskon Persen</label>
     <input value="<?= $user->diskon_persen; ?>" name="diskon_persen" id="diskon_persen" class="form-control">
     </div>
     <div class="form-group">
     <label for="diskon_total">Diskon Total</label>
     <input value="<?= $user->diskon_total; ?>" name="diskon_total" id="diskon_total" class="form-control">
     </div>
     <div class="form-group">
     <label for="total_harga">Total Harga</label>
     <input value="<?= $user->total_harga; ?>" name="total_harga"  id="total_harga" class="form-control">
     </div>
     <div class="form-group">
       <button type="submit" class="btn btn-info">Tambah</button>
     </div>
   </form>

 </div>
 </div>
 </div>
<?php require 'footer.php'; ?>