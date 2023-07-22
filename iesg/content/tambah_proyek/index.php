<?php

require '../../assets/lib/session.php';
require '../../php/koneksi.php';
require '../../assets/lib/validasi-user.php';

if(!isLogin()){
    header('location:../login/');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Tambah Proyek</title>
    <?php require '../../layout/head.php'; ?>
</head>

<body data-rsssl=1 class="home page-template-default page page-id-5680 _masterslider _msp_version_3.2.7 woocommerce-no-js">
    <div class="body-wrapper  float-menu" data-home="https://demo.goodlayers.com/greennature/">
    <?php include '../../layout/header.php'; ?>
        <!-- is search -->
        <div class="content-wrapper">
            <div class="greennature-content">
                <div class="with-sidebar-container container" style="margin-top:100px;">
                    <div class="with-sidebar-left">
                        <div class="with-sidebar-content twelve columns">
                            <section id="content-section-2">
                                <div class="section-container container">
                                    <div class="greennature-item greennature-content-item" style="margin-bottom: 60px;"><span class="clear"></span><span class="greennature-space" style="margin-top: -22px; display: block;"></span>
                                        <h2 class="greennature-heading-shortcode " style="font-weight: bold;margin-top: 40px;">Isilah data dibawah ini</h2>
                                        <p> <span class="clear"></span><span class="greennature-space" style="margin-top: 25px; display: block;"></span>
                                            <div role="form" class="wpcf7" id="wpcf7-f4-o1" lang="en-US" dir="ltr">
                                                <form class="quform" action="tambah_proyek.php" method="post" enctype="multipart/form-data" onclick="">

                                                    <?php include 'form-content.php'; ?>
                                                        <p>
                                                            <!-- Begin Submit button -->
                                                            <div class="quform-submit">
                                                                <div class="quform-submit-inner" style="padding-right: 15px;">
                                                                    <button style="width: 100%;" type="submit" class="submit-button"><span>Daftar Proyek</span></button>
                                                                </div>
                                                                <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                                            </div>
                                                        </p>
                                                    </div>
                                                </form>
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

        <!-- content wrapper -->
        <?php include '../../layout/footer.php'?>
        <!-- Halaman Donasi -->

        <?php include '../../layout/donasi.php';?>
        <!-- End Of Halaman Donasi -->
    
    </div>
    <!-- body-wrapper -->

    <!-- Java Script & Plugins -->
    <?php include '../../layout/js.php'; ?>
</body>
</html>