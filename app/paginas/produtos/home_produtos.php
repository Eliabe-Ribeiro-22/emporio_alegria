<a href="./produtos.php">Cadastrar novo produto</a>
<a href="../../../index.php">Voltar ao início</a>

PRODUTOS CADASTRADOS


<?php
session_start();


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
			require_once "./../../../../config/config.php";
			$conn = conexaoDB();
			echo "connection com sucesso";
			$sql = "DELETE FROM PRODUTOS WHERE PRODUTOS.ID_PRODUTO = 2";
			$tmp = $conn->query($sql);
			echo "registro excluído com sucesso";
		}catch(Exception $e){
			die("Problema ao excluir um registro." . $e);
		}

}

require_once "./listar_produtos.php";
listar_produtos();

?>
