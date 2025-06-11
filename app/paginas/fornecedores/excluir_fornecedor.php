<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "GET"){
	echo "usuario não autorizado";
}
else if($_SERVER['REQUEST_METHOD'] == "POST"){
	echo "deletando fornecedor. Aguarde um momento";
	require_once "../../funcoes_php/excluir_fornecedor.php";
	$id_cliente = $_POST['id_fornecedor'];
	echo "o id obtido a ser excluido é: " . $id_cliente;
	excluir($id_cliente);
	echo "fornecedor excluido com sucesso";
	header("refresh: 3; home_fornecedores.php");
}

?>