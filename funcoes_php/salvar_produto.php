<?php
function salvar_produto($nome_produto="Cebola", $est_min_produto="1", $est_max_produto="100000", $valor_unit_produto="8,0", $qtdade_produto="1000"){
	if(isset($_POST["cadastrar"])){
		try{
			echo $nome_produto . "<br>";
			echo $est_min_produto . "<br>";
			echo $est_max_produto . "<br>";
			echo $valor_unit_produto . "<br>";
			echo $qtdade_produto . "<br>";
		
			// string conexao
			require_once './../../../config/config.php';
			$conn = conexaoDB();

			// inserir novo cadastro
			$sql = 
				'INSERT INTO PRODUTOS(NOME_PRODUTO, ESTOQUE_MINIMO, ESTOQUE_MAXIMO, VALOR_UNITARIO, QUANTIDADE)' .
				'VALUES(:NOME_PRODUTO, :ESTOQUE_MINIMO, :ESTOQUE_MAXIMO, :VALOR_UNITARIO, :QUANTIDADE)';
	

			$tmp = $conn->prepare($sql);
			echo "deu certo";
			$tmp->execute([ 
				':NOME_PRODUTO' => $nome_produto, 
				':ESTOQUE_MINIMO' => $est_min_produto,
				':ESTOQUE_MAXIMO' => $est_max_produto,
				':VALOR_UNITARIO' => $valor_unit_produto,
				':QUANTIDADE' => $qtdade_produto
			]);
			echo "produto cadastrado no banco com sucesso";
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