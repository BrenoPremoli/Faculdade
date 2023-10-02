<?php
require_once "header_inc.php";
require "connection.php";
require "classes/Veiculo.php";

if (isset($_GET['id'])) {
    $veiculoId = $_GET['id'];

    $sql = "SELECT * FROM veiculos WHERE id = :veiculo_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':veiculo_id', $veiculoId, PDO::PARAM_INT);
    $stmt->execute();
    $veiculo = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($veiculo) {
?>
        <div class="p-4 mb-4 bg-light">
            <h1 class="display-5">Veículos</h1>
            <hr class="my-3">
        </div>

        <div class="container">
            <div class="row featurette">
            <h2 class="featurette-heading"><?= $veiculo['marca']; ?></h2>
                <div class="col-md-7">
                    <h3 class="lead"><?= $veiculo['modelo']; ?></h3>
                    <h3 class="lead">Cor: <?= $veiculo['cor']; ?></h3>
                    <h3 class="lead">Ano de Fabricação: <?= $veiculo['anoFabricacao']; ?></h3>
                    <h3 class="lead">Ano do Modelo: <?= $veiculo['anoModelo']; ?></h3>
                    <h3 class="lead">Combustível: <?= $veiculo['combustivel']; ?></h3>
                    <h3 class="lead">Preço: R$ <?= number_format(($veiculo['preco']), 2, ',', '.'); ?></h3>
                    <h3 class="lead">Descrição: <?= $veiculo['detalhes']; ?></h3>
                    <br>
                    <p class="lead"><a href="veiculos.php"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Voltar</button></a></p>
                </div>
                <div class="col-md-5">
                    <img src="<?= $veiculo['foto']; ?>" alt="Imagem do veículo" style="width: 100%;">
                </div>
            </div>
            <hr class="featurette-divider">
        </div>
<?php
    } else {
        echo "<p>Veículo não encontrado.</p>";
    }
} else {
    echo "<p>ID do veículo não especificado.</p>";
}
?>

<?php require_once "footer_inc.php"; ?>
