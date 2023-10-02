<?php
$flag_msg = null;
$msg = "";
$id = $_GET['id']; 

require("connection.php");

if (isset($_POST['enviar'])) {
  try {

    $nome = $_POST["nomeVendedor"];
    $email = $_POST["emailVendedor"];
    $telefone = $_POST["telefoneVendedor"];

    if (empty($_POST["nomeVendedor"]) || empty($_POST["emailVendedor"]) || empty($_POST["telefoneVendedor"])) {
      $flag_msg = false;
      $msg = "Dados incompletos, preencha o formulário corretamente!";
    } else {
            $sql = ("UPDATE vendedores SET nome = :nome, email = :email, telefone = :telefone WHERE id = :id");
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':id', $id, PDO::PARAM_INT);
      $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
      $stmt->bindParam(':email', $email, PDO::PARAM_STR);
      $stmt->bindParam(':telefone', $telefone, PDO::PARAM_STR);
      $stmt->execute();
      

      $flag_msg = true;
      $msg = "Dados enviados com sucesso!";
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

$stmt = $conn->prepare("SELECT * FROM vendedores WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$vendedor = $stmt->fetch(PDO::FETCH_ASSOC);

require_once "header_inc.php";
?>
<div class="p-4 mb-4 bg-light">
  <h1 class="display-5">Vendedores</h1>
  <hr class="my-3">
  <p class="lead">Edite as informações do vendendor aqui.</p>
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
      <input type="text" class="form-control" id="nomeVendedor" name="nomeVendedor" value="<?= $vendedor['nome'] ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="emailVendedor">Email:</label>
      <input type="email" class="form-control" id="emailVendedor" name="emailVendedor" value="<?= $vendedor['email']  ?>">
    </div>
    <br />
    <div class="form-group">
      <label for="telefoneVendedor">Telefone:</label>
      <input type="number" class="form-control" id="telefoneVendedor" name="telefoneVendedor" value="<?=$vendedor['telefone']  ?>">
    </div>
    <br />
    <button type="submit" class="btn btn-primary mb-2" name="enviar">Enviar</button>
    <a href="vendedor-list.php"><button type="button" class="btn btn-secondary mb-2">Voltar</button></a>
  </form>
</div>

<?php require_once "footer_inc.php"; ?>