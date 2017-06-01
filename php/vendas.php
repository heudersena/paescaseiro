<?php

// Filtragem por data de venda
if (isset($_POST['btnCompraV']) && empty($_POST['btnCompraV'])) {
	$aa = $_POST['inputinicio'];
	$bb = $_POST['inputfim'];


	$select = "SELECT * FROM venda WHERE data BETWEEN '$aa' AND '$bb'";
	$stmt =   mysqli_query($link,$select);

	}else{
		$select = "SELECT * FROM venda";
		$stmt =   mysqli_query($link,$select);
	}

	?>