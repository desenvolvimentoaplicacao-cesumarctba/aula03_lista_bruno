<?php
    $kg = $_POST['kg'];
    $m = $_POST['m'];
    /* Valida se o valor pode ser convetido para float, isso garante que o 
     *a altura foi digitada em Metros e nao em centimetros
    */
    if (!floatval($m)){
        echo 'a altura deve ser digitada no formato segundo exemplo: 1.75';
        die();
    }
    $imc = $kg / $m ** 2;
    if ($imc < 16){
        echo 'seu IMC é ' . number_format($imc, 1) . '<br>esta mt magro, corra para o Mcdonalds';
    } else if($imc == 16){
        echo 'seu IMC é ' .  number_format($imc, 1) . '<br>magro.';
    }else if($imc >= 17 && $imc < 18.5){
         echo 'seu IMC é ' .  number_format($imc, 1) .  '<br>magreza leve, o que pode resultar em estresse, ansiedade e fadiga.';
    }else if($imc >= 18.5 && $imc < 25){
         echo 'seu IMC é ' .  number_format($imc, 1) .  '<br>considerado saudável, apresentando menor risco para doenças.';
    }else if($imc >= 25 && $imc < 30){
          echo 'seu IMC é ' .  number_format($imc, 1) .  '<br>sobrepeso, podendo levar à fadiga, varizes e má circulação.';
    }else if($imc >=30 && $imc < 35){
          echo 'seu IMC é ' .  number_format($imc, 1) .  '<br>obesidade de grau I, podendo resultar em diabetes, infarto, angina e aterosclerose.';
    }else if($imc >=35 && $imc < 40){
          echo 'seu IMC é ' .  number_format($imc, 1) .  '<br>obesidade de grau II (severa), podendo causar falta de ar e apneia do sono.';
    }else if($imc > 40){
           echo 'seu IMC é ' .  number_format($imc, 1) . '<br>obesidade de grau III (mórbida), podendo levar à refluxo, infartos, AVC, dificuldades de locomoção e escaras.';
    }
