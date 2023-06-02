<?php 

echo "<b>NOMOR 1</b><br><br>";

$nama = "Naufal";

echo "Nama panggilan: $nama <br>";

echo "Jumlah huruf: " . strlen($nama) . "<br>"; 

echo "Tanggal hari ini: " . date('d') . "<br>";

echo "Tanggal hari ini dikurangi 2: " . date('d') - 2 . "<br>";

if (strlen($nama) == date('d') - 2) {
    echo "berhasil <br>";
} elseif (strlen($nama) < date('d')) {
    echo "sedikit lagi <br>";
} else {
    echo "coba lagi <br>";
}


echo "<br><br><br><b>NOMOR 2</b><br><br>";

$anggota = array(
    array("Nama" => "Naufal", "NIM" => "28821"),
    array("Nama" => "Ilham", "NIM" => "28822"),
    array("Nama" => "Kurniawan", "NIM" => "28823"),
    array("Nama" => "Dedi", "NIM" => "28824"),
    array("Nama" => "Yanto", "NIM" => "28825")
);

$peran = array("front-end developer", "back-end developer");

foreach ($anggota as $member) {
    $nama = $member["Nama"];
    $nim = $member["NIM"];
    $p = ($nim % 2 == 1) ? $peran[0] : $peran[1];

    echo "$nama dengan NIM $nim, sebagai $p <br>";
}


echo "<br><br><br><b>NOMOR 3</b><br><br>";

$nama = "NAUFAL";
$hurufNama = str_split($nama);

$kota = array(
    "Lampung",
    "Riau",
    "Jambi",
    "Bengkulu",
    "Makassar",
    "Kendari",
    "Gorontalo",
    "Samarinda",
    "Papua",
    "Nusa Tenggara Barat"
);

$kotaTujuan = "Jawa Timur";

foreach ($hurufNama as $huruf) {
    $kotaDitemukan = false;

    foreach ($kota as $k) {
        if (strtolower(substr($k, 0, 1)) == strtolower($huruf)) {
            $kotaTujuan = $k;
            $kotaDitemukan = true;
            break;
        }
    }

    if ($kotaDitemukan) {
        break;
    }
}

echo "Nama: $nama <br>";
echo "Kota Tujuan KKN: $kotaTujuan";

?>