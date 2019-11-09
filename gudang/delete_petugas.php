
 <?php 
require 'prologin.php';
$kode_user = $_GET['kode_user'];
$sql = 'DELETE FROM petugas WHERE kode_user=:kode_user';
$statement = $con->prepare($sql);
if ($statement->execute([':kode_user' => $kode_user])) {
    header("location:data_petugas.php");
}

?> 