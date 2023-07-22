<div class="greennature-form-fields">
<div style="height: 40px;"></div>
<h5><img src="../../assets/images/svg/home.png" alt="" style="width: 30px; height: 30px; margin-right:10px;">Rumah Tangga</h5>
<hr>
    
    <div class="twelve columns">
        <div class="columns-wrap  greennature-left kalkulator-input">
            <span class="greennature-head">Jumlah orang yang tinggal dalam 1 rumah</span>
            <div class="flex">
                <input type="text" class="greennature-require" value="1" name="jumlahAnggota">
            </div>
        </div>
    </div>

    <div class="clear"></div>
     <div class="twelve columns">
        <div class="columns-wrap  greennature-left kalkulator-input">
            <span class="greennature-head">Konsumsi Energi</span>
            <div class="flex">
                <input type="text" class="greennature-require" value="0" name="listrikRumah">
                <input type="text" value="KWh/Bulan" disabled style="width: 70px;">
                </div>
            
        </div>
    </div>
                     
    <div class="clear"></div>
    <div class="twelve columns">
        <div class="columns-wrap  greennature-left kalkulator-input">
            <span class="greennature-head">Sumber energi yang bersih:</span>
            <div class="flex" style="">
                <input type="text" class="greennature-require" value="0" name="sumberEnergiBersih">
                <input type="text" value="%" disabled style="width: 10px!important;">
            </div>
        </div>
    </div>

    <div class="clear"></div>
    <div style="height: 40px;"></div>
    <h5><img src="../../assets/images/svg/fire.png" alt="" style="width: 30px; height: 30px; margin-right:10px;">Sumber Panas</h5>
    <hr>
    <div class="twelve columns">
        <div class="columns-wrap  greennature-left kalkulator-input">
            <span class="greennature-head">Sumber api utama di rumah :</span>
            <div class="flex">
                <select name="sumberApi" id="" class="greennature-require">
                    <option value="">--Select--</option>
                    <option value="gas-lpg">Gas LPG</option>
                    <option value="pemanas-elektrik">Pemanas Elektrik</option>
                    <option value="kayu">Kayu</option>
                    <option value="arang">Arang</option>
                    <option value="tidak-ada">Tidak Menggunakan Api</option>
                </select>
            </div>
        </div>
    </div>
                    
    <div class="clear"></div>
    <div class="twelve columns">
        <div class="columns-wrap  greennature-left kalkulator-input">
            
            <span class="greennature-head">Total sumber api yang digunakan dalam sebulan :</span>
            <div class="flex">
                <input type="text" class="greennature-require"  name="banyakApi" value="0">
            </div>
        </div>
    </div>
    
    <div class="clear"></div>
    <div class="twelve columns">
        <div style="height: 20px;"></div>
        <h5><img src="../../assets/images/svg/car.png" alt="" style="width: 30px; height: 30px; margin-right:10px;">Kendaraan-mu</h5>
        <hr>
        <div class="columns-wrap  greennature-left kalkulator-input">
            <span class="greennature-head">Jumlah Kendaraan :</span>
            <div class="flex">
            <input type="text" class="greennature-require"  name="jlhKendaraan" value="0" readonly>
            </div>
        </div>
    </div>

    <div class="clear"></div>
     <div class="kendaraan_container"></div>
     <div style="height: 20px;"></div>
    <a class="greennature-button-kendaraan-text" onclick="tambahKendaraan()" style="cursor: pointer;"><b>Tambah Kendaraan</b></a>
    <div style="height:40px;"></div>
    <div class="clear"></div>
    <h5><img src="../../assets/images/svg/airplane.png" alt="" style="width: 30px; height: 30px; margin-right:10px;">Total Penerbangan Anggota Keluarga</h5>
    <hr>
    <div class="twelve columns">
        <div class="columns-wrap  greennature-left kalkulator-input">
            <span class="greennature-head">Penerbangan Jarang Sangat Jauh (>12000 km atau > 14 jam satu arah)</span>
            <div class="flex">
            <input type="text" class="greennature-require" value="0" name="jarakSangatJauh">
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="twelve columns">
        <div class="columns-wrap  greennature-left kalkulator-input">
            <span class="greennature-head">Penerbangan Jarang Jauh (>12000 km atau > 14 jam satu arah)</span>
            <div class="flex">
            <input type="text" class="greennature-require" value="0" name="jarakJauh">
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="twelve columns">
        <div class="columns-wrap  greennature-left kalkulator-input">
            <span class="greennature-head">Penerbangan Jarang Menengah (>12000 km atau > 14 jam satu arah)</span>
            <div class="flex">
            <input type="text" class="greennature-require" value="0" name="jarakMenengah">
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="twelve columns">
        <div class="columns-wrap  greennature-left kalkulator-input">
            <span class="greennature-head">Penerbangan Jarang Pendek (>12000 km atau > 14 jam satu arah)</span>
            <div class="flex">
            <input type="text" class="greennature-require" value="0" name="jarakPendek">
            </div>
        </div>
    </div>

    <div class="clear"></div>
    <div class="twelve columns">
        <div class="columns-wrap  greennature-left kalkulator-input">
            <span class="greennature-head">Makanan yang sering dimakan</span>
            <div class="flex">
            <select name="makananFavorit" id="">
                <option value="daging">Banyak Daging</option>
                <option value="ikan">Banyak Ikan</option>
                <option value="sayur">Banyak Sayur</option>
                <option value="vegetarian">Vegetarian</option>
                <option value="vegan">Vegan</option>
            </select>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="twelve columns">
        <div class="columns-wrap  greennature-left kalkulator-input">
            <span class="greennature-head">Barang yang kamu daur ulang :</span>
            <div class="flex last" style="justify-content: space-between;">
                <div><input type="checkbox" name="daurUlang1" value="kaleng-minuman"> <span>Kaleng Minuman</span></div>
                <div><input type="checkbox" name="daurUlang2" value="plastik"> <span>Plastik</span></div>
                <div><input type="checkbox" name="daurUlang3" value="kaca"> <span>Kaca</span></div>
                <div><input type="checkbox" name="daurUlang4" value="koran"> <span>Koran</span></div>
                <div><input type="checkbox" name="daurUlang5" value="majalah"> <span>Majalah</span></div>
            </div>
        </div>
    </div>
</div>


   


<script>
     var jlhKendaraan = [];
    var kendaraan_container = document.querySelector('.kendaraan_container');
    let i = 0;
    function tambahKendaraan() {
    jlhKendaraan.push(i);
    let noKendaraan = i+1;

    var jlhKendaraanInput = document.querySelector('input[name="jlhKendaraan"]');
    if (jlhKendaraanInput) {
        jlhKendaraanInput.value = parseInt(jlhKendaraanInput.value) + 1;
    }
    //  Form Kendaraan i
        kendaraan_container.innerHTML +=
        '<div class="twelve columns">'+
        '<h3>Kendaraan ' + noKendaraan + '</h3>' + 
        '<div class="columns-wrap greennature-left">'+
        '<span class="greennature-head">Jarak yang ditempuh dalam 1 Minggu</span><br>' +
        '<input type="text" name="jarakTempuhKendaraan[]" class="greennature-require">KM<br>' +
        '</div>'+
        '<div>'+
        '<div class="clear"></div>' +
        '<div class="twelve columns">'+
        '<div class="columns-wrap greennature-left">'+
        '<span class="greennature-head">Bahan bakar yang digunakan</span><br>' +
        '<select name="bahanBakarKendaraan[]">' +
            '<option value="bensin">Bensin</option>' +
            '<option value="solar">Solar</option>' +
            '<option value="listrik">Listrik</option>' +
            '<option value="hybrid-bensin">Hybrid Bensin</option>' +
            '<option value="hybrid-solar">Hybrid Diesel</option>' +
            '<option value="hybrid-listrik">Hybrid Listrik</option>' +
        '</select>'+
        '</div>'+
        '<div>'+
        '<div class="clear"></div>' +
        '<div class="twelve columns">'+
        '<div class="columns-wrap greennature-left">'+
        '<span class="greennature-head">Rata-rata konsumsi</span> <br>' +
        '<input type="text" name="konsumsiKendaraan[]"  class="greennature-require">KM/Liter <br>';
        '</div>'+
        '<div>'+
        '<div class="clear"></div>';
        
    //  END OF Form Kendaraan i
    i++;
    }


</script>
