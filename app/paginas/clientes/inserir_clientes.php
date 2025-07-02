<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../assets/css/styles.css">
	<title>Clientes</title>
</head>
<body>
	<header>
		<h1>cabeçalho</h1>
	</header>
	
	<main>
		<h1>Cadastre um cliente</h1>
		<a href="../../../index.php">Voltar ao inicio</a>
		<form action="./salvar.php" method="POST" onsubmit="return valida_clientes()" id="inserir-cliente">
			<label id="banana-cliente">Código:</label>
			<input type="text" value="0" name="codigo_cliente" id="codigo_cliente">

			<label id="banana-cliente">Nome:</label>
			<input type="text" name="nome_cliente" id="nome-cliente">

			<label id="banana-cliente">Endereço:</label>
			<input type="text" name="endereco_cliente" id="endereco-cliente">

			<label id="banana-cliente">Telefone:</label>
			<input type="text" name="telefone_cliente" id="telefone-cliente">

			<label id="banana-cliente">Email:</label>
			<input type="email" name="email_cliente" id="email-cliente">

			<label id="banana-cliente">Cidade:</label>
			<input type="text" name="cidade_cliente" id="cidade-cliente">
	
			<!--input type="submit" value="Alterar"-->
			<input type="submit" value="cadastrar" name="cadastrar">
		</form>
	</main>
	
	<footer>
		rodapé
	<script type="text/javascript" src="../../assets/js/clientes.js"></script>		
	</footer>
</body>
</html>
