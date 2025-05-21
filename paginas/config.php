<?php 
	function conexaoDB(){
		$host = "localhost";
		$dbname = "alegria";
		$username = "root";
		$password= "";
		//$username = "emporio";
		//$password= "1234";

		try{
			return $produtos = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
			echo "conexão com sucesso";

		$_SESSION['produtos'] = $produtos;

		}catch(PDOException $pe){
			//die("Não foi possivel se conectar ao banco de dados $dbname :" . $pe->getMessage());
			return("Não foi possivel se conectar ao banco de dados $dbname :" . $pe->getMessage());
		}
}

?>