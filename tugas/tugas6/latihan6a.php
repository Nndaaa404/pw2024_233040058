<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
    }

    .kotak {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 30px;
        height: 30px;
        border: 1.5px solid black;
        margin: 2px;
    }
    
    .satu {
        background-color: steelblue;
    }

    .dua {
        background-color: greenyellow;
    }

</style>


<?php

// ketika ($_GET["angka"]) belum di isi
if (!isset($_GET["angka"])) {
    // maka tampilkan pesan di bawah ini
    echo "Isikan variabel angka di dalam URL.";
    // jika tidak/ sudah 
} else {
    // maka jalankan perintah di bawah ini
    $angka = $_GET["angka"];

    for ($i = $angka; $i >= 1; $i--) {
        for ($j = $i; $j >= 1; $j--) {
            if ($i % 2 == 0) {
                echo '<div class="kotak satu">' . $i . '</div>';
            } else {
                echo '<div class="kotak dua">' . $i . '</div>';
            }
        }
        echo "<br>";
    }
}

?>