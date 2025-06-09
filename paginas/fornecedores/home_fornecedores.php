<a href="./fornecedores.php">Cadastrar novo fornecedor</a>
<a href="../../index.php">Voltar ao início</a>


FORNECEDORES CADASTRADOS

<?php

//deseja realmente excluir o cliente? SIM OU Não 
// SQL DELETE FROM CLIENTES WHERE ID = id_produto_selected=[$key]
// se erro, informar mensagem ao usuário
// cliente deletado com sucesso


// se clicar no botão edit
// armazenar id
// pesquisar todos os dados com o id
// exibir dados do fornecedor no form alterar_fornecedores.php
if(isset($_POST['excluir_fornecedor'])){
		try{
			require_once "./../../../config/config.php";
			$conn = conexaoDB();
			echo "connection com sucesso";
			$sql = "DELETE FROM FORNECEDORES WHERE FORNECEDORES.ID_FORNECEDOR = 4 ";
			$tmp = $conn->query($sql);
			echo "registro excluído com sucesso";
		}catch(Exception $e){
			die("Problema ao excluir um registro." . $e);
		}

}


// SELECT NOME_FORNECEDOR, TELEFONE_FORNECEDOR, EMAIL_FORNECEDOR FROM FORNECEDORES ORDER BY NOME_FORNECEDOR_ASC
try{
	require_once './../../../config/config.php';
	$conn = conexaoDB();
	
	echo "string de conexão com sucesso. <BR>";


	$sql = "SELECT ID_FORNECEDOR, NOME_FORNECEDOR, TELEFONE_FORNECEDOR, EMAIL_FORNECEDOR FROM FORNECEDORES";
	$result = $conn->query($sql);

	if($result){
		foreach ($result as $key => $value) {
			echo "<a href='" . $value["ID_FORNECEDOR"] . "'>" . $value["ID_FORNECEDOR"] . "</a>";
			echo "O nome do fornecedor é: " . $value["NOME_FORNECEDOR"] . "<BR>";
			echo "O telefone do fornecedor é: " . $value["TELEFONE_FORNECEDOR"] . "<BR>";
			echo "O email do fornecedor é: ".  $value["EMAIL_FORNECEDOR"] . "<BR>";
			echo "&#9998" . "<form method='POST'><button name='excluir_fornecedor'>🗑" . "</button><BR></form>";
		}
	}
	else{
		echo "0 results";
	}
}catch(PDOException $pe){
	die("Não foi possivel se conectar ao banco de dados $dbname :" . $pe->getMessage());
	}

// ver como passa o parametro id para a função excluir cliete, fornecedor e produto
	// ver trabalho denize e21
?>
