function valida_produtos(){
//pegar valores no html
let nome_produto = document.querySelector("#nome-produto").value;
let est_min_produto = document.querySelector("#estoque-minimo").value;
let est_max_produto = document.querySelector("#estoque-maximo").value;
let valor_unit = document.querySelector("#valor-unitario").value;
let qtdade = document.querySelector("#quantidade").value;

	//se campo vazio ou menor a zero, mensagem de alerta
	if (nome_produto == "") {
		alert("Informe o nome");
		nome_produto.focus();
		return false;		
	}
	if (est_min_produto == "0" || est_min_produto <= 0) {
		alert("Informe o Estoque mínimo");
		est_min_produto.focus();
		return false;
	}
	if (est_max_produto == "0" || est_max_produto <= 0) {
		alert("Informe o Estoque Máximo");
		est_max_produto.focus();
		return false;
	}
	if (valor_unit == "" || valor_unit == "0") {
		alert("Informe o valor unitario");
		valor_unit.focus();
		return false;
	}
	if (qtdade == "" || qtdade == "0") {
		alert("Informe a quantidade");
		qtdade.focus();
		return false;
	}	

	alert("Todos os dados foram preenchidos com sucesso");
	return true;
}
