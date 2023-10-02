<?php
require_once("connection.php");

$id = $_GET['id']; 

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
                $stmt = $conn->prepare(
                "UPDATE veiculos 
                SET marca = :marca, modelo = :modelo, cor = :cor, anoFabricacao = :anoFabricacao, anoModelo = :anoModelo, combustivel = :combustivel, preco = :preco, detalhes = :detalhes, foto = :foto 
                WHERE id = :id");

                $stmt->bindParam(':marca', $marca);
                $stmt->bindParam(':modelo', $modelo);
                $stmt->bindParam(':cor', $cor);
                $stmt->bindParam(':anoFabricacao', $anoFabricacao);
                $stmt->bindParam(':anoModelo', $anoModelo);
                $stmt->bindParam(':combustivel', $combustivel);
                $stmt->bindParam(':preco', $preco);
                $stmt->bindParam(':detalhes', $detalhes);
                $stmt->bindParam(':foto', $destino);
                $stmt->bindParam(':id', $id);
  
                $stmt->execute();
  
                $flag_msg = true;
                $msg = "Dados enviados com sucesso!";
                $marca = "";
                $modelo = "";
                $cor = "";
                $anoFabricacao = "";
                $anoModelo = "";
                $combustivel = "";
                $preco = "";
                $detalhes = "";
                $foto = "";
            } else {
                $flag_msg = false;
                $msg = "Erro ao mover a imagem para o destino.";
            }
        } else {
            $stmt = $conn->prepare(
              "UPDATE veiculos 
              SET marca = :marca, modelo = :modelo, cor = :cor, anoFabricacao = :anoFabricacao, anoModelo = :anoModelo, combustivel = :combustivel, preco = :preco, detalhes = :detalhes
              WHERE id = :id");

              $stmt->bindParam(':marca', $marca);
              $stmt->bindParam(':modelo', $modelo);
              $stmt->bindParam(':cor', $cor);
              $stmt->bindParam(':anoFabricacao', $anoFabricacao);
              $stmt->bindParam(':anoModelo', $anoModelo);
              $stmt->bindParam(':combustivel', $combustivel);
              $stmt->bindParam(':preco', $preco);
              $stmt->bindParam(':detalhes', $detalhes);
              $stmt->bindParam(':id', $id);
  
              $stmt->execute();
  
              $flag_msg = true; 
              $msg = "Dados enviados com sucesso!";
              $marca = "";
              $modelo = "";
              $cor = "";
              $anoFabricacao = "";
              $anoModelo = "";
              $combustivel = "";
              $preco = "";
              $detalhes = "";
        }
    } catch (PDOException $e) {
        $flag_msg = false; // Erro
        $msg = "Erro na conexão com o Banco de dados: " . $e->getMessage();
    }
    
    $conn = null;

    header("Location: veiculo-list.php");
  }

$stmt = $conn->prepare("SELECT * FROM veiculos WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$veiculo = $stmt->fetch(PDO::FETCH_ASSOC);

require_once "header_inc.php";
?>

<div class="p-4 mb-4 bg-light">
  <h1 class="display-5">Veículos</h1>
  <hr class="my-3">
  <p class="lead">Edite as informações do veículo aqui.</p>
</div>

<div class="container">
<form method="POST" enctype="multipart/form-data">
<div class="form-group">
      <label for="marcaVeiculo">Marca:</label>
      <input type="text" class="form-control" id="marcaVeiculo" name="marcaVeiculo" value="<?= $veiculo['marca']; ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="modeloVeiculo">Modelo:</label>
      <input type="text" class="form-control" id="modeloVeiculo" name="modeloVeiculo" value="<?= $veiculo['modelo']; ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="corVeiculo">Cor:</label>
      <input type="text" class="form-control" id="corVeiculo" name="corVeiculo" value="<?= $veiculo['cor']; ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="anoFabricacaoVeiculo">Ano de Fabricação:</label>
      <input type="number" class="form-control" id="anoFabricacaoVeiculo" name="anoFabricacaoVeiculo" value="<?= $veiculo['anoFabricacao']; ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="anoModeloVeiculo">Ano do Modelo:</label>
      <input type="number" class="form-control" id="anoModeloVeiculo" name="anoModeloVeiculo" value="<?= $veiculo['anoModelo']; ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="combustivelVeiculo">Combustível</label>
      <input type="text" class="form-control" id="combustivelVeiculo" name="combustivelVeiculo" value="<?= $veiculo['combustivel']; ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="precoVeiculo">Preço</label>
      <input type="number" min="0.05" step=0.01 class="form-control" id="precoVeiculo" name="precoVeiculo" value="<?= $veiculo['preco'] ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="detalhesVeiculo">Detalhes:</label>
      <input type="text" class="form-control" id="detalhesVeiculo" name="detalhesVeiculo" value="<?= $veiculo['detalhes']; ?>" required>
    </div>
    <br />
    <div class="form-group">
        <label for="fotoVeiculo">Imagem do Veículo:</label>
        <input type="file" class="form-control-file" id="fotoVeiculo" name="fotoVeiculo" value="<?= $veiculo['foto']; ?>">
        <p>Imagem atual: <?= $veiculo['foto']; ?></p>
    </div>
    <br />
    <button type="submit" class="btn btn-primary mb-2" name="enviar">Enviar</button>
    <a href="veiculo-list.php"><button type="button" class="btn btn-secondary mb-2">Voltar</button></a>
  </form>
</div>

<?php require_once "footer_inc.php"; ?>