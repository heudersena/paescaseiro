<?php
include '_topo.php';
require_once 'php/conexao.php';
require_once 'php/vendas.php';


?>
<br>
<div class="container">

  <form action="index.php" method="post" class="form-horizontal">

    <div class="form-group">
      <label for="inicio">Inicio</label>
      <input class="form-control" type="date" id="inicio" name="inputinicio" required="">
    </div>

    <div class="form-group">
      <label for="fim">Fim</label>
      <input class="form-control" type="date" id="fim" name="inputfim" required="">
    </div>
    <button type="submit" name="btnCompraV" class="btn btn-sm"><b>FILTRA POR DATA</b></button>

  </form>
</div>
<hr>


<div class="container-fluid">

 <div class="row">
   <div class="col-md-12">
   <?php 
    foreach ($b as $total) {
  
  echo 'R$: '.$total["sum(venda_diarias)"].' de vendas';
}
     ?>
     <table class="table table-bordered table-sm">
      <thead>
        <tr class="" id="tb">
          <h3 class="text-center text-muted" id="h3">Relação das vendas</h3>
          <th>Venda:</th>
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
          <td><?php echo "R$: ".$itens['venda_diarias']; ?></td>
          <td><?php echo date('d-m-Y',strtotime($data)); ?></td>
          <td>
            <a href="php/delv.php?del=<?php echo $itens['idvenda']; ?>"><i class="fa fa-trash-o" aria-hidden="true" onclick="myFunction()"></i></a> |
            <a href="php/upv.php?up=<?php echo $itens['idvenda']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
</div>
</div>
<script>
  function myFunction() {
    alert("Tem certeza disso?");
  }
</script>
<?php include '_rodape.php'; ?>