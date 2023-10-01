<?php 

require "connection.php";
require "classes/Contato.php";

$sql = "SELECT * FROM contatos ORDER BY id";
$stmt = $conn->query($sql);
$contatos = $stmt->fetchAll(PDO::FETCH_CLASS, "Contato");

require_once "header_inc.php"; 
?>

<div class="p-4 mb-4 bg-light">
  <h1 class="display-5">Gerenciamento de Contatos</h1>
  <hr class="my-3">
  <p class="lead">Permite a leitura e a exclusão das mensagens enviadas pelo formulário de contato.</p>
</div>

<div class="container">
  <a class="btn btn-success" href="contatos.php">Novo Contato</a>
  <p></p>
  <table class="table table-bordered">
    <tr class="table-success text-center">
        <th>#</th>
        <th>Data envio</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Tipo</th>
        <th>Lida</th>
        <th>Ação</th>
    </tr>
    <?php foreach ($contatos as $contato) { ?>
    <tr class="text-center">
      <td class="table-light" style="width:5%"><?= $contato->getId(); ?></td>
      <td class="table-light" style="width:15%"><?= $contato->getData(); ?></td>
      <td class="table-light" style="width:25%"><?= $contato->getNome(); ?></td>
      <td class="table-light" style="width:25%"><?= $contato->getEmail(); ?></td>
      <td class="table-light" style="width:10%"><?= $contato->getTipo(); ?></td>
      <td class="table-light" style="width:5%"><?= $contato->getLida() ? "Sim" : "Não"; ?></td>
      <td class="table-light" style="width:15%">
        <a href="contato-show.php?id=<?= $contato->getId(); ?>"><button type="button" class="btn btn-primary">Exibir</button></a>
        <a href="contato-destroy.php?id=<?= $contato->getId(); ?>"><button type="button" class="btn btn-danger">Excluir</button>
      </td>
    </tr>
    <?php } ?>
  </table>
</div>

<?php require_once "footer_inc.php"; ?>