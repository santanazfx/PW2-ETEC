<?php
$mult = $_GET["x"];

echo"TABUADA DO $mult";
echo"<br>";
for($i=1; $i<=10; $i++){
    $result = $mult * $i;
    echo"$mult x $i = $result";
    echo"<br>";
}
