<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../assets/css/styles.css">
	<title>Fornecedor</title>
</head>
<body>
	<header>
		<h1>cabeçalho</h1>
	
	</header>

	<main>
		<?php 
		$id_fornecedor = $_GET['id'];
		require_once "../../funcoes_php/pesquisar/pesquisar_fornecedor.php";
		$fornecedor = pesquisa_fornecedor($id_fornecedor);

		// laço para decompor os dados do fornecedor pesquisado
		foreach ($fornecedor as $key => $value) {			
			// armazenando dados em variaveis
			$id_fornecedor = $value["ID_FORNECEDOR"];
			$nome_fornecedor = $value["NOME_FORNECEDOR"];
			$telefone_fornecedor = $value["TELEFONE_FORNECEDOR"];
			$email_fornecedor = $value["EMAIL_FORNECEDOR"];
		}

		
		?>
		<h1>Edite um fornecedor</h1>
		<a href="../../../index.php">Voltar ao inicio</a>
		<form action="./update_fornecedor.php" method="POST" onsubmit="return valida_fornecedores()">
			<label>Código:</label>
			<input type="text" value="<?php echo $id_fornecedor ?>" name="id_fornecedor" id="id_fornecedor">

			<label id="banana-fornecedor">Nome:</label>
			<input type="text" name="nome_fornecedor" id="nome-fornecedor" value="<?php echo $nome_fornecedor ?>">

			<label id="banana-fornecedor">Telefone:</label>
			<input type="text" name="telefone_fornecedor" id="telefone-fornecedor" value="<?php echo $telefone_fornecedor ?>">

			<label id="banana-fornecedor">Email:</label>
			<input type="email" name="email_fornecedor" id="email-fornecedor" value="<?php echo $email_fornecedor ?>">

			
			<input type="submit" value="atualizar" name="atualizar">
		</form>
		<script type="text/javascript" src="../../assets/js/fornecedores.js"></script>
	</main>
</body>
</html>
