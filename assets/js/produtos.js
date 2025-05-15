var nome_produto = document.querySelector("#nome-produto").value;
var est_min_produto = document.querySelector("#estoque-minimo").value;
var est_max_produto = document.querySelector("#estoque-maximo").value;
var valor_unit = document.querySelector("#valor-unitario").value;
var qtdade = document.querySelector("#quantidade").value;

if (nome_produto == "") {
	alert("Informe o nome");
}
if (est_min_produto == "0" || est_min_produto <= 0) {
	alert("Informe o Estoque mínimo");
}
if (est_max_produto == "0" || est_max_produto <= 0) {
	alert("Informe o Estoque Máximo");
}
if (valor_unit == "" || valor_unit == "0") {
	alert("Informe o Estoque Máximo");
}
if (qtdade == "" || qtdade == "0") {
	alert("Informe a quantidade");
}