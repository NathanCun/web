<section id="content-section-4" style="margin-top:200px;">
    <div class="greennature-color-wrapper  gdlr-show-all no-skin" style="background-color: #ffffff; padding-bottom: 25px; ">
        <div class="container">
            <div class="greennature-item-title-wrapper greennature-item  greennature-left-divider greennature-medium ">
                <div class="greennature-item-title-container container">
                    <div class="greennature-item-title-head" >
                        <h3 class="greennature-item-title greennature-skin-title greennature-skin-border"><img src="../assets/images/svg/house-solid.svg" alt=""/>Proyek Saya</h3>
                        <?php
                            echo '<a class="greennature-item-title-link" href="../tambah_proyek" style="background: #ecb338; color: #275A05 ; font-size: 1.2em; padding: 4px 12px; margin-top: -10px;">Tambah Proyek</a>';
                        ?>
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
                        $sql = mysqli_query($koneksi,"SELECT * FROM tb_projek WHERE id_user = '$_SESSION[user_id]' ");
                        if(mysqli_num_rows($sql) >= 1){
                            while($row = mysqli_fetch_assoc($sql)){
                                $teks = substr($row['deskripsi_proyek'],0,200);
                                echo "
                                <div class='six columns'>
                                    <div class='greennature-item greennature-portfolio-item greennature-classic-portfolio'>
                                        <div class='greennature-ux greennature-classic-portfolio-ux'>
                                            <div class='portfolio-thumbnail greennature-image' style=\"width: 540px; height: 326px; display: flex; justify-content: center; align-items: center;\"><img src='../../assets/proyek/images/$row[foto_utama_proyek]' alt='' width='540px' height='326px' style=\"object-fit: cover;\" /><span class='portfolio-overlay'>&nbsp;</span><a class='portfolio-overlay-icon' href='upload/shutterstock_161515241.jpg' data-rel='fancybox'><span class='portfolio-icon' ><i class='fa fa-search' ></i></span></a></div>
                                            <div class='portfolio-classic-content'>
                                                <h3 class='portfolio-title'><a  href='../detail_proyek?id=$row[id]'>$row[nama_proyek]</a></h3>
                                                <div class='greennature-portfolio-info'>
                                                   <div class='seven columns'>
                                                        <div class='portfolio-info portfolio-tag'><span class='info-head greennature-title'>Tags </span><a href='#' rel='tag'>$row[bidang_industri]</a><span class='sep'>,</span></div>
                                                    </div>
                                                    <div class='five columns'>";
                                                        if($row['status'] == ''){
                                                            $color = '#ecb338';
                                                            $status = 'Belum Disetujui';
                                                        }
                                                        elseif($row['status'] == 'disetujui'){
                                                            $color = 'light-green';
                                                            $status = 'Sedang Berjalan';
                                                        }
                                                        elseif($row['status'] == 'tutup' ){
                                                            $color = 'red';
                                                            $status = 'Selesai';
                                                        }
                                                        else{
                                                            $color = '#ecb338';
                                                            $status = 'Sedang Diproses';
                                                        }

                                                        echo "<a class='stunning-item-button greennature-button greennature-lb-payment' href='#' style='background-color: $color; color: #ffffff; float:right;'>$status</a></h4>
                                                        
                                                    </div>
                                                    <div class='clear'></div>
                                                    
                                                    <div class='clear'></div>
                                                </div>
                                                <div class='portfolio-excerpt'>$teks...
                                                    <div class='clear'></div>
                                                    
                                                </div>
                                                <div class='portfolio-info portfolio-tag' style='float:right;'  >";
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
                        }
                        else{
                            echo "<h2 style='margin-left:100px;'>belum ada proyek yang didaftarkan </h2>";
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