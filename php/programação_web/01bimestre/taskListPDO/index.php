<?php 

require "connection.php";
require "classes/Tarefa.php";

$status = "SELECT * FROM Status";
$stmtStatus = $conn->query($status);
$statusList = $stmtStatus->fetchAll(PDO::FETCH_ASSOC);

require_once "header_inc.php"; 
?>

<div class="p-4 mb-4 bg-light">
  <h1 class="display-6">Status das Tarefas</h1>
  <hr class="my-3">
  <p class="lead">Inclusão, edição, conclusão e exclusão das tarefas.</p>
</div>

<div class="container">
  <a class="btn btn-success" href="tarefa-insert.php">Criar Nova Tarefa</a>
<br><br>

  <?php
  foreach ($statusList as $status) {
      $statusId = $status['id'];
      $statusNome = $status['nome'];
      
      $sqlTarefas = "SELECT * FROM tarefa WHERE statusId = :statusId ORDER BY dataInicio";
      $stmtTarefas = $conn->prepare($sqlTarefas);
      $stmtTarefas->bindParam(':statusId', $statusId, PDO::PARAM_INT);
      $stmtTarefas->execute();
      $tarefaList = $stmtTarefas->fetchAll(PDO::FETCH_CLASS, "Tarefa");
      
      if($statusNome == "Todo"){
      echo "<h2>$statusNome <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-briefcase-fill' viewBox='0 0 16 16'>
      <path d='M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z'/>
      <path d='M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z'/>
    </svg>  
    </h2>";
      }
      elseif($statusNome == "Doing"){
        echo "<h2>$statusNome   <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20'  fill='currentColor' class='bi bi-arrow-clockwise' viewBox='0 0 16 16'>
        <path fill-rule='evenodd' d='M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z'/>
        <path d='M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z'/>
        </svg>
        </h2>";
      }
      else{
        echo "<h2>$statusNome 
      <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-check-circle' viewBox='0 0 16 16'>
      <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>
      <path d='M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z'/>
    </svg>
      
      </h2>";
      }
      
      echo "<table class='table table-bordered'>";
      echo "<tr class='table-secondary text-center text-center'>";
      echo "<th>Título</th>";
      echo "<th>Descrição</th>";
      echo "<th>Prioridade</th>";
      echo "<th>Data de Ínicio</th>";
      echo "<th>Data de Conclusão</th>";
      echo "<th>Ação</th>";
      echo "</tr>";
      
      foreach ($tarefaList as $task) {
          echo "<tr class='text-center'>";
          echo "<td class='table-default' style='width:10%'>" . $task->getTitulo() . "</td>";
          echo "<td class='table-default' style='width:25%'>" . $task->getDescricao() . "</td>";
          if ($task->getPrioridade() == 'Amarelo'){
          echo "<td class='table-warning' style='width:10%'>" . $task->getPrioridade() . "</td>";
          }
          elseif ($task->getPrioridade() == 'Verde'){
            echo "<td class='table-success' style='width:10%'>" . $task->getPrioridade() . "</td>";
          }
          else{
            echo "<td class='table-danger' style='width:10%'>" . $task->getPrioridade() . "</td>";
          }
          echo "<td class='table-default' style='width:10%'>" . date('d/m/Y', strtotime($task->getDataInicio())) . "</td>";
          echo "<td class='table-default' style='width:10%'>" . date('d/m/Y', strtotime($task->getDataConclusao())) . "</td>";
          echo "<td class='table-default' style='width:35%'>";
          echo "<a href='tarefa-update.php?id=" . $task->getId() . "'><button type='button' style='margin-right:10px' class='btn btn-primary'>Editar</button></a>";
          echo "<a href='tarefa-destroy.php?id=" . $task->getId() . "'><button type='button' class='btn btn-danger'>Excluir</button></a>";
          echo "<a href='tarefa-update.php?id=" . $task->getId() . "&statusId=3'><button type='button' style='margin-left:10px' class='btn btn-success'>Concluir</button></a>";
          echo "</td>";
          echo "</tr>";
      }
      
      echo "</table>";
  }
  ?>

</div>

<?php require_once "footer_inc.php"; ?>
