<?php
     require '../../assets/lib/session.php';
     require '../../php/koneksi.php';
     require '../../assets/lib/donasi.php';
     require '../../assets/lib/currency.php';
     require '../../assets/lib/validasi-user.php';
     require '../../php/projek.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Proyek</title>
    <?php require '../../layout/head.php'; ?>
</head>

<body data-rsssl=1 class="home page-template-default page page-id-5680 _masterslider _msp_version_3.2.7 woocommerce-no-js">
    <div class="body-wrapper  float-menu" data-home="https://demo.goodlayers.com/greennature/">
        <header class="greennature-header-wrapper header-style-5-wrapper greennature-header-with-top-bar">
            <!-- top navigation -->
            <?php include '../../layout/page-header.php'?>

            <div id="greennature-header-substitute"></div>
            <div class="greennature-header-inner header-inner-header-style-5">
                <div class="greennature-header-container container">
                    <div class="greennature-header-inner-overlay"></div>
                    <!-- logo -->
                    <div class="greennature-logo">
                        <div class="greennature-logo-inner">
                            <a href="index.html">
                                <img src="../../assets/images/logo.png" alt="" /> </a>
                        </div>
                        <div class="greennature-responsive-navigation dl-menuwrapper" id="greennature-responsive-navigation">
                            <button class="dl-trigger">Open Menu</button>
                            <?php  include "../../layout/mobile-navbar.php"; ?>
                        </div>
                    </div>

                    <!-- navigation -->
                    <div class="greennature-navigation-wrapper">
                        <nav class="greennature-navigation" id="greennature-main-navigation">
                            <?php include "../../layout/desktop-navbar.php"; ?>

                        </nav>
                        <div class="greennature-navigation-gimmick" id="greennature-navigation-gimmick"></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>
        <!-- is search -->
        <div class="content-wrapper">
            <div class="greennature-content">
                <div class="with-sidebar-wrapper">
                
                <!-- PROJECT SECRION -->
                <?php
                if(isLogin()){
                    include 'riwayat.php';
                }
                ?>
                </div>
            </div>
            <!-- greennature-content -->
            <div class="clear"></div>
        </div>
        <!-- content wrapper -->

        <?php include '../../layout/footer.php'?>
        <!-- halaman Donasi -->

        <?php include '../../layout/donasi.php';?>
    </div>
    <!-- body-wrapper -->

    <!-- Java Script & Plugins -->
    <?php include '../../layout/js.php'; ?>

</body>
</html>