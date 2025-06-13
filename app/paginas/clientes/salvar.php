<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == "GET"){
	echo "usuário não autorizado";
	header("refresh: 0; ../../../index.php");
}
else if($_SERVER['REQUEST_METHOD'] == "POST"){
	echo "salvar cliente";
	if(isset($_POST["cadastrar"])){

	$nome_cliente = $_POST['nome_cliente'];
	$endereco_cliente = $_POST['endereco_cliente'];
	$telefone_cliente = $_POST['telefone_cliente'];
	$email_cliente = $_POST['email_cliente'];
	$cidade_cliente = $_POST['cidade_cliente'];

	require_once "../../funcoes_php/salvar_cliente.php";
	echo "chamar func salvar_cliente";
	salvar_cliente($nome_cliente, $endereco_cliente, $telefone_cliente, $email_cliente, $cidade_cliente);
	header("refresh: 3; home_clientes.php");
	}

}

?>