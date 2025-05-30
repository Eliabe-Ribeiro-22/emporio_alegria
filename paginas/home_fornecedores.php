<a href="./fornecedores.php">Cadastrar novo fornecedor</a>
<a href="../index.php">Voltar ao início</a>


FORNECEDORES CADASTRADOS
trash: 🗑

<?php

//deseja realmente excluir o cliente? SIM OU Não 
// SQL DELETE FROM CLIENTES WHERE ID = id_produto_selected=[$key]
// se erro, informar mensagem ao usuário
// cliente deletado com sucesso


// se clicar no botão edit
// armazenar id
// pesquisar todos os dados com o id
// exibir dados do fornecedor no form alterar_fornecedores.php


// SELECT NOME_FORNECEDOR, TELEFONE_FORNECEDOR, EMAIL_FORNECEDOR FROM FORNECEDORES ORDER BY NOME_FORNECEDOR_ASC
try{
	require_once './config.php';
	$conexao = conexaoDB();
	
	echo "string de conexão com sucesso. <BR>";


	$sql = "SELECT NOME_FORNECEDOR, TELEFONE_FORNECEDOR, EMAIL_FORNECEDOR FROM FORNECEDORES";
	$result = $conexao->query($sql);

	if($result){
		foreach ($result as $key => $value) {
			echo "O nome do fornecedor é: " . $value["NOME_FORNECEDOR"] . "<BR>";
			echo "O telefone do fornecedor é: " . $value["TELEFONE_FORNECEDOR"] . "<BR>";
			echo "O email do fornecedor é: ".  $value["EMAIL_FORNECEDOR"] . "<BR>";
			echo "&#9998" . "🗑" .  "<BR>";
		}
	}
	else{
		echo "0 results";
	}

		}catch(PDOException $pe){
	die("Não foi possivel se conectar ao banco de dados $dbname :" . $pe->getMessage());
	}


?>
