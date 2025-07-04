<head>
	<link rel="stylesheet" type="text/css" href="../../assets/css/styles.css">	
</head>

<body>
<header>cabeçalho</header>	
	<main class="align-main">
		<a href="./inserir_fornecedores.php">Cadastrar novo fornecedor</a>
		<a href="../../../index.php">Voltar ao início</a>

		<h1>FORNECEDORES CADASTRADOS</h1>
		<?php
		session_start();

		//deseja realmente excluir o cliente? SIM OU Não 
		// SQL DELETE FROM CLIENTES WHERE ID = id_produto_selected=[$key]
		// se erro, informar mensagem ao usuário
		// cliente deletado com sucesso

		// se clicar no botão edit
		// armazenar id
		// pesquisar todos os dados com o id
		// exibir dados do fornecedor no form alterar_fornecedores.php
		require_once "./listar_fornecedores.php";
		listar_fornecedores();
		?>
		</main>
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

<footer>
	rodape
</footer>	
</body>
