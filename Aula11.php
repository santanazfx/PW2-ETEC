<?php
$mult = $_GET["x"];

echo"O NUMERO $mult É PRIMO?";
echo"<br>";
for($i=1; $i<=10; $i++) {
    $result = $mult % 2;
    if ($result > 0) {
        echo "O numero $mult é primo";
        echo "<br>";
        break;
    } else {
        echo "O numero $mult nao é primo";
        echo "<br>";
        break;
    }
}


