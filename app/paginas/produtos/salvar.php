<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "GET"){
	echo "usuário não autorizado";
	header("refresh: 0; ../../../index.php");
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
	echo "usuário autorizado";
	$nome_produto = $_POST['nome_produto'];
	$est_min_produto = $_POST['estoque_minimo'];
	$est_max_produto = $_POST['estoque_maximo'];
	$valor_unit_produto = $_POST['valor_unitario'];
	$qtdade_produto = $_POST['qtdade'];

	echo $nome_produto . "<br>";
	echo $est_min_produto . "<br>";
	echo $est_max_produto . "<br>";
	echo $valor_unit_produto . "<br>";
	echo $qtdade_produto . "<br>";
	
	require_once "../../funcoes_php/salvar/salvar_produto.php";
	echo "chamar func salvar_produto";
	salvar_produto($nome_produto, $est_min_produto, $est_min_produto, $valor_unit_produto, $qtdade_produto);
	header("refresh: 3; home_produtos.php");
}
?>