<?php
function hitungPangkat($bilangan, $pangkat) {
    return pow($bilangan, $pangkat);
}

// Menghitung 5 pangkat 4
$hasil = hitungPangkat(5, 4);
echo "Hasil dari 5 pangkat 4 = " . $hasil;

