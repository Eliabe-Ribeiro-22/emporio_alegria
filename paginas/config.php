<?php 
	function conexaoDBPRODUTOS(){
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

	function conexaoDBCLIENTES(){
		$host = "localhost";
		$dbname = "alegria";
		$username = "root";
		$password= "";
		//$username = "emporio";
		//$password= "1234";

		try{
			return $clientes = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
			echo "conexão com sucesso";

		$_SESSION['clientes'] = $clientes;

		}catch(PDOException $pe){
			//die("Não foi possivel se conectar ao banco de dados $dbname :" . $pe->getMessage());
			return("Não foi possivel se conectar ao banco de dados $dbname :" . $pe->getMessage());
		}
	}


	function conexaoDBFORNECEDORES(){
		$host = "localhost";
		$dbname = "alegria";
		$username = "root";
		$password= "";
		//$username = "emporio";
		//$password= "1234";

		try{
			return $fornecedores = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
			echo "conexão com sucesso";

		$_SESSION['fornecedores'] = $fornecedores;

		}catch(PDOException $pe){
			//die("Não foi possivel se conectar ao banco de dados $dbname :" . $pe->getMessage());
			return("Não foi possivel se conectar ao banco de dados $dbname :" . $pe->getMessage());
		}
	}
?>