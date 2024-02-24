<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
    }

    .kotak {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 50px;
        height: 50px;
        border: 1.5px solid black;
    }

    .hitam {
        background-color: #333;
    }

    .putih {
        background-color: white;
    }
</style>


<?php

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        $ij = $i + $j;
        if ($ij % 2 == 0) {
            echo '<div class="kotak hitam"></div>';
        } else {
            echo '<div class="kotak putih"></div>';
        }
    }
    echo "<br>";
}

?>