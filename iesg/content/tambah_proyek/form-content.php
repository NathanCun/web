<div class="greennature-form-fields">

    <h4 class="greennature-heading-shortcode " style="font-weight: bold;margin-top: 40px;">Detail Proyek</h4>
    <div class="eight columns">
        <div class="columns-wrap  greennature-left">
            <span class="greennature-head">Nama Proyek</span>
            <input required style="width: 100%;" placeholder="Nama Proyek" type="text" class="greennature-require" name="nama_proyek">
        </div>
    </div>
    <div class="four columns">
        <div class="columns-wrap greennature-left" style="padding-right: 0px;">
            <span class="greennature-head">Bidang Industri</span>
            <select required style="width:100%; padding:12px 20px;" name="bidang_industri" id="industri" onchange="showIndustri()">
                <option value="">Jenis Industri Proyek</option>
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
            <textarea style="padding: 12px; " name="deskripsi_proyek" placeholder="Deskripsi Proyek (minimal 400 huruf)"></textarea>
       </div>
    </div>
    <div class="clear"></div>
    <h4 class="greennature-heading-shortcode " style="font-weight: bold;margin-top: 40px;">Legalitas Proyek</h4>

    <div class="four columns">
        <div class="columns-wrap greennature-left">
        <span class="greennature-head">Rencana Proyek</span>
        <input required type="text" class="form-control"  name="rencana_proyek" style="width: 100%;">
        <p style="color: #9CC498">Rencana yang terperinci dan juga rencana darurat untuk menghadapi situasi darurat atau kejadian tak terduga yang dapat mengancam kelangsungan proyek. (link drive)</p>
        </div>
    </div>

    <div class="four columns">
        <div class="columns-wrap greennature-left">
        <span class="greennature-head">Perizinan Proyek</span>
        <input required type="text" class="form-control"  name="perizinan_proyek" style="width: 100%;">
        <p style="color: #9CC498;">Perizinan Proyek berupa izin yang diperlukan, catatan hukum, standar proyek, sertifikasi berkelanjutan, dll. (link drive)</p>
        </div>
    </div>
    
    <div class="four columns">
        <div class="columns-wrap greennature-left">
        <span class="greennature-head">Foto Utama Proyek</span>
        <div></div>
        <input required type="file" max="3145728" class="form-control"  name="foto_utama_proyek" style="background: #f5f5f5; padding: 12px 20px; width: 100%">
        <p style="color: #9CC498;">Foto akan ditampilkan di halaman depan proyek. (.jpg, .png)</p>
        </div>
    </div>
    <div class="clear"></div>

    <h4 class="greennature-heading-shortcode" style="font-weight: bold;margin-top: 40px;">Manfaat Proyek</h4>
    <div class="four columns">
        <div class="columns-wrap greennature-left" style="padding-right: 0px;">
            <div id="lingkungan">
                <span class="greennature-head">Lingkungan (Environmental)</span>
            </div>
        </div>
        <a onclick="tambahLingkungan()" id="tambahLingkunganLink" style="margin-right: 8px; cursor: pointer; background-color: #4b9e55; padding: 4px 8px; color: white;">+ Manfaat</a>
        <a onclick="kurangiLingkungan()" id="kurangiLingkunganLink" style="display: none; cursor: pointer;">- Manfaat</a>
    </div>

    <script>
        var maxLingkungan = 3; // Batas maksimal jumlah Lingkungan
        var lingkunganCounter = 0; // Variabel untuk menghitung jumlah Lingkungan

        function tambahLingkungan() {
            if (lingkunganCounter < maxLingkungan) {
                console.log("abc");
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
            <div id="sosial">
                <span class="greennature-head">Sosial (Social)</span>
            </div>
        </div>
        <a onclick="tambahSosial()" id="tambahSosialLink" style="margin-right: 8px; cursor: pointer; background-color: #4b9e55; padding: 4px 8px; color: white;">+ Manfaat</a>
        <a onclick="kurangiSosial()" id="kurangiSosialLink" style="display: none; cursor: pointer;">- Manfaat</a>
    </div>

    <script>
        var maxSosial = 3; // Batas maksimal jumlah Manfaat Sosial
        var sosialCounter = 0; // Variabel untuk menghitung jumlah Manfaat Sosial

        function tambahSosial() {
            if (sosialCounter < maxSosial) {
                var sosial = document.getElementById('sosial');
                var newSosial = document.createElement("div");
                newSosial.innerHTML =
                '<select required style="width:100%; padding:12px; margin-top: 10px;" name="sosial' + (sosialCounter + 1) + '" id="">' +
                '<option value="Pendidikan">Pendidikan</option>' +
                '<option value="Kesehatan">Kesehatan</option>' +
                '<option value="Keadilan Sosial">Keadilan Sosial</option>' +
                '<option value="Pemberdayaan Masyarakat">Pemberdayaan Masyarakat</option>' +
                '</select>';

                sosial.appendChild(newSosial);
                sosialCounter++;

                if (sosialCounter === maxSosial) {
                    var tambahSosialLink = document.getElementById('tambahSosialLink');
                    tambahSosialLink.style.display = 'none'; // Sembunyikan tautan jika sudah mencapai batas maksimal
                }

                var kurangiSosialLink = document.getElementById('kurangiSosialLink');
                kurangiSosialLink.style.display = 'inline-block'; // Tampilkan tautan "Kurangi Manfaat" Sosial"
            }
        }

        function kurangiSosial() {
            if (sosialCounter > 0) {
                var sosial = document.getElementById('sosial');
                sosial.removeChild(sosial.lastElementChild);
                sosialCounter--;

                var tambahSosialLink = document.getElementById('tambahSosialLink');
                tambahSosialLink.style.display = 'inline-block'; // Tampilkan kembali tautan "Tambah Manfaat Sosial" setelah mengurangi

                if (sosialCounter === 0) {
                    var kurangiSosialLink = document.getElementById('kurangiSosialLink');
                    kurangiSosialLink.style.display = 'none'; // Sembunyikan tautan jika sudah tidak ada Manfaat Sosial yang ditambahkan
                }
            }
        }
    </script>
    <div class="four columns">
        <div class="columns-wrap greennature-left" style="padding-right: 0px;">
            <div id="tataKelola">
                <span class="greennature-head">Tata Kelola (Governance)</span>
            </div>
        </div>
        <a onclick="tambahTataKelola()" id="tambahTataKelolaLink" style="margin-right: 8px; cursor: pointer; background-color: #4b9e55; padding: 4px 8px; color: white;">+ Manfaat</a>
        <a onclick="kurangiTataKelola()" id="kurangiTataKelolaLink" style="display: none; cursor: pointer;">- Manfaat</a>
    </div>

    <script>
        var maxTataKelola = 3; // Batas maksimal jumlah Manfaat Tata Kelola
        var tataKelolaCounter = 0; // Variabel untuk menghitung jumlah Manfaat Tata Kelola

        function tambahTataKelola() {
            if (tataKelolaCounter < maxTataKelola) {
                var tataKelola = document.getElementById('tataKelola');
                var newTataKelola = document.createElement("div");
                newTataKelola.innerHTML =
                '<select required style="width:100%; padding:12px; margin-top: 10px;" name="tata_kelola' + (tataKelolaCounter + 1) + '" id="">' +
                '<option value="Transparansi">Transparansi</option>' +
                '<option value="Akuntabilitas">Akuntabilitas</option>' +
                '<option value="Partisipasi Publik">Partisipasi Publik</option>' +
                '<option value="Anti Korupsi">Anti Korupsi</option>' +
                '</select>';

                tataKelola.appendChild(newTataKelola);
                tataKelolaCounter++;

                if (tataKelolaCounter === maxTataKelola) {
                    var tambahTataKelolaLink = document.getElementById('tambahTataKelolaLink');
                    tambahTataKelolaLink.style.display = 'none'; // Sembunyikan tautan jika sudah mencapai batas maksimal
                }

                var kurangiTataKelolaLink = document.getElementById('kurangiTataKelolaLink');
                kurangiTataKelolaLink.style.display = 'inline-block'; // Tampilkan tautan "Kurangi Manfaat" Tata Kelola"
            }
        }

        function kurangiTataKelola() {
            if (tataKelolaCounter > 0) {
                var tataKelola = document.getElementById('tataKelola');
                tataKelola.removeChild(tataKelola.lastElementChild);
                tataKelolaCounter--;

                var tambahTataKelolaLink = document.getElementById('tambahTataKelolaLink');
                tambahTataKelolaLink.style.display = 'inline-block'; // Tampilkan kembali tautan "Tambah Manfaat Tata Kelola" setelah mengurangi

                if (tataKelolaCounter === 0) {
                    var kurangiTataKelolaLink = document.getElementById('kurangiTataKelolaLink');
                    kurangiTataKelolaLink.style.display = 'none'; // Sembunyikan tautan jika sudah tidak ada Manfaat Tata Kelola yang ditambahkan
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
                <option value="Sumatera utara">Sumatera Utara</option>
            </select>
        </div>
    </div>

    <div class="three columns">
        <div class="columns-wrap greennature-left" style="padding-right: 0px;">
            <span class="greennature-head">Kab/Kota</span>
            <select required style="width:100%; padding:12px 20px;" name="kabupaten_kota" id="">
                <option value="Sumatera utara">Sumatera Utara</option>
            </select>
        </div>
    </div>

    <div class="three columns">
        <div class="columns-wrap greennature-left" style="padding-right: 0px;">
            <span class="greennature-head">Kecamatan</span>
            <select required style="width:100%; padding:12px 20px;" name="kecamatan" id="">
                <option value="Sumatera utara">Sumatera Utara</option>
            </select>
        </div>
    </div>

    <div class="three columns">
        <div class="columns-wrap greennature-left" style="padding-right: 0px;">
            <span class="greennature-head">Kelurahan</span>
            <select required style="width:100%; padding:12px;" name="kelurahan" id="">
                <option value="Sumatera utara">Sumatera Utara</option>
            </select>
        </div>
    </div>

    <div class="clear"></div>

    <div class="twelve columns">
        <div class="columns-wrap greennature-left">
            <span class="greennature-head">Alamat Lengkap</span>
            <input required name="alamat_lengkap" style="padding: 12px 20px; width: 100%;" type="text" placeholder="jl contoh">
        </div>
    </div>
        <div class="clear"></div>
    <h4 class="greennature-heading-shortcode " style="font-weight: bold;margin-top: 40px;">Kontak Yang Dapat Dihubungi</h4>
    <div class="four columns">
        <div class="columns-wrap greennature-left">
            <span class="greennature-head">Nama</span>
            <input required required type="text" class="greennature-require"  name="nama_pengurus">
        </div>
    </div>

    <div class="four columns">
        <div class="columns-wrap greennature-left">
            <span class="greennature-head">No. Telp</span>
            <input required type="number" class="greennature-require"  name="no_telepon_pengurus">
        </div>
    </div>

    <div class="four columns">
        <div class="columns-wrap greennature-left">
        <span class="greennature-head">KTP</span>
        <input required type="file" class="form-control"  name="ktp_pengurus" style="background: #f5f5f5; padding: 10px 20px; width: 100%;">
        </div>
    </div>

    <div class="clear"></div>
    <h4 class="greennature-heading-shortcode " style="font-weight: bold;margin-top: 40px;">Anggaran Proyek</h4>
    <div class="four columns">
        <div class="columns-wrap greennature-left">
        <span class="greennature-head ">Target Donasi</span>
        <input required type="number" class="greennature-require"  name="target_donasi">
        </div>
    </div>

    <div class="four columns">
        <div class="columns-wrap greennature-left">
        <span class="greennature-head ">Rupiah / 1 ton Emisi</span>
        <input required type="number" class="greennature-require"  name="rupiah_emisi">
        </div>
    </div>

    <div class="four columns">
        <div class="columns-wrap greennature-left">
        <span class="greennature-head">Bukti Perhitungan Rupiah Emisi</span>
        <input required type="text" class="greennature-require"  name="bukti_perhitungan">
        </div>
    </div>
                   
</div>
<div class="clear"></div>