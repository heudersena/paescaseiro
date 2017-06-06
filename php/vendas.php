<?php
include_once 'conexao.php';

// Filtragem por data de venda
if (isset($_POST['btnCompraV']) && empty($_POST['btnCompraV'])) {
	$aa = $_POST['inputinicio'];
	$bb = $_POST['inputfim'];


	$select = "SELECT * FROM venda WHERE data BETWEEN '$aa' AND '$bb'";
	$stmt =   mysqli_query($link,$select);
	
	$a = "SELECT sum(venda_diarias) from venda WHERE data BETWEEN '$aa' AND '$bb'";
    $b = mysqli_query($link,$a);
	
}else{

	$select = "SELECT * FROM venda";
	$stmt =   mysqli_query($link,$select);
	$a = "SELECT sum(venda_diarias) from venda ";
    $b = mysqli_query($link,$a);
};
?>