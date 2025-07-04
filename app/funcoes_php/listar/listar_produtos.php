<?php
function listar(){
	try{
		require_once './../../../../config/config.php';
		$conn = conexaoDB();
	
		echo "string de conexão com sucesso. <BR>";

		$sql = 'SELECT ID_PRODUTO, NOME_PRODUTO, VALOR_UNITARIO, QUANTIDADE FROM PRODUTOS';
		$result = $conn->query($sql);

		if (isset($result)){
			echo "<table>";
			echo "<tr>";
			echo "<th>Nome</th>";
			echo "<th>Valor Unitário</th>";
			echo "<th>Quantidade</th>";
			echo "<th>Editar</th>";
			echo "<th>Excluir</th>";
			echo "</tr>";
			foreach ($result as $key => $value) {
				echo "<tr>";
				echo "<td>" . $value["NOME_PRODUTO"] . "</td>";
				echo "<td>" . $value["VALOR_UNITARIO"] . "</td>";
				echo "<td>" . $value["QUANTIDADE"] . "</td>";
				echo "<td>" . "<a href='editar_produto.php?id=" . $value['ID_PRODUTO'] . "' style='background: #000'>&#9998</a>" . "</td>";
				echo "<td>" . 
					"<form  method='POST' action='./excluir_produto.php' >
						
						<input name='id_produto' value='" . $value['ID_PRODUTO'] . "'style=';'> 

						<button name='excluir_produto' style='background: #000;'>
						🗑
						</button>
					</form>"
					 . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}else{
		echo "Não há clientes cadastrados. <a href='../../paginas/clientes/clientes.php'>Cadastre um agora mesmo</a>!";
		}
			

	}catch(PDOException $pe){
		die("Não foi possivel se conectar ao banco de dados $dbname :" . $pe->getMessage());
	}

}

?>