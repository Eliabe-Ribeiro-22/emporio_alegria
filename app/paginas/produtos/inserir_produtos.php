<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../assets/css/styles.css">
	<title>Página produto</title>
</head>
<body>
<header>
	<h1>cabeçalho</h1>
</header>

<main>
	<h1>Cadastrar Produto</h1>
	<a href="../../../index.php">Voltar ao inicio</a>
	<form action="./salvar.php" method="POST" onsubmit="return valida_produtos()" id="inserir-produto">
		<label id="banana-produto">Código:</label>
		<input type="text" value="0" name="codigo_produto" id="codigo_produto">
	
		<label id="banana-produto">Nome:</label>
		<input type="text"  name="nome_produto" id="nome-produto">
	
		<label id="banana-produto">Estoque Mínimo:</label>
		<input type="number" name="estoque_minimo" id="est-min">
	
		<label id="banana-produto">Estoque Máximo:</label>
		<input type="number" name="estoque_maximo" id="est-max">
	
		<label id="banana-produto">Valor Unitário:</label>
		<input type="text" name="valor_unitario" id="valor-unitario">
	
		<label id="banana-produto">Quantidade:</label>
		<input type="number" name="qtdade" id="qtdade">
	
		<input type="submit" value="cadastrar" name="cadastrar" id="button-banana-produto">

	</form>
</main>

<footer>
	rodapé.
	All rights reserved.2025-2025. Eliabe Ribeiro Mota.
	<script type="text/javascript"src="../../assets/js/produtos.js"></script>
</footer>
</body>
</html>
