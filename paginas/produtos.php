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
	<form action="" method="POST" onsubmit="return valida_produtos()">
		<label>Código:</label>
		<input type="text"disabled value="0" name="codigo_produto" id="codigo-produto">
	
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
	<script type="text/javascript"src="../assets/js/produtos.js"></script>
</footer>
</body>
</html>


<?php
if(isset($_POST["cadastrar"])){
	$nome_produto = $_POST['nome_produto'];
	$est_min_produto = $_POST['estoque_minimo'];
	$est_max_produto = $_POST['estoque_maximo'];
	$valor_unit_produto = $_POST['valor_unitario'];
	$qtdade_produto = $_POST['qtdade'];

	$_SESSION['produtos'] = [
		$nome_produto, 
		$est_min_produto, 
		$est_max_produto, 
		$valor_unit_produto, 
		$qtdade_produto];
	

	echo $nome_produto . "<br>";
	echo $est_min_produto . "<br>";
	echo $est_max_produto . "<br>";
	echo $valor_unit_produto . "<br>";
	echo $qtdade_produto . "<br>";
	
	//require_once "./config.php";
	try{
	require_once "./config.php";
	$conn = conexaoDBPRODUTOS();
	echo "conexao bem sucedida. bora incluir";
	//link projeto referencia: https://github.com/Eliabe-Ribeiro-22/e21-22-php-curso/blob/main/PHP-028-046_SQLite3/index.php
	

	$produtos = $_SESSION['produtos'];
	// string conexao
	echo "string de conexão com sucesso";

	// inserir novo cadastro
	$sql = 
		'INSERT INTO PRODUTOS(NOME_PRODUTO, ESTOQUE_MINIMO, ESTOQUE_MAXIMO, VALOR_UNITARIO, QUANTIDADE)' . 
		'VALUES(
			:NOME_PRODUTO, :ESTOQUE_MINIMO, :ESTOQUE_MAXIMO, :VALOR_UNITARIO, :QUANTIDADE)';
	echo "sql ok";
	

	$tmp = $conn->prepare($sql);
	echo "deu certo";
	$tmp->execute([ 
		':NOME_PRODUTO' => $nome_produto, 
		':ESTOQUE_MINIMO' => $est_min_produto,
		':ESTOQUE_MAXIMO' => $est_max_produto,
		':VALOR_UNITARIO' => $valor_unit_produto,
		':QUANTIDADE' => $qtdade_produto,
	]);
	echo "produto cadastrado no banco com sucesso";
	unset($produtos);
	unset($_SESSION['produtos']);

	}catch (PDOException $e) {
        // status da operacao de insercao de dados no SQLITE3
        $status = false;
    } catch (Exception $e) {
        // status da operacao de insercao de dados no SQLITE3
        $status = false;
    }
}
?>
