<?php
// Hitungan emisi
$emisi = array(
    // Listrik Rumah
    "listrik-kotor" => 0.934, //KWh
    "listrik-bersih" => 0.70005, //KWh
    // Sumber Api Rumah
    "gas-lpg" => 0.0000172, //kg
    "pemanas-elektrik" => 0,
    "kayu" => 1.9, //kg
    "arang" => 0, //kg
    "tidak-ada" => 0,
    // Kendaraan
    "bensin" => 2.45, //liter
    "solar" => 2.65, //liter
    "listrik" => 0.85, //KWh
    "hybrid-bensin" => 2.45, //liter
    "hybrid-solar" => 2.65, //liter
    "hybrid-listrik" => 0.85, //KWh
    // Penerbangan
    "jarak-sangat-jauh" => 4,
    "jarak-jauh" => 3,
    "jarak-menengah" => 2,
    "jarak-pendek" => 1,
    // Daur Ulang
    "kaleng-minuman" => 39,
    "plastik" => 16.1,
    "kaca" => 11.5,
    "koran" => 51.3,
    "majalah" => 12.4,
);

// Estimasi Makanan
$dagingAyam = array(
    "emisi" => 6.9, //kg/kg
    "porsi" => 0.040, //kg
);

$dagingSapi = array(
    "emisi" => 26.61, //kg/kg
    "porsi" => 0.010, //kg
);

$dagingIkan = array(
    "emisi" => 3.3, //kg/kg (asal)
    "porsi" => 0.04, //kg
);

$sayuran = array(
    "emisi" => 2.5, //kg/kg (asal)
    "porsi" => 0.1, //kg
);

$daging = array(
    "daging" => 10, //porsi/minggu
    "ikan" => 1, //porsi/minggu
    "sayur" => 7, //porsi/minggu
);

$sayur = array(
    "daging" => 1, //porsi/minggu
    "ikan" => 1, //porsi/minggu
    "sayur" => 16, //porsi/minggu
);

$ikan = array(
    "daging" => 1, //porsi/minggu
    "ikan" => 10, //porsi/minggu
    "sayur" => 7, //porsi/minggu
);

$vegetarian = array(
    "daging" => 0.5, //porsi/minggu
    "ikan" => 0.5, //porsi/minggu
    "sayur" => 17, //porsi/minggu
);

$vegan = array(
    "daging" => 0, //porsi/minggu
    "ikan" => 0, //porsi/minggu
    "sayur" => 18, //porsi/minggu
);

// Rumus Perhitungan Emisi Karbon
    // Rumus Perhitungan Emisi Listrik Rumah
    $listrikRumah = $_POST['listrikRumah'];
    $sumberEnergiBersih = $_POST['sumberEnergiBersih'];
    $emisiListrikKotor = $emisi['listrik-kotor'];
    $emisiListrikBersih = $emisi['listrik-bersih'];

    $rumusEmisiListrikRumah = ($listrikRumah * 12 * $sumberEnergiBersih / 100 * $emisiListrikBersih)
        + ($listrikRumah * 12 * (100 - $sumberEnergiBersih) / 100 * $emisiListrikKotor);

    echo "Total Emisi Listrik Rumah: " . $rumusEmisiListrikRumah . "<br>";

    // Rumus Perhitungan Emisi Sumber Api Rumah
    $sumberApi = $emisi[$_POST['sumberApi']];
    $banyakApi = $_POST['banyakApi'];
    $rumusEmisiApiRumah = $sumberApi * 12 * $banyakApi;

    echo "Total Emisi Api Rumah: " . $rumusEmisiApiRumah . "<br>";

    // Rumus Perhitungan Kendaraan
    $totalEmisiKendaraan = 0;
    foreach ($_POST['jarakTempuhKendaraan'] as $key => $value) {
        $jarakTempuhKendaraan = $_POST['jarakTempuhKendaraan'][$key];
        $bahanBakarKendaraan = $emisi[$_POST['bahanBakarKendaraan'][$key]];
        $konsumsiKendaraan = $_POST['konsumsiKendaraan'][$key];
        $rumusEmisiKendaraan = floatval($jarakTempuhKendaraan) / floatval($konsumsiKendaraan) * floatval($bahanBakarKendaraan) * 52;

        $totalEmisiKendaraan += $rumusEmisiKendaraan;
    }
    echo "Total Emisi Kendaraan: " . $totalEmisiKendaraan . "<br>";

    // Rumus Perhitungan Penerbangan
    $pjarakSangatJauh = $_POST['jarakSangatJauh'];

    $jarakSangatJauh = $emisi['jarak-sangat-jauh'];
    $pjarakJauh = $_POST['jarakJauh'];
    $jarakJauh = $emisi['jarak-jauh'];
    $pjarakMenengah = $_POST['jarakMenengah'];
    $jarakMenengah = $emisi['jarak-menengah'];
    $pjarakPendek = $_POST['jarakPendek'];
    $jarakPendek = $emisi['jarak-pendek'];

    $emisiPenerbangan = ($pjarakSangatJauh * $jarakSangatJauh) + ($pjarakJauh * $jarakJauh) + ($pjarakMenengah * $jarakMenengah) + ($pjarakPendek * $jarakPendek);
    echo "Total Emisi Penerbangan: " . $emisiPenerbangan . "<br>";

    // Rumus Perhitungan Makanan
    $makananFavorit = $_POST['makananFavorit'];
    $porsiMakananFavorit = eval($makananFavorit);
    $porsiDaging = $porsiMakananFavorit['daging'];
    $porsiIkan = $porsiMakananFavorit['ikan'];
    $porsiSayur = $porsiMakananFavorit['sayur'];

    $emisiAyam = $dagingAyam['emisi'];
    $jumlahAyam = $dagingAyam['porsi'];
    $emisiSapi = $dagingSapi['emisi'];
    $jumlahSapi = $dagingSapi['porsi'];
    $emisiIkan = $dagingIkan['emisi'];
    $jumlahIkan = $dagingIkan['porsi'];
    $emisiSayur = $sayuran['emisi'];
    $jumlahSayur = $sayuran['porsi'];
    $rumusEmisiMakanan = (($porsiDaging * $emisiAyam * $jumlahAyam) + ($porsiDaging * $jumlahSapi * $emisiSapi) + ($porsiIkan * $jumlahIkan * $emisiIkan) + ($porsiSayur * $emisiSayur * $jumlahSayur)) * 52;
    echo "Emisi dari Makanan: " . $rumusEmisiMakanan . "<br>";

    // Emisi dikurangi dari daur ulang
    $daurUlang1 = isset($_POST['daurUlang1']) ? $_POST['daurUlang1'] : 0;
    $daurUlang2 = isset($_POST['daurUlang2']) ? $_POST['daurUlang2'] : 0;
    $daurUlang3 = isset($_POST['daurUlang3']) ? $_POST['daurUlang3'] : 0;
    $daurUlang4 = isset($_POST['daurUlang4']) ? $_POST['daurUlang4'] : 0;

    $totalEmisiSetelahDaurUlang = $rumusEmisiMakanan - ($daurUlang1 + $daurUlang2 + $daurUlang3 + $daurUlang4);
    echo "Total Emisi Setelah Daur Ulang: " . $totalEmisiSetelahDaurUlang . "<br>";


?>