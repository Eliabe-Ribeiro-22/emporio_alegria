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
	<form action="./salvar.php" method="POST" onsubmit="return valida_produtos()">
		<label>Código:</label>
		<input type="text"disabled value="0" name="codigo_produto" id="codigo_produto">
	
		<label>Nome:</label>
		<input type="text"  name="nome_produto" id="nome-produto">
	
		<label>Estoque Mínimo:</label>
		<input type="number" name="estoque_minimo" id="est-min">
	
		<label>Estoque Máximo:</label>
		<input type="number" name="estoque_maximo" id="est-max">
	
		<label>Valor Unitário:</label>
		<input type="text" name="valor_unitario" id="valor-unitario">
	
		<label>Quantidade:</label>
		<input type="number" name="qtdade" id="qtdade">
	
		<!--input type="submit" value="Alterar"-->
		<input type="submit" value="cadastrar" name="cadastrar">

	</form>
</main>

<footer>
	rodapé.
	All rights reserved.2025-2025. Eliabe Ribeiro Mota.
	<script type="text/javascript"src="../../assets/js/produtos.js"></script>
</footer>
</body>
</html>
