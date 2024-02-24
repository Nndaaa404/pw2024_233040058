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
        background-color: steelblue;
        border: 1.5px solid black;
    }
</style>


<?php

for ($i = 10; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo '<div class="kotak">' . $j . '</div>';
    }
    echo "<br>";
}

?>