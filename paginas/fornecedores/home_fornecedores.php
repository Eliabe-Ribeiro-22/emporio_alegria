<a href="./fornecedores.php">Cadastrar novo fornecedor</a>
<a href="../../index.php">Voltar ao início</a>


FORNECEDORES CADASTRADOS

<?php

//deseja realmente excluir o cliente? SIM OU Não 
// SQL DELETE FROM CLIENTES WHERE ID = id_produto_selected=[$key]
// se erro, informar mensagem ao usuário
// cliente deletado com sucesso

// se clicar no botão edit
// armazenar id
// pesquisar todos os dados com o id
// exibir dados do fornecedor no form alterar_fornecedores.php

if(isset($_POST['excluir_fornecedor'])){
		try{
			require_once "./../../../config/config.php";
			$conn = conexaoDB();
			echo "connection com sucesso";
			$sql = "DELETE FROM FORNECEDORES WHERE FORNECEDORES.ID_FORNECEDOR = 1 ";
			$tmp = $conn->query($sql);
			echo "registro excluído com sucesso";
		}catch(Exception $e){
			die("Problema ao excluir um registro." . $e);
		}

}


require_once "listar_fornecedores.php";
listar_fornecedores();
?>
