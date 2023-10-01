<?php 
require_once "connection.php";
require_once "classes/Contato.php";

$sql = "SELECT * FROM contatos ORDER BY id";

$stmt = $conn->query($sql);
$contatos = $stmt->fetchAll(PDO::FETCH_CLASS, "Contato");

require_once "header_inc.php"; 
?>

<div class="p-4 mb-4 bg-light">
  <h1 class="display-5">Contatos</h1>
  <hr class="my-3">
 </div>

<div class="container">
  <a class="btn btn-success" href="contatos.php">Novo Contato</a>
  <p></p>
  <table class="table table-bordered">
    <tr class="table-success text-center">
        <th>#</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Nascimento</th>
        <th>Ação</th>
    </tr>
    <?php foreach($contatos as $contato) { ?>
    <tr class="text-center">
      <td class="table-light" style="width:5%"><?= $contato->getId(); ?></td>
     <td class="table-light" style="width:25%"><?= $contato->getNome(); ?></td>
      <td class="table-light" style="width:25%"><?= $contato->getEmail(); ?></td>
      <td class="table-light" style="width:15%"><?= $contato->getDatanasc(); ?></td>
      <td class="table-light" style="width:15%">
        <a href="contato-edit.php?id=<?= $contato->getId(); ?>"><button type="button" class="btn btn-primary">Editar</button></a>
        <a href="contato-del.php?id=<?= $contato->getId(); ?>"><button type="button" class="btn btn-danger">Excluir</button>
      </td>
    </tr>
    <?php } ?>
  </table>
</div>

<?php require_once "footer_inc.php"; ?>