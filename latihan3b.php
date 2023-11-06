<?php
function periksa_variabel($var) {
    $result = array(
        'isset' => isset($var),
        'empty' => empty($var)
    );
    return $result;
}

// Contoh pemanggilan fungsi
$testVar = '';
$result = periksa_variabel($testVar);
echo 'Isset adalah = ' . ($result['isset'] ? 'digunakan untuk memeriksa apakah suatu variabel telah diatur dan bukan null' : 'Not set') . '<br>';
echo 'Empty adalah = ' . ($result['empty'] ? 'digunakan untuk memeriksa apakah suatu variabel kosong' : 'Not empty');
