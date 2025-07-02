<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./app/assets/css/styles.css">
	<title>Página inicial</title>
</head>
<body>
<header>
	<h1>cabeçalho</h1>
</header>

<main>
	<h1 id="boas-vindas">Bem-vindo usuário!</h1>
	<h2  id="boas-vindas">Você está na área logada do sistema de gestão de mercado <br><strong>Empório Alegria</strong></h2>
<a href="./app/paginas/produtos/home_produtos.php">Acessar produtos</a>	
<a href="./app/paginas/clientes/home_clientes.php">Acessar clientes</a>	
<a href="./app/paginas/vendas/vendas.php">Cadastrar venda</a>
<a href="./app/paginas/fornecedores/home_fornecedores.php">Acessar fornecedores</a>		
</main>

<footer>
	<h1>rodapé.
	All rights reserved.2025-2025. Eliabe Ribeiro Mota.</h1>
	
</footer>
</body>
</html>
<?php
session_start();
require_once "../config/config.php";
$conn = conexaoDB();
?>