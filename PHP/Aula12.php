<?php
$stat = $_GET["x"];
$perf= $_GET["y"];

if($stat == "Inativo"){
    echo"Acesso Negado: Conta inativa.";
}else if($stat == "Ativo"){
    switch($perf){
        case 'Adm':
            echo"Bem-vindo Administrador";
            
            break;
            case 'Professor':
                echo"Bem-Vindo Professor";
                break;
                    case 'Aluno':
                        echo"Acessando Portal do Aluno";
                        break;            
            default:
            echo"Usuario digitado INVALIDO";
            break;
        }
}
