<?php 
include '_topo.php';
?>

<div class="container">
	<div class="container">
		<h3>Cadastrar vendas</h3>
		<form action="php/formVenda.php" method="post">
			<div class="form-group row">			
				<input type="number" step=0.01 class="form-control" id="formGroupExampleInput" placeholder="R$ 00,00" name="venda">
				<input type="date" class="form-control" id="data" name="data">
				<input type="number" class="form-control" id="data" value="<?php echo '1';?>" name="fk"><br>			
				<button id="pnlBtn" type="submit" name="btnVenda" class="btn btn-info">Cadastrar venda</button>
			</div>
		</form>
	</div>
	<!-- : -->
	<hr>
	<div class="container">
		<h3>Cadastrar compras</h3>
		<form action="php/formCompra.php" method="post">
			<div class="form-group row">

				<input type="number" name="compra" step=0.01 class="form-control" id="formGroupExampleInput" placeholder="R$ 00,00">
				<input type="date" class="form-control" id="data" name="data">
				<input type="number" class="form-control" id="data" value="<?php echo '2';?>" name="fk"><br>
				<button id="pnlBtn" type="submit" name="btnCompra" class="btn btn-info">Cadastrar compra</button>
				
			</div>
		</form>
	</div>
</div>
<?php include '_rodape.php'; ?>