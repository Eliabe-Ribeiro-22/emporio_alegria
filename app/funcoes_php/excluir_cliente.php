<?php 
session_start();
function excluir($id){
	if(isset($_POST['excluir_cliente'])){
		try{
			require_once "./../../../../config/config.php";
			$conn = conexaoDB();
			echo "connection com sucesso";
			$sql = "DELETE FROM CLIENTES WHERE CLIENTES.ID_CLIENTE = " .  $id . ";";
			$tmp = $conn->query($sql);
			echo "registro excluído com sucesso";
		}
		catch(Exception $e){
			die("Problema ao excluir um registro." . $e);
		}	
	}
}
?>