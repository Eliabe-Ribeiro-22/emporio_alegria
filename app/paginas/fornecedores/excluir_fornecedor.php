<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "GET"){
	echo "usuario não autorizado";
	header("refresh: 0; ../../../index.php");
}
else if($_SERVER['REQUEST_METHOD'] == "POST"){
	echo "deletando fornecedor. Aguarde um momento";
	require_once "../../funcoes_php/excluir_fornecedor.php";
	$id_fornecedor = $_POST['id_fornecedor'];
	echo "o id obtido a ser excluido é: " . $id_fornecedor;
	excluir($id_fornecedor);
	echo "fornecedor excluido com sucesso";
	header("refresh: 3; home_fornecedores.php");
}

?>