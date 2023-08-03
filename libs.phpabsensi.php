<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];
    switch ($page){
       case 'input':
           include 'view/input_siswa.php';
           break;
       case 'input':
           include 'view/input_absensi.php';
           break;
       case 'input':
           include 'view/input_guru_piket.php';
           break;
        
        case 'datasiswa':
            include 'view/data_siswa.php';
            break;
        case 'dataabsensi':
            include 'view/data_absensi.php';
            break;
        case 'dataguru_piket':
            include 'view/data_guru_piket.php';
            break;
    }
} else {
    include 'view/input_siswa.php';
    include 'view/input_absensi.php';
    include 'view/input_siswa.php';
}
?>