<?php
function faktorial ($a){
    $faktorial = 1;
    for ($i = 1; $i <= $a; $i++){
        $faktorial *= $i;
    }
    return $faktorial;
}

echo "Faktorial dari 5 = " . faktorial (5);
?>