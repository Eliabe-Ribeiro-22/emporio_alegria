<?php  
function pesquisa_fornecedor($id_fornecedor){
	try{
		require_once './../../../../../config/config.php';
		$conn = conexaoDB();
	
		echo "string de conexão com sucesso. <BR>";

		$sql ='SELECT * FROM fornecedores where id_fornecedor = :ID_FORNECEDOR';
		$tmp = $conn->prepare($sql);
		$tmp->execute([ "ID_FORNECEDOR" => $id_fornecedor,
		]);
		return $tmp;
	}catch(PDOException $e){
		echo "problema ao pesquisar_fornecedor";
	}
}
?>
