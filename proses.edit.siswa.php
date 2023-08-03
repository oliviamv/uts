<?php
$ID_SISWA        = $_POST['ID_SISWA'];
$NIS        = $_POST['NIS'];
$NISN      = $_POST['NISN'];
$NAMA_SISWA     = $_POST['NAMASISWA'];
$TINGKAT_SISWA        = $_POST['TINGKAT_SISWA'];
$JURUSAN_SISWA        = $_POST['JURUSAN_SISWA'];
$ALAMAT_SISWA        = $_POST['ALAMAT_SISWA'];
$TLP_SISWA        = $_POST['TLP_SISWA'];


require_once 'connect.php';

$query = mysqli_query($connect,"UPDATE tbsiswa SET ID_SISWA='$ID_SISWA',NIS='$NIS',NISN='$NISN',NAMA_SISWA='$NAMA_SISWA',TINGKAT_SISWA='$TINGKAT_SISWA',
                JURUSAN_SISWA='$JURUSAN_SISWA',ALAMAT_SISWA='$ALAMAT_SISWA',TLP_SISWA='$TLP_SISWA', ' WHERE id=$id");

if($query) {
    echo "<script>alert('Data Berhasil Di Edit'); window.location.href = '../index.php';</script>";
}else{
    echo "<script>alert('Data Gagal Di Edit'); window.location.href = '../index.php';</script>";
}
?>