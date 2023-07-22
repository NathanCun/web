<?php
    require '../../assets/lib/session.php';
    require '../../php/koneksi.php';
    require '../../assets/lib/donasi.php';
    require '../../assets/lib/currency.php';
    require '../../php/projek.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Hasil Kalkulasi</title>
    <link rel="stylesheet" href="style.css">
    <?php require '../../layout/head.php'; ?>
</head>

<body data-rsssl=1 class="home page-template-default page page-id-5680 _masterslider _msp_version_3.2.7 woocommerce-no-js">
    <div class="body-wrapper  float-menu" data-home="https://demo.goodlayers.com/greennature/">
        <?php include '../../layout/header.php'; ?>
        <!-- is search -->
         
        <!-- content wrapper -->
        <div class="greennature-page-title-wrapper header-style-5-title-wrapper">
            <div class="greennature-page-title-overlay"></div>
            <div class="greennature-page-title-container container">
                <h1 class="greennature-page-title">Carbon Footprint Calculator</h1>
                <span class="greennature-page-caption"></span>
            </div>
        </div>
        <!-- is search -->
        <div class="content-wrapper">
            <div class="greennature-content">

                <!-- Above Sidebar Section-->

                <!-- Sidebar With Content Section-->
                <div class="with-sidebar-wrapper">
                    <div class="with-sidebar-container container">
                        <div class="with-sidebar-left twelve columns">
                            <div class="with-sidebar-content twelve columns">
                                <section id="content-section-1">
                                    <div class="section-container container">
                                        <div class="blog-item-wrapper">
                                            <div class="blog-item-holder">
                                                <div class="greennature-isotope" data-type="blog" data-layout="fitRows">
                                                    <div class="clear"></div>
                                                        <div class="twelve columns" style="padding-right:50px;">
                                                            <div class="greennature-skill-bar-wrapper  greennature-item greennature-size-small"><span class="skill-bar-content" >Emisi Rumah Tangga</span><span class="skill-bar-percent" >5 Tonnes</span>
                                                                <div class="greennature-skill-bar greennature-ux" style="background-color: #e9e9e9;">
                                                                    <div class="greennature-skill-bar-progress" data-percent="70" style="background-color: #5dc269;"></div>
                                                                </div>
                                                            </div>
                                                            <div class="greennature-skill-bar-wrapper  greennature-item greennature-size-small"><span class="skill-bar-content" >Emisi Transportasi</span><span class="skill-bar-percent" >1.2 Tonnes</span>
                                                                <div class="greennature-skill-bar greennature-ux" style="background-color: #e9e9e9;">
                                                                    <div class="greennature-skill-bar-progress" data-percent="15" style="background-color: #5dc269;"></div>
                                                                </div>
                                                            </div>
                                                            <div class="greennature-skill-bar-wrapper  greennature-item greennature-size-small"><span class="skill-bar-content" >Emisi Konsumsi</span><span class="skill-bar-percent" >1 Tonnes</span>
                                                                <div class="greennature-skill-bar greennature-ux" style="background-color: #e9e9e9;">
                                                                    <div class="greennature-skill-bar-progress" data-percent="10" style="background-color: #5dc269;"></div>
                                                                </div>
                                                            </div>
                                                            <div class="greennature-skill-bar-wrapper  greennature-item greennature-size-small"><span class="skill-bar-content" >Emisi Penerbangan</span><span class="skill-bar-percent" >0 Tonnes</span>
                                                                <div class="greennature-skill-bar greennature-ux" style="background-color: #e9e9e9;">
                                                                    <div class="greennature-skill-bar-progress" data-percent="0" style="background-color: #5dc269;"></div>
                                                                </div>
                                                            </div>
                                                            <div class="greennature-skill-bar-wrapper  greennature-item greennature-size-small"><span class="skill-bar-content" >Daur Ulang</span><span class="skill-bar-percent" >-0.5 Tonnes</span>
                                                                <div class="greennature-skill-bar greennature-ux" style="background-color: #e9e9e9;">
                                                                    <div class="greennature-skill-bar-progress" data-percent="5" style="background-color: #5dc269;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </section>

                                <section>
                                    <div class="saran-container">
                                            <p style="font-size: 1.2em;">Total Emisi Anda Adalah:</p>
                                            <h2 style="margin-top: -20px; color: white;">6.7 Tonnes</h2>
                                        <div class="rate-wrap">
                                            <img src="../../assets/images/svg/star.png" alt="" style="width: 50px; height:50px">
                                            <img src="../../assets/images/svg/star.png" alt="" style="width: 50px; height:50px">
                                            <!-- <img src="../assets/images/svg/star.png" alt="" style="width: 50px; height:50px"> -->
                                        </div>
                                        <div class="rate-2"><h2 style="color: white;">CUKUP BAGUS</h2></div>
                                        <div class="saran-wrap">
                                            <ul style="font-size: 1.4em;">  
                                                <li>Anda perlu menanam sebanyak 1 pohon di rumah anda untuk mengurangi emisi karbon sebanyak</li>
                                                <li>Untuk Emisi Rumah Tangga anda sudah melewati batas, disarankan untuk mengurangi emisi yang dihasilkan oleh emisi rumah tangga</li>
                                                <li>Emisi Transportasi anda cukup bagus, dikurangi lagi jika memungkinkan</li>
                                                <li>Anda bisa melakukan donasi ke proyek proyek yang disarankan oleh kami khusus untuk anda</li>
                                            </ul>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <?php
                                $projects = getProjects("disetujui",0);
                                foreach($projects as $row){
                                    $teks = substr($row['deskripsi'],0,80);
                                    echo "
                                    <div class='three columns'>
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
                            <div class="clear"></div>
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