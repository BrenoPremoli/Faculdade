<?php
require_once("connection.php");

$id = $_GET['id']; 

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
                $stmt = $conn->prepare(
                "UPDATE cursos 
                SET nome = :nome, descricao = :descricao, imagem = :imagem 
                WHERE id = :id");

                $stmt->bindParam(':nome', $nome);
                $stmt->bindParam(':descricao', $descricao);
                $stmt->bindParam(':imagem', $destino);
                $stmt->bindParam(':id', $id);
  
                $stmt->execute();
  
                $flag_msg = true;
                $msg = "Dados enviados com sucesso!";
                $nome = "";
                $descricao = "";
                $imagem = "";
            } else {
                $flag_msg = false;
                $msg = "Erro ao mover a imagem para o destino.";
            }
        } else {
            $stmt = $conn->prepare(
                "UPDATE cursos 
                SET nome = :nome, descricao = :descricao
                WHERE id = :id");

                $stmt->bindParam(':nome', $nome);
                $stmt->bindParam(':descricao', $descricao);
                $stmt->bindParam(':id', $id);
  
                $stmt->execute();
  
                $flag_msg = true; 
                $msg = "Dados enviados com sucesso!";
                $nome = "";
                $descricao = "";
        }
    } catch (PDOException $e) {
        $flag_msg = false; // Erro
        $msg = "Erro na conexão com o Banco de dados: " . $e->getMessage();
    }
    
    $conn = null;

    header("Location: curso-list.php");
  }

$stmt = $conn->prepare("SELECT * FROM cursos WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$contato = $stmt->fetch(PDO::FETCH_ASSOC);

require_once "header_inc.php";
?>

<div class="p-4 mb-4 bg-light">
  <h1 class="display-5">Cursos</h1>
  <hr class="my-3">
  <p class="lead">Edite as informações do curso aqui.</p>
</div>

<div class="container">
<form method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="nomeCurso">Nome:</label>
      <input type="text" class="form-control" id="nomeCurso" name="nomeCurso" value="<?= $contato['nome']; ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="descricaoCurso">Descrição:</label>
      <input type="text" class="form-control" id="descricaoCurso" name="descricaoCurso" value="<?= $contato['descricao']; ?>" required>
    </div>
    <br />
    <div class="form-group">
        <label for="imagemCurso">Imagem do Curso:</label>
        <input type="file" class="form-control-file" id="imagemCurso" name="imagemCurso">
        <p>Imagem atual: <?= $contato['imagem']; ?></p>
    </div>
    <br />
    <button type="submit" class="btn btn-primary mb-2" name="enviar">Enviar</button>
    <a href="Cursos.php"><button type="button" class="btn btn-primary mb-2" name="limpar">Limpar</button></a>
  </form>
</div>

<?php require_once "footer_inc.php"; ?>