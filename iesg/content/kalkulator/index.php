<?php
    require '../../assets/lib/session.php';
    require '../../php/koneksi.php';
    require '../../assets/lib/donasi.php';
    require '../../assets/lib/currency.php';
    require '../../php/projek.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<!--<![endif]-->

<head>
    <title>Hitung jejak karbon</title>
    <link rel="stylesheet" href="kalkulator.css">
    <?php require '../../layout/head.php'; ?>
</head>

<body data-rsssl=1 class="home page-template-default page page-id-5680 _masterslider _msp_version_3.2.7 woocommerce-no-js">
    <div class="body-wrapper  float-menu" data-home="https://demo.goodlayers.com/greennature/">
        <?php include '../../layout/header.php'; ?>
        <div class="content-wrapper">
            <div class="greennature-content">
                <div class="with-sidebar-wrapper">
                    <div class="with-sidebar-container container">
                        <div class="with-sidebar-left eight columns">
                            <div class="with-sidebar-content twelve columns">

                                <!-- Section kalkulator jejak karbon -->
                                <section id="content-section-1">
                                    <div class="section-container container">
                                        <div class="blog-item-wrapper">
                                            <div class="blog-item-holder">
                                                <div class="greennature-isotope" data-type="blog" data-layout="fitRows">
                                                    <div class="clear"></div>
                                                        <div class="twelve columns" style="padding-right:50px;">
                                                        <h3 class="greennature-heading-shortcode " style="font-weight: bold;margin-top:180px;">
                                                        <img src="../../assets/images/svg/calculator.png" alt="" style="width: 50px; height: 50px; margin-right:10px;">Kalkulator Jejak Karbon </h3>
                                                        <p> <span class="clear"></span><span class="greennature-space" style="margin-top: 25px; display: block;"></span>
                                                            <div role="form" class="wpcf7" id="wpcf7-f4-o1" lang="en-US" dir="ltr">
                                                                <form class="quform" action="../hasil_perhitungan/" method="post" enctype="multipart/form-data" onclick="">

                                                                    <?php include 'form-content.php'; ?>
                                                                        <p>
                                                                            <!-- Begin Submit button -->
                                                                            <div class="quform-submit">
                                                                                <div class="quform-submit-inner">
                                                                                    <button type="submit" class="submit-button"><span>Send</span></button>
                                                                                </div>
                                                                            <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                                                            
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
                                </section>
                                <!-- End of section -->
                            </div>

                            <div class="clear"></div>
                        </div>
                        
                        <div class="greennature-sidebar greennature-right-sidebar four columns">
                            <div class="greennature-item-start-content sidebar-right-item" style="margin-top:150px;">
                            <?php
                                $projects = getProjects("disetujui",0);
                                foreach($projects as $row){
                                    $teks = substr($row['deskripsi'],0,80);
                                    echo "
                                    <div class='twelve columns'>
                                        <div class='greennature-item greennature-portfolio-item greennature-classic-portfolio'>
                                            <div class='greennature-ux greennature-classic-portfolio-ux'>
                                                <div class='portfolio-thumbnail greennature-image'><img src='../../assets/images/proyek/$row[gambar]' alt='' width='540' height='326' /><span class='portfolio-overlay'>&nbsp;</span><a class='portfolio-overlay-icon' href='upload/shutterstock_161515241.jpg' data-rel='fancybox'><span class='portfolio-icon' ><i class='fa fa-search' ></i></span></a></div>
                                                <div class='portfolio-classic-content'>
                                                    <h3 class='portfolio-title'><a  href='../detail_proyek?id=$row[id]'  >$row[nama_proyek]</a></h3>
                                                    <div class='greennature-portfolio-info'>
                                                        <div class='portfolio-info portfolio-tag'><span class='info-head greennature-title'>Tags </span><a href='#' rel='tag'>$row[bidang_industri]</a><span class='sep'>,</span> <a href='#' rel='tag'>$row[manfaat]</a></div>
                                                        <div class='clear'></div>
                                                        
                                                        <div class='clear'></div>
                                                    </div>
                                                    <div class='portfolio-excerpt'>$teks...
                                                        <div class='clear'></div>
                                                        
                                                    </div>
                                                    <div class='portfolio-info portfolio-tag' style='float:right'>";
                                                    echo rupiah(donasi_terkumpul($row['id']));
                                                    echo " dari ";
                                                    echo rupiah($row['target_donasi']);
                                                    echo"</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    ";
                                }
                                ?>
                            </div>
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