<?php
session_start();
function listar(){
	try{
		require_once './../../../../config/config.php';
		$conn = conexaoDB();
	
		echo "string de conexão com sucesso. <BR>";

		$sql = 'SELECT ID_PRODUTO, NOME_PRODUTO, VALOR_UNITARIO, QUANTIDADE FROM PRODUTOS';
		$result = $conn->query($sql);

		if(!$result){
			echo "0 results";
		}
		else if ($result){
			foreach ($result as $key => $value) {
				echo "<a href='" . $value["ID_PRODUTO"] . "'>" . $value["ID_PRODUTO"] . "</a>";
				echo "O nome do produto é: " . $value["NOME_PRODUTO"] . "<BR>";
				echo "O valor unitário do produto é: ".  $value["VALOR_UNITARIO"] . "<BR>";
				echo "A quantidade do produto" . $value["QUANTIDADE"] . "<BR>";
				echo "&#9998" . "<form method='POST'><button name='excluir_produto'>🗑" . "</button><BR></form>";
			}
		}
			

	}catch(PDOException $pe){
		die("Não foi possivel se conectar ao banco de dados $dbname :" . $pe->getMessage());
	}

}

?>