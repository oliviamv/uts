<?php
$ID_GURU_PIKET        = $_POST['ID_GURU_PIKET'];
$NIP        = $_POST['NIP'];
$NAMA_GURU     = $_POST['NAMA_GURU'];
$ALAMAT_GURU        = $_POST['ALAMAT_GURU'];
$TLP_GURU        = $_POST['TLP_GURU'];


require_once 'connect.php';

$query = mysqli_query($connect,"UPDATE tbguru SET ID_GURU='$ID_GURU',NIP='$NIP',NAMA_GURU='$NAMA_GURU',ALAMAT_GURU='$ALAMAT_GURU',
TLP_GURU='$TLP_GURU', ' WHERE id=$id");

if($query) {
    echo "<script>alert('Data Berhasil Di Edit'); window.location.href = '../index.php';</script>";
}else{
    echo "<script>alert('Data Gagal Di Edit'); window.location.href = '../index.php';</script>";
}
?>