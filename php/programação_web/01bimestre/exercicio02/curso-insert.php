<?php
$nome = "";
$descricao = "";
$imagem = "";
$flag_msg = null;
$msg = "";

if (isset($_POST["enviar"])) {
  try {
      require("connection.php");

      $nome = $_POST["nomeCurso"];
      $descricao = $_POST["descricaoCurso"];
      
      if (isset($_FILES["imagemCurso"]) && $_FILES["imagemCurso"]["error"] === UPLOAD_ERR_OK) {
          $imagem_temp = $_FILES["imagemCurso"]["tmp_name"];
          $imagem_nome = $_FILES["imagemCurso"]["name"];
          $destino = "images/" . $imagem_nome;

          if (move_uploaded_file($imagem_temp, $destino)) {
              $stmt = $conn->prepare("INSERT INTO cursos (nome, descricao, imagem) VALUES (:nome, :descricao, :imagem)");
              $stmt->bindParam(':nome', $nome);
              $stmt->bindParam(':descricao', $descricao);
              $stmt->bindParam(':imagem', $destino);

              $stmt->execute();

              $flag_msg = true; // Sucesso 
              $msg = "Dados enviados com sucesso!";
              $nome = "";
              $descricao = "";
              $imagem = "";
          } else {
              $flag_msg = false; 
              $msg = "Erro ao mover a imagem para o destino.";
          }
      } else {
          $flag_msg = false; 
          $msg = "Você deve selecionar uma imagem válida.";
      }
  } catch (PDOException $e) {
      $flag_msg = false; // Erro
      $msg = "Erro na conexão com o Banco de dados: " . $e->getMessage();
  }
  
  $conn = null;
}

require_once "header_inc.php";
?>
<div class="p-4 mb-4 bg-light">
  <h1 class="display-5">Cursos</h1>
  <hr class="my-3">
  <p class="lead">Adicione um novo curso aqui.</p>
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
      <label for="nomeCurso">Nome:</label>
      <input type="text" class="form-control" id="nomeCurso" name="nomeCurso" value="<?= $nome; ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="descricaoCurso">Descrição:</label>
      <input type="text" class="form-control" id="descricaoCurso" name="descricaoCurso" value="<?= $descricao; ?>">
    </div>
    <br />
    <div class="form-group">
        <label for="imagemCurso">Imagem do Curso:</label>
        <input type="file" class="form-control-file" id="imagemCurso" name="imagemCurso" required>
    </div>
    <br />
    <button type="submit" class="btn btn-primary mb-2" name="enviar">Enviar</button>
    <a href="Cursos.php"><button type="button" class="btn btn-primary mb-2" name="limpar">Limpar</button></a>
  </form>
</div>

<?php require_once "footer_inc.php"; ?>