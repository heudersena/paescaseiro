<?php

if (isset($_GET['del'])) {
	require_once 'conexao.php';
	$del = $_GET['del'];
	$id = "DELETE  FROM compra WHERE id = $del";
	var_dump($id);
	$stmt = mysqli_query($link, $id);
	header("location: ../compra.php");
	die();
}else{
	echo "Erro ao deletar dados";
}
?>