<?php require_once "header_inc.php"; ?>

<div class="p-4 mb-4 bg-light">
  <h1 class="display-5">Veículos</h1>
  <hr class="my-3">
  <p class="lead">Conheça os nossos veículos.</p>
</div>

<br />
<div class="container">
  <?php
  require "connection.php";
  require "classes/Veiculo.php";

  $sql = "SELECT * FROM veiculos ORDER BY marca, modelo";
  $stmt = $conn->query($sql);
  $veiculos = $stmt->fetchAll(PDO::FETCH_CLASS, "Veiculo");

  foreach ($veiculos as $vec) {
  ?>
  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading"><?= $vec->getMarca(); ?></h2>
      <h3 class="lead"><?= $vec->getModelo(); ?></h3>
      <h3 class="lead">Ano do Modelo: <?= $vec->getAnoModelo(); ?></h3>
      <h3 class="lead">Preço: <?=number_format($vec->getPreco(), 2, ',', '.');?></h3>
      <h3 class="lead"><?= $vec->getCombustivel(); ?></h3>
      <br>
      <a href="veiculo-detalhe.php?id=<?= $vec->getId(); ?>">
      <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Ver Veículo</button>
</a>

    </div>
    <div class="col-md-5">
    <img src="<?= $vec->getFoto(); ?>" alt="Imagem do vec" style="width:95%"></td>
    </div>
  </div>
  <hr class="featurette-divider">
  <?php } ?>
</div>

<?php require_once "footer_inc.php"; ?>
