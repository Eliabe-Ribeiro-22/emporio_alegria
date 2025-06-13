<?php 
session_start();
function excluir($id){
	if(isset($_POST['excluir_produto'])){
		try{
			require_once "./../../../../config/config.php";
			$conn = conexaoDB();
			echo "connection com sucesso";
			//$sql = "DELETE FROM FORNECEDORES WHERE FORNECEDORES.ID_FORNECEDOR = " . $id . ";";
			$sql = "DELETE FROM PRODUTOS WHERE PRODUTOS.ID_PRODUTO = " . $id . ";";
			$tmp = $conn->query($sql);
			echo "registro excluído com sucesso";
		}
		catch(Exception $e){
			die("Problema ao excluir um registro." . $e);
		}
	}
}
?>