function valida_clientes(){
//pegar valores no html
let nome_cliente = document.querySelector("#nome-cliente").value;
let endereco_cliente = document.querySelector("#endereco-cliente").value;
let telefone_cliente = document.querySelector("#telefone-cliente").value;
let email_cliente = document.querySelector("#email-cliente").value;
let cidade_cliente = document.querySelector("#cidade-cliente").value;

	//se campo vazio ou menor a zero, mensagem de alerta
	if (nome_cliente == "") {
		alert("Informe o nome");
		nome_cliente.focus();
		return false;		
	}
	if (endereco_cliente == "") {
		alert("Informe o endereco");
		endereco_cliente.focus();
		return false;
	}
	if (telefone_cliente == "") {
		alert("Informe o telefone");
		telefone_cliente.focus();
		return false;
	}
	if (email_cliente == "") {
		alert("Informe o email");
		email_cliente.focus();
		return false;
	}
	if (cidade_cliente == "") {
		alert("Informe a cidade");
		cidade_cliente.focus();
		return false;
	}	

	alert("Todos os dados foram preenchidos com sucesso");
	return true;
}
