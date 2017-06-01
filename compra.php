<?php 
include '_topo.php';
require_once 'php/conexao.php';
require_once 'php/compras.php';


?>
<br>
<div class="container">

	<form action="compra.php" method="post" class="form-horizontal">

		<div class="form-group">
			<label for="inicio">Inicio</label>
			<input class="form-control" type="date" id="inicio" name="inputinicio" required="">
		</div>

		<div class="form-group">
			<label for="fim">Fim</label>
			<input class="form-control" type="date" id="fim" name="inputfim" required="">
		</div>
		<button type="submit" name="btnCompraF" class="btn btn-sm"><b>FILTRA POR DATA</b></button>

	</form>

</div>
<hr>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-sm">
				<thead>
					<tr id="tb">
						<h3 class="text-center text-muted" id="h3">Relação das compras</h3>
						<th>#</th>
						<th>Valor</th>
						<th>Data</th>
						<th>Ação</th>
					</tr>
					<?php 
					foreach($stmt as $itens):
						$data = $itens['data'];
					?>
				</thead>
				<tbody>
					<tr>

						<td><?php echo $itens['id']; ?></td>
						<td><?php echo "R$: ".$itens['compra']; ?></td>
						<td><?php echo date('d-m-Y',strtotime($data)); ?></td>
						<td>
							<a href="php/delc.php?del=<?php echo $itens['id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a> |
							<a href="up.php?up=<?php echo $itens['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
</div>
<?php include '_rodape.php'; ?>