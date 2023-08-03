<?php
$ID_SISWA      = $_POST['ID_SISWA'];
$NIS      = $_POST['NIS'];
$NISN      = $_POST['NISN'];
$NAMA_SISWA      = $_POST['NAMA_SISWA'];
$TINGKAT_SISWA      = $_POST['TINGKAT_SISWA'];
$JURUSAN_SISWA      = $_POST['JURUSAN_SISWA'];
$ALAMAT_SISWA      = $_POST['ALAMAT_SISWA'];
$TLP_SISWA      = $_POST['TLP_SISWA'];


require_once 'connect.php';

$query = mysqli_query($connect,"INSERT INTO tbsiswa VALUE('','$ID_SISWA ','$NIS ','$NISN','$NAMA_SISWA','$TINGKAT_SISWA','$JURUSAN_SISWA','$ALAMAT_SISWA','TLP_SISWA',)");

if($query) {
    echo "<script>alert('Data Berhasil Di input'); window.location.href = '../index.php';</script>";
}else{
    echo "<script>alert('Data Gagal Di input'); window.location.href = '../index.php';</script>";
}
?>