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
	
	
	<footer>rodape</footer>	
	</main>
	
</body>


