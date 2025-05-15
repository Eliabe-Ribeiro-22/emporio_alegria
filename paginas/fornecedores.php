<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fornecedor</title>
</head>
<body>
	<header>
	cabeçalho
	</header>

	<main>
		<h1>Cadastre um fornecedor</h1>
		<a href="../index.php">Voltar ao inicio</a>
		<form action="" method="">
			<label>Código:</label>
			<input type="text"disabled name="codigo_fornecedor" id="codigo_fornecedor">

			<label>Nome:</label>
			<input type="text" name="nome_fornecedor" id="nome_fornecedor">

			<label>Email:</label>
			<input type="email" name="email_fornecedor" id="email_fornecedor">

			<label>Telefon:</label>
			<input type="text" name="telefone_fornecedor" id="telefone_fornecedor">




		</form>
	</main>
</body>
</html>
<?php
require_once "config.php";
conexaoDB();
?>