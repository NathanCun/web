<?php
require "../assets/koneksi/koneksi.php";
if(isset($_GET["approve"])){
    $update = mysqli_query($koneksi,"UPDATE tb_projek SET status = 'disetujui' WHERE id = '$_GET[approve]' ");
    if($update){
        header("location:index.php?id=$_GET[approve]");
    }
}

elseif(isset($_GET["close"])){
    $update = mysqli_query($koneksi,"UPDATE tb_projek SET status = 'tutup' WHERE id = '$_GET[approve]' ");
    if($update){
        header("location:index.php?id=$_GET[approve]");
    }

}

mysqli_close($koneksi);
?>