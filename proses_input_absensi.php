<?php
$ID_ABSENSI      = $_POST['ID_ABSENSI'];
$KETERANGAN      = $_POST['KETERANGAN'];
$TANGGAL      = $_POST['TANGGAL'];


require_once 'connect.php';

$query = mysqli_query($connect,"INSERT INTO tbabsensi VALUE('','$ID_ABSENSI ','$KETERANGAN','$TANGGAL',)");

if($query) {
    echo "<script>alert('Data Berhasil Di input'); window.location.href = '../index.php';</script>";
}else{
    echo "<script>alert('Data Gagal Di input'); window.location.href = '../index.php';</script>";
}
?>