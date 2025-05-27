<a href="./produtos.php">Cadastrar novo produto</a>
<a href="../index.php">Voltar ao início</a>

PRODUTOS CADASTRADOS

trash: 🗑
edit: &#9998;

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

try{
	require_once './config.php';
	$conexao = conexaoDB();
	
	echo "string de conexão com sucesso.olhe o enter";


	$sql = "SELECT NOME_PRODUTO, VALOR_UNITARIO, QUANTIDADE FROM PRODUTOS";
	$result = $conexao->query($sql);

	if($result){
		foreach ($result as $key => $value) {
			echo $value["NOME_PRODUTO"];
			echo $value["VALOR_UNITARIO"];
			echo $value["QUANTIDADE"];
		}
	}
	else{
		echo "0 results";
	}

		}catch(PDOException $pe){
	die("Não foi possivel se conectar ao banco de dados $dbname :" . $pe->getMessage());
	}

?>
