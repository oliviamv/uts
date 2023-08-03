<?php
$ID_ABSENSI        = $_POST['ID_ABSENSI'];
$KETERANGAN       = $_POST['KETERANGAN'];
$TANGGAL        = $_POST['TANGGAL'];


require_once 'connect.php';

$query = mysqli_query($connect,"UPDATE tbabsensi SET ID_ABSENSI='$ID_ABSENSI',KETERANGAN='$KETERANGAN',TANGGAL='$TANGGAL', WHERE id=$id");

if($query) {
    echo "<script>alert('Data Berhasil Di Edit'); window.location.href = '../index.php';</script>";
}else{
    echo "<script>alert('Data Gagal Di Edit'); window.location.href = '../index.php';</script>";
}
?>