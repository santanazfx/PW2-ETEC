<?php
$inicio=$_GET["x"];
$fim=$_GET["y"];
$incremento = $_GET["z"];

$i = $inicio;
if ($incremento <=0){
    echo"Incremento invalido";
}else{
    if ($inicio < $fim){
    while($i<=$fim) {
        echo "$i. \n";
        $i += $incremento;
    }
    }else{
        while($i>=$fim){
            echo"$i. \n";
            $i-=$incremento;
            }
        }
    }



