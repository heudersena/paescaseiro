<?php

if (isset($_GET['del'])) {
	require_once 'conexao.php';
	$del = $_GET['del'];
	$id = "DELETE FROM venda WHERE idvenda = $del";
	var_dump($id);
	$stmt = mysqli_query($link, $id);
	var_dump($stmt);	
	header("location: ../index.php");
	die();
}else{
	echo "Erro ao deletar dados";
}