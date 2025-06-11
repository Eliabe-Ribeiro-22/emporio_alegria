<?php
function listar(){
	try{
		require_once './../../../config/config.php';
		$conn = conexaoDB();
	
		echo "string de conexão com sucesso. <BR>";


		$sql = "SELECT ID_CLIENTE, NOME_CLIENTE, TELEFONE_CLIENTE, EMAIL_CLIENTE, CIDADE_CLIENTE from CLIENTES";
		$result = $conn->query($sql);

		if(!$result){
		echo "0 results";
		}
		else if($result){
			foreach ($result as $key => $value) {
				echo "<a href='" . $value["ID_CLIENTE"] . "'>" . $value["ID_CLIENTE"] . "</a>";
				echo "O nome do cliente é: " . $value["NOME_CLIENTE"] . "<BR>";
				echo "O telefone do cliente é: ".  $value["TELEFONE_CLIENTE"] . "<BR>";
				echo "O email do cliente é: " . $value["EMAIL_CLIENTE"] . "<BR>";
				echo "A cidade do cliente é: " . $value["CIDADE_CLIENTE"] . "<BR>";
				echo "&#9998" . "<form method='POST'><button name='excluir_cliente'>🗑" . "</button><BR></form>";
			}
		}
	} catch(Exception $e){
		die("Não foi possivel se conectar ao banco de dados " . $e);
	}

}

?>