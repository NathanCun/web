<?php  
    require '../../assets/lib/session.php';
    require '../../php/koneksi.php';
?>

<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 ltie8 ltie9" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 ltie9" lang="en-US"><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->

<head>
    <title>FaQ</title>
    <?php require '../../layout/head.php'; ?>
</head>

<body data-rsssl=1 class="home page-template-default page page-id-5680 _masterslider _msp_version_3.2.7 woocommerce-no-js">
    <div class="body-wrapper  float-menu" data-home="https://demo.goodlayers.com/greennature/">
    <?php include '../../layout/header.php'; ?>
        <!-- is search -->


    <div class="greennature-page-title-wrapper header-style-5-title-wrapper">
        <div class="greennature-page-title-overlay"></div>
        <div class="greennature-page-title-container container">
            <h1 class="greennature-page-title">FAQ</h1>
        </div>
    </div>
    <!-- is search -->
    <div class="content-wrapper">
        <div class="greennature-content">

        <!-- Above Sidebar Section-->
        <div class="above-sidebar-wrapper">
            <section id="content-section-1">
                <div class="section-container container">
                    <div class="eight columns">
                        <div class="greennature-item greennature-accordion-item style-1" style="margin-bottom: 0px;">
                        <?php
                                $sql = mysqli_query($koneksi,"SELECT * FROM tb_faq ");
                                while($row = mysqli_fetch_assoc($sql)){
                                    ?>
                                    <div class="accordion-tab ">
                                        <h4 class="accordion-title"><i class="icon-plus" ></i><span><?php echo "$row[pertanyaan]"; ?></span></h4>
                                        <div class="accordion-content">
                                            <p><?php echo "$row[jawaban]"; ?></p>
                                        </div>
                                    </div>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="four columns">
                        <div class="greennature-item-title-wrapper greennature-item  greennature-left greennature-small ">
                            <div class="greennature-item-title-container container">
                                <div class="greennature-item-title-head">
                                    <h3 class="greennature-item-title greennature-skin-title greennature-skin-border">Tidak menemukan jawaban? Tanya ke kita.</h3>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="greennature-item greennature-content-item">
                            <div role="form" class="wpcf7" id="wpcf7-f4-o1" lang="en-US" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <form action="#" method="post" class="wpcf7-form" novalidate="novalidate">
         
                                    <p>Your Name (required)
                                        <br />
                                        <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </p>
                                    <p>Your Email (required)
                                        <br />
                                        <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> </p>
                                    <p>Subject
                                        <br />
                                        <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span> </p>
                                    <p>Your Message
                                        <br />
                                        <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </p>
                                    <p>
                                        <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" />
                                    </p>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </section>
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