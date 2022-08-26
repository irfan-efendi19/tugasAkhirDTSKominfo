<?php
include "./config/connection.php";

$id=$_GET['id'];

$sql = "update tb_laporan set status = 'selesai' where id_laporan = $id";
if($koneksi->query($sql) ===){
    echo "Laporan berhasil diselesaikan";
}else{
    
    echo "Laporan gagal diselesaikan";
}
$koneksi->close();
?>

