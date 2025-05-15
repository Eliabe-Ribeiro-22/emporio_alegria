<?php 
	function conexaoDB(){
		$host = "localhost";
		$dbname = "alegria";
		$username = "root";
		$password= "";
		//$username = "emporio";
		//$password= "1234";

		try{
			$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
			echo "conexão com sucesso";

		}catch(PDOException $pe){
			die("Não foi possivel se conectar ao banco de dados $dbname :" . $pe->getMessage());
		}
}

?>