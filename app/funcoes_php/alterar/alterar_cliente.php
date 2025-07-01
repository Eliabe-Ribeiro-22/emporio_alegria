<?php
function update_cliente($id_cliente, $nome_cliente, $endereco_cliente, $telefone_cliente, $email_cliente, $cidade_cliente){
	try {
		if(isset($_POST["atualizar"])){
		require_once "./../../../../config/config.php";
		$conn = conexaoDB();
		$sql = 'UPDATE CLIENTES 
					SET NOME_CLIENTE = :NOME_CLIENTE, 
					ENDERECO_CLIENTE = :ENDERECO_CLIENTE, 
					TELEFONE_CLIENTE = :TELEFONE_CLIENTE,
					EMAIL_CLIENTE = :EMAIL_CLIENTE,
					CIDADE_CLIENTE = :CIDADE_CLIENTE
	 				WHERE ID_CLIENTE = :ID_CLIENTE;';
		$tmp = $conn->prepare($sql);
		$tmp->execute([
			':ID_CLIENTE' => $id_cliente,
			':NOME_CLIENTE' => $nome_cliente,
			':ENDERECO_CLIENTE' => $endereco_cliente,
			':TELEFONE_CLIENTE' => $telefone_cliente,
			':EMAIL_CLIENTE' => $email_cliente,
			':CIDADE_CLIENTE' => $cidade_cliente
		]);
		echo "cliente cadastrado com sucesso";
	}
		
	} catch (Exception $e) {
		echo "erro ao alterar cliente";	
	}
}


?>
