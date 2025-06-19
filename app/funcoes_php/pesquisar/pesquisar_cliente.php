<?php  
function pesquisa_cliente($id_cliente){
	try{
		require_once './../../../../../config/config.php';
		$conn = conexaoDB();
	
		echo "string de conexão com sucesso. <BR>";

		$sql = 'SELECT * FROM clientes WHERE id_cliente = :ID_CLIENTE';
		$tmp = $conn->prepare($sql);
		$tmp->execute([ "ID_CLIENTE" => $id_cliente,
		]);
		return $tmp;
	}catch(PDOException $e){
		echo "problema ao pesquisar_cliente";
	}
}
?>
