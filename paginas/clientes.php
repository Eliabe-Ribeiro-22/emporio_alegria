<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clientes</title>
</head>
<body>
	<header>
		Cabeçalho
	</header>
	
	<main>
		<h1>Cadastre um fornecedor</h1>
		<a href="../index.php">Voltar ao inicio</a>
		<form action="" method="">
			<label>Código:</label>
			<input type="text"disabled name="codigo_cliente" id="codigo_cliente">

			<label>Nome:</label>
			<input type="text" name="nome_cliente" id="nome_cliente">

			<label>Endereço:</label>
			<input type="text" name="endereco_cliente" id="endereco_cliente">

			<label>Telefone:</label>
			<input type="text" name="telefone_cliente" id="telefone_cliente">

			<label>Email:</label>
			<input type="text" name="email_cliente" id="email_cliente">

			<label>Cidade:</label>
			<input type="email" name="cidade_cliente" id="cidade_cliente">
	
			<input type="submit" value="Alterar">
			<input type="submit" value="Cadastrar">
		</form>
	</main>
	
	<footer>
		rodapé
	</footer>
</body>
</html>

<?php
require_once "./config.php";
conexaoDB();
?>