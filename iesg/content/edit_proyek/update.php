<?php
   session_start();
   require "../../php/koneksi.php";
   
   $nama_proyek = $_POST["nama_proyek"];
   $bidang_industri = $_POST["bidang_industri"] == "other" ? $_POST["industri_lainnya"] : $_POST["bidang_industri"];
   $deskripsi_proyek = $_POST["deskripsi_proyek"];
   $rencana_proyek = $_POST["rencana_proyek"];
   $perizinan_proyek = $_POST["perizinan_proyek"];
   $foto_utama_proyek = $_FILES["foto_utama_proyek"]["tmp_name"];
   $lingkungan1 = isset($_POST["lingkungan1"]) ? $_POST["sosial1"] : null;
   $lingkungan2 = isset($_POST["lingkungan2"]) ? $_POST["sosial1"] : null;
   $lingkungan3 = isset($_POST["lingkungan3"]) ? $_POST["sosial1"] : null;
   $sosial1 = isset($_POST["sosial1"]) ? $_POST["sosial1"] : null;
   $sosial2 = isset($_POST["sosial2"]) ? $_POST["sosial2"] : null;
   $sosial3 = isset($_POST["sosial3"]) ? $_POST["sosial3"] : null;
   $tata_kelola1 = isset($_POST["tata_kelola1"]) ? $_POST["tata_kelola1"] : null;;
   $tata_kelola2 = isset($_POST["tata_kelola2"]) ? $_POST["tata_kelola2"] : null;;
   $tata_kelola3 = isset($_POST["tata_kelola3"]) ? $_POST["tata_kelola3"] : null;;
   $provinsi = $_POST["provinsi"];
   $kabupaten_kota = $_POST["kabupaten_kota"];
   $kecamatan = $_POST["kecamatan"];
   $kelurahan = $_POST["kelurahan"];
   $alamat_lengkap = $_POST["alamat_lengkap"];
   $nama_pengurus = $_POST["nama_pengurus"];
   $no_telepon_pengurus = $_POST["no_telepon_pengurus"];
   $ktp_pengurus = $_FILES["ktp_pengurus"]["tmp_name"];
   $target_donasi = $_POST["target_donasi"];
   $rupiah_emisi = $_POST["rupiah_emisi"];
   $bukti_perhitungan = isset($_POST["bukti_perhitungan"]) ? $_POST["bukti_perhitungan"] : null;
   $tanggal = date("Y-m-d");
   
   // Foto Utama
   if($foto_utama_proyek == null){
    $foto_utama_proyek = null ;
   } else {
    $foto_utama_proyek_nama = $_FILES["foto_utama_proyek"]["name"];
    $targetDirectoryFoto = "../../assets/proyek/images/";
    $allowedExtensionsFoto = array("jpg", "jpeg", "png", "gif");

    // Check if the file extensions are allowed for Foto Utama
    $fileExtensionFoto = strtolower(pathinfo($foto_utama_proyek_nama, PATHINFO_EXTENSION));
   if (!in_array($fileExtensionFoto, $allowedExtensionsFoto)) {
       echo "Error: Only JPG, JPEG, PNG, and GIF files are allowed for Foto Utama.";
       exit;
   }

   $newFileNameFoto = uniqid() . "." . $fileExtensionFoto;
   $targetFileFoto = $targetDirectoryFoto . $newFileNameFoto;

   move_uploaded_file($foto_utama_proyek, $targetFileFoto);
   }

   // KTP Pengurus
   if($ktp_pengurus == null){
    $ktp_pengurus = null ;
   } else {
   $ktp_pengurus_nama = $_FILES["ktp_pengurus"]["name"]; 
   $targetDirectoryKTP = "../../assets/proyek/ktp/";
   $allowedExtensionsKTP = array("jpg", "jpeg", "png", "gif");

   // Check if the file extensions are allowed for KTP Pengurus
   $fileExtensionKTP = strtolower(pathinfo($ktp_pengurus_nama, PATHINFO_EXTENSION));
   if (!in_array($fileExtensionKTP, $allowedExtensionsKTP)) {
       echo "Error: Only JPG, JPEG, PNG, and GIF files are allowed for KTP Pengurus.";
       exit;
   }

   $newFileNameKTP = uniqid() . "." . $fileExtensionKTP;
   $targetFileKTP = $targetDirectoryKTP . $newFileNameKTP;

   move_uploaded_file($ktp_pengurus, $targetFileKTP);
   }
   $query = "SELECT * FROM tb_projek WHERE id = {$_GET['id']}";
   $result = mysqli_query($koneksi, $query);
   $row = mysqli_fetch_assoc($result);
   $FOTO = $foto_utama_proyek == null ? $row['foto_utama_proyek'] : $newFileNameFoto;
   $KTP = $ktp_pengurus == null ? $row['ktp_pengurus'] : $newFileNameKTP;
   
   echo $row['foto_utama_proyek'];
   echo $row['ktp_pengurus'];
   //Move uploaded files for Foto Utama, KTP Pengurus, Rencana Proyek, and Perizinan Proyek
    $insert = mysqli_query($koneksi,"UPDATE tb_projek SET 
    nama_proyek         ='$nama_proyek',
    bidang_industri     ='$bidang_industri',
    deskripsi_proyek    ='$deskripsi_proyek',
    rencana_proyek      ='$rencana_proyek',
    perizinan_proyek    ='$perizinan_proyek',
    foto_utama_proyek   ='$FOTO',
    lingkungan1         ='$lingkungan1',
    lingkungan2         ='$lingkungan2',
    lingkungan3         ='$lingkungan3',
    sosial1             ='$sosial1',
    sosial2             ='$sosial2',
    sosial3             ='$sosial3',
    tata_kelola1        ='$tata_kelola1',
    tata_kelola2        ='$tata_kelola2',
    tata_kelola3        ='$tata_kelola3',
    provinsi            ='$provinsi',
    kabupaten_kota      ='$kabupaten_kota',
    kecamatan           ='$kecamatan',
    kelurahan           ='$kelurahan',
    alamat_lengkap      ='$alamat_lengkap',
    nama_pengurus       ='$nama_pengurus',
    no_telepon_pengurus ='$no_telepon_pengurus',
    ktp_pengurus        ='$KTP',
    target_donasi       ='$target_donasi',
    rupiah_emisi        ='$rupiah_emisi',
    bukti_perhitungan   ='$bukti_perhitungan'
    WHERE id = $_GET[id]");
    if ($insert) {
        header('location:../proyek-ku/index.php');
    } else {
        header('location:index.php?msg=gagal_tambah_proyek');
    }
   
?>