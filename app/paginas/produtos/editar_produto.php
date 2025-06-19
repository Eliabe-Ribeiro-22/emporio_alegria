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
	<?php 
	$id_produto = $_GET['id'];
	echo "id é: " .  $id_produto;
	//sql = select * from produtos where id_produto = $id_produto
	require_once "../../funcoes_php/pesquisar/pesquisar_produto.php";
	$produto = pesquisa_produto($id_produto);

	foreach ($produto as $key => $value) {
		// armazenando dados em variaveis
			$id_produto = $value["ID_PRODUTO"];
			$nome_produto = $value["NOME_PRODUTO"];
			$estoque_minimo = $value["ESTOQUE_MINIMO"];
			$estoque_maximo = $value["ESTOQUE_MAXIMO"];
			$valor_unitario = $value["VALOR_UNITARIO"];
			$qtdade = $value["QUANTIDADE"];
	}

	?>
	<h1>Editar Produto</h1>
	<a href="../../../index.php">Voltar ao inicio</a>
	<form action="./update_produto.php" method="POST" onsubmit="return valida_produtos()">
		<label>Código:</label>
		<input type="text"disabled value="<?php echo $id_produto ?>" name="codigo_produto" id="codigo_produto">
	
		<label>Nome:</label>
		<input type="text"  name="nome_produto" id="nome-produto" value="<?php echo $nome_produto ?>">
	
		<label>Estoque Mínimo:</label>
		<input type="number" name="estoque_minimo" id="est-min" value="<?php echo $estoque_minimo?>">
	
		<label>Estoque Máximo:</label>
		<input type="number" name="estoque_maximo" id="est-max" value="<?php echo $estoque_maximo?>">
	
		<label>Valor Unitário:</label>
		<input type="text" name="valor_unitario" id="valor-unitario" value="<?php echo $valor_unitario?>">
	
		<label>Quantidade:</label>
		<input type="number" name="qtdade" id="qtdade" value="<?php echo $qtdade ?>">
	
		<input type="submit" value="editar" name="editar">

	</form>
</main>

<footer>
	rodapé.
	All rights reserved.2025-2025. Eliabe Ribeiro Mota.
	<script type="text/javascript"src="../../assets/js/produtos.js"></script>
</footer>
</body>
</html>
