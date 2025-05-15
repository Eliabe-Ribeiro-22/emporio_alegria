<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página produto</title>
</head>
<body>
<header>
	cabeçalho
</header>

<main>
	<h1>Cadastrar Produto</h1>
	<a href="../index.php">Voltar ao inicio</a>
	<form action="" method="">
		<label>Código Produto:</label>
		<input type="text"disabled name="codigo_produto" id="codigo_produto">
	
		<label>Nome Produto:</label>
		<input type="text"  name="nome-produto" id="nome-produto">
	
		<label>Estoque Mínimo Produto:</label>
		<input type="number" name="estoque-minimo" id="estoque-minimo">
	
		<label>Estoque Máximo Produto:</label>
		<input type="number" name="estoque-maximo" id="estoque-maximo">
	
		<label>Valor Unitário Produto:</label>
		<input type="text" name="valor-unitario" id="valor-unitario">
	
		<label>Quantidade Produto:</label>
		<input type="number" name="quantidade" id="quantidade">
	
		<input type="submit" value="Alterar">
		<input type="submit" value="Cadastrar">

	</form>
</main>

<footer>
	rodapé.
	All rights reserved.2025-2025. Eliabe Ribeiro Mota.
</footer>
</body>
</html>


<?php
require_once "./config.php";
conexaoDB();


?>
