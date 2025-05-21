<a href="./produtos.php">Cadastrar novo produto</a>
<a href="../index.php">Voltar ao início</a>

PRODUTOS CADASTRADOS

trash: 🗑
edit: &#9998;

<?php

//deseja realmente excluir o cliente? SIM OU Não 
// SQL DELETE FROM CLIENTES WHERE ID = id_produto_selected=[$key]
// se erro, informar mensagem ao usuário
// cliente deletado com sucesso

// se clicar no botão edit
// armazenar id
// pesquisar todos os dados com o id
// exibir dados do produto no form alterar_produtos.php

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
	echo "string de conexão com sucesso.olhe o enter";

	$sql = "SELECT NOME_PRODUTO, VALOR_UNITARIO, QUANTIDADE FROM PRODUTOS";
	$result = $conn->query($sql);

	var_dump($result);
	//if($result->num_rows() > 0){
	//if($result > 0){
		//while ($row = $result->fetch_assoc()) {
			//echo "id: " . $row["ID_PRODUTO"] . "<br>Nome:"; 
		//}
//}
//	else{
//		echo "0 results";
//	}

//	$conn->close();

		}catch(PDOException $pe){
	die("Não foi possivel se conectar ao banco de dados $dbname :" . $pe->getMessage());
	}
?>
