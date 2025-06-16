<?php  
function pesquisa_cliente($id_cliente){
	try{
		require_once './../../../../config/config.php';
		$conn = conexaoDB();
	
		echo "string de conexão com sucesso. <BR>";

		$sql = "select * from clientes where id_cliente = $id_fornecedor";
		$tmp = $conn->prepare($sql);
		$tmp->execute([ "ID_CLIENTE" => $id_cliente,
		]);
	}catch(PDOException $e){
		echo "problema ao pesquisar_cliente";
	}
}
?>
