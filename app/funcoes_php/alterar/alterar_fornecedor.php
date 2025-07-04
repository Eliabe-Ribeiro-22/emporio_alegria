<?php
session_start();
function update_fornecedor($id_fornecedor, $nome_fornecedor, $telefone_fornecedor, $email_fornecedor){
	if (isset($_POST['atualizar'])) {
		try{
			require_once "./../../../../config/config.php";
			$conn = conexaoDB();
			$sql = 'UPDATE FORNECEDORES 
					SET NOME_FORNECEDOR = :NOME_FORNECEDOR, 
					TELEFONE_FORNECEDOR = :TELEFONE_FORNECEDOR,
					EMAIL_FORNECEDOR = :EMAIL_FORNECEDOR
					WHERE ID_FORNECEDOR = :ID_FORNECEDOR ;';
			$tmp = $conn->prepare($sql);
			$tmp->execute([
				':ID_FORNECEDOR' => $id_fornecedor,
				':NOME_FORNECEDOR' => $nome_fornecedor,
				':TELEFONE_FORNECEDOR' => $telefone_fornecedor,
				':EMAIL_FORNECEDOR' => $email_fornecedor
			]);
		echo "fornecedor alterado com sucesso";
		}catch (PDOException $e) {
        	// status da operacao de insercao de dados no SQL
        	$status = false;
        	echo "erro ao cadastrar" . $e;
    	} catch (Exception $e) {
	        // status da operacao de insercao de dados no SQL
        	$status = false;
        	echo "erro ao cadastrar" . $e;
    	}
	}
}
?>