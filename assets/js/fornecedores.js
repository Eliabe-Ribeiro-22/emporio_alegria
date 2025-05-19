function valida_fornecedores(){
//pegar valores no html
let nome_fornecedor = document.querySelector("#nome-fornecedor").value;
let email_fornecedor = document.querySelector("#email-fornecedor").value;
let telefone_fornecedor = document.querySelector("#telefone-fornecedor").value;
//Se campo vazio ou menor a zero, mensagem de alerta
	if (nome_fornecedor == "") {
		alert("Informe o nome");
		nome_cliente.focus();
		return false;		
	}
	if (email_fornecedor == "") {
		alert("Informe o email");
		email_cliente.focus();
		return false;
	}
	if (telefone_fornecedor == "") {
		alert("Informe o telefone");
		telefone_cliente.focus();
		return false;
	}
	
	alert("Todos os dados foram preenchidos com sucesso");
	return true;
}
