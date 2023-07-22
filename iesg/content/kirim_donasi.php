<?php   
require 'assets/koneksi/koneksi.php';

function donasi_terkumpul($id){
    require 'assets/koneksi/koneksi.php';
    $sql_donasi_terkumpul = mysqli_query($koneksi,"SELECT SUM(jumlah_donasi)  AS total_donasi FROM tb_donasi WHERE id_proyek ='$id' ");
    $donasi_terkumpul       = mysqli_fetch_assoc($sql_donasi_terkumpul);

    return $donasi_terkumpul['total_donasi'];
    mysqli_close($koneksi);
}

function cek_donasi($id,$jumlah_donasi){
    require 'assets/koneksi/koneksi.php';
    $sql_target_donasi    = mysqli_query($koneksi,"SELECT target_donasi FROM tb_projek WHERE id ='$id' ");
    $target_donasi        = mysqli_fetch_assoc($sql_target_donasi);

    $sisa_donasi = intval($target_donasi['target_donasi']) - donasi_terkumpul($id);
    if($jumlah_donasi > $sisa_donasi){
        return FALSE;
    }
    else{
        return TRUE;
    }

    
    mysqli_close($koneksi);
}

date_default_timezone_set('Asia/Jakarta');
$date = date("Y-m-d");
$time = date("H:i:s");
$id_proyek = $_POST["proyek"];
// informasi donatur
$nama   = $_POST["name"];
$last_name = $_POST["last_name"];
$email      = $_POST["email"];
$phone      = $_POST["phone"];
$address    = $_POST["address"];
$note       = $_POST["additional_note"];
$donasi      = $_POST["donasi"];
$location   = $_POST["location"];

if(cek_donasi($id_proyek,$donasi)){
    $query = "INSERT INTO tb_donasi VALUES ('','$id_proyek','$date','$time','$nama','$last_name','$email','$phone','$address','$note','$donasi','')";
    $insert = mysqli_query($koneksi,$query);
    
    header("location:$location/");
}
else{
    echo "<script>window.alert('Donasi Melebihi Limit Donasi'); window.location.href='$location/';</script>";
}
mysqli_close($koneksi);

?>