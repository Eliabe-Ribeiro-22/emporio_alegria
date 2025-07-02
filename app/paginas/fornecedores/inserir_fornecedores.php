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
	cabeçalho
	</header>

	<main>
		<h1>Cadastre um fornecedor</h1>
		<a href="../../../index.php">Voltar ao inicio</a>
		<form action="./salvar.php" method="POST" onsubmit="return valida_fornecedores()" id="inserir-fornecedor">
			
				<label id="banana-fornecedor">Código:</label>
				<input type="text" value="0" name="codigo_fornecedor" id="codigo_fornecedor">
			
			<label id="banana-fornecedor">Nome da empresa</label>
			<input type="text" name="nome_fornecedor" id="nome-fornecedor">

			<label id="banana-fornecedor">Telefone:</label>
			<input type="text" name="telefone_fornecedor" id="telefone-fornecedor">

			<label id="banana-fornecedor">Email:</label>
			<input type="email" name="email_fornecedor" id="email-fornecedor">

			
			<input type="submit" value="cadastrar" name="cadastrar" id="button-banana-fornecedor">
		</form>
		<script type="text/javascript" src="../../assets/js/fornecedores.js"></script>
	</main>
</body>
</html>
