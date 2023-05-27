<?php
require("header-inc.php");

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  header("location: login.php");
  exit;
}

/**
 * Select Table Data
 * Fectching aata from database using mysqli_fetch_array() function and without table tag
 */

require_once('connection.php');

// Mysql query to select data from table
$mysql_query = "SELECT cp.id idcomp, cp.descricao descricao, cp.data_inicio data_inicio, cp.duracao duracao, ct.nome nomecontato  FROM compromissos cp, contatos ct WHERE cp.idcontato = ct.id ORDER BY data_inicio DESC";
$result = $conn->query($mysql_query);

//Connection Close
mysqli_close($conn);
?> 
<div class="container">
  <h2>Compromissos</h2>
  <p>Listagem do compromissos cadastrados.</p>
  <hr>
  <div class="float-right p-1">
    <a href="insert-compromisso.php"><button type="button" class="btn btn-primary">Novo</button></a>
  </div>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr class="table-info" style="text-align:center">
        <th scope="col" style="width: 5%;">#</th>
        <th scope="col">Descrição</th>
        <th scope="col" style="width: 20%;">Início</th>
        <th scope="col" style="width: 15%;">Duração</th>
        <th scope="col" style="width: 15%;">Contato</th>
        <th scope="col" style="width: 20%;">Ação</th>
      </tr>
    </thead>
    <tbody>
      <?php while($data = mysqli_fetch_array($result)) { ?> 
      <tr> 
        <th scope="row" style="text-align:center"><?php echo $data['idcomp']; ?></th>
        <td><?php echo $data['descricao']; ?></td> 
        <td style="text-align:center"><?php echo date('d/m/Y h:m', strtotime($data['data_inicio'])); ?></td>
        <td style="text-align:center"><?php echo $data['duracao']; ?></td> 
        <td style="text-align:center"><?php echo $data['nomecontato']; ?></td> 
        <td style="text-align:center">
          <a href="update-compromisso.php?id=<?php echo $data['idcomp']; ?>">
            <button type="button" class="btn btn-primary">Editar</button></a>
          <a href="delete-compromisso.php?id=<?php echo $data['idcomp']; ?>">
            <button type="button" class="btn btn-danger">Excluir</button></a>
        </td> 
      </tr> 
      <?php } ?>       
    </tbody>
  </table>
</div>

<?php require("footer-inc.php"); ?>