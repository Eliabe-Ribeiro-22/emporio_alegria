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
		<?php 
		$id_fornecedor = $_GET['id'];
		echo "id é: " .  $id_fornecedor;
		require_once "../../funcoes_php/pesquisar_fornecedor.php";
		$fornecedor = pesquisa_fornecedor($id_fornecedor);

		foreach ($fornecedor as $key => $value) {			
			// armazenando dados em variaveis
			$id_fornecedor = $value["ID_FORNECEDOR"];
			$nome_fornecedor = $value["NOME_FORNECEDOR"];
			$telefone_fornecedor = $value["TELEFONE_FORNECEDOR"];
			$email_fornecedor = $value["EMAIL_FORNECEDOR"];

			echo $id_fornecedor . $nome_fornecedor . $telefone_fornecedor . $email_fornecedor;
		}

		
		?>
		<h1>Edite um fornecedor</h1>
		<a href="../../../index.php">Voltar ao inicio</a>
		<form action="./atualizar_fornecedor.php" method="POST" onsubmit="return valida_fornecedores()">
			<label>Código:</label>
			<input type="text"disabled value="<?php echo $id_fornecedor ?>" name="codigo-fornecedor" id="codigo_fornecedor">

			<label>Nome:</label>
			<input type="text" name="nome_fornecedor" id="nome-fornecedor" value="<?php echo $nome_fornecedor ?>">

			<label>Telefone:</label>
			<input type="text" name="telefone_fornecedor" id="telefone-fornecedor" value="<?php echo $telefone_fornecedor ?>">

			<label>Email:</label>
			<input type="email" name="email_fornecedor" id="email-fornecedor" value="<?php echo $email_fornecedor ?>">

			
			<input type="submit" value="editar" name="editar">
		</form>
		<script type="text/javascript" src="../../assets/js/fornecedores.js"></script>
	</main>
</body>
</html>
