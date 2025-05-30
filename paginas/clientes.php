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
		<h1>Cadastre um cliente</h1>
		<a href="../index.php">Voltar ao inicio</a>
		<form action="" method="POST" onsubmit="return valida_clientes()">
			<label>Código:</label>
			<input type="text"disabled value="0" name="codigo_cliente" id="codigo-cliente">

			<label>Nome:</label>
			<input type="text" name="nome_cliente" id="nome-cliente">

			<label>Endereço:</label>
			<input type="text" name="endereco_cliente" id="endereco-cliente">

			<label>Telefone:</label>
			<input type="text" name="telefone_cliente" id="telefone-cliente">

			<label>Email:</label>
			<input type="email" name="email_cliente" id="email-cliente">

			<label>Cidade:</label>
			<input type="text" name="cidade_cliente" id="cidade-cliente">
	
			<!--input type="submit" value="Alterar"-->
			<input type="submit" value="cadastrar" name="cadastrar">
		</form>
	</main>
	
	<footer>
		rodapé
	<script type="text/javascript" src="../assets/js/clientes.js"></script>		
	</footer>
</body>
</html>

<?php

if(isset($_POST["cadastrar"])){
	$nome_cliente = $_POST['nome_cliente'];
	$endereco_cliente = $_POST['endereco_cliente'];
	$telefone_cliente = $_POST['telefone_cliente'];
	$email_cliente = $_POST['email_cliente'];
	$cidade_cliente = $_POST['cidade_cliente'];

	echo $nome_cliente . "<br>";
	echo $endereco_cliente . "<br>";
	echo $telefone_cliente . "<br>";
	echo $email_cliente . "<br>";
	echo $cidade_cliente . "<br>";

	// INSERT INTO CLIENTES(NOME_CLIENTE, ENDERECO_CLIENTE, TELEFONE_CLIENTE, EMAIL_CLIENTE, CIDADE_CLIENTE) VALUES (
	// $nome_cliente, $endereco_cliente, $telefone_cliente, $emaiL_cliente, $cidade_cliente

	require_once "./config.php";
	$conn = conexaoDB();
}

?>
