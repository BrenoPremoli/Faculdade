<?php

$titulo = "";
$descricao = "";
$atividades = "";
$statusId = "";
$prioridade = "";
$dataInicio = "";
$dataConclusao = "";

$flag_msg = null;
$msg = "";

if (isset($_POST["enviar"])) {
  try {
    require("connection.php");

    $titulo = $_POST["tituloTarefa"];
    $descricao = $_POST["descricaoTarefa"];
    $atividades = $_POST["atividadesTarefa"];
    $statusId = $_POST["statusIdTarefa"];
    $prioridade = $_POST["prioridadeTarefa"];
    $dataInicio = $_POST["dataInicioTarefa"];
    $dataConclusao = $_POST["dataConclusaoTarefa"];
    
    if (empty($_POST["tituloTarefa"]) || empty($_POST["descricaoTarefa"]) || empty($_POST["atividadesTarefa"]) || empty($_POST["statusIdTarefa"]) || empty($_POST["dataInicioTarefa"]) || empty($_POST["dataConclusaoTarefa"])) {
      $flag_msg = false; // Erro 
      $msg = "Dados incompletos, preencha o formulário corretamente!";
    } else {
      $stmt = $conn->prepare("INSERT INTO tarefa (titulo, descricao, atividades, statusId, prioridade, dataInicio, dataConclusao) VALUES (:titulo, :descricao, :atividades, :statusId, :prioridade, :dataInicio, :dataConclusao)");
                              
      $stmt->bindParam(':titulo', $titulo);
      $stmt->bindParam(':descricao', $descricao);
      $stmt->bindParam(':atividades', $atividades);
      $stmt->bindParam(':statusId', $statusId);
      $stmt->bindParam(':prioridade', $prioridade);
      $stmt->bindParam(':dataInicio', $dataInicio);
      $stmt->bindParam(':dataConclusao', $dataConclusao);

      $stmt->execute();

      $flag_msg = true; // Sucesso 
      $msg = "Tarefa inserida com sucesso!";
      $titulo = "";
      $descricao = "";
      $atividades = "";
      $statusId = "";
      $prioridade = "";
      $dataInicio = "";
      $dataConclusao = "";
    }
  } catch(PDOException $e) {
    $flag_msg = false; // Erro 
    $msg = "Erro na conexão com o Banco de dados: " . $e->getMessage();
  }
  
  header("Location: index.php");

  $conn = null;
}

require_once "header_inc.php";
?>

<div class="p-4 mb-4 bg-light">
  <h1 class="display-6">Tarefas</h1>
  <hr class="my-3">
  <p class="lead">Adicione suas tarefas aqui!</p>
</div>

<div class="container">
  <?php 
    if (!is_null($flag_msg)) {
      if ($flag_msg) {
        echo "<div class='alert alert-success' role='alert'>$msg</div>"; 
      } else {
        echo "<div class='alert alert-warning' role='alert'>$msg</div>"; 
      }
    }
  ?>

  <form method="POST">
    <div class="form-group">
      <label for="tituloTarefa">Título:</label>
      <input type="text" class="form-control" id="tituloTarefa" name="tituloTarefa" value="<?= $titulo; ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="descricaoTarefa">Descrição:</label>
      <input type="text" class="form-control" id="descricaoTarefa" name="descricaoTarefa" value="<?= $descricao; ?>">
    </div>
    <br />
    <div class="form-group">
      <label for="atividadesTarefa">Atividades de Tarefa:</label>
      <input type="text" class="form-control" id="atividadesTarefa" name="atividadesTarefa" value="<?= $atividades; ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="statusIdTarefa">Status ID:</label>
      <select class="form-control" id="statusIdTarefa" name="statusIdTarefa" required>
        <?php
        try {
          require("connection.php");

          $stmt = $conn->prepare("SELECT id, nome FROM status");
          $stmt->execute();

          echo "<option value='' data-default disabled selected></option>";
          while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $statusId = $linha['id'];
            $statusNome= $linha['nome'];

            echo "<option value='$statusId'>$statusNome</option>";
          }
          
          $conn = null;
        } catch (PDOException $e) {
          echo "Erro na conexão com o Banco de dados: " . $e->getMessage();
        }
        ?>
      </select>
    </div>
    <br />
    <div class="form-group">
  <label for="prioridadeTarefa">Prioridade:</label>
  <select class="form-control" id="prioridadeTarefa" name="prioridadeTarefa">
    <option value="" data-default disabled selected></option>
    <option value="Verde" style="background-color: green; color: white" <?php if ($prioridade == "Verde")  ?>>Verde</option>
    <option value="Amarelo" style="background-color: yellow;" <?php if ($prioridade == "Amarelo")  ?>>Amarelo</option>
    <option value="Vermelho" style="background-color: darkred; color: white" <?php if ($prioridade == "Vermelho")  ?>>Vermelho</option>
  </select>
</div>
    <br />
    <div class="form-group">
      <label for="dataInicioTarefa">Data de Início:</label>
      <input type="date" class="form-control" id="dataInicioTarefa" name="dataInicioTarefa" value="<?= $dataInicio; ?>">
    </div>
    <br />
    <div class="form-group">
      <label for="dataConclusaoTarefa">Data de Conclusão:</label>
      <input type="date" class="form-control" id="dataConclusaoTarefa" name="dataConclusaoTarefa" value="<?= $dataConclusao; ?>">
    </div>
    <br />
    <button type="submit" class="btn btn-primary mb-2" name="enviar">Enviar</button>
    <a href="Tarefas.php"><button type="button" class="btn btn-primary mb-2" name="limpar">Limpar</button></a>
  </form>
</div>

<?php require_once "footer_inc.php"; ?>
