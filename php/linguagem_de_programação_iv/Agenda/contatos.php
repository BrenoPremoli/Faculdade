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
$mysql_query = "SELECT * FROM contatos ORDER BY id";
$result = $conn->query($mysql_query);

//Connection Close
mysqli_close($conn);
?> 
<div class="container">
  <h2>Contatos</h2>
  <p>Listagem do contatos cadastrados.</p>
  <hr>
  <div class="float-right p-1">
    <a href="insert-contato.php"><button type="button" class="btn btn-primary">Novo</button></a>
  </div>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr class="table-info" style="text-align:center">
        <th scope="col" style="width: 5%;">#</th>
        <th scope="col">Nome</th>
        <th scope="col" style="width: 30%;">E-Mail</th>
        <th scope="col" style="width: 15%;">Data Nascimento</th>
        <th scope="col" style="width: 20%;">Ação</th>
      </tr>
    </thead>
    <tbody>
      <?php while($data = mysqli_fetch_array($result)) { ?> 
      <tr> 
        <th scope="row" style="text-align:center"><?php echo $data['id']; ?></th>
        <td><?php echo $data['nome']; ?></td> 
        <td><?php echo $data['email']; ?></td> 
        <td style="text-align:center"><?php echo date('d/m/Y', strtotime($data['datanasc'])); ?></td>
        <td style="text-align:center">
          <a href="update-contato.php?id=<?php echo $data['id']; ?>">
            <button type="button" class="btn btn-primary">Editar</button></a>
          <a href="delete-contato.php?id=<?php echo $data['id']; ?>">
            <button type="button" class="btn btn-danger">Excluir</button></a>
        </td> 
      </tr> 
      <?php } ?>       
    </tbody>
  </table>
</div>

<?php require("footer-inc.php"); ?>