<?php
	require 'assets/lib/session.php';
	require 'assets/lib/validasi-user.php';
	require 'php/koneksi.php';
	require 'assets/lib/currency.php';
	require 'php/projek.php';
	if(!isAdmin()){
	header("location:../iesg");
	exit;
}	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>I ESG</title>
	<?php include 'layout/head.php'; ?>
    
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		
       <!--header-->
		<?php include 'layout/header.php'; ?>
		<!--end header-->
		
		<!--navigation Bar-->
		<?php include 'layout/navbar.php'; ?>
		<!--end navigation-->
		
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<?php include "page-content.php"; ?>
				</div>
			</div>
			<!--end page-content-wrapper-->
		</div>
		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->
		<?php include 'layout/footer.php';?>
		<!-- end footer -->
	</div>
    <?php include 'layout/js.php'; ?>
</body>

</html>