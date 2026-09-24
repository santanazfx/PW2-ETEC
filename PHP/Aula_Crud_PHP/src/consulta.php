<?php

 echo "<table border=1>";
 echo "<tr>";
 echo "<th>NOME</th>";
 echo "<th>SOBRENOME</th>";
 echo "<th>SEXO</th>";
 echo "</tr>";

 // "db" é o nome do serviço do MySQL no docker-compose.yml,
 // não "localhost" (que apontaria para dentro do próprio container web)
 $servidor="db";
 $usuario="aluno_user";
 $senha="aluno_pass";
 $dbname="aulaphp";

 $strcon = mysqli_connect($servidor, $usuario, $senha, $dbname);

 if (!$strcon) {
     die("Erro ao conectar: " . mysqli_connect_error());
 }

 $consulta = "SELECT * FROM cliente";
 $resultado = mysqli_query($strcon, $consulta) or die("Erro ao retornar dados: " . mysqli_error($strcon));

 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
    $nome = htmlspecialchars($registro['NomeCliente']);
    $sobrenome = htmlspecialchars($registro['SobrenomeCliente']);
    $sexo = htmlspecialchars($registro['Sexo']);

    echo "<tr>";
    echo "<td>".$nome."</td>";
    echo "<td>".$sobrenome."</td>";
    echo "<td>".$sexo."</td>";
    echo "</tr>";
 }

 mysqli_close($strcon);
 echo "</table>";

 ?>