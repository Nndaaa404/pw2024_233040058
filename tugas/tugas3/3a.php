<style>
    h4 {
        margin-top: 0;
    }
</style>


<?php
// Menghitung Luas Lingkaran
echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($r)
{
    $luas = 3.14 * $r * $r;
    echo "Jari-jari = " . $r . " cm." . "<br>";
    echo "Luas lingkaran = $luas cm&#178";
    return $luas;
}

hitungLuasLingkaran(10);
echo "<hr>";

// Menghitung Keliling Lingkaran
echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($r)
{
    $keliling = 2 * 3.14 * $r;
    echo "Jari-jari = " . $r . " cm." . "<br>";
    echo "Keliling Lingkaran = $keliling cm";
    return $keliling;
}

hitungKelilingLingkaran(20);
echo "<hr>";
?>

<!-- Unicode untuk kuadrat "&#178" -->