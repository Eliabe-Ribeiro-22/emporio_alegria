<?php
function listar(){
	try{
		require_once './../../../../config/config.php';
		$conn = conexaoDB();
	
		echo "string de conexão com sucesso. <BR>";

		$sql = "SELECT ID_CLIENTE, NOME_CLIENTE, TELEFONE_CLIENTE, EMAIL_CLIENTE, CIDADE_CLIENTE from CLIENTES";
		$result = $conn->query($sql);

		if(isset($result)){
			echo "<table>";
			echo "<tr>";
			echo "<th>Nome</th>";
			echo "<th>Telefone</th>";
			echo "<th>Email</th>";
			echo "<th>Cidade</th>";
			echo "<th>Editar</th>";
			echo "<th>Excluir</th>";
			echo "</tr>";

			foreach ($result as $key => $value) {
				echo "<tr>";
			echo "<td>" . $value["NOME_CLIENTE"] . "</td>";
			echo "<td>" . $value["TELEFONE_CLIENTE"] . "</td>";
			echo "<td>" .  $value["EMAIL_CLIENTE"] . "</td>";
			echo "<td>" .  $value["CIDADE_CLIENTE"] . "</td>";
			echo "<td>" . "<a href='editar_cliente.php?id=". $value["ID_CLIENTE"] . "'>" . "&#9998" . "</a>"  . "</td>";
			echo "<td>" . "<form  method='POST' action='./excluir_cliente.php' >" . "<input name='id_cliente' value='" . $value["ID_CLIENTE"] . "'> <button name='excluir_cliente' id='button-banana-cliente'>🗑" . "</button><BR></form>"  . "</td>";

				//echo "<a href='" . $value["ID_CLIENTE"] . "'>" . $value["ID_CLIENTE"] . "</a>";
				//echo "O nome do cliente é: " . $value["NOME_CLIENTE"] . "<BR>";
				//echo "O telefone do cliente é: ".  $value["TELEFONE_CLIENTE"] . "<BR>";
				//echo "O email do cliente é: " . $value["EMAIL_CLIENTE"] . "<BR>";
				//echo "A cidade do cliente é: " . $value["CIDADE_CLIENTE"] . "<BR>";
				//echo "<a href='editar_cliente.php?id=". $value["ID_CLIENTE"] . "'>" . "&#9998" . "</a>";
				//echo "<form  method='POST' action='./excluir_cliente.php' >" . "<input name='id_cliente' value='" . $value["ID_CLIENTE"] . "'> <button name='excluir_cliente' id='button-banana-cliente'>🗑" . "</button><BR></form>";
			}
			echo "</table>";
		}else{
		echo "Não há clientes cadastrados. <a href='../../paginas/clientes/clientes.php'>Cadastre um agora mesmo</a>!";
		}
		
	} catch(Exception $e){
		die("Não foi possivel se conectar ao banco de dados " . $e);
	}

}

?>