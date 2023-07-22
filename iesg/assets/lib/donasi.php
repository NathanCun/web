<?php

function donasi_terkumpul($id){
    require '../../php/koneksi.php';
    $sql_donasi_terkumpul = mysqli_query($koneksi,"SELECT SUM(jumlah_donasi)  AS total_donasi FROM tb_donasi WHERE id_proyek ='$id' ");
    $donasi_terkumpul       = mysqli_fetch_assoc($sql_donasi_terkumpul);

    return $donasi_terkumpul['total_donasi'];
    mysqli_close($koneksi);
}

function cek_donasi($id,$jumlah_donasi){
    require '../../php/koneksi.php';
    $sql_target_donasi    = mysqli_query($koneksi,"SELECT target_donasi FROM tb_projek WHERE id ='$id' ");
    $target_donasi        = mysqli_fetch_assoc($sql_target_donasi);

    $sisa_donasi = intval($target_donasi['target_donasi']) - donasi_terkumpul($id);
    if($jumlah_donasi > $sisa_donasi){
        return TRUE;
    }
    else{
        return FALSE;
    }

    
    mysqli_close($koneksi);
}
?>