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
		<?php 
		$id_cliente = $_GET['id'];
		echo "id é: " .  $id_cliente;	
		//sql = select * from clientes where id_cliente = $id_cliente	
		
		require_once "../../funcoes_php/pesquisar_cliente.php";
		$cliente = pesquisa_cliente($id_cliente);
		foreach ($cliente as $key => $value) {
			echo "ID DO CLIENTE É: " .  $value["ID_CLIENTE"];
			echo "Nome do Cliente é: ". $value["NOME_CLIENTE"];
			echo "ENDERECO DO CLIENTE É: " . $value["ENDERECO_CLIENTE"];
			echo "TELEFONE DO CLIENTE É: " . $value["TELEFONE_CLIENTE"];
			echo "EMAIL DO CLIENTE É: " . $value["EMAIL_CLIENTE"];
			echo "CIDADE DO CLIENTE É: " . $value["CIDADE_CLIENTE"];
		}
		 
		?>
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
