<?php
$nome = "";
$email = "";
$tipo = "";
$mensagem = "";
$flag_msg = null;
$msg = "";

if (isset($_POST["enviar"])) {
  try {
    require("connection.php");

    $nome = $_POST["nomeContato"];
    $email = $_POST["emailContato"];
    $tipo = $_POST["tipoContato"];
    $mensagem = $_POST["mensagemContato"];
    $lida = false;
    
    if (empty($_POST["nomeContato"]) || empty($_POST["emailContato"]) || empty($_POST["tipoContato"]) || empty($_POST["mensagemContato"])) {
      $flag_msg = false; //Erro 
      $msg = "Dados incompletos, preencha o formulário corretamente!";
    } else {
      $stmt = $conn->prepare("INSERT INTO contatos (nome, email, tipo, mensagem, lida) VALUES (:nome, :email, :tipo, :mensagem, :lida)");
                              
      $stmt->bindParam(':nome', $nome);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':tipo', $tipo);
      $stmt->bindParam(':mensagem', $mensagem);
      $stmt->bindParam(':lida', $lida);

      $stmt->execute();

      $flag_msg = true; // Sucesso 
      $msg = "Dados enviados com sucesso!";
      $nome = "";
      $email = "";
      $tipo = "";
      $mensagem = "";
    }
  } catch(PDOException $e) {
    $flag_msg = false; //Erro 
    $msg = "Erro na conexão com o Banco de dados: " . $e->getMessage();
  }
  
  $conn = null;
}
require_once "header_inc.php";
?>
<div class="p-4 mb-4 bg-light">
  <h1 class="display-5">Contatos</h1>
  <hr class="my-3">
  <p class="lead">Nossa equipe está sempre a disposição para ouvir as suas críticas e sugestões. Entre em contato que iremos responder o mais breve possível.</p>
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
  <form method="POST">
    <div class="form-group">
      <label for="nomeContato">Nome:</label>
      <input type="text" class="form-control" id="nomeContato" name="nomeContato" value="<?= $nome; ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="emailContato">Email:</label>
      <input type="email" class="form-control" id="emailContato" name="emailContato" value="<?= $email; ?>">
    </div>
    <br />
    <div class="form-group">
      <label for="tipoContato">Tipo de contato:</label>
      <select class="form-control" id="tipoContato" name="tipoContato">
        <option value="Sugestão" <?php if ($tipo=="Sugestão") echo "selected"; ?>>Sugestão</option>
        <option value="Crítica" <?php if ($tipo=="Crítica") echo "selected"; ?>>Crítica</option>
        <option value="Elogio" <?php if ($tipo=="Elogio") echo "selected"; ?>>Elogio</option>
        <option value="Dúvida" <?php if ($tipo=="Dúvida") echo "selected"; ?>>Dúvida</option>
      </select>
    </div>
    <br />
    <div class="form-group">
      <label for="mensagemContato">Mensagem:</label>
      <textarea class="form-control" id="mensagemContato" name="mensagemContato" rows="3" required><?= $mensagem; ?></textarea>
    </div>
    <br />
    <button type="submit" class="btn btn-primary mb-2" name="enviar">Enviar</button>
    <a href="contatos.php"><button type="button" class="btn btn-primary mb-2" name="limpar">Limpar</button></a>
  </form>
</div>

<?php require_once "footer_inc.php"; ?>