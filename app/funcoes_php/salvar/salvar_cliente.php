<?php
session_start();
function salvar_cliente($nome_cliente, $endereco_cliente, $telefone_cliente, $email_cliente, $cidade_cliente){
	
		require_once "./../../../../config/config.php";
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