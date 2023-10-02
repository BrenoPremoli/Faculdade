<?php 

require "connection.php";
require "classes/Vendedor.php";

$sql = "SELECT * FROM vendedores ORDER BY id";
$stmt = $conn->query($sql);
$vendedores = $stmt->fetchAll(PDO::FETCH_CLASS, "Vendedor");

require_once "header_inc.php"; 
?>

<div class="p-4 mb-4 bg-light">
  <h1 class="display-5">Gerenciamento de Vendedores</h1>
  <hr class="my-3">
  <p class="lead">Permite a inclusão, edição e exclusão dos vendedores exibidos na página de vendedores.</p>
</div>

<div class="container">
  <a class="btn btn-success" href="vendedor-insert.php">Cadastrar Novo vendedor</a>
  <p></p>
  <table class="table table-bordered">
    <tr class="table-danger text-center text-center">
      <th>#</th>
      <th>Nome</th>
      <th>Email</th>
      <th>Telefone</th>
      <th>Ação</th>
    </tr>
    <?php foreach ($vendedores as $vendedor) { ?>
    <tr class="text-center">
      <td class="table-light" style="width:5%"><?= $vendedor->getId(); ?></td>
      <td class="table-light" style="width:15%"><?= $vendedor->getNome(); ?></td>
      <td class="table-light" style="width:25%"><?= $vendedor->getEmail(); ?></td>
      <td class="table-light" style="width:25%"><?= $vendedor->getTelefone(); ?></td>
      <td class="table-light" style="width:15%">
        <a href="vendedor-update.php?id=<?= $vendedor->getId(); ?>"><button type="button" class="btn btn-primary">Editar</button></a>
        <a href="vendedor-destroy.php?id=<?= $vendedor->getId(); ?>"><button type="button" class="btn btn-danger">Excluir</button>
      </td>
    </tr>
    <?php } ?>
  </table>
</div>

<?php require_once "footer_inc.php"; ?>