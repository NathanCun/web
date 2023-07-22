<div class="greennature-form-fields">

    <h4 class="greennature-heading-shortcode " style="font-weight: bold;margin-top: 40px;">Detail Proyek</h4>
    <div class="eight columns">
        <div class="columns-wrap  greennature-left">
            <span class="greennature-head">Nama Proyek</span>
            <input value="<?php echo $row['nama_proyek']; ?>" required style="width: 100%;" placeholder="Nama Proyek" type="text" class="greennature-require" name="nama_proyek">
        </div>
    </div>
    <div class="four columns">
        <div class="columns-wrap greennature-left" style="padding-right: 0px;">
            <span class="greennature-head">Bidang Industri</span>
            <select required style="width:100%; padding:12px 20px;" name="bidang_industri" id="industri" onchange="showIndustri()">
                <option value="<?php echo $row['bidang_industri'] ?>"><?php echo $row['bidang_industri'] ?></option>
                <option value="Energi Terbarukan">Energi Terbarukan</option>
                <option value="Efisiensi Energi">Efisiensi Energi</option>
                <option value="Ekowisata">Ekowisata</option>
                <option value="Infrastruktur Berkelanjutan">Infrastruktur Berkelanjutan</option>
                <option value="Lingkungan dan Konservasi">Lingkungan dan Konservasi</option>
                <option value="Manajemen Limbah">Manajemen Limbah</option>
                <option value="Teknologi Hijau">Teknologi Hijau</option>
                <option value="Pertanian Berkelanjutan">Pertanian Berkelanjutan</option>
                <option value="Pendidikan dan Kesadaran Lingkungan">Pendidikan dan Kesadaran Lingkungan</option>
                <option value="Riset dan Inovasi Berkelanjutan">Riset dan Inovasi Berkelanjutan</option>
                <option value="other">Yang Lainnya</option>
            </select>
        </div>
        <div id="industris" style="display: none;" class="columns-wrap greennature-left">
            <input placeholder="Industri Perusahaan" type="text" class="greennature-require"  name="industri_lainnya">
        </div>
    </div>
    <script>
        function showIndustri() {
            const optionSelect = document.getElementById("industri");
            const otherInput = document.getElementById("industris");

            if (optionSelect.value === "other") {
                otherInput.style.display = "block";
            } else {
                otherInput.style.display = "none";
            }
        }
    </script>

    <div class="twelve columns">
       <div class="columns-wrap">
        <span class="greennature-head">Deskripsi Proyek (minimal 400 huruf)</span>
            <textarea value="<?php echo $row['deskripsi_proyek']; ?>" style="padding: 12px; " name="deskripsi_proyek" placeholder="Deskripsi Proyek (minimal 400 huruf)"></textarea>
       </div>
    </div>
    <div class="clear"></div>
    <h4 class="greennature-heading-shortcode " style="font-weight: bold;margin-top: 40px;">Legalitas Proyek</h4>

    <div class="four columns">
        <div class="columns-wrap greennature-left">
        <span class="greennature-head">Rencana Proyek</span>
        
        <input required value="<?php echo $row['rencana_proyek'] ?>" type="text" class="form-control"  name="rencana_proyek" style="width: 100%;">
        <a target="_blank" href="<?php echo $row['rencana_proyek'] ?>"><u>Cek Link Rencana</u></a>
        <p style="color: #9CC498">Rencana yang terperinci dan juga rencana darurat untuk menghadapi situasi darurat atau kejadian tak terduga yang dapat mengancam kelangsungan proyek. (link drive)</p>
        </div>
    </div>

    <div class="four columns">
        <div class="columns-wrap greennature-left">
        <span class="greennature-head">Perizinan Proyek</span>
        
        <input required value="<?php echo $row['perizinan_proyek'] ?>" type="text" class="form-control"  name="perizinan_proyek" style="width: 100%;">
        <a target="_blank" href="<?php echo $row['perizinan_proyek'] ?>"><u>Cek Link Perizinan</u></a>
        <p style="color: #9CC498;">Perizinan Proyek berupa izin yang diperlukan, catatan hukum, standar proyek, sertifikasi berkelanjutan, dll. (link drive)</p>
        </div>
    </div>
    
    <div class="four columns">
        <div class="columns-wrap greennature-left">
        <span class="greennature-head">Foto Utama Proyek</span>
        
        <input value="" type="file" max="3145728" class="form-control"  name="foto_utama_proyek" style="background: #f5f5f5; padding: 12px 20px; width: 100%">
        <a target="_blank" href="../../assets/proyek/images/<?php echo $row['foto_utama_proyek'] ?>"><u>Cek Foto Proyek</u></a>
        <p style="color: #9CC498;">Foto akan ditampilkan di halaman depan proyek. (.jpg, .png)</p>
        </div>
    </div>
    <div class="clear"></div>

    <h4 class="greennature-heading-shortcode" style="font-weight: bold;margin-top: 40px;">Manfaat Proyek</h4>
    
    <div class="four columns">
        <div class="columns-wrap greennature-left" style="padding-right: 0px;">
            <div id="lingkungan">
                <span class="greennature-head">Lingkungan (Environmental)</span>
                <?php
                    if($row['lingkungan1'] == null){
                        $lengthlingkungan = 0;
                    }
                    elseif($row['lingkungan2'] == null){
                        $lengthlingkungan = 1;
                    }
                    elseif($row['lingkungan3'] == null){
                        $lengthlingkungan = 2;
                    }
                    else{
                        $lengthlingkungan = 3;
                    }

                    for($i = 1; $i <= $lengthlingkungan; $i++){
                        echo
                        '<select required style="width:100%; padding:12px; margin-top: 10px;" name="lingkungan'.$i.'" id="">'.
                        '<option value="'.$row['lingkungan'.$i].'">'.$row['lingkungan'.$i].'</option>'.
                        '<option value="Sumber Daya Alam">Sumber Daya Alam</option>'.
                                '<option value="Emisi">Emisi</option>'.
                                '<option value="Biodiversitas">Biodiversitas</option>'.
                                '<option value="Energi">Energi</option>'.
                                '<option value="Limbah">Limbah</option>'.
                                '<option value="Lingkungan">Lingkungan</option>'.
                                '<option value="Bahan Ramah Lingkungan">Bahan Ramah Lingkungan</option>'.
                                '<option value="Kesadaran Lingkungan">Kesadaran Lingkungan</option>'.
                        '</select>';
                    }
                ?>
            </div>
        </div>
        <a onclick="tambahLingkungan()" id="tambahLingkunganLink" style="margin-right: 8px; cursor: pointer; background-color: #4b9e55; padding: 4px 8px; color: white;">+ Manfaat</a>
        <a onclick="kurangiLingkungan()" id="kurangiLingkunganLink" style="display: none; cursor: pointer;">- Manfaat</a>
    </div>

    <?php
    echo ''.'';
    ?>
    <script>
        var maxLingkungan = 3; // Batas maksimal jumlah Lingkungan
        var lingkunganCounter = <?php echo $lengthlingkungan; ?>; // Variabel untuk menghitung jumlah Lingkungan

        function tambahLingkungan() {
            if (lingkunganCounter < maxLingkungan) {
                
                var lingkungan = document.getElementById('lingkungan');
                var newLingkungan = document.createElement("div");
                newLingkungan.innerHTML =
                '<select required style="width:100%; padding:12px; margin-top: 10px;" name="lingkungan' + (lingkunganCounter + 1) + '" id="">' +
                '<option value="Sumber Daya Alam">Sumber Daya Alam</option>' +
                '<option value="Emisi">Emisi</option>' +
                '<option value="Biodiversitas">Biodiversitas</option>' +
                '<option value="Energi">Energi</option>' +
                '<option value="Limbah">Limbah</option>' +
                '<option value="Lingkungan">Lingkungan</option>' +
                '<option value="Bahan Ramah Lingkungan">Bahan Ramah Lingkungan</option>' +
                '<option value="Kesadaran Lingkungan">Kesadaran Lingkungan</option>' +
                '</select>';

                lingkungan.appendChild(newLingkungan);
                lingkunganCounter++;

                if (lingkunganCounter === maxLingkungan) {
                    var tambahLingkunganLink = document.getElementById('tambahLingkunganLink');
                    tambahLingkunganLink.style.display = 'none'; // Sembunyikan tautan jika sudah mencapai batas maksimal
                }

                var kurangiLingkunganLink = document.getElementById('kurangiLingkunganLink');
                kurangiLingkunganLink.style.display = 'inline-block'; // Tampilkan tautan "Kurangi Lingkungan"
            }
        }

        function kurangiLingkungan() {
            if (lingkunganCounter > 0) {
                var lingkungan = document.getElementById('lingkungan');
                lingkungan.removeChild(lingkungan.lastElementChild);
                lingkunganCounter--;

                var tambahLingkunganLink = document.getElementById('tambahLingkunganLink');
                tambahLingkunganLink.style.display = 'inline-block'; // Tampilkan kembali tautan "Tambah Lingkungan" setelah mengurangi

                if (lingkunganCounter === 0) {
                    var kurangiLingkunganLink = document.getElementById('kurangiLingkunganLink');
                    kurangiLingkunganLink.style.display = 'none'; // Sembunyikan tautan jika sudah tidak ada Lingkungan yang ditambahkan
                }
            }
        }
    </script>

