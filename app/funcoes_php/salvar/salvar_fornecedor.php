<?php
session_start();
function salvar_fornecedor($nome_fornecedor="Junior", $email_fornecedor="junior@gmail.com", $telefone_fornecedor="49988477611"){
	if (isset($_POST['cadastrar'])) {
	
		try{
			require_once "./../../../../../config/config.php";
			$conn = conexaoDB();
			$sql = 'INSERT INTO FORNECEDORES(NOME_FORNECEDOR, EMAIL_FORNECEDOR, TELEFONE_FORNECEDOR)'.'VALUES(:NOME_FORNECEDOR, :EMAIL_FORNECEDOR, :TELEFONE_FORNECEDOR )';
			$tmp = $conn->prepare($sql);
			$tmp->execute([
				':NOME_FORNECEDOR' => $nome_fornecedor,
				':TELEFONE_FORNECEDOR' => $telefone_fornecedor,
				':EMAIL_FORNECEDOR' => $email_fornecedor
			]);
		echo "fornecedor cadastrado com sucesso";
		echo "salvou ok";
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