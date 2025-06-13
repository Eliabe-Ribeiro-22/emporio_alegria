<a href="./inserir_clientes.php">Cadastrar novo cliente</a>
<a href="../../../index.php">Voltar ao início</a>

CLIENTES CADASTRADOS

<?php
session_start(); 
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
			require_once "./../../../config/config.php";
			$conn = conexaoDB();
			echo "connection com sucesso";
			$sql = "DELETE FROM CLIENTES WHERE CLIENTES.ID_CLIENTE = 1";
			$tmp = $conn->query($sql);
			echo "registro excluído com sucesso";
		}catch(Exception $e){
			die("Problema ao excluir um registro." . $e);
		}

}

require_once "./listar_clientes.php";
listar_clientes();
?>