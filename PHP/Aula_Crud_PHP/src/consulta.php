<?php
    $RmInse=trim($_POST['RmAluno']??'');


 echo "<table border=1>";
 echo "<tr>";
 echo "<th>NOME</th>";
 echo "<th>SOBRENOME</th>";
 echo "<th>TURMA</th>";
 echo "<th>RM</th>";
 echo "<th>SEXO</th>";
 echo "</tr>";

 // "db" é o nome do serviço do MySQL no docker-compose.yml,
 // não "localhost" (que apontaria para dentro do próprio container web)
 $servidor="db";
 $usuario="aulaphp_user";
 $senha="1234";
 $dbname="aulaphp";

 $strcon = mysqli_connect($servidor, $usuario, $senha, $dbname);

 if (!$strcon) {
     die("Erro ao conectar: " . mysqli_connect_error());
 }

    $stmt = mysqli_prepare($strcon, "SELECT * FROM clientes WHERE RmAluno=?");
//  $consulta = "SELECT * FROM cliente";
    mysqli_stmt_bind_param($stmt, "s", $RmInse);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);

 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
    $nome = htmlspecialchars($registro['NomeCliente']);
    $sobrenome = htmlspecialchars($registro['SobrenomeCliente']);
    $rm = htmlspecialchars($registro['RmAluno']);
    $sexo = htmlspecialchars($registro['Sexo']);
    $turma = htmlspecialchars($registro['Turma']);

    echo "<tr>";
    echo "<td>".$nome."</td>";
    echo "<td>".$sobrenome."</td>";
    echo "<td>".$sexo."</td>";
    echo "<td>".$turma."</td>";
    echo "<td>".$rm."</td>";
    echo "</tr>";
 }

 mysqli_close($strcon);
 echo "</table>";

 ?>
