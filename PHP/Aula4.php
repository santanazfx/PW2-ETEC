<?php
    $peso=$_GET["x"];
    $alt=$_GET["y"];
    $imc= $peso /($alt*$alt);

    if($imc <= 18.5){
        echo"Abaixo do peso";
    }
    elseif ($imc <= 24.9){
        echo"Peso normal";
    }
    elseif ($imc <= 29.9){
        echo"sobrepeso";
    }
    elseif ($imc <= 34.9){
        echo"Obsidade grau 1";
    }
    elseif ($imc <= 39.9){
        echo"Obsidade grau 2";
    }
    else{
        echo"Obsidade grau 3 ou morbida<br>";
    }
    $imc=round($imc,2);
    echo"$imc";
?>