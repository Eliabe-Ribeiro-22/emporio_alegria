<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "GET"){
	echo "usuario não autorizado";
}
else if($_SERVER['REQUEST_METHOD'] == "POST"){
	echo "deletando cliente. Aguarde um momento";
	require_once "../../funcoes_php/excluir_cliente.php";
	$id = $_POST['id_cliente'];
	echo "o id obtido a ser excluido é: " . $id;
	excluir($id);
	echo "cliente excluido com sucesso";
	header("refresh: 3; home_clientes.php");
}

?>