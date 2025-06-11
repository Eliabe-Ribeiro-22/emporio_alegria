<?php 
session_start();

if(isset($_POST['excluir_fornecedor'])){
		try{
			require_once "./../../../../config/config.php";
			$conn = conexaoDB();
			echo "connection com sucesso";
			$sql = "DELETE FROM FORNECEDORES WHERE FORNECEDORES.ID_FORNECEDOR = 1 ";
			$tmp = $conn->query($sql);
			echo "registro excluído com sucesso";
		}catch(Exception $e){
			die("Problema ao excluir um registro." . $e);
		}

}
?>