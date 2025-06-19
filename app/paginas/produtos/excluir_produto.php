<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "GET"){
	echo "usuario não autorizado";
	header("refresh: 0; ../../../index.php");
}
else if($_SERVER['REQUEST_METHOD'] == "POST"){
	echo "deletando produto. Aguarde um momento";
	require_once "../../funcoes_php/excluir/excluir_produto.php";
	$id_produto = $_POST['id_produto'];
	echo "o id obtido a ser excluido é: " . $id_produto;
	excluir($id_produto);
	echo "fornecedor excluido com sucesso";
	header("refresh: 3; home_produtos.php");
}

?>