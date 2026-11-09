<?php
    $nome=trim($_POST['NomeAluno']??'');
    $RmInse=trim($_POST['RmAluno']??'');

$servidor="db";
$usuario="aulaphp_user";
$senha="1234";
$dbname="aulaphp";

$strcon = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$strcon) {
		die("Erro ao conectar: " . mysqli_connect_error());
	}

    $stmt = mysqli_prepare($strcon, "UPDATE clientes SET NomeCliente=? WHERE RmAluno=?");
    mysqli_stmt_bind_param($stmt, "ss", $nome, $RmInse);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_execute($stmt);

if (!mysqli_stmt_execute($stmt)) {
        die("Erro ao tentar alterar: " . mysqli_stmt_error($stmt));

}
echo "Cadastro alterado com sucesso!";


mysqli_stmt_close($stmt);
mysqli_close($strcon);
