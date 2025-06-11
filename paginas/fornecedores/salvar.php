<?php
if($_SERVER['REQUEST_METHOD'] == "GET"){
	echo "usuário não autorizado";
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
	echo "salvar fornecedor";
	if(isset($_POST["cadastrar"])){
		$nome_fornecedor = $_POST['nome_fornecedor'];
		$telefone_fornecedor = $_POST['telefone_fornecedor'];
		$email_fornecedor = $_POST['email_fornecedor'];
		
		echo $nome_fornecedor . "<br>";
		echo $telefone_fornecedor . "<br>";
		echo $email_fornecedor . "<br>";

		require_once "../../funcoes_php/salvar_fornecedor.php";
		echo "chamar func salvar_fornecedor";
		salvar_fornecedor($nome_fornecedor, $telefone_fornecedor, $email_fornecedor);

		header("refresh: 3; home_fornecedores.php");
	}
}
?>