<footer class="footer-wrapper">
            <div class="footer-container container">
                <div class="footer-column three columns" id="footer-widget-1">
                    <div id="text-5" class="widget widget_text greennature-item greennature-widget">
                        <div class="textwidget">
                            <p><img src="../../images/logo.png" style="width: 170px;" alt="" /></p>
                            <p>Indonesia Environment Social Governance adalah ...</p>
                        </div>
                    </div>
                </div>
                <div class="footer-column three columns" id="footer-widget-2">
                    <div id="text-9" class="widget widget_text greennature-item greennature-widget">
                        <h3 class="greennature-widget-title">Info Kontak</h3>
                        <div class="clear"></div>
                        <div class="textwidget"><span class="clear"></span><span class="greennature-space" style="margin-top: -6px; display: block;"></span> Alamat: Jl. Prof. H. M. Yamin No.151, RT.02, Sei Kera Hilir II, Kec. Medan Perjuangan, Kota Medan, Sumatera Utara 20233

                            <span class="clear"></span><span class="greennature-space" style="margin-top: 10px; display: block;"></span>

                            <i class="greennature-icon fa fa-phone" style="vertical-align: middle; color: #fff; font-size: 16px; "></i> +62821-6562-4555

                            <span class="clear"></span><span class="greennature-space" style="margin-top: 10px; display: block;"></span>

                            <i class="greennature-icon fa fa-mobile" style="vertical-align: middle; color: #fff; font-size: 20px; "></i> +62821-6562-4555

                            <span class="clear"></span><span class="greennature-space" style="margin-top: 10px; display: block;"></span>

                            <i class="greennature-icon fa fa-envelope-o" style="vertical-align: middle; color: #fff; font-size: 16px; "></i> indonesiaesgcompany@gmail.com</div>
                    </div>
                </div>
                <div class="footer-column three columns" id="footer-widget-4">
                    <div id="gdlr-recent-portfolio2-widget-6" class="widget widget_gdlr-recent-portfolio2-widget greennature-item greennature-widget">
                        <h3 class="greennature-widget-title">Proyek terbaru</h3>
                        <div class="clear"></div>
                        <div class="greennature-recent-port2-widget">
                        <?php
                            $sql = mysqli_query($koneksi, "SELECT * FROM tb_projek WHERE status = 'disetujui' LIMIT 4 ");
                            while ($row = mysqli_fetch_assoc($sql)) {
                                echo "
                                <div class=\"recent-port-widget-thumbnail\">
                                    <a href=\"../detail_proyek?id=$row[gambar]\"><img src=\"../../assets/images/proyek/$row[gambar]\" alt=\"\" width=\"150\" height=\"150\" /></a>
                                </div>
                                ";
                            }
                            ?>
                        <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="copyright-wrapper">
                <div class="copyright-container container">
                    <div class="copyright-left">
                        <a href="#"><i class="greennature-icon fa fa-facebook" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a> <a href="#"><i class="greennature-icon fa fa-twitter" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a> <a href="#"><i class="greennature-icon fa fa-dribbble" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a> <a href="#"><i class="greennature-icon fa fa-pinterest" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a> <a href="#"><i class="greennature-icon fa fa-google-plus" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a> <a href="#"><i class="greennature-icon fa fa-instagram" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </footer>