<div class="four columns">
    <div class="columns-wrap greennature-left" style="padding-right: 0px;">
        <div id="sosial"> <!-- Ganti "lingkungan" menjadi "sosial" -->
            <span class="greennature-head">Sosial (Social)</span> <!-- Ganti "Lingkungan" menjadi "Sosial" -->
            <?php
                if ($row['sosial1'] == null) {
                    $lengthSosial = 0;
                } elseif ($row['sosial2'] == null) {
                    $lengthSosial = 1;
                } elseif ($row['sosial3'] == null) {
                    $lengthSosial = 2;
                } else {
                    $lengthSosial = 3;
                }

                for ($i = 1; $i <= $lengthSosial; $i++) {
                    echo
                    '<select required style="width:100%; padding:12px; margin-top: 10px;" name="sosial' . $i . '" id="">' .
                    '<option value="' . $row['sosial' . $i] . '">' . $row['sosial' . $i] . '</option>' .
                    '<option value="Pendidikan">Pendidikan</option>' .
                    '<option value="Kesehatan">Kesehatan</option>' .
                    '<option value="Pekerjaan">Pekerjaan</option>' .
                    '<option value="Pengembangan Masyarakat">Pengembangan Masyarakat</option>' .
                    '<option value="Kesejahteraan Sosial">Kesejahteraan Sosial</option>' .
                    '<option value="Infrastruktur">Infrastruktur</option>' .
                    '<option value="Pemberdayaan Perempuan">Pemberdayaan Perempuan</option>' .
                    '</select>';
                }
            ?>
        </div>
    </div>
    <a onclick="tambahSosial()" id="tambahSosialLink" style="margin-right: 8px; cursor: pointer; background-color: #4b9e55; padding: 4px 8px; color: white;">+ Manfaat</a> <!-- Ganti "Lingkungan" menjadi "Sosial" -->
    <a onclick="kurangiSosial()" id="kurangiSosialLink" style="display: none; cursor: pointer;">- Manfaat</a> <!-- Ganti "Lingkungan" menjadi "Sosial" -->
</div>

<script>
    var maxSosial = 3; // Batas maksimal jumlah Sosial
    var sosialCounter = <?php echo $lengthSosial; ?>; // Variabel untuk menghitung jumlah Sosial

    function tambahSosial() {
        if (sosialCounter < maxSosial) {

            var sosial = document.getElementById('sosial');
            var newSosial = document.createElement("div");
            newSosial.innerHTML =
                '<select required style="width:100%; padding:12px; margin-top: 10px;" name="sosial' + (sosialCounter + 1) + '" id="">' +
                '<option value="Pendidikan">Pendidikan</option>' +
                '<option value="Kesehatan">Kesehatan</option>' +
                '<option value="Pekerjaan">Pekerjaan</option>' +
                '<option value="Pengembangan Masyarakat">Pengembangan Masyarakat</option>' +
                '<option value="Kesejahteraan Sosial">Kesejahteraan Sosial</option>' +
                '<option value="Infrastruktur">Infrastruktur</option>' +
                '<option value="Pemberdayaan Perempuan">Pemberdayaan Perempuan</option>' +
                '</select>';

            sosial.appendChild(newSosial);
            sosialCounter++;

            if (sosialCounter === maxSosial) {
                var tambahSosialLink = document.getElementById('tambahSosialLink');
                tambahSosialLink.style.display = 'none'; // Sembunyikan tautan jika sudah mencapai batas maksimal
            }

            var kurangiSosialLink = document.getElementById('kurangiSosialLink');
            kurangiSosialLink.style.display = 'inline-block'; // Tampilkan tautan "Kurangi Sosial"
        }
    }

    function kurangiSosial() {
        if (sosialCounter > 0) {
            var sosial = document.getElementById('sosial');
            sosial.removeChild(sosial.lastElementChild);
            sosialCounter--;

            var tambahSosialLink = document.getElementById('tambahSosialLink');
            tambahSosialLink.style.display = 'inline-block'; // Tampilkan kembali tautan "Tambah Sosial" setelah mengurangi

            if (sosialCounter === 0) {
                var kurangiSosialLink = document.getElementById('kurangiSosialLink');
                kurangiSosialLink.style.display = 'none'; // Sembunyikan tautan jika sudah tidak ada Sosial yang ditambahkan
            }
        }
    }
</script>

<div class="four columns">
    <div class="columns-wrap greennature-left" style="padding-right: 0px;">
        <div id="tata_kelola">
            <span class="greennature-head">Tata Kelola (Governance)</span>
            <?php
                if ($row['tata_kelola1'] == null) {
                    $lengthTataKelola = 0;
                } elseif ($row['tata_kelola2'] == null) {
                    $lengthTataKelola = 1;
                } elseif ($row['tata_kelola3'] == null) {
                    $lengthTataKelola = 2;
                } else {
                    $lengthTataKelola = 3;
                }

                for ($i = 1; $i <= $lengthTataKelola; $i++) {
                    echo
                    '<select required style="width:100%; padding:12px; margin-top: 10px;" name="tata_kelola' . $i . '" id="">' .
                    '<option value="' . $row['tata_kelola' . $i] . '">' . $row['tata_kelola' . $i] . '</option>' .
                    '<option value="Manajemen Risiko">Manajemen Risiko</option>' .
                    '<option value="Kepemimpinan">Kepemimpinan</option>' .
                    '<option value="Integritas">Integritas</option>' .
                    '<option value="Kebijakan">Kebijakan</option>' .
                    '<option value="Kepatuhan">Kepatuhan</option>' .
                    '<option value="Akuntabilitas">Akuntabilitas</option>' .
                    '<option value="Transparansi">Transparansi</option>' .
                    '</select>';
                }
            ?>
        </div>
    </div>
    <a onclick="tambahTataKelola()" id="tambahTataKelolaLink" style="margin-right: 8px; cursor: pointer; background-color: #4b9e55; padding: 4px 8px; color: white;">+ Manfaat</a>
    <a onclick="kurangiTataKelola()" id="kurangiTataKelolaLink" style="display: none; cursor: pointer;">- Manfaat</a>
</div>

<script>
    var maxTataKelola = 3; // Batas maksimal jumlah Tata Kelola
    var tataKelolaCounter = <?php echo $lengthTataKelola; ?>; // Variabel untuk menghitung jumlah Tata Kelola

    function tambahTataKelola() {
        if (tataKelolaCounter < maxTataKelola) {

            var tataKelola = document.getElementById('tata_kelola');
            var newTataKelola = document.createElement("div");
            newTataKelola.innerHTML =
                '<select required style="width:100%; padding:12px; margin-top: 10px;" name="tata_kelola' + (tataKelolaCounter + 1) + '" id="">' +
                '<option value="Manajemen Risiko">Manajemen Risiko</option>' +
                '<option value="Kepemimpinan">Kepemimpinan</option>' +
                '<option value="Integritas">Integritas</option>' +
                '<option value="Kebijakan">Kebijakan</option>' +
                '<option value="Kepatuhan">Kepatuhan</option>' +
                '<option value="Akuntabilitas">Akuntabilitas</option>' +
                '<option value="Transparansi">Transparansi</option>' +
                '</select>';

            tataKelola.appendChild(newTataKelola);
            tataKelolaCounter++;

            if (tataKelolaCounter === maxTataKelola) {
                var tambahTataKelolaLink = document.getElementById('tambahTataKelolaLink');
                tambahTataKelolaLink.style.display = 'none'; // Sembunyikan tautan jika sudah mencapai batas maksimal
            }

            var kurangiTataKelolaLink = document.getElementById('kurangiTataKelolaLink');
            kurangiTataKelolaLink.style.display = 'inline-block'; // Tampilkan tautan "Kurangi Tata Kelola"
        }
    }

    function kurangiTataKelola() {
        if (tataKelolaCounter > 0) {
            var tataKelola = document.getElementById('tata_kelola');
            tataKelola.removeChild(tataKelola.lastElementChild);
            tataKelolaCounter--;

            var tambahTataKelolaLink = document.getElementById('tambahTataKelolaLink');
            tambahTataKelolaLink.style.display = 'inline-block'; // Tampilkan kembali tautan "Tambah Tata Kelola" setelah mengurangi

            if (tataKelolaCounter === 0) {
                var kurangiTataKelolaLink = document.getElementById('kurangiTataKelolaLink');
                kurangiTataKelolaLink.style.display = 'none'; // Sembunyikan tautan jika sudah tidak ada Tata Kelola yang ditambahkan
            }
        }
    }
</script>

    
    <div class="clear"></div>
    <h4 class="greennature-heading-shortcode " style="font-weight: bold;margin-top: 40px;">Lokasi Proyek</h4>
    <div class="three columns">
        <div class="columns-wrap greennature-left" style="padding-right: 0px;">
            <span class="greennature-head">Provinsi</span>
            <select required style="width:100%; padding:12px 20px;" name="provinsi" id="">
                <option value="<?php echo $row['provinsi'] ?>"><?php echo $row['provinsi'] ?></option>
            </select>
        </div>
    </div>

    <div class="three columns">
        <div class="columns-wrap greennature-left" style="padding-right: 0px;">
            <span class="greennature-head">Kab/Kota</span>
            <select required style="width:100%; padding:12px 20px;" name="kabupaten_kota" id="">
                <option value="<?php echo $row['kabupaten_kota'] ?>"><?php echo $row['kabupaten_kota'] ?></option>
            </select>
        </div>
    </div>

    <div class="three columns">
        <div class="columns-wrap greennature-left" style="padding-right: 0px;">
            <span class="greennature-head">Kecamatan</span>
            <select required style="width:100%; padding:12px 20px;" name="kecamatan" id="">
                <option value="<?php echo $row['kecamatan'] ?>"><?php echo $row['kecamatan'] ?></option>
            </select>
        </div>
    </div>

    <div class="three columns">
        <div class="columns-wrap greennature-left" style="padding-right: 0px;">
            <span class="greennature-head">Kelurahan</span>
            <select required style="width:100%; padding:12px;" name="kelurahan" id="">
                <option value="<?php echo $row['kelurahan'] ?>"><?php echo $row['kelurahan'] ?></option>
            </select>
        </div>
    </div>

    <div class="clear"></div>

    <div class="twelve columns">
        <div class="columns-wrap greennature-left">
            <span class="greennature-head">Alamat Lengkap</span>
            <input value="<?php echo $row['alamat_lengkap'] ?>" required name="alamat_lengkap" style="padding: 12px 20px; width: 100%;" type="text" placeholder="jl contoh">
        </div>
    </div>
        <div class="clear"></div>
    <h4 class="greennature-heading-shortcode " style="font-weight: bold;margin-top: 40px;">Kontak Yang Dapat Dihubungi</h4>
    <div class="four columns">
        <div class="columns-wrap greennature-left">
            <span class="greennature-head">Nama</span>
            <input value="<?php echo $row['nama_pengurus'] ?>" required type="text" class="greennature-require"  name="nama_pengurus">
        </div>
    </div>

    <div class="four columns">
        <div class="columns-wrap greennature-left">
            <span class="greennature-head">No. Telp</span>
            <input value="<?php echo $row['no_telepon_pengurus'] ?>" required style="border: none; background: #f5f5f5; padding: 12px 20px; width: 100%" type="number" class="greennature-require"  name="no_telepon_pengurus">
        </div>
    </div>

    <div class="four columns">
        <div class="columns-wrap greennature-left">
        <span class="greennature-head">KTP</span>
        <input type="file" class="form-control"  name="ktp_pengurus" style="background: #f5f5f5; padding: 10px 20px; width: 100%;">
        <a target="_blank" href="../../assets/proyek/ktp/<?php echo $row['ktp_pengurus'] ?>"><u>Cek Foto KTP</u></a>    
    </div>
    </div>

    <div class="clear"></div>
    <h4 class="greennature-heading-shortcode " style="font-weight: bold;margin-top: 40px;">Anggaran Proyek</h4>
    <div class="four columns">
        <div class="columns-wrap greennature-left">
        <span class="greennature-head ">Target Donasi</span>
        <input value="<?php echo $row['target_donasi'] ?>" required type="number" class="greennature-require" style="border: none; background: #f5f5f5; padding: 12px 20px; width: 100%" name="target_donasi">
        </div>
    </div>

    <div class="four columns">
        <div class="columns-wrap greennature-left">
        <span class="greennature-head ">Rupiah / 1 ton Emisi</span>
        <input value="<?php echo $row['target_donasi'] ?>" required type="number" class="greennature-require" style="border: none; background: #f5f5f5; padding: 12px 20px; width: 100%"  name="rupiah_emisi">
        </div>
    </div>

    <div class="four columns">
        <div class="columns-wrap greennature-left">
        <span class="greennature-head">Bukti Perhitungan Rupiah Emisi</span>
        
        <input style="border: none; background: #f5f5f5; padding: 10px 20px; width: 100%" type="text" class="greennature-require"  name="bukti_perhitungan">
        <a target="_blank" href="<?php echo $row['bukti_perhitungan']; ?>"><u>Cek Link Perhitungan</u></a>
        <p style="color: #9CC498;">Bukti perhitungan berupa cara mendapatkan hasil x rupiah = x emisi (Link Drive)</p>    
    </div>
        
    </div>
                   
</div>
<div class="clear"></div>