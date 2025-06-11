<?php
function salvar_cliente($nome_cliente = "Eliabe", $endereco_cliente="30 de marco", $telefone_cliente = "49988426048", $email_cliente="eliabe@gmail.com", $cidade_cliente="pan"){

		echo $nome_cliente . "<br>";
		echo $endereco_cliente . "<br>";
		echo $telefone_cliente . "<br>";
		echo $email_cliente . "<br>";
		echo $cidade_cliente . "<br>";
	
		// INSERT INTO CLIENTES(NOME_CLIENTE, ENDERECO_CLIENTE, TELEFONE_CLIENTE, EMAIL_CLIENTE, CIDADE_CLIENTE) VALUES (
	// $nome_cliente, $endereco_cliente, $telefone_cliente, $emaiL_cliente, $cidade_cliente

		require_once "./../../../config/config.php";
		$conn = conexaoDB();
		$sql = 'INSERT INTO CLIENTES(NOME_CLIENTE, ENDERECO_CLIENTE, TELEFONE_CLIENTE, EMAIL_CLIENTE, CIDADE_CLIENTE)' . 'VALUES (:NOME_CLIENTE, :ENDERECO_CLIENTE, :TELEFONE_CLIENTE, :EMAIL_CLIENTE, :CIDADE_CLIENTE)';
		$tmp = $conn->prepare($sql);
		$tmp->execute([
			':NOME_CLIENTE' => $nome_cliente,
			':ENDERECO_CLIENTE' => $endereco_cliente,
			':TELEFONE_CLIENTE' => $telefone_cliente,
			':EMAIL_CLIENTE' => $email_cliente,
			':CIDADE_CLIENTE' => $cidade_cliente
		]);
		echo "cliente cadastrado com sucesso";

}


?>