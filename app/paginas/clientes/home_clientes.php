<head>
	<link rel="stylesheet" type="text/css" href="../../assets/css/styles.css">
	
</head>
<body>
<header>cabeçalho</header>
	<main class="align-main">
	<h1>cabeçalho</h1>
	<a href="./inserir_clientes.php">Cadastrar novo cliente</a>
	<a href="../../../index.php">Voltar ao início</a>

	<h1>CLIENTES CADASTRADOS</h1>

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
require_once "./listar_clientes.php";
listar_clientes();
?>
	<table>
			<tr>
				<th>Nome</th>
				<th>Telefone</th>
				<th>Email</th>
			</tr>
			<tr>
				<td>ELiabe</td>
				<td>049 9 9837-9858</td>
				<td>eliaberibeiro06@gmail.com</td>
			</tr>
	</table>
</main>
<footer>rodape</footer>

</body>