<?php  
     require '../../assets/lib/session.php';
     require '../../php/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Login</title>
    <?php require '../../layout/head.php'; ?>
</head>

<body data-rsssl=1 class="home page-template-default page page-id-5680 _masterslider _msp_version_3.2.7 woocommerce-no-js">
    <div class="body-wrapper  float-menu" data-home="https://demo.goodlayers.com/greennature/">
        <?php require '../../layout/navbar-register.php' ?>
        <!-- is search -->
        <div class="content-wrapper">
            <div class="greennature-content">
                <div class="content-wrapper" style="margin:160px 0 60px;" >
                    <div class="page-not-found-container container">
                        <div class="greennature-item page-not-found-item">
                            <div class="page-not-found-block"  style=" background: #28422a; width: 50%; min-width: 300px; margin: 0 auto;" >
                                <div class="page-not-found-title">
                                    Masuk
                                </div>
                                
                                    <div class="greennature-item greennature-content-item" style="margin-bottom: 60px;"><span class="clear"></span><span class="greennature-space" style="margin-top: -22px; display: block;"></span>
                                    
                                        <p><span class="clear"></span><span class="greennature-space" style="margin-top: 50px; display: block;"></span>
                                            <div role="form" class="wpcf7" id="wpcf7-f4-o1" lang="en-US" dir="ltr">
                                            <div>
                                    <?php
                                    if(isset($_GET ['msg']) && $_GET ['msg'] == 'gagal') {
                                    ?>
                                    <p style="padding: 4px; background-color: red; ">Gmail atau password Anda salah</p>
                                    <?php
                                    }
                                    ?>
                                 </div>
                                                <form class="quform" action="validasi.php" method="post" enctype="multipart/form-data" onclick="">
                                                    <?php include 'form-content.php'; ?>
                                                        <p>
                                                            <div class="quform-submit">
                                                                <div class="quform-submit-inner">
                                                                    <button type="submit" name="login" class="submit-button" style="background-color: #ecb338; color:white; width:100%"><span>Masuk</span></button>
                                                                </div>
                                                                <div style="margin-top:10px; font-size:1rem;"><p>Lupa Kata Sandi? <a href="" style="color: lightgray;"> Klik Disini</a></p></div>
                                                                <div style="margin-top:-25px; font-size:1rem;"><p>Tidak Punya Akun? <a href="../register/index.php?daftar_data_perusahaan" style="color: lightgray;">Klik Disini</a></p></div>
                                                                <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                                            </div>
                                                        </p>
                                                </form>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        <!-- content wrapper -->

        </div>
        <!-- content wrapper -->
        <?php include '../../layout/footer-kecil.php'?>
    </div>
    <!-- body-wrapper -->

    
    <!-- Java Script & Plugins -->
    <?php include '../../layout/js.php'; ?>
</body>
</html>