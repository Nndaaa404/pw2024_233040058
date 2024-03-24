<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan-6b</title>
</head>

<body>
    <form action="" method="post">
        <label for="angka">Masukan Angka :</label>
        <input type="text" name="inputangka" id="angka">
        <button type="submit" name="submit">Tampilkan</button>
    </form>
    <br>
</body>

</html>

<?php

if (isset($_POST["submit"])) {
    $angka = $_POST["inputangka"];
    if ($angka > 0) {
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
    } else {
        echo "Tidak ada tabel yang muncul karena inputnya 0 atau negatif.";
    }
} else {
    echo "Isikan variabel angka di dalam URL.";
}

?>

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