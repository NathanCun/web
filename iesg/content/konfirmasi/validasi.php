<?php
if(isset($_GET['verifikasi'])){	
    require "../../php/koneksi.php";
	$verifikasi = base64_decode($_GET["verifikasi"]);
	$verifikasi = explode("|",$verifikasi);

	$email_perusahaan = $verifikasi[0];
	$otp  = $verifikasi[1];


	echo "$email_perusahaan-$otp";
	$query  = "SELECT * FROM tb_user WHERE emailPerusahaan='$email_perusahaan' AND otp = '$otp' AND verifikasi='N'";
	$login  = mysqli_query($koneksi, $query);
	$ketemu = mysqli_num_rows($login);
	$r      = mysqli_fetch_array($login);

	 
	if ($ketemu > 0){
		$update = mysqli_query($koneksi,"UPDATE tb_user SET verifikasi = 'Y' WHERE id = '$r[id]'");
		echo"<script>window.alert('Akun berhasil didaftarkan'); window.location.href='../login/'</script>";
	}
	else {
		header('location:../register/index.php?msg=gagal');
	}
}
?>