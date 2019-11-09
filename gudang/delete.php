<?php 
require 'prologin.php';
$kode_barang = $_GET['kode_barang'];
$sql = 'DELETE FROM barang WHERE kode_barang=:kode_barang';
$statement = $con->prepare($sql);
if ($statement->execute([':kode_barang' => $kode_barang])) {
    header("location:admin.php");
}