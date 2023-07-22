<div class="greennature-form-fields">
    <?php
    if(isset($_GET['daftar_data_perusahaan'])){
    ?>
    <form  class="quform" action="simpan.php" method="POST" enctype="multipart/form-data" onclick="">
    <h5>1. Informasi Perusahaan</h5>
    <div class="twelve columns">
        <div class="columns-wrap">
            <span class="greennature-head">Nama Perusahaan</span>
            <input required placeholder="PT. Contoh" type="text" class="greennature-require" name="nama_perusahaan">
        </div>
    </div>

    
    <div class="twelve columns">
        <div class="columns-wrap ">
            <span class="greennature-head">Email Perusahaan</span>
            <input required placeholder="contoh@domain.com" type="text" class="greennature-require" name="email_perusahaan">
        </div>
        <?php require '../../layout/email-sudah-terdaftar.php' ?>
        <?php require '../../layout/email-salah.php' ?>
    </div>
    <!-- Begin Submit button -->
    <div class="quform-submit">
        <div class="quform-submit-inner">
            <button type="submit" name="selanjutnya" class="submit-button" style="width: 200px;"><span>Selanjutnya</span></button>
        </div>
    </div>
    </form>


    <?php } else if(isset($_GET['daftar_data_pribadi'])) {?>
        <form class="quform" action="simpan.php" method="POST" enctype="multipart/form-data" onclick="">
            <h5 style="color: rgb(225, 225, 225);">1. Informasi Perusahaan</h5>
            <h5>2. Informasi Pribadi</h5>
            
            <div class="twelve columns">
                <div class="columns-wrap">
                    <span class="greennature-head">Nama Depan</span>
                    <input required placeholder="nama depan" type="text" class="greennature-require" name="nama_depan">
                </div>
            </div>

            <div class="twelve columns">
                <div class="columns-wrap">
                    <span class="greennature-head">Nama Belakang</span>
                    <input required placeholder="nama belakang" type="text" class="greennature-require" name="nama_belakang">
                </div>
            </div>
            
            <div class="twelve columns">
                <div class="columns-wrap">
                    <span class="greennature-head">Nama Tengah (opsional)</span>
                    <input placeholder="nama tengah" type="text" class="greennature-require" name="nama_tengah">
                </div>
            </div>

            
            <div class="twelve columns">
                <div class="columns-wrap ">
                    <span class="greennature-head">Email Pribadi (opsional)</span>
                    <input placeholder="contoh@domain.com" type="text" class="greennature-require" name="email">
                </div>
                <?php require '../../layout/email-sudah-terdaftar.php' ?>
                <?php require '../../layout/email-salah.php' ?>
                <?php require '../../layout/email-sama.php' ?>
            </div>
            
            <!-- Begin Submit button -->
            <div class="quform-submit">
                <div class="quform-submit-inner">
                    <button type="submit" name="selanjutnya_aa" class="submit-button" style="width: 200px;"><span>Selanjutnya</span></button>
                </div>
            </div>
        </form>
    <?php } else if(isset($_GET['daftar_password'])){?>
        <form class="quform" action="simpan.php" method="POST" enctype="multipart/form-data" onclick="">
            <h5 style="color: rgb(225, 225, 225);">1. Informasi Perusahaan</h5>
            <h5 style="color: rgb(225, 225, 225);">2. Informasi Pribadi</h5>
            <h5>3. Masukan Kata Sani anda</h5>
            
            <div class="twelve columns">
                <div class="columns-wrap">
                    <span class="greennature-head">Kata Sandi</span>
                    <input required placeholder="kata sandi" type="password" class="greennature-require" name="password">
                </div>
            </div>

            <div class="twelve columns">
                <div class="columns-wrap">
                    <span class="greennature-head">Konfirmasi Kata Sandi</span>
                    <input required placeholder="konfirmasi kata sandi" type="password" class="greennature-require" name="confirm_password">
                </div>
            </div>
                <?php require '../../layout/password-berbeda.php' ?>
                <?php require '../../layout/password-kurang.php' ?>
            <!-- Begin Submit button -->
            <div class="quform-submit">
                <div class="quform-submit-inner">
                    <button type="submit" name="register" class="submit-button" style="width: 200px;"><span>Daftar</span></button>
                </div>
            </div>
        </form>
        <?php } else if(isset($_GET['verifikasi_dikirim'])){?>

            <div>
                <p>Verifikasi telah dikirim</p>
            </div>
        <?php } ?>
<div class="clear"></div>
   