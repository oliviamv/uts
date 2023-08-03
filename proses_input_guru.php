<?php
$ID_GURU      = $_POST['ID_GURU'];
$NIP      = $_POST['NIP'];
$NAMA_GURU      = $_POST['NAMA_GURU'];
$ALAMAT_GURU      = $_POST['ALAMAT_GURU'];
$TLP_GURU      = $_POST['TLP_GURU'];


require_once 'connect.php';

$query = mysqli_query($connect,"INSERT INTO tbsiswa VALUE('','$ID_GURU ','$NIP ','$NAMA_GURU','$ALAMAT_GURU','$TLP_GURU',)");

if($query) {
    echo "<script>alert('Data Berhasil Di input'); window.location.href = '../index.php';</script>";
}else{
    echo "<script>alert('Data Gagal Di input'); window.location.href = '../index.php';</script>";
}
?>