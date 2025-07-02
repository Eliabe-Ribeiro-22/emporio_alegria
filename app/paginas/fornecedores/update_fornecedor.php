<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "GET"){
	echo "usuário não autorizado";
	header("refresh: 0; ../../../index.php");
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
	if(isset($_POST["atualizar"])){
		$id_fornecedor = $_POST['id_fornecedor'];
		$nome_fornecedor = $_POST['nome_fornecedor'];
		$telefone_fornecedor = $_POST['telefone_fornecedor'];
		$email_fornecedor = $_POST['email_fornecedor'];
		
		echo "alterar" . $id_fornecedor;
		require_once "../../funcoes_php/alterar/alterar_fornecedor.php";
		echo "chamar func update_fornecedor";
		update_fornecedor($id_fornecedor, $nome_fornecedor, $telefone_fornecedor, $email_fornecedor);

		header("refresh: 3; home_fornecedores.php");
	}
}
?>