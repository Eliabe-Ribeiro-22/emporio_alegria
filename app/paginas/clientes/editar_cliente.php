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
		Cabeçalho
	</header>
	
	<main>
		<?php 
		$id_cliente = $_GET['id'];
		
		require_once "../../funcoes_php/pesquisar/pesquisar_cliente.php";
		$cliente = pesquisa_cliente($id_cliente);
		
		foreach ($cliente as $key => $value) {
			
			// armazenando dados em variaveis
			$id_cliente = $value["ID_CLIENTE"];
			$nome_cliente = $value["NOME_CLIENTE"];
			$endereco_cliente = $value["ENDERECO_CLIENTE"];
			$telefone_cliente = $value["TELEFONE_CLIENTE"];
			$email_cliente = $value["EMAIL_CLIENTE"];
			$cidade_cliente = $value["CIDADE_CLIENTE"];
		}
		 
		?>
		<h1>Edite um cliente</h1>
		<a href="../../../index.php">Voltar ao inicio</a>
		<form action="./update_cliente.php" method="POST" onsubmit="return valida_clientes()">
			<label>Código:</label>
			<input type="text" value="<?php echo $id_cliente ?>" name="id_cliente" id="id_cliente">

			<label>Nome:</label>
			<input type="text" name="nome_cliente" id="nome-cliente" value="<?php echo $nome_cliente ?>">

			<label>Endereço:</label>
			<input type="text" name="endereco_cliente" id="endereco-cliente" value="<?php echo $endereco_cliente ?>">

			<label>Telefone:</label>
			<input type="text" name="telefone_cliente" id="telefone-cliente" value="<?php echo $telefone_cliente ?>">

			<label>Email:</label>
			<input type="email" name="email_cliente" id="email-cliente" value="<?php echo $email_cliente ?>">

			<label>Cidade:</label>
			<input type="text" name="cidade_cliente" id="cidade-cliente" value="<?php echo $cidade_cliente ?>">
	
			<input type="submit" value="atualizar" name="atualizar">
		</form>
	</main>
	
	<footer>
		rodapé
	<script type="text/javascript" src="../../assets/js/clientes.js"></script>		
	</footer>
</body>
</html>
