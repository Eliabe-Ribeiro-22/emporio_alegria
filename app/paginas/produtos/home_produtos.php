<head>
	<link rel="stylesheet" type="text/css" href="../../assets/css/styles.css">	
</head>

<body>
	<header>cabeçalho</header>
	<main class="align-main">
			<h1>PRODUTOS CADASTRADOS</h1>
	<a href="./inserir_produtos.php">Cadastrar novo produto</a>
	<a href="../../../index.php">Voltar ao início</a>
	</main>
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
		require_once "./listar_produtos.php";
		listar_produtos();
	?>
	
	<table>
			<tr>
				<th>Nome</th>
				<th>Valor Unitário</th>
				<th>Quantidade</th>
				<th>Editar</th>
				<th>Excluir</th>
			</tr>
			<tr>
				<td>ALho</td>
				<td>10,98</td>
				<td>100</td>
				<td>
					<a href='editar_produto.php?id=14' style="background: #000">&#9998</a>
				</td>
				<td>
					<form  method='POST' action='./excluir_produto.php' >
						<input name='id_produto' value="15" style='display: none;'> 
						<button name='excluir_produto' style="background: #000;">🗑</button>
					</form>
				</td>
			</tr>
	</table>

	<footer>rodape</footer>	
	</main>
	
</body>


