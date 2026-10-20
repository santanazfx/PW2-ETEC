<<<<<<< HEAD
<?php
	$nome=trim($_POST['NomeAluno']??'');
	$sobrenome=trim($_POST['SobrenomeAluno']??'');
	$sexo=trim($_POST['Sexo']??'');

	// "db" é o nome do serviço do MySQL no docker-compose.yml,
	// não "localhost" (que apontaria para dentro do próprio container web)
	$servidor="db";
	$usuario="aluno_user";
	$senha="aluno_pass";
	$dbname="aulaphp";

	// mysqli_report ativo por padrão no PHP 8+ lança exceções em erro de conexão
	$strcon = mysqli_connect($servidor, $usuario, $senha, $dbname);

	if (!$strcon) {
		die("Erro ao conectar: " . mysqli_connect_error());
	}

	// Usando prepared statement para evitar SQL Injection
	$incluir = "INSERT INTO cliente (NomeCliente, SobrenomeCliente, Sexo) VALUES (?, ?, ?)";
	$stmt = mysqli_prepare($strcon, $incluir);

	if (!$stmt) {
		die("Erro ao preparar consulta: " . mysqli_error($strcon));
	}

	mysqli_stmt_bind_param($stmt, "sss", $nome, $sobrenome, $sexo);

	if (!mysqli_stmt_execute($stmt)) {
		die("Erro ao tentar cadastrar: " . mysqli_stmt_error($stmt));
	}

	mysqli_stmt_close($stmt);
	mysqli_close($strcon);

	echo "Aluno cadastrado com sucesso!";
=======
<?php
	$nome=trim($_POST['NomeAluno']??'');
	$sobrenome=trim($_POST['SobrenomeAluno']??'');
	$rm=trim($_POST['RmAluno']??'');
	$sexo=trim($_POST['Sexo']??'');

	// "db" é o nome do serviço do MySQL no docker-compose.yml,
	// não "localhost" (que apontaria para dentro do próprio container web)
	$servidor="db";
	$usuario="aluno_user";
	$senha="aluno_pass";
	$dbname="aulaphp";

	// mysqli_report ativo por padrão no PHP 8+ lança exceções em erro de conexão
	$strcon = mysqli_connect($servidor, $usuario, $senha, $dbname);

	if (!$strcon) {
		die("Erro ao conectar: " . mysqli_connect_error());
	}

	// Usando prepared statement para evitar SQL Injection
	$incluir = "INSERT INTO cliente (NomeCliente, SobrenomeCliente, RmCliente, Sexo) VALUES (?, ?, ?, ?)";
	$stmt = mysqli_prepare($strcon, $incluir);

	if (!$stmt) {
		die("Erro ao preparar consulta: " . mysqli_error($strcon));
	}

	mysqli_stmt_bind_param($stmt, "ssss", $nome, $sobrenome, $rm, $sexo);

	if (!mysqli_stmt_execute($stmt)) {
		die("Erro ao tentar cadastrar: " . mysqli_stmt_error($stmt));
	}

	mysqli_stmt_close($stmt);
	mysqli_close($strcon);

	echo "Aluno cadastrado com sucesso!";
>>>>>>> dd5cd62 (files(AULAPHP):Testando o CRUD)
?>