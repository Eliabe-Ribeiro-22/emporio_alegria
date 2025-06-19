<?php 
function listar_produtos(){
	try{
		require_once "../../funcoes_php/listar/listar_produtos.php";
		listar();
	}catch(Exception $e){
		echo "erro ao listar_produtos" . $e;
	}
}
?>