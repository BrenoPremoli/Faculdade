<?php 

require "connection.php";
require "classes/Vendedor.php";

$sql = "SELECT * FROM vendedores ORDER BY id";
$stmt = $conn->query($sql);
$vendedores = $stmt->fetchAll(PDO::FETCH_CLASS, "Vendedor");

require_once "header_inc.php"; 
?>

<div class="b-example-divider"></div>

<div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="images/fachada.png" class="d-block mx-lg-auto img-fluid" alt="MasterCar" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">MasterCar</h1>
      <p class="lead">A Master Car é uma referência em qualidade automotiva. Com uma seleção cuidadosamente escolhida de veículos de alto padrão, nossa equipe dedicada oferece atendimento personalizado e expertise em todas as etapas da sua jornada automotiva. Venha nos visitar e descubra o prazer de dirigir algo especial na Master Car.</p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a href="veiculos.php"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Veículos</button></a>
      </div>
    </div>
  </div>
</div>

<?php foreach ($vendedores as $vendedor) { ?>
  <div class="container">
    <div class="row featurette">
      <div class="col-md-7">
      <h2 class="featurette-heading">Vendedor: <?= $vendedor->getNome(); ?></h2>
      <h3 class="lead">Email: <?= $vendedor->getEmail(); ?></h3>
      <h3 class="lead">Telefone: <?= $vendedor->getTelefone(); ?></h3>
      </div>
    </div>
      <hr class="featurette-divider" />
  </div>
<?php } ?>

<?php require_once "footer_inc.php"; ?>