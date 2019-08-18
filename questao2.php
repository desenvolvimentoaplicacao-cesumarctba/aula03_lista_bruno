<?php
// F = ( 9 * C + 160 ) / 5
    $c = $_POST['c'];
    $f = (9 * $c + 160) / 5;
    echo "$c Celcios <br> $f Fahrenheit";
            