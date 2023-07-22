<?php  
     require '../../assets/lib/session.php';
     require '../../php/koneksi.php';
     require 'profile.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Login</title>
    <?php require '../../layout/head.php'; ?>
</head>

<body data-rsssl=1 class="home page-template-default page page-id-5680 _masterslider _msp_version_3.2.7 woocommerce-no-js">
    <div class="body-wrapper  float-menu" data-home="https://demo.goodlayers.com/greennature/">
    <?php include '../../layout/header.php'; ?>
        <!-- is search -->
        <div class="content-wrapper">
            <div class="greennature-content">
                <div class="content-wrapper" style="margin-top:180px;" >
                    <div class="page-not-found-container container">
                        <div class="greennature-item page-not-found-item">
                            <div class="page-not-found-block"  style=" background: none; width: 50%; min-width: 300px; margin: 0 auto;" >
                                <div class="page-not-found-title">
                                    Masuk </div>
                                    <div class="greennature-item greennature-content-item" style="margin-bottom: 60px;"><span class="clear"></span><span class="greennature-space" style="margin-top: -22px; display: block;"></span>
                                        <p><span class="clear"></span><span class="greennature-space" style="margin-top: 50px; display: block;"></span>
                                            <div role="form" class="wpcf7" id="wpcf7-f4-o1" lang="en-US" dir="ltr" style="color: black;">
                                                <form class="quform" method="post" enctype="multipart/form-data" onclick="">
                                                
                                                    <?php include 'form-content.php'; ?>

                                                        <p>
                                                            <div class="quform-submit">
                                                                <div class="quform-submit-inner">
                                                                    <button type="submit" name="login" class="submit-button" style="background-color: #ecb338; color:white; width:100%"><span>Edit</span></button>
                                                                </div>
                                                            </div>
                                                        </p>
                                                </form>
                                                <a href="../edit pasword">
                                                    <p>
                                                            <div class="quform-submit">
                                                                <div class="quform-submit-inner">
                                                                
                                                                    <button name="edit" class="submit-button" style="background-color: #ecb338; color:white; width:100%"><span>Change password</span></button>
                                                                    
                                                                </div>
                                                            </div>
                                                        </p>
                                                        </a>
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