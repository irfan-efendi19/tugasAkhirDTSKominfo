<?php
include "./config/connection.php";

$id=$_GET['id'];

$sql = "update tb_laporan set status = 'konfirmasi' where id_laporan = $id";
if($koneksi->query($sql) ===){
    echo "Laporan berhasil dikonfirmasi";
}else{
    
    echo "Laporan gagal dikonfirmasi";
}
$koneksi->close();
?>

