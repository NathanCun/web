                    
<section id="content-section-4" style="margin-top:200px;">
    <div class="greennature-color-wrapper  gdlr-show-all no-skin" style="background-color: #ffffff; padding-bottom: 25px; ">
        <div class="container">
            <div class="greennature-item-title-wrapper greennature-item  greennature-left-divider greennature-medium ">
                <div class="greennature-item-title-container container">
                    <div class="greennature-item-title-head">
                        <h3 class="greennature-item-title greennature-skin-title greennature-skin-border"><img src="../assets/images/svg/house-solid.svg" alt=""/>Proyek Terbaru Kami</h3>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>

            <div class="portfolio-item-wrapper type-classic-portfolio" >
                <div class="portfolio-item-holder  greennature-portfolio-column-4">
                    <div class="greennature-isotope" data-type="portfolio" data-layout="fitRows">
                        <div class="clear"></div>
                        <!--  Card content Items  -->
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
                        
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</section>