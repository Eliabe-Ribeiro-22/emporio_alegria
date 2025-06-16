<?php 
function listar(){
// SELECT NOME_FORNECEDOR, TELEFONE_FORNECEDOR, EMAIL_FORNECEDOR FROM FORNECEDORES ORDER BY NOME_FORNECEDOR_ASC
try{
	require_once './../../../../config/config.php';
	$conn = conexaoDB();

	echo "string de conexão com sucesso. <BR>";

	$sql = "SELECT ID_FORNECEDOR, NOME_FORNECEDOR, TELEFONE_FORNECEDOR, EMAIL_FORNECEDOR FROM FORNECEDORES";

	$result = $conn->query($sql);

	if(isset($result)){
		foreach ($result as $key => $value) {
			//echo "<a href='" . $value["ID_FORNECEDOR"] . "'>" . $value["ID_FORNECEDOR"] . "</a>";
			echo "O nome do fornecedor é: " . $value["NOME_FORNECEDOR"] . "<BR>";
			echo "O telefone do fornecedor é: " . $value["TELEFONE_FORNECEDOR"] . "<BR>";
			echo "O email do fornecedor é: ".  $value["EMAIL_FORNECEDOR"] . "<BR>";
			echo "<a href='editar_fornecedor.php?id=". $value["ID_FORNECEDOR"] . "'>" . "&#9998" . "</a>";
			echo "<form  method='POST' action='excluir_fornecedor.php' >" . "<input name='id_fornecedor' value='" . $value['ID_FORNECEDOR'] . "'> <button name='excluir_fornecedor'>🗑" . "</button><BR></form>";
		}
	}else{
		echo "Não há fornecedores cadastrados. <a href='../paginas/fornecedores/fornecedores.php'>Cadastre um agora mesmo</a>!";
		}

	}catch(PDOException $pe){
		die("Não foi possivel se conectar ao banco de dados $dbname :" . $pe->getMessage());
	}


}




?>