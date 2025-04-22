<?php

    $x = 5;
    $y = 9;
    $media = ($x + $y) / 2;

    if ($media >=6.0){
        echo "Aprovado!";
    }
    else if ($media >=4.0 && $media >6.0){
        echo "Recuperação!";
    }
    else if ($media <4){
        echo "Reprovado";
    }
?>