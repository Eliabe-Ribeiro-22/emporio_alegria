<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fornecedor</title>
</head>
<body>
	<header>
	cabeçalho
	</header>

	<main>
		<?php echo "id é: " .  $_GET['id'];	 ?>
		<h1>Edite um fornecedor</h1>
		<a href="../../../index.php">Voltar ao inicio</a>
		<form action="./atualizar_fornecedor.php" method="POST" onsubmit="return valida_fornecedores()">
			<label>Código:</label>
			<input type="text"disabled value="0" name="codigo-fornecedor" id="codigo_fornecedor">

			<label>Nome:</label>
			<input type="text" name="nome_fornecedor" id="nome-fornecedor">

			<label>Telefone:</label>
			<input type="text" name="telefone_fornecedor" id="telefone-fornecedor">

			<label>Email:</label>
			<input type="email" name="email_fornecedor" id="email-fornecedor">

			
			<input type="submit" value="editar" name="editar">
		</form>
		<script type="text/javascript" src="../../assets/js/fornecedores.js"></script>
	</main>
</body>
</html>
