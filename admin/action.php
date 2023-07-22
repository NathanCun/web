<?php
require 'php/koneksi.php';


function generateOTP($length = 6) {
    $characters = '0123456789';
    $otp = '';

    $max = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $otp .= $characters[random_int(0, $max)];
    }

    return $otp;
}

// Tambah FAQ
if(isset($_GET["tambah_faq"])){
    $insert =mysqli_query($koneksi,"INSERT INTO tb_faq values ('','','')");
    header("location:index.php?page=faq");
}

// Hapus FAQ
elseif(isset($_GET["hapus_faq"])){
    $id = $_GET["hapus_faq"];
    $hapus = mysqli_query($koneksi,"DELETE FROM tb_faq WHERE id = '$id'");
    header("location:index.php?page=faq");
}

// Edit FAQ
elseif(isset($_POST["edit_faq"])){
    $id = $_POST["id"];
    $pertanyaan = $_POST["pertanyaan"];
    $jawaban = $_POST["jawaban"];

    // Prepare the statement
    $stmt = mysqli_prepare($koneksi, "UPDATE tb_faq SET pertanyaan = ?, jawaban = ? WHERE id = ?");

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "ssi", $pertanyaan, $jawaban, $id);

    // Execute the statement
    $update = mysqli_stmt_execute($stmt);

    if ($update) {
        // Update successful
        header("location:index.php?page=faq");
    } else {
        // Update failed
        header("location:index.php?page=faq&gagal");
    }

}

// Menyetujui Proyek
elseif(isset($_GET["approve"])){
    $update = mysqli_query($koneksi,"UPDATE tb_projek SET status = 'disetujui' WHERE id = '$_GET[approve]' ");
    if($update){
        header("location:index.php?page=proyek");
    }
}

// Menutup Proyek
elseif(isset($_GET["close"])){
    $update = mysqli_query($koneksi,"UPDATE tb_projek SET status = 'tutup' WHERE id = '$_GET[close]' ");
    if($update){
        header("location:index.php?page=proyek");
    }

}

// Menambah Admin
elseif(isset($_POST["add_admin"])){
    $email      = $_POST["email"];
    $name       = $_POST["username"];
    $password   = $_POST["password"];
    

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location:index.php?page=user&email_salah");
        exit;
    }

    else{
        $password = md5($password);
        $otp = generateOTP();

        $insert = mysqli_query($koneksi,"INSERT INTO tb_user values ('','$name','$email','$password','$otp','N','1','') ");
        // Send the OTP to the user's email
        if($insert){
        echo "<script>alert('Harap Verifikasi Akun Email Anda'); 
        window.location.href='index.php?page=user'; </script>";
        }
        else{
            echo "<script>alert('Gagal mendaftarkan admin baru'); 
            window.location.href='index.php?page=user'; </script>";
        }
    }
}

elseif(isset($_POST["delete_admin"])){

}

// edi Profil Perusahaan
elseif(isset($_POST["edit_profil"])){
    $nomor_telepon  = $_POST["nomor_telepon"];
    $alamat_email   = $_POST["alamat_email"];
    $password       = $_POST["password"];
    $lokasi         = $_POST["lokasi"];
    $provinsi       = $_POST["provinsi"];
    $kabupaten_kota = $_POST["kabupaten_kota"];
    $kode_pos       = $_POST['kode_pos']; 

    $insert = mysqli_prepare($koneksi, "INSERT INTO tb_profil VALUES ('', ?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($insert, "sssssss", $nomor_telepon, $alamat_email, $password, $lokasi, $provinsi, $kabupaten_kota, $kode_pos);
    mysqli_stmt_execute($insert);

    if(mysqli_stmt_affected_rows($insert) > 0){
        echo "<script>alert('Profil Berhasil Diubah'); 
        window.location.href='index.php?page=profil'; </script>";
    }

}

mysqli_close($koneksi);
?>