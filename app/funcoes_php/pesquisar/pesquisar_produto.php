<?php  
function pesquisa_produto($id_produto){
	try{
		require_once './../../../../config/config.php';
		$conn = conexaoDB();
	
		echo "string de conexão com sucesso. <BR>";

		$sql = 'SELECT * FROM produtos WHERE id_produto = :ID_PRODUTO';
		$tmp = $conn->prepare($sql);
		$tmp->execute([ "ID_PRODUTO" => $id_produto,
		]);
		return $tmp;
	}catch(PDOException $e){
		echo "problema ao pesquisar_produto";
	}
}
?>
