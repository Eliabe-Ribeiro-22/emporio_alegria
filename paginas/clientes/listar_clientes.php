<?php
session_start();

function listar_clientes(){
	require_once "../../funcoes_php/listar_clientes.php";
	listar();
}
?>