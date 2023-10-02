<?php 

require "connection.php";
require "classes/Veiculo.php";

$sql = "SELECT * FROM veiculos ORDER BY id";
$stmt = $conn->query($sql);
$veiculos = $stmt->fetchAll(PDO::FETCH_CLASS, "Veiculo");

require_once "header_inc.php"; 
?>

<div class="p-4 mb-4 bg-light">
  <h1 class="display-5">Gerenciamento de Veículos</h1>
  <hr class="my-3">
  <p class="lead">Permite a inclusão, edição e exclusão dos veículos exibidos na página de veiculos.</p>
</div>

<div class="container">
  <a class="btn btn-success" href="veiculo-insert.php">Criar Novo veículo</a>
  <p></p>
  <table class="table table-bordered">
    <tr class="table-danger text-center text-center">
      <th>#</th>
      <th>Marca</th>
      <th>Modelo</th>
      <th>Cor</th>
      <th>Ano de Fabricação</th>
      <th>Ano do Modelo</th>
      <th>Combustível</th>
      <th>Preço</th>
      <th>Detalhes</th>
      <th>Imagem</th>
      <th>Ações</th>
    </tr>
    <?php foreach ($veiculos as $vec) { ?>
    <tr class="text-center">
      <td class="table-light" style="width:3%"><?= $vec->getId(); ?></td>
      <td class="table-light" style="width:10%"><?= $vec->getMarca(); ?></td>
      <td class="table-light" style="width:10%"><?= $vec->getModelo(); ?></td>
      <td class="table-light" style="width:5%"><?= $vec->getCor(); ?></td>
      <td class="table-light" style="width:3%"><?= $vec->getAnoFabricacao(); ?></td>
      <td class="table-light" style="width:3%"><?= $vec->getAnoModelo(); ?></td>
      <td class="table-light" style="width:5%"><?= $vec->getCombustivel(); ?></td>
      <td class="table-light" style="width:15%"><?= number_format($vec->getPreco(), 2, ',', '.'); ?></td>
      <td class="table-light" style="width:20%"><?= $vec->getDetalhes(); ?></td>
      <td class="table-light" style="width:20%"><img src="<?= $vec->getFoto(); ?>" alt="Imagem do vec" style="width:95%"></td>
      <td class="table-light" style="width:20%">
        <a href="veiculo-update.php?id=<?= $vec->getId(); ?>"><button type="button" class="btn btn-primary">Editar</button></a>
        <a href="veiculo-destroy.php?id=<?= $vec->getId(); ?>"><button type="button" class="btn btn-danger">Excluir</button>
      </td>
    </tr>
    <?php } ?>
  </table>
</div>

<?php require_once "footer_inc.php"; ?>