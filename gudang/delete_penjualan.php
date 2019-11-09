<?php 
require 'prologin.php';
$no_nota = $_GET['no_nota'];
$sql = 'DELETE FROM penjualan WHERE no_nota=:no_nota';
$statement = $con->prepare($sql);
if ($statement->execute([':no_nota' => $no_nota])) {
    header("location:data_penjualan.php");
}