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

	
	require_once "../../funcoes_php/salvar/salvar_produto.php";
	salvar_produto($nome_produto, $est_min_produto, $est_min_produto, $valor_unit_produto, $qtdade_produto);
	header("refresh: 3; home_produtos.php");
}
?>