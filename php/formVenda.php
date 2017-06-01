<?php
if (isset($_POST['btnVenda'])) {
	require_once 'conexao.php';
	$venda = $_POST['venda'];
	$data =  $_POST['data'];
	$fk =    $_POST['fk'];

	$insert = " INSERT INTO venda (venda_diarias,data,produto_idproduto) VALUES('$venda',now(),'$fk') ";
	$stmt = mysqli_query($link, $insert);
	header("location: ../index.php");
	die();
}

