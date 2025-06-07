<a href="./clientes.php">Cadastrar novo cliente</a>
<a href="../index.php">Voltar ao início</a>

CLIENTES CADASTRADOS

<?php 
//	SELECT NOME_CLIENTE, TELEFONE_CLIENTE, EMAIL_CLIENTE, CIDADE_CLIENTE from CLIENTES order by NOME_CLIENTE_asc

//deseja realmente excluir o cliente? SIM OU Não 
// SQL DELETE FROM CLIENTES WHERE ID = id_produto_selected=[$key]
// se erro, informar mensagem ao usuário
// cliente deletado com sucesso


// se clicar no botão edit
// armazenar id
// pesquisar todos os dados com o id
// exibir dados do cliente no form alterar_clientes.php
if(isset($_POST['excluir_cliente'])){
		try{
			require_once "./../../config/config.php";
			$conn = conexaoDB();
			echo "connection com sucesso";
			$sql = "DELETE FROM CLIENTES WHERE CLIENTES.ID_CLIENTE = 1";
			$tmp = $conn->query($sql);
			echo "registro excluído com sucesso";
		}catch(Exception $e){
			die("Problema ao excluir um registro." . $e);
		}

}




try{
	require_once './../../config/config.php';
	$conn = conexaoDB();
	
	echo "string de conexão com sucesso. <BR>";


	$sql = "SELECT ID_CLIENTE, NOME_CLIENTE, TELEFONE_CLIENTE, EMAIL_CLIENTE, CIDADE_CLIENTE from CLIENTES";
	$result = $conn->query($sql);

	if($result){
		foreach ($result as $key => $value) {
			echo "<a href='" . $value["ID_CLIENTE"] . "'>" . $value["ID_CLIENTE"] . "</a>";
			echo "O nome do cliente é: " . $value["NOME_CLIENTE"] . "<BR>";
			echo "O telefone do cliente é: ".  $value["TELEFONE_CLIENTE"] . "<BR>";
			echo "O email do cliente é" . $value["EMAIL_CLIENTE"] . "<BR>";
			echo "A cidade do cliente é: " . $value["CIDADE_CLIENTE"] . "<BR>";
			echo "&#9998" . "<form method='POST'><button name='excluir_cliente'>🗑" . "</button><BR></form>";
		}
	}
	else{
		echo "0 results";
	}
		}catch(Exception $e){
	die("Não foi possivel se conectar ao banco de dados " . $e);
	}

?>