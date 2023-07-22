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
    <title>Proyek</title>
    <?php require '../../layout/head.php'; ?>
</head>

<body data-rsssl=1 class="home page-template-default page page-id-5680 _masterslider _msp_version_3.2.7 woocommerce-no-js">
    <div class="body-wrapper  float-menu" data-home="https://demo.goodlayers.com/greennature/">
    <?php include '../../layout/header.php'; ?>
        <!-- is search -->

        <?php 
           $project = detailProject($_GET['id']);
        ?>

        <div class="greennature-page-title-wrapper header-style-5-title-wrapper">
            <div class="greennature-page-title-overlay"></div>
            <div class="greennature-page-title-container container">
                <h1 class="greennature-page-title">Proyek Kami</h1>
                <span class="greennature-page-caption">
                <?php echo $project['nama_proyek']; ?>
                </span>
            </div>
        </div>
        <div class="content-wrapper">
            <div class="greennature-content">

                <div class="with-sidebar-wrapper">
                    <div class="with-sidebar-container container greennature-class-no-sidebar">
                        <div class="with-sidebar-left twelve columns">
                            <div class="with-sidebar-content twelve columns">
                                <div class="greennature-item greennature-portfolio-style2 greennature-item-start-content">
                                    <div  id="portfolio-76" class="post-76 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio_category-environment portfolio_category-volunteer portfolio_tag-donation portfolio_tag-volunteer">
                                        <div class="greennature-portfolio-thumbnail " style="margin: 0 20%;">
                                            <div  class="greennature-stack-image-wrapper">
                                                <div class="greennature-stack-image" >
                                                    <a href="../../assets/proyek/images/<?php echo $project['foto_utama_proyek'];?>" data-fancybox-group="greennature-gal-1" data-rel="fancybox" style=" "><img src="../../assets/proyek/images/<?php echo $project['foto_utama_proyek'];?>" alt="" width="1280" height="853" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a class='stunning-item-button greennature-button' href='../edit_proyek/index.php?id=<?php echo $_GET['id']; ?>' style='background-color: #ecb338; color: #ffffff;'>Edit Proyek</a></h4>
                                        <div class="clear"></div>
                                        <div class="greennature-portfolio-content">
                                        <div class="greennature-portfolio-info">
                                        
                                                <h4 class="head"><?php echo $project['nama_proyek'];
                                                
                                                if($project["status"] == ''){
                                                    $color = "#ecb338";
                                                    $status = "Belum Disetujui";
                                                }
                                                elseif($project["status"] == 'disetujui'){
                                                    $color = "light-green";
                                                    $status = "Sedang Berjalan";
                                                }
                                                elseif($project["status"] == 'tutup' ){
                                                    $color = "red";
                                                    $status = "Selesai";
                                                }
                                                else{
                                                    $color = "#ecb338";
                                                    $status = "Sedang Diproses";
                                                }
                                                echo "<a class='stunning-item-button greennature-button greennature-lb-payment' href='#' style='background-color: $color; color: #ffffff; float:right;'>$status</a></h4>";

                                                ?> 
                                        </div>
                                        <div style="display: flex; justify-content: space-between;">
                                        
                                        <div class="greennature-portfolio-content" style="width: 20%; ">

                                                <div class="content">
                                                    <div class="portfolio-info portfolio-clients" style="color: black; font-size: 1rem;"><span class="info-head greennature-title"><h5 style="margin-bottom: 0px;"><b>Bidang</b></h5> </span> <?php echo $project['bidang_industri']; ?></div>
                                                    <div class="portfolio-info portfolio-clients" style="color: black; font-size: 1rem; border-bottom: none;"><span class="info-head greennature-title"><h5 style="margin-bottom: 0px;"><b>Manfaat</b></h5> </span>
                                                    <?php echo '
                                                    <p style="margin-bottom: 4px;">Lingkungan</p>
                                                    <ul style="list-style:none">
                                                    <li>'. $project['lingkungan1'] .'</li>
                                                    <li>'. $project['lingkungan2'] .'</li>
                                                    <li>'. $project['lingkungan3'] .'</li>
                                                    </ul>
                                                    <p style="margin-bottom: 4px;">Sosial</p>
                                                    <ul style="list-style:none">
                                                    <li>'. $project['sosial1'] .'</li>
                                                    <li>'. $project['sosial2'] .'</li>
                                                    <li>'. $project['sosial3'] .'</li>
                                                    </ul>
                                                    <p style="margin-bottom: 4px;">Tata Kelola</p>
                                                    <ul style="list-style:none">
                                                    <li>'. $project['tata_kelola1'] .'</li>
                                                    <li>'. $project['tata_kelola2'] .'</li>
                                                    <li>'. $project['tata_kelola3'] .'</li>
                                                    </ul>
                                                    ' ?></div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                            
                                            <div class="clear"></div>
                                            <div class="greennature-portfolio-content" style="width: 70%;">
                                                <div class="greennature-portfolio-description" >
                                                <h4 class="head">Deskripsi Proyek</h4>
                                                <div class="content">
                                                    <p>
                                                        <?php echo $project["deskripsi_proyek"]; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                            <div style="background: #f5f5f5; padding: 40px; width: 60%; margin: 0 auto;">
                                                    <?php
                                                        echo" <div class='portfolio-info portfolio-tag' style='color: #3f3f3f;'><span class='info-head greennature-title'><b style='font-size: 1.2em;'> Terkumpulkan ";
                                                        echo rupiah(donasi_terkumpul($project['id']));
                                                        echo " dari ";
                                                        echo rupiah($project['target_donasi']);
                                                        echo"</b></div>";
                                                    ?>   
                                                <div class="portfolio-info portfolio-tag" style="color: #3f3f3f; "><span class="info-head greennature-title"><b style="font-size: 1.2em; margin-right: 10px;">Rupiah /Emisi</b> </span><?php echo $project['rupiah_emisi']; ?></div>
                                                <div class="portfolio-info portfolio-tag" style="color: #3f3f3f; "><span class="info-head greennature-title"><b style="font-size: 1.2em; margin-right: 10px;">Nomor Telepon</b> </span><?php echo $project['no_telepon_pengurus']; ?></div>
                                                <div class="portfolio-info portfolio-tag" style="color: #3f3f3f; "><span class="info-head greennature-title"><b style="font-size: 1.2em; margin-right: 10px;">Lokasi</b> </span><?php echo "$project[alamat_lengkap], $project[provinsi], $project[kabupaten_kota], $project[kecamatan]"; ?></div>
                                                <div class="clear"></div>
                                                <?php if (isset($_SESSION['user_id'])) {
                                                ?>

                                                <?php   
                                                } else {?>
                                                    <a class="stunning-item-button greennature-button large greennature-lb-payment" href="#" style="background-color: #ecb338; color: #ffffff;">Donasi Sekarang</a>
                                                <?php } ?>
                                                <div class="clear"></div>
                                            </div>
                                    </div>
                                    <div class="clear"></div>

                                </div>
                                <div class="greennature-related-portfolio portfolio-item-holder">
                                    <h4 class="head">Proyek Lainnya</h4>
                                    <div class="greennature-isotope" data-type="portfolio" data-layout="fitRows">
                                        <div class="clear"></div>
                                        <?php
                                            $projects = getProjects("disetujui",0);
                                            foreach($projects as $row){
                                                $teks = substr($row['deskripsi_proyek'],0,80);
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
                                    </div>
                                </div>

                                <div class="clear"></div>
                            </div>

                            <div class="clear"></div>
                        </div>
                    </div>

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