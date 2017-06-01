<?php

if (isset($_POST['btnCompra'])) {
	require_once 'conexao.php';
	$compra = $_POST['compra'];
	$data =   $_POST['data'];
	$fk =     $_POST['fk'];

	$insert = " INSERT INTO compra (compra,data,produto_idproduto) VALUES('$compra',now(),'$fk') ";
	var_dump($insert);
	$stmt = mysqli_query($link, $insert);
	var_dump($stmt);
	header("location: ../index.php");
	die();
}

