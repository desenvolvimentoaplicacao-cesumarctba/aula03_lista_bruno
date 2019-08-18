<?php
//f2k
    $f = $_POST['f'];
    $c = (($f - 32) *5 ) /9;
    $k = $c + 273.15;
    echo number_format($c, 1) . ' Celcios <br>'  . number_format($f, 1) . ' Fahrenheit <br>' . number_format($k, 1) . ' Kelvin';
