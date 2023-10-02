<?php
$marca = "";
$modelo = "";
$cor = "";
$anoFabricacao = "";
$anoModelo = "";
$combustivel = "";
$preco = "";
$detalhes = "";
$foto = "";
$flag_msg = null;
$msg = "";

if (isset($_POST["enviar"])) {
  try {
      require("connection.php");

      $marca = $_POST["marcaVeiculo"];
      $modelo = $_POST["modeloVeiculo"];
      $cor = $_POST["corVeiculo"];
      $anoFabricacao = $_POST["anoFabricacaoVeiculo"];
      $anoModelo = $_POST["anoModeloVeiculo"];
      $combustivel = $_POST["combustivelVeiculo"];
      $preco = $_POST["precoVeiculo"];
      $detalhes = $_POST["detalhesVeiculo"];
      
      if (isset($_FILES["fotoVeiculo"]) && $_FILES["fotoVeiculo"]["error"] === UPLOAD_ERR_OK) {
          $foto_temp = $_FILES["fotoVeiculo"]["tmp_name"];
          $foto_marca = $_FILES["fotoVeiculo"]["name"];
          $destino = "images/" . $foto_marca;

          if (move_uploaded_file($foto_temp, $destino)) {
              $stmt = $conn->prepare("INSERT INTO veiculos (marca, modelo, cor, anoFabricacao, anoModelo, combustivel, preco, detalhes, foto) VALUES (:marca, :modelo, :cor, :anoFabricacao, :anoModelo, :combustivel, :preco, :detalhes, :foto)");
              $stmt->bindParam(':marca', $marca);
              $stmt->bindParam(':modelo', $modelo);
              $stmt->bindParam(':cor', $cor);
              $stmt->bindParam(':anoFabricacao', $anoFabricacao);
              $stmt->bindParam(':anoModelo', $anoModelo);
              $stmt->bindParam(':combustivel', $combustivel);
              $stmt->bindParam(':preco', $preco);
              $stmt->bindParam(':detalhes', $detalhes);
              $stmt->bindParam(':foto', $destino);

              $stmt->execute();

              $flag_msg = true; // Sucesso 
              $msg = "Dados enviados com sucesso!";
              $marca = "";
              $detalhes = "";
              $foto = "";
          } else {
              $flag_msg = false; 
              $msg = "Erro ao mover a foto para o destino.";
          }
      } else {
          $flag_msg = false; 
          $msg = "Você deve selecionar uma foto válida.";
      }
  } catch (PDOException $e) {
      $flag_msg = false; // Erro
      $msg = "Erro na conexão com o Banco de dados: " . $e->getMessage();
  }
  
  $conn = null;

  header("Location: veiculo-list.php");
}

require_once "header_inc.php";
?>
<div class="p-4 mb-4 bg-light">
  <h1 class="display-5">Veículos</h1>
  <hr class="my-3">
  <p class="lead">Adicione um novo veículo aqui.</p>
</div>

<div class="container">
  <?php 
    if (!is_null($flag_msg)) {
      if ($flag_msg) {
        echo "<div class='alert alert-success' role='alert'>$msg</div>"; 
      }else{
        echo "<div class='alert alert-warning' role='alert'>$msg</div>"; 
      }
    }
  ?>
<form method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="marcaVeiculo">Marca:</label>
      <input type="text" class="form-control" id="marcaVeiculo" name="marcaVeiculo" value="<?= $marca; ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="modeloVeiculo">Modelo:</label>
      <input type="text" class="form-control" id="modeloVeiculo" name="modeloVeiculo" value="<?= $modelo; ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="corVeiculo">Cor:</label>
      <input type="text" class="form-control" id="corVeiculo" name="corVeiculo" value="<?= $cor; ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="anoFabricacaoVeiculo">Ano de Fabricação:</label>
      <input type="number" class="form-control" id="anoFabricacaoVeiculo" name="anoFabricacaoVeiculo" value="<?= $anoFabricacao; ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="anoModeloVeiculo">Ano do Modelo:</label>
      <input type="number" class="form-control" id="anoModeloVeiculo" name="anoModeloVeiculo" value="<?= $anoModelo; ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="combustivelVeiculo">Combustível</label>
      <input type="text" class="form-control" id="combustivelVeiculo" name="combustivelVeiculo" value="<?= $combustivel; ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="precoVeiculo">Preço</label>
      <input type="number" min="0.05" step=0.01 class="form-control" id="precoVeiculo" name="precoVeiculo" value="<?= $preco; ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="detalhesVeiculo">Detalhes:</label>
      <input type="text" class="form-control" id="detalhesVeiculo" name="detalhesVeiculo" value="<?= $detalhes; ?>" required>
    </div>
    <br />
    <div class="form-group">
        <label for="fotoVeiculo">Imagem do Veiculo:</label>
        <input type="file" class="form-control-file" id="fotoVeiculo" name="fotoVeiculo" required>
    </div>
    <br />
    <button type="submit" class="btn btn-primary mb-2" name="enviar">Enviar</button>
    <a href="veiculo-insert.php"><button type="button" class="btn btn-secondary mb-2" name="limpar">Limpar</button></a>
  </form>
</div>

<?php require_once "footer_inc.php"; ?>