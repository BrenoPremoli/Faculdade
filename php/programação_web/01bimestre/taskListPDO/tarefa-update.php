<?php
require_once("connection.php");

$id = $_GET['id']; 

if (isset($_GET['statusId']) && $_GET['statusId'] == 3) {
  $statusId = 3; 
  $stmt = $conn->prepare("UPDATE tarefa SET statusId = :statusId WHERE id = :id");
  $stmt->bindParam(':statusId', $statusId, PDO::PARAM_INT);
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $stmt->execute();
  header("Location: index.php");
}


if (isset($_POST['enviar'])) {
  $titulo = $_POST["tituloTarefa"];
  $descricao = $_POST["descricaoTarefa"];
  $atividades = $_POST["atividadesTarefa"];
  $statusId = $_POST["statusIdTarefa"];
  $prioridade = $_POST["prioridadeTarefa"];
  $dataConclusao = $_POST["dataConclusaoTarefa"];

    $stmt = $conn->prepare("UPDATE tarefa SET titulo = :titulo, descricao = :descricao, atividades = :atividades, statusId = :statusId, prioridade = :prioridade, dataConclusao = :dataConclusao WHERE id = :id");

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':atividades', $atividades);
    $stmt->bindParam(':statusId', $statusId);
    $stmt->bindParam(':prioridade', $prioridade);
    $stmt->bindParam(':dataConclusao', $dataConclusao);

    $stmt->execute();

    $conn = null;

    header("Location: index.php");
}

$stmt = $conn->prepare("SELECT * FROM tarefa WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$tarefa = $stmt->fetch(PDO::FETCH_ASSOC);

require_once("header_inc.php");
?>

<div class="p-4 mb-4 bg-light">
  <h1 class="display-6">Tarefas</h1>
  <hr class="my-3">
  <p class="lead">Edite suas tarefas aqui!</p>
</div>
<div class="container">
  <form method="POST">
    <div class="form-group">
      <label for="tituloTarefa">Título:</label>
      <input type="text" class="form-control" id="tituloTarefa" name="tituloTarefa" value="<?= $tarefa['titulo']; ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="descricaoTarefa">Descrição:</label>
      <input type="text" class="form-control" id="descricaoTarefa" name="descricaoTarefa" value="<?= $tarefa['descricao']; ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="atividadesTarefa">Atividades de Tarefa:</label>
      <input type="text" class="form-control" id="atividadesTarefa" name="atividadesTarefa" value="<?= $tarefa['atividades']; ?>" required>
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
      <option value="Verde" style="background-color: green; color: white" <?= ($tarefa['prioridade'] == 'Verde') ?>>Verde</option>
      <option value="Amarelo" style="background-color: yellow;" <?= ($tarefa['prioridade'] == 'Amarelo') ?>>Amarelo</option>
      <option value="Vermelho" style="background-color: darkred; color: white" <?= ($tarefa['prioridade'] == 'Vermelho') ?>>Vermelho</option>
    </select>
    </div>
    <br />
    <div class="form-group">
    <label for="dataConclusaoTarefa">Data de Conclusão:</label>
    <input type="date" class="form-control" id="dataConclusaoTarefa" name="dataConclusaoTarefa" value="<?= date('Y-m-d', strtotime($tarefa['dataConclusao'])); ?>" required>
    </div>
    <br />
    <button type="submit" class="btn btn-primary mb-2" name="enviar">Salvar</button>
  </form>
</div>

<?php require_once("footer_inc.php"); ?>
