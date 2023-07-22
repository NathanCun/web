<?php
if(isset($_POST['login'])){
	if(strlen($_POST['password']) < 8 ){
		header('location:index.php?msg=password_kurang');
	} else {
    require "../../php/koneksi.php";
	// fungsi untuk menghindari injeksi dari user yang jahil
	function anti_injection($data){
		$filter  = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
		return $filter;
  	}

	$email = anti_injection($_POST['email']);
	$password = MD5(anti_injection($_POST['password']));
  
	// menghindari sql injection
	$injeksi_username = mysqli_real_escape_string($koneksi, $email);
	$injeksi_password = mysqli_real_escape_string($koneksi, $password);
  
	// pastikan username dan password adalah berupa huruf atau angka.
	// if (!ctype_alnum($injeksi_username) OR !ctype_alnum($injeksi_password)){
	// 	echo "Sekarang loginnya tidak bisa di injeksi lho.";
	// }

	// else{
		$query  = "SELECT * FROM tb_user WHERE emailPerusahaan='$email' AND password='$password' AND verifikasi='Y'";
		$login  = mysqli_query($koneksi, $query);
		$ketemu = mysqli_num_rows($login);
		$r      = mysqli_fetch_array($login);
	
		// Apabila username dan password ditemukan (benar)
		if ($ketemu > 0){
			session_start();
			// bikin variabel session
			$_SESSION['email']      = $r['username'];
			$_SESSION['username']   = $r['password'];
			$_SESSION['user_id']   	= $r['id'];
				
			// bikin id_session yang unik dan mengupdatenya agar slalu berubah 
			// agar user biasa sulit untuk mengganti password Administrator 
			if($r["level"] == 1){
				$_SESSION['level']   = "admin";
				header('location:../../../admin');
			}
			else{
				header('location:../homepage');
			}
		}
		else {
			header('location:index.php?msg=gagal');
		}
	} 
}
?>