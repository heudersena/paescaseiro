<?php 
if (isset($_POST['btnCompraF']) && empty($_POST['btnCompraF'])) {
	$a = $_POST['inputinicio'];
	$b = $_POST['inputfim'];

	$select = "SELECT * FROM compra WHERE data BETWEEN '$a' AND '$b'";
	$stmt =   mysqli_query($link,$select);

}
else{
	$select = "SELECT * FROM compra";
	$stmt =   mysqli_query($link,$select);
}


?>
