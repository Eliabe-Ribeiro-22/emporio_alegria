<a href="./produtos.php">Cadastrar novo produto</a>
<a href="../index.php">Voltar ao início</a>

PRODUTOS CADASTRADOS
<?php
// SELECT * FROM PRODUTOS;
// SELECT NOME_PRODUTO, VALOR UNITÁRIO, QUANTIDADE ORDER BY NOME_PRODUTO ASC
$host = "localhost";
		$dbname = "alegria";
		$username = "root";
		$password= "";
		//$username = "emporio";
		//$password= "1234";

try{
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	echo "conexão com sucesso";

	$sql = "SELECT * FROM PRODUTOS";
	$result = $conn->query($sql);

	if($result->num_rows > 0){
		while ($row = $result->fetch_assoc()) {
			echo "id: " . $row["ID_PRODUTO"] . "<br>Nome:"; 
		}
	}
	else{
		echo "0 results";
	}

	conn->close();
	}catch(PDOException $pe){
		die("Não foi possivel se conectar ao banco de dados $dbname :" . $pe->getMessage());
	}
?>