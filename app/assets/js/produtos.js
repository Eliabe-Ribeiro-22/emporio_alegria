function valida_produtos(){
//pegar valores no html
let nome_produto = document.querySelector("#nome-produto").value;
let est_min_produto = document.querySelector("#est-min").value;
let est_max_produto = document.querySelector("#est-max").value;
let valor_unit_produto = document.querySelector("#valor-unitario").value;
let qtdade_produto = document.querySelector("#qtdade").value;

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
	if(est_min_produto >= est_max_produto){
		alert("o Estoque Máximo precisa ser maior que o Estoque Mínimo");
		est_max_produto.focus();
		return false;
	}
	if (est_min_produto >= qtdade_produto) {
		alert("a quantidade do produto precisa ser maior que estoque mínimo");
		qtdade_produto.focus();
		return false;
	}
	if (est_max_produto > qtdade_produto) {
		alert("A quantidade precisa ser menor que o est_max_produto")
		qtdade_produto.focus();
		return false;
	}
	if (valor_unit_produto == "" || valor_unit_produto == "0") {
		alert("Informe o valor unitario");
		valor_unit.focus();
		return false;
	}
	if (qtdade_produto == "" || qtdade_produto == "0") {
		alert("Informe a quantidade");
		qtdade.focus();
		return false;
	}

	alert("Todos os dados foram preenchidos com sucesso");
	return true;
}

