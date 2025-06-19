<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "GET"){
	echo "usuario não autorizado";
	header("refresh: 0; ../../../index.php");
}
else if($_SERVER['REQUEST_METHOD'] == "POST"){
	echo "deletando cliente. Aguarde um momento";
	require_once "../../funcoes_php/excluir/excluir_cliente.php";
	$id_cliente = $_POST['id_cliente'];
	echo "o id obtido a ser excluido é: " . $id_cliente;
	excluir($id_cliente);
	echo "cliente excluido com sucesso";
	header("refresh: 3; home_clientes.php");
}

?>