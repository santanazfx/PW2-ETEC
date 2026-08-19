<?php
$mult = $_GET["x"];
$i = 1;

echo"TABOADA DO $mult";
echo "<br>";
while($i <= 10) {
    $resultado = $mult * $i;
    echo"$mult x $i = $resultado . <br>";
    $i++;
}