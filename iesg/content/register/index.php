<?php
    require '../../assets/lib/session.php';
    require '../../php/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Registrasi Akun Anda</title>
    <?php require '../../layout/head.php'; ?>
</head>

<body data-rsssl=1 class="home page-template-default page page-id-5680 _masterslider _msp_version_3.2.7 woocommerce-no-js">
    <div class="body-wrapper  float-menu" data-home="https://demo.goodlayers.com/greennature/">
        <?php include '../../layout/navbar-register.php'; ?>
        <!-- is search -->
        <div class="content-wrapper">
            <div class="greennature-content">
                <!-- Sidebar With Content Section-->
                <div class="with-sidebar-wrapper">
                    <!-- This is page content -->
                    <div class="with-sidebar-wrapper">
                        
                        <div class="with-sidebar-container container" style="margin:120px auto 60px;">
                            <div class="with-sidebar-left">
                                <div class="with-sidebar-content twelve columns">
                                    <section id="content-section-2">
                                        <div class="section-container container" style="display: flex; width: 100%; justify-content: space-around; align-items: center;">
                                        <div style="width: 40%;">
                                            <img src="../../assets/images/register/co2.jpg" alt="">
                                            <p>Dengan mengisi formulir ini, saya menyatakan setuju dengan syarat-syarat Kebijakan <a style="text-decoration: underline; cursor: pointer;">Privasi I-ESG</a> dan menerima pembaruan dari I-ESG yang dapat mencakup surel, panggilan, dan pesan teks.</p>
                                        </div>  
                                            <div  class="greennature-item greennature-content-item" style="margin-bottom: 60px; width: 45%;"><span class="clear"></span><span class="greennature-space" style="margin-top: -22px; display: block;"></span>
                                                <h3 class="greennature-heading-shortcode " style="font-weight: bold; margin-top:40px; color: #382f24;">Pendaftaran Perusahaan </h3>
                                                <p> <span class="clear"></span><span class="greennature-space" style="margin-top: 25px; display: block;"></span>
                                                    <div role="form" class="wpcf7" id="wpcf7-f4-o1" lang="en-US" dir="ltr">

                                                            <?php include 'form-content.php'; ?>

                                                    </div>
                                                </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </section>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                <!-- Below Sidebar Section-->

            </div>
            <!-- greennature-content -->
            <div class="clear"></div>
        </div>
        <!-- content wrapper -->

        <?php include '../../layout/footer-kecil.php'?>
        <!-- Halaman Donasi -->

        <?php include '../../layout/donasi.php';?>
        <!-- End Of Halaman Donasi -->
    </div>
    <!-- body-wrapper -->

    <!-- Java Script & Plugins -->
    <?php include '../../layout/js.php'; ?>
</body>
</html>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">


swal({
  icon: "success",
});
</script>