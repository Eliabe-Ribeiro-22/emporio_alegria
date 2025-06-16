<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clientes</title>
</head>
<body>
	<header>
		Cabeçalho
	</header>
	
	<main>
		<h1>Edite um cliente</h1>
		<a href="../../../index.php">Voltar ao inicio</a>
		<form action="./salvar.php" method="POST" onsubmit="return valida_clientes()">
			<label>Código:</label>
			<input type="text"disabled value="0" name="codigo_cliente" id="codigo-cliente">

			<label>Nome:</label>
			<input type="text" name="nome_cliente" id="nome-cliente">

			<label>Endereço:</label>
			<input type="text" name="endereco_cliente" id="endereco-cliente">

			<label>Telefone:</label>
			<input type="text" name="telefone_cliente" id="telefone-cliente">

			<label>Email:</label>
			<input type="email" name="email_cliente" id="email-cliente">

			<label>Cidade:</label>
			<input type="text" name="cidade_cliente" id="cidade-cliente">
	
			<input type="submit" value="editar" name="editar">
		</form>
	</main>
	
	<footer>
		rodapé
	<script type="text/javascript" src="../../assets/js/clientes.js"></script>		
	</footer>
</body>
</html>
