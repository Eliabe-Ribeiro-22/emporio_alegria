<?php
if($_SERVER['REQUEST_METHOD'] == "GET"){
	echo "usuário não autorizado";
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
	echo "usuário autorizado";
	header("refresh: 5; home_produtos.php");
}
?>