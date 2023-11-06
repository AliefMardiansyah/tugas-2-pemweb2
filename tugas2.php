<?php

$PahlawanNasionalIndonesia = array(
    "pahlawan 1" => array(
        "Nama" => "Soekarno",
        "Penjelasan" => "Presiden Pertama Republik Indonesia.",
        "Tahun Wafat" => "1970",
        "Tahun Lahir" => "1901",
        "Gambar" => "img/Presiden Sukarno.jpg"
    ),

    "pahlawan 2" => array(
        "Nama" => "Abdul Haris Nasution",
        "Penjelasan" => "Jenderal Angkatan Darat, dua kali diangkat sebagai Kepala Staf Angkatan Darat",
        "Tahun Wafat" => "2000",
        "Tahun Lahir" => "1918",
        "Gambar" => "img/Abdul Haris Nasution.jpg"
    ),

    "pahlawan 3" => array(
        "Nama" => "Bung Tomo",
        "Penjelasan" => "Bung Tomo juga menjadi pemimpin Barisan Pemberontakan Rakyat Indonesia (BPRI) di Surabaya melawan pasukan Inggris. Meskipun pada Pertempuran Surabaya 10 November 1945, akhirnya pihak Indonesia kalah, tetapi rakyat Surabaya dianggap berhasil memukul mundur pasukan Inggris",
        "Tahun Wafat" => "1981",
        "Tahun Lahir" => "1920",
        "Gambar" => "img/Bung Tomo.jpg"
    ),

    "pahlawan 4" => array(
        "Nama" => "Soetomo",
        "Penjelasan" => "dokter, pengajar Jawa, mendirikan Budi Utomo sekaligus Tokoh Muhammadiyah",
        "Tahun Wafat" => "1938",
        "Tahun Lahir" => "1888",
        "Gambar" => "img/Soetomo.jpg"

    ),

    "pahlawan 5" => array(
        "Nama" => "Antasari",
        "Penjelasan" => "Melakukan penyerangan terhadap pasukan kolonial Belanda dalam Perang Banjar",
        "Tahun Wafat" => "1862",
        "Tahun Lahir" => "1809",
        "Gambar" => "img/antasari.jpg"
    ),

    "pahlawan 6" => array(
        "Nama" => "Cut Nyak Dhien",
        "Penjelasan" => "Pemimpin gerilyawan Aceh yang melakukan penyerangan terhadap pasukan kolonial belanda; istri Teuku Umar",
        "Tahun Wafat" => "1908",
        "Tahun Lahir" => "1850",
        "Gambar" => ""
    ),

    "pahlawan 7" => array(
        "Nama" => "Hamengkubuwono IX",
        "Penjelasan" => "Sultan Yogyakarta, aktivis kemerdekaan, pemimpin militer, dan politisi; Wakil Presiden Indonesia kedua",
        "Tahun Wafat" => "1988",
        "Tahun Lahir" => "1912",
        "Gambar" => "img/HamengkubuwanaIX.jpg"
    ),

    "pahlawan 8" => array(
        "Nama" => "Ki Hajar Dewantara",
        "Penjelasan" => "Pengajar dan menteri pemerintahan, mendirikan Taman Siswa, saudara Suryopranoto, salah satu dari Tiga Serangkai",
        "Tahun Wafat" => "1959",
        "Tahun Lahir" => "1889",
        "Gambar" => "img/Ki Hadjar Dewantara.jpg"
    ),

    "pahlawan 9" => array(
        "Nama" => "Imam Bonjol",
        "Penjelasan" => "Tokoh Islam dari Sumatera Barat yang melakukan perlawanan terhadap pasukan kolonial Belanda dalam Perang Padri",
        "Tahun Wafat" => "1864",
        "Tahun Lahir" => "1772",
        "Gambar" => "img/tuanku imam bonjol.jpg"
    ),
    "pahlawan 10" => array(
        "Nama" => "Pattimura",
        "Penjelasan" => "Gerilyawan dari Maluku yang melakukan perlawanan terhadap pasukan kolonial Belanda",
        "Tahun Wafat" => "1817",
        "Tahun Lahir" => "1783",
        "Gambar" => "img/Pattimura.jpg"
    ),

);

echo "<table border='1'>";
echo "<tr><th>No</th><th>Nama</th><th>Penjelasan</th><th>Tahun Lahir</th><th>Tahun Wafat</th><th>Gambar</th></tr>";
$nomor = 1;
foreach ($PahlawanNasionalIndonesia as $pahlawan) {
    echo "<tr>";
    echo "<td>$nomor</td>";
    echo "<td>" . $pahlawan["Nama"] . "</td>";
    echo "<td>" . $pahlawan["Penjelasan"] . "</td>";
    echo "<td>" . $pahlawan["Tahun Lahir"] . "</td>";
    echo "<td>" . $pahlawan["Tahun Wafat"] . "</td>";
    echo "<td><img src='" . $pahlawan["Gambar"] . "' width='100'></td>";
    echo "</tr>";
    $nomor++;
}
echo "</table>";
?>