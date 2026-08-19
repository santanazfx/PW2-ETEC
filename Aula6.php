<?php
$nome = $_GET["x"];
$estados = [
    "Acre - Norte",
    "Alagoas - Nordeste",
    "Amapa - Norte",
    "Amazonas - Norte",
    "Bahia - Nordeste",
    "Ceara - Nordeste",
    "Distrito Federal - Centro-Oeste",
    "Espirito Santo - Sudeste",
    "Goias - Centro-Oeste",
    "Maranhao - Nordeste",
    "Mato Grosso - Centro-Oeste",
    "Mato Grosso do Sul - Centro-Oeste",
    "Minas Gerais - Sudeste",
    "Para - Norte",
    "Paraiba - Nordeste",
    "Parana - Sul",
    "Pernambuco - Nordeste",
    "Piaui - Nordeste",
    "Rio de Janeiro - Sudeste",
    "Rio Grande do Norte - Nordeste",
    "Rio Grande do Sul - Sul",
    "Rondonia - Norte",
    "Roraima - Norte",
    "Santa Catarina - Sul",
    "Sao Paulo - Sudeste",
    "Sergipe - Nordeste",
    "Tocantins - Norte"
];
for ($i = 0; $i < count($estados); $i++) {
    if (strpos($estados[$i], $nome) !== false) {
        echo $estados[$i] "<br>";
    }
}
?>