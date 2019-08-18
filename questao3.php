<?php
//C = (( F – 32 ) * 5) / 9
    $f = $_POST['f'];
    $c = (($f - 32) *5 ) /9;
    echo "$c Celcios <br> $f Fahrenheit";