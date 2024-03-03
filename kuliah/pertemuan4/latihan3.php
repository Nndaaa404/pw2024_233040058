<?php 

function cetak_angka ($k) {
    for ($i = 1; $i <= $k; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo "<br>";
    }
}

echo cetak_angka(5);
echo "<hr>";
echo cetak_angka(10);

?>