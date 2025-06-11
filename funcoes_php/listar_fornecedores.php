<?php 

function listar(){
// SELECT NOME_FORNECEDOR, TELEFONE_FORNECEDOR, EMAIL_FORNECEDOR FROM FORNECEDORES ORDER BY NOME_FORNECEDOR_ASC
try{
	require_once './../../../config/config.php';
	$conn = conexaoDB();

	echo "string de conexão com sucesso. <BR>";

	$sql = "SELECT ID_FORNECEDOR, NOME_FORNECEDOR, TELEFONE_FORNECEDOR, EMAIL_FORNECEDOR FROM FORNECEDORES";

	$result = $conn->query($sql);

	if(!$result){
		echo "0 results";
	}
	else if($result){
		foreach ($result as $key => $value) {
			echo "<a href='" . $value["ID_FORNECEDOR"] . "'>" . $value["ID_FORNECEDOR"] . "</a>";
			echo "O nome do fornecedor é: " . $value["NOME_FORNECEDOR"] . "<BR>";
			echo "O telefone do fornecedor é: " . $value["TELEFONE_FORNECEDOR"] . "<BR>";
			echo "O email do fornecedor é: ".  $value["EMAIL_FORNECEDOR"] . "<BR>";
			echo "&#9998" . "<form method='POST'><button name='excluir_fornecedor'>🗑" . "</button><BR></form>";
		}
	} 

	}catch(PDOException $pe){
		die("Não foi possivel se conectar ao banco de dados $dbname :" . $pe->getMessage());
	}


}




?>