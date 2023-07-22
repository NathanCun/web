<?php
require "../../php/koneksi.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../assets/phpmailer/vendor/autoload.php';

function generateOTP($length = 6) {
    $characters = '0123456789';
    $otp = '';

    $max = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $otp .= $characters[random_int(0, $max)];
    }

    return $otp;
}

if(isset($_POST["selanjutnya"])){
    session_start();
    $nama_perusahaan    = $_POST['nama_perusahaan'];
    $email_perusahaan   = $_POST['email_perusahaan'];

    $_SESSION['nama_perusahaan']    = $nama_perusahaan;
    $_SESSION['email_perusahaan']   = $email_perusahaan;
    
    $sql_email_perusahaan = "SELECT * FROM tb_user WHERE emailPerusahaan = '$_POST[email_perusahaan]'";
    $sql_email_perusahaan_a = "SELECT * FROM tb_user WHERE email = '$_POST[email_perusahaan]'";
    $cek_email_perusahaan = mysqli_query($koneksi, $sql_email_perusahaan);
    $cek_email_perusahaan_a = mysqli_query($koneksi, $sql_email_perusahaan_a);
    if (!filter_var($email_perusahaan, FILTER_VALIDATE_EMAIL)) {
        header("location:index.php?daftar_data_perusahaan&msg=email_salah");
        exit;
    } elseif (mysqli_num_rows($cek_email_perusahaan) > 0 || mysqli_num_rows($cek_email_perusahaan_a) > 0) {
        header('location:index.php?daftar_data_perusahaan&msg=email_sudah_terdaftar');
        exit;
    } else {
        header("location:index.php?daftar_data_pribadi");
    }
}

if(isset($_POST["selanjutnya_aa"])) {
    session_start();
    $email          = $_POST["email"];
    $nama_depan     = $_POST["nama_depan"];
    $nama_tengah    = $_POST["nama_tengah"];
    $nama_belakang  = $_POST["nama_belakang"];

    $_SESSION["email"]             = $email;         
    $_SESSION["nama_depan"]        = $nama_depan;   
    $_SESSION["nama_tengah"]       = $nama_tengah;
    $_SESSION["nama_belakang"]     = $nama_belakang;

    $sql_email = "SELECT * FROM tb_user WHERE email = '$_POST[email]'";
    $sql_email_a = "SELECT * FROM tb_user WHERE emailPerusahaan = '$_POST[email]'";
    $cek_email = mysqli_query($koneksi, $sql_email);
    $cek_email_a = mysqli_query($koneksi, $sql_email_a);

    if(!$email) {
        header("location:index.php?daftar_password");
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location:index.php?daftar_data_pribadi&msg=email_salah");
        exit;
    }
    elseif (mysqli_num_rows($cek_email) > 0 || mysqli_num_rows($cek_email_a) > 0) {
        header('location:index.php?daftar_data_pribadi&msg=email_sudah_terdaftar');
        exit;
    } 
    elseif ($_POST['email'] == $_SESSION['email_perusahaan']) {
        header('location:index.php?daftar_data_pribadi&msg=email_sama');
        exit;
    }
    else {
        header("location:index.php?daftar_password");
    }
}

if(isset($_POST["register"])){
    session_start();
    $nama_perusahaan = $_SESSION['nama_perusahaan'];
    $nama_depan     = $_SESSION["nama_depan"];
    $nama_tengah    = $_SESSION["nama_tengah"];
    $nama_belakang  = $_SESSION["nama_belakang"];
    $email_perusahaan = $_SESSION['email_perusahaan'];
    $email          = $_SESSION["email"];
    $password   = $_POST["password"];
    $c_password = $_POST["confirm_password"];
    
    if($password != $c_password){
        header("location:index.php?msg=password_berbeda");
        exit;
    }
    elseif (strlen($password) < 8){
        header('location:index.php?msg=password_kurang');
        exit;
    }
    else{
        $password = md5($password);
        
        
        $otp = generateOTP();
        $insert = mysqli_query($koneksi,"INSERT INTO tb_user values ('','$nama_perusahaan','$nama_depan','$nama_tengah','$nama_belakang','$email_perusahaan','$email','$password','$otp','N','','') ");
        
        // Send the OTP to the user's email
        if($insert){
        header('location:index.php?verifikasi_dikirim');
        } else {
            echo "<script>window.alert('Gagal mendaftarkan akun anda'); window.location.href('../register/');</script>";
        }
        sendEmail($email_perusahaan, $otp);
    }
}
mysqli_close($koneksi);

function sendEmail($email_perusahaan, $otp) {
    require('../../assets/phpmailer/vendor/phpmailer/phpmailer/src/PHPMailer.php');
    require('../../assets/phpmailer/vendor/phpmailer/phpmailer/src/SMTP.php');
    require('../../assets/phpmailer/vendor/phpmailer/phpmailer/src/Exception.php');

    $data = "$email_perusahaan|$otp";
    $data = base64_encode($data); 
    $message_body = 
    "Klik link dibawah ini untuk mengaktifkan akun anda $otp <br>
     <a href ='localhost/iesg/web/iesg/content/konfirmasi/validasi.php?verifikasi=$data'>Klik Disini</a>";

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465;
    $mail->Timeout = 60;
    $mail->SMTPKeepAlive = true; 
    $mail->Username = 'indonesiaesg2023@gmail.com';
    $mail->Password = 'dyfuovzbdboyjibh';
    $mail->AddReplyTo('donovan.jiro@gmail.com', 'I-ESG.com');
    $mail->SetFrom('indonesiaesg2023@gmail.com', 'I-ESG.com');
    $mail->AddAddress($email_perusahaan);
    $mail->Subject = "Update from I-ESG!";
    $mail->MsgHTML($message_body);
    $mail->IsHTML(true);
    
    $result = $mail->Send();

    if (!$result) {
        echo "Mailer Error: " . $mail_perusahaan->ErrorInfo;
    }
}