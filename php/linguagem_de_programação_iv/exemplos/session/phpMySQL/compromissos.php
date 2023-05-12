<?php
require("header-inc.php");

/**
 * Select Table Data
 * Fectching aata from database using myssqli_fetch_array() function and without table tag
 */

 require_once('connection.php');

 //Mysql query to select data from table
 $mysql_query = "SELECT cp.id idcomp, cp.descricao descricao, cp.data_inicio data_inicio, cp.duracao duracao, c.nome nomecontato FROM contatos c, compromissos cp WHERE cp.idcontato = c.id ORDER BY cp.id";
 $result = $conn->query($mysql_query);

 //Connection Close
 mysqli_close($conn);
?> 
<div class="container">
  <h2>Compromissos</h2>
  <p>Listagem dos compromissos cadastrados.</p>
  <hr>
  <div class="float-right p-1">
    <a href="insert-compromissos.php"><button type="button" class="btn btn-primary">Novo</button></a>
  </div>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr class="table-info" style="text-align:center">
        <th scope="col" style="width: 5%;">#</th>
        <th scope="col" style="width: 30%;">Descrição</th>
        <th scope="col" style="width: 15%;">Data inicio</th>
        <th scope="col" style="width: 20%;">Duração</th>
        <th scope="col" style="width: 10%;">Contato</th>
        <th scope="col" style="width: 20%;">Ação</th>
      </tr>
    </thead>
    <tbody>
      <?php while($data = mysqli_fetch_array($result)) { ?>
      <tr> 
        <th scope="row" style="text-align:center"><?= $data['idcomp']; ?></th>
        <td><?= $data['descricao'] ?></td>
        <td style="text-align:center"><?php echo date('d/m/Y', strtotime($data['data_inicio'])); ?></td>
        <td><?= $data['duracao'] ?></td> 
        <td><?= $data['nomecontato'] ?></td> 
        <td style="text-align:center">
          <a href="update-compromissos.php?id=<?= $data['idcomp'] ?>">
            <button type="button" class="btn btn-primary">Editar</button></a>
          <a href="delete-compromissos.php?id=<?= $data['idcomp'] ?>">
            <button type="button" class="btn btn-danger">Excluir</button></a>
        </td> 
      </tr>
      <?php } ?>    
    </tbody>
  </table>
</div>

<?php require("footer-inc.php"); ?>