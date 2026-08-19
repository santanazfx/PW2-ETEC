<?php
$num =$_GET["x"];
$upcao=$_GET["y"];
$result = 0;

echo"Digite uma opcao";
echo"<br>";
echo"1:Dobro<br>2:cubo<br>3:Raiz<br>";
switch($upcao){
    case 1:
        $result=$num *2;
        echo"Resultado: $result";
        break;
        case 2:
            $result=$num**3;
            echo"Resultado: $result";
            break;
            case 3:
                $result=sqrt($num);
                echo"Resultado: $result";
                break;
    default:
        echo"Tente novamente";
        return;
}
?>

