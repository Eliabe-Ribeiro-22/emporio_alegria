<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página inicial</title>
</head>
<body>
<header>
	cabeçalho
</header>

<main>
	Conteúdo do site
<a href="./app/paginas/produtos/home_produtos.php">Acessar produtos</a>	
<a href="./app/paginas/clientes/home_clientes.php">Acessar clientes</a>	
<a href="./app/paginas/vendas/vendas.php">Cadastrar venda</a>
<a href="./app/paginas/fornecedores/home_fornecedores.php">Acessar fornecedores</a>		
</main>

<footer>
	rodapé.
	All rights reserved.2025-2025. Eliabe Ribeiro Mota.
</footer>
</body>
</html>
<?php
session_start();
require_once "../config/config.php";
$conn = conexaoDB();
?>