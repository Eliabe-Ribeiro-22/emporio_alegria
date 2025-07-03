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
	<form action="./update_produto.php" method="POST" onsubmit="return valida_produtos()" id="inserir-produto">
		<label id="banana-produto">Código:</label>
		<input type="text" value="<?php echo $id_produto ?>" name="id_produto" id="id_produto">
	
		<label id="banana-produto">Nome:</label>
		<input type="text"  name="nome_produto" id="nome-produto" value="<?php echo $nome_produto ?>">
	
		<label id="banana-produto">Estoque Mínimo:</label>
		<input type="number" name="estoque_minimo" id="est-min" value="<?php echo $estoque_minimo?>">
	
		<label id="banana-produto">Estoque Máximo:</label>
		<input type="number" name="estoque_maximo" id="est-max" value="<?php echo $estoque_maximo?>">
	
		<label id="banana-produto">Valor Unitário:</label>
		<input type="text" name="valor_unitario" id="valor-unitario" value="<?php echo $valor_unitario?>">
	
		<label id="banana-produto">Quantidade:</label>
		<input type="number" name="qtdade" id="qtdade" value="<?php echo $qtdade ?>">
	
		<input type="submit" value="atualizar" name="atualizar" id="button-banana-produto">

	</form>
</main>

<footer>
	rodapé.
	All rights reserved.2025-2025. Eliabe Ribeiro Mota.
	<script type="text/javascript"src="../../assets/js/produtos.js"></script>
</footer>
</body>
</html>
