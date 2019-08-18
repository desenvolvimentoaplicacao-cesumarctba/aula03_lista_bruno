<?php

    const KM_LITRO = 12; // altere aqui para mudar quanto o veiculo faz com um litro
    $vm = $_POST['vm'];
    $t = $_POST['tempo'];
    $s = $vm * $t;
    $qtdGasta = $s / KM_LITRO;
    echo 'Velocidade média: ' . number_format($vm, 1);
    echo '<br>';
    echo 'Tempo Gasto: ' . number_format($t, 1);
    echo '<br>';
    echo 'distanci percorrida: ' . number_format($s, 1);
    echo '<br>';
    echo 'quantidade de litros: ' . number_format($qtdGasta, 1);





