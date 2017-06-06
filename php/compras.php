<?php 
if (isset($_POST['btnCompraF']) && empty($_POST['btnCompraF'])) {
	$a = $_POST['inputinicio'];
	$b = $_POST['inputfim'];

	$select = "SELECT * FROM compra WHERE data BETWEEN '$a' AND '$b'";
	$stmt =   mysqli_query($link,$select);
	$a = "SELECT sum(compra) from compra WHERE data BETWEEN '$a' AND '$b'";
    $b = mysqli_query($link,$a);
}
else{
	$select = "SELECT * FROM compra";
	$stmt =   mysqli_query($link,$select);

	$a = "SELECT sum(compra) from compra";
    $b = mysqli_query($link,$a);
}
require_once 'conexao.php';




?>
