<a href="./produtos.php">Cadastrar novo produto</a>
<a href="../index.php">Voltar ao início</a>

PRODUTOS CADASTRADOS


<?php
//deseja realmente excluir o cliente? SIM OU Não 
// SQL DELETE FROM CLIENTES WHERE ID = id_produto_selected=[$key]
// se erro, informar mensagem ao usuário
// cliente deletado com sucesso

// se clicar no botão edit
// armazenar id
// pesquisar todos os dados com o id
// exibir dados do produto no form alterar_produtos.php

// SELECT NOME_PRODUTO, VALOR UNITÁRIO, QUANTIDADE ORDER BY NOME_PRODUTO ASC


if(isset($_POST['excluir_produto'])){
		try{
			require_once "./../../config/config.php";
			$conn = conexaoDB();
			echo "connection com sucesso";
			$sql = "DELETE FROM PRODUTOS WHERE PRODUTOS.ID_PRODUTO = 2";
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


	$sql = 'SELECT ID_PRODUTO, NOME_PRODUTO, VALOR_UNITARIO, QUANTIDADE FROM PRODUTOS';
	$result = $conn->query($sql);

	if($result){
		foreach ($result as $key => $value) {
			echo "<a href='" . $value["ID_PRODUTO"] . "'>" . $value["ID_PRODUTO"] . "</a>";
			echo "O nome do produto é: " . $value["NOME_PRODUTO"] . "<BR>";
			echo "O valor unitário do produto é: ".  $value["VALOR_UNITARIO"] . "<BR>";
			echo "A quantidade do produto" . $value["QUANTIDADE"] . "<BR>";
			echo "&#9998" . "<form method='POST'><button name='excluir_produto'>🗑" . "</button><BR></form>";
		}
	}

	else{
		echo "0 results";
	}
		}catch(PDOException $pe){
	die("Não foi possivel se conectar ao banco de dados $dbname :" . $pe->getMessage());
	}

?>
