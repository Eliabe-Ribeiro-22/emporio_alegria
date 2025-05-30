<?php 
	function conexaoDB(){
		$host = "localhost";
		$dbname = "alegria";
		$username = "root";
		$password= "";
		
		try{
			return $conexao = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
			echo "conexão com sucesso";

		$_SESSION['conexao'] = $conexao;

		}catch(PDOException $pe){
			//die("Não foi possivel se conectar ao banco de dados $dbname :" . $pe->getMessage());
			return("Não foi possivel se conectar ao banco de dados $dbname :" . $pe->getMessage());
		}
}
?>