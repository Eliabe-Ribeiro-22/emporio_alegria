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

try{
	require_once './../../config/config.php';
	$conexao = conexaoDB();
	
	echo "string de conexão com sucesso. <BR>";


	$sql = "SELECT NOME_CLIENTE, TELEFONE_CLIENTE, EMAIL_CLIENTE, CIDADE_CLIENTE from CLIENTES";
	$result = $conexao->query($sql);

	if($result){
		foreach ($result as $key => $value) {
			echo "O nome do cliente é: " . $value["NOME_CLIENTE"] . "<BR>";
			echo "O telefone do cliente é: ".  $value["TELEFONE_CLIENTE"] . "<BR>";
			echo "O email do cliente é" . $value["EMAIL_CLIENTE"] . "<BR>";
			echo "A cidade do cliente é: " . $value["CIDADE_CLIENTE"] . "<BR>";
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