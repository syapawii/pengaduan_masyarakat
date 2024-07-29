<?php

if(isset($_GET['url'])){
    switch ($_GET['url']) {
        case 'tulis-pengaduan':
            include 'tulis-pengaduan.php';
            break;

            case 'lihat-pengaduan';
            include 'lihat-pengaduan.php';
            break;

            case 'detail-pengaduan';
            include 'detail-pengaduan.php';
            break;

            case 'lihat-tanggapan';
            include 'lihat-tanggapan.php';
            break;
        
            default:
            echo "Halaman Tidak Di temukan";
            break;
    }
}else{
    echo "Selamat Datang Di Aplikasi Pengaduan Masyarakat, Dimana aplikasi ini dibuat untuk melaporkan tindakan yang menyimpang dari ketentuan.<br>";
    echo "Anda Login Sebagai : ".$_SESSION['nama_petugas'];
}
?>