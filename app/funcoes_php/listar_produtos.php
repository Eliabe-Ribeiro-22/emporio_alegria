<?php
function listar(){
	try{
		require_once './../../../../config/config.php';
		$conn = conexaoDB();
	
		echo "string de conexão com sucesso. <BR>";

		$sql = 'SELECT ID_PRODUTO, NOME_PRODUTO, VALOR_UNITARIO, QUANTIDADE FROM PRODUTOS';
		$result = $conn->query($sql);

		if (isset($result)){
			foreach ($result as $key => $value) {
				//echo "<a href='" . $value["ID_PRODUTO"] . "'>" . $value["ID_PRODUTO"] . "</a>";
				echo "O nome do produto é: " . $value["NOME_PRODUTO"] . "<BR>";
				echo "O valor unitário do produto é: ".  $value["VALOR_UNITARIO"] . "<BR>";
				echo "A quantidade do produto é: " . $value["QUANTIDADE"] . "<BR>";
				echo "<a href='editar_produto.php?id=". $value["ID_PRODUTO"] . "'>" . "&#9998" . "</a>";
				echo "<form  method='POST' action='excluir_produto.php' >" . "<input name='id_produto' value='" . $value['ID_PRODUTO'] . "'> <button name='excluir_produto'>🗑" . "</button><BR></form>";
			}
		}else{
		echo "Não há clientes cadastrados. <a href='../paginas/clientes/clientes.php'>Cadastre um agora mesmo</a>!";
		}
			

	}catch(PDOException $pe){
		die("Não foi possivel se conectar ao banco de dados $dbname :" . $pe->getMessage());
	}

}

?>