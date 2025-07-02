<?php
function update_produto($id_produto, $nome_produto="Cebola", $est_min_produto="1", $est_max_produto="100000", $valor_unit_produto="8,0", $qtdade_produto="1000"){
	if(isset($_POST["atualizar"])){
		try{
			// string conexao
			require_once './../../../../config/config.php';
			$conn = conexaoDB();

			$sql = 'UPDATE PRODUTOS
						SET NOME_PRODUTO = :NOME_PRODUTO, 
						ESTOQUE_MINIMO = :ESTOQUE_MINIMO, 
						ESTOQUIE_MAXIMO = :ESTOQUIE_MAXIMO,
						VALOR_UNITARIO = :VALOR_UNITARIO,
						QUANTIDADE = :QUANTIDADE
	 					WHERE ID_PRODUTO = :ID_PRODUTO;';
			$tmp = $conn->prepare($sql);
			$tmp->execute([ 
				':ID_PRODUTO' => $id_produto, 
				':NOME_PRODUTO' => $nome_produto, 
				':ESTOQUE_MINIMO' => $est_min_produto,
				':ESTOQUE_MAXIMO' => $est_max_produto,
				':VALOR_UNITARIO' => $valor_unit_produto,
				':QUANTIDADE' => $qtdade_produto
			]);
			echo "produto alterado no banco com sucesso";
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