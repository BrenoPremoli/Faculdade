<?php
require_once("connection.php");

$id = $_GET['id']; 

if (isset($_POST['enviar'])) {
    $nome = $_POST['nomeContato'];
    $email = $_POST['emailContato'];
    $datanasc = $_POST['datanascContato'];

    $stmt = $conn->prepare("UPDATE contatos SET nome = :nome, email = :email, datanasc = :datanasc WHERE id = :id");

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':datanasc', $datanasc);
    $stmt->bindParam(':id', $id);

    $stmt->execute();

    $conn = null;

    header("Location: contato-list.php");
}

$stmt = $conn->prepare("SELECT * FROM contatos WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$contato = $stmt->fetch(PDO::FETCH_ASSOC);

require_once("header_inc.php");
?>

<div class="container">
  <form method="POST">
    <div class="form-group">
      <label for="nomeContato">Nome:</label>
      <input type="text" class="form-control" id="nomeContato" name="nomeContato" value="<?= $contato['nome']; ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="emailContato">Email:</label>
      <input type="email" class="form-control" id="emailContato" name="emailContato" value="<?= $contato['email']; ?>">
    </div>
    <br />
    <div class="form-group">
      <label for="datanascContato">Data Nascimento:</label>
      <input type="date" class="form-control" id="datanascContato" name="datanascContato" value="<?= $contato['datanasc']; ?>">
    </div>
    <br />
    <button type="submit" class="btn btn-primary mb-2" name="enviar">Salvar</button>
  </form>
</div>

<?php require_once("footer_inc.php"); ?>