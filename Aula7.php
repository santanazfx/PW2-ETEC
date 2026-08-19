<?php
$nome = $_GET["x"];

$regiao = match ($nome) {


    'Acre',
    'Amapá',
    'Amazonas',
    'Pará',
    'Rondônia',
    'Roraima',
    'Tocantins'
        => 'Norte',


    'Alagoas',
    'Bahia',
    'Ceará',
    'Maranhão',
    'Paraíba',
    'Pernambuco',
    'Piauí',
    'Rio Grande do Norte',
    'Sergipe'
        => 'Nordeste',


    'Distrito Federal',
    'Goiás',
    'Mato Grosso',
    'Mato Grosso do Sul'
        => 'Centro-Oeste',

   
    'Espírito Santo',
    'Minas Gerais',
    'Rio de Janeiro',
    'São Paulo'
        => 'Sudeste',

    'Paraná',
    'Rio Grande do Sul',
    'Santa Catarina'
        => 'Sul',

    default => 'Estado não encontrado'
};
echo"$regiao";
