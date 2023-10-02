<?php
$nome = "";
$email = "";
$telefone = "";
$flag_msg = null;
$msg = "";

if (isset($_POST["enviar"])) {
  try {
    require("connection.php");

    $nome = $_POST["nomeVendedor"];
    $email = $_POST["emailVendedor"];
    $telefone = $_POST["telefoneVendedor"];
    
    if (empty($_POST["nomeVendedor"]) || empty($_POST["emailVendedor"]) || empty($_POST["telefoneVendedor"])) {
      $flag_msg = false;
      $msg = "Dados incompletos, preencha o formulário corretamente!";
    } else {
      $stmt = $conn->prepare("INSERT INTO vendedores (nome, email, telefone) VALUES (:nome, :email, :telefone)");
                              
      $stmt->bindParam(':nome', $nome);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':telefone', $telefone);

      $stmt->execute();

      $flag_msg = true;
      $msg = "Dados enviados com sucesso!";
      $nome = "";
      $email = "";
      $telefone = "";
    }
  } catch(PDOException $e) {
    $flag_msg = false;
    $msg = "Erro na conexão com o Banco de dados: " . $e->getMessage();
  }
  
  $conn = null;

  header("Location: vendedor-list.php");
}
require_once "header_inc.php";
?>
<div class="p-4 mb-4 bg-light">
  <h1 class="display-5">Vendedores</h1>
  <hr class="my-3">
  <p class="lead">Adicione um novo vendedor aqui.</p>
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
      <label for="nomeVendedor">Nome:</label>
      <input type="text" class="form-control" id="nomeVendedor" name="nomeVendedor" value="<?= $nome; ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="emailVendedor">Email:</label>
      <input type="email" class="form-control" id="emailVendedor" name="emailVendedor" value="<?= $email; ?>">
    </div>
    <br />
    <div class="form-group">
      <label for="telefoneVendedor">Telefone:</label>
      <input type="number" class="form-control" id="telefoneVendedor" name="telefoneVendedor" value="<?=$telefone; ?>">
    </div>
    <br />
    <button type="submit" class="btn btn-primary mb-2" name="enviar">Enviar</button>
    <a href="vendedor-insert.php"><button type="button" class="btn btn-secondary mb-2" name="limpar">Limpar</button></a>
  </form>
</div>

<?php require_once "footer_inc.php"; ?